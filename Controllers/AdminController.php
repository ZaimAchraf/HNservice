<?php

namespace app\Controllers;

use app\core\Controller;
use app\core\Helper;
use app\core\Session;
use app\core\Validator;
use app\models\AbstractModel;
use app\models\CategoryModel;
use app\models\CommentModel;
use app\models\ContactModel;
use app\models\CommandModel;
use app\models\EmployeeModel;
use app\models\ProductModel;
use app\models\ProductPicModel;
use app\models\ServiceModel;
use app\models\SubcategoryModel;
use app\models\AdminModel;

class AdminController extends Controller
{
    use Helper, validator;
    private $session;


    public function __construct()
    {
        if (!isset($_SESSION['token']))
            $this->redirect('/login');
    }

    /**
     * @throws \SmartyException
     */
    public function dashboard()
    {
        $params = array(
            'title'      => 'Dashboard',
            'count'      => is_array($notRead = ContactModel::getByColumns(array('readable' => 0))) ? count($notRead) : 0,
            'nbr_services'       => ServiceModel::getCountTable(),
            'nbr_employees'       => EmployeeModel::getCountTable(),
            'nbr_commands'       => CommandModel::getCountTable(),
            'nbr_managers'       => AdminModel::getCountTable(),
            'commands'   => CommandModel::getAll(' c.status = 0 limit 7'),
            'employees'  => EmployeeModel::getAll('limit 4'),
        );
        $this->render('admin/dashboard', $params);
    }

    public function profilePage()
    {
        if (!isset($_SESSION['token']) || $_SESSION['token']['groupID'] != 3)
            $this->redirect('/login');
        return $this->renderAdmin('profile', $_SESSION['token']);
    }

    /**
     * @throws \SmartyException
     */
    public function servicesPage()
    {

        $params['services'] = (ServiceModel::getAll());
        $params['title']    = 'Services';
        $params['count']    = is_array($notRead = ContactModel::getByColumns(array('readable' => 0))) ? count($notRead) : 0;

        $this->render('admin/services', $params);
    }


    public function addService()
    {
        $data = $this->sanitize($_POST);
        $serviceModel = new ServiceModel();

        if($this->require($data) == "success"){
            $upload = $this->UploadFile('services', $data['title_en']);

            if (isset($upload['uploaded'][1]) || isset($upload['errors'][1]))
                echo "please don't choose multiple pictures";

            elseif(empty($upload['errors'])){

                $serviceModel->setTitleEn($data['title_en']);
                $serviceModel->setTitleFr($data['title_fr']);
                $serviceModel->setDescriptionEn($data['description_en']);
                $serviceModel->setDescriptionFr($data['description_fr']);
                $serviceModel->setPrice($data['price']);
                $serviceModel->setPicture($upload['uploaded'][0]);

                if($serviceModel->register()){

                    echo "success";
                }

            }else{
                echo json_encode($upload['errors']);
            }

        }else{
            echo "please fill all required fields";
        }
    }

    public function updateService()
    {
        if ($_POST['action'] == 'edit'){
            $this->editService();
        }elseif ($_POST['action'] == 'delete')
            $this->deleteService();
    }

    public function editService()
    {
        $data = $this->sanitize($_POST);
        $oldInfos = ServiceModel::getByPk($data['id']);
        $serviceModel = new ServiceModel();

        $data['title_en'] = $data['title_en'] ?? $oldInfos['title_en'];
        $data['title_fr'] = $data['title_fr'] ?? $oldInfos['title_fr'];
        $data['description_en'] = $data['description_en'] ?? $oldInfos['description_en'];
        $data['description_fr'] = $data['description_fr'] ?? $oldInfos['description_fr'];

        $status = $data['status'] == 0 ? 0 : 1;
        unset($data['status']);


        if($this->require($data) == "success"){

            $serviceModel->setId($data['id']);
            $serviceModel->setTitleEn($data['title_en']);
            $serviceModel->setTitleFr($data['title_fr']);
            $serviceModel->setDescriptionEn($data['description_en']);
            $serviceModel->setDescriptionFr($data['description_fr']);
            $serviceModel->setPrice($data['price']);
            $serviceModel->setPicture($oldInfos['picture']);
            $serviceModel->setStatus($status);

            if($serviceModel->update())
            {
                $data['status'] = 'success';
                echo json_encode($data);
            }

        }else {
            $data['status'] = 'error';
            $data['error'] = 'please fill all required fields';
            echo json_encode($data);
        }

    }

    public function deleteService()
    {
//        if (!isset($_SESSION['token']) || $_SESSION['token']['groupID'] != 3)
//            $this->redirect('/login');

        $serviceID = $_POST['id'];
        if( ServiceModel::delete($serviceID)){
            $data['status'] = 'success';
            $data['action'] = 'delete';
            echo json_encode($data);
        }

    }

    /*Manage Managers*/
    /**
     * @throws \SmartyException
     */
    public function ManagersPage()
    {
        $opt = array(
            'title'      => 'Managers',
            'count'      => is_array($notRead = ContactModel::getByColumns(array('readable' => 0))) ? count($notRead) : 0,
        );
        $opt['users'] = AdminModel::getAll();
        $this->render('admin/users', $opt);
    }

    public function addManager()
    {
        $userModel = new AdminModel();

        $data       = $this->sanitize($_POST);

        if($this->require($data) == "success")
        {
            if (strlen($data['password']) <= 6)
                echo "the password must contain more than 6 characters";

            elseif($this->passwordsIdentique($data['password'], $data['confirm-password']))
            {
                $pass   = $this->hash_undecrypted_data($data['password']);

                $userModel->setId(uniqid($data['fullName']));
                $userModel->setFullName($data['fullName']);
                $userModel->setEmail($data['email']);
                $userModel->setPassword($pass);

                $arr = array(
                    'email' => $data['email'],
                );


                if(AdminModel::getByColumns($arr))
                {
                    echo "*this email already exists";

                }elseif($userModel->register())
                {
                    $result = AdminModel::getByAllColumns($arr);
                    echo 'success';
                }

            }else{
                echo "two passwords must be identical";
            }
        }else {
            echo 'please fill required fields';
        }

    }

    public function deleteManager()
    {
        $id = $_POST['id'];
        if( AdminModel::delete($id))
            echo json_encode(["status" => "success", "action" => "delete"]);
    }


    /**
     * @throws \SmartyException
     */
    public function employeesPage()
    {
        $opt = array(
            'title'      => 'Employees',
            'count'      => is_array($notRead = ContactModel::getByColumns(array('readable' => 0))) ? count($notRead) : 0,
        );
        $opt['employees'] = EmployeeModel::getAll();
        $opt['services'] = ServiceModel::getAll();

        $this->render('admin/employees', $opt);
    }

    public function addEmployee()
    {
        $data = $this->sanitize($_POST);
        $employeeModel = new EmployeeModel();

        if($this->require($data) == "success"){
            $upload = $this->UploadFile('employees', $data['fullName']);
            $arr = array(
                'email' => $data['email'],
            );

            if (isset($upload['uploaded'][1]) || isset($upload['errors'][1]))
                echo "please don't choose multiple pictures";

            elseif(CommandModel::getByColumns($arr)){
                echo "*this email already exists";

            }elseif(empty($upload['errors'])){

                $employeeModel->setEmail($data['email']);
                $employeeModel->setTel($data['tel']);
                $employeeModel->setFullName($data['fullName']);
                $employeeModel->setAddress($data['address']);
                $employeeModel->setService($data['service']);
                $employeeModel->setPicture($upload['uploaded'][0]);

                if($employeeModel->register()){

                    echo "success";
                }

            }else{
                echo json_encode($upload['errors']);
            }

        }else{
            echo "please fill all required fields";
        }

    }

    public function updateEmployee()
    {
        if ($_POST['action'] == 'edit'){
            $this->editEmployee();
        }elseif ($_POST['action'] == 'delete')
            $this->deleteEmployee();
    }

    public function editEmployee()
    {
        $data = $this->sanitize($_POST);
        $oldInfos = CommandModel::getByPk($data['id']);
        $employeeModel = new CommandModel();


        if($this->require($data) == "success"){

            $employeeModel->setId($data['id']);
            $employeeModel->setFullName($data['fullName']);
            $employeeModel->setEmail($data['email']);
            $employeeModel->setService($data['service']);
            $employeeModel->setTel($data['tel']);
            $employeeModel->setAddress($data['address']);
            $employeeModel->setPicture($oldInfos['picture']);

            if($employeeModel->update())
            {
                $data['status'] = 'success';
                echo json_encode($data);
            }

        }else {
            $data['status'] = 'error';
            $data['error'] = 'please fill all required fields';
            echo json_encode($data);
        }

    }

    public function deleteEmployee()
    {
//        if (!isset($_SESSION['token']) || $_SESSION['token']['groupID'] != 3)
//            $this->redirect('/login');

        $employeeID = $_POST['id'];
        if( CommandModel::delete($employeeID)){
            $data['status'] = 'success';
            $data['action'] = 'delete';
            echo json_encode($data);
        }

    }


    /**
     * @throws \SmartyException
     */
    public function commandsPage()
    {
        $opt = array(
            'title'      => 'Commands',
            'count'      => is_array($notRead = ContactModel::getByColumns(array('readable' => 0))) ? count($notRead) : 0,
        );
        $opt['commands'] = CommandModel::getAll();

        $this->render('admin/commands', $opt);
    }

    public function updateCommand()
    {
        if ($_POST['action'] == 'edit'){
            $this->editCommand();
        }elseif ($_POST['action'] == 'delete')
            $this->deleteCommand();
    }

    public function editCommand()
    {
        $data = $this->sanitize($_POST);


        if($this->require($data) == "success"){

            if(CommandModel::changeStatus($data['id'], $data['status']))
            {
                $data['status'] = 'success';
                echo json_encode($data);
            }

        }else {
            $data['status'] = 'error';
            $data['error'] = 'please fill all required fields';
            echo json_encode($data);
        }

    }

    public function deleteCommand()
    {
//        if (!isset($_SESSION['token']) || $_SESSION['token']['groupID'] != 3)
//            $this->redirect('/login');

        $commandID = $_POST['id'];
        if( CommandModel::delete($commandID)){
            $data['status'] = 'success';
            $data['action'] = 'delete';
            echo json_encode($data);
        }

    }

    /**
     * @throws \SmartyException
     */
    public function inboxPage()
    {
//        if (!isset($_SESSION['token']) || $_SESSION['token']['groupID'] != 3)
//            $this->redirect('/login');

        $params = array(
            'title'      => 'Inbox',
            'messages'   => ContactModel::getAll("ORDER BY date_time DESC"),
            'count'      => is_array($notRead = ContactModel::getByColumns(array('readable' => 0))) ? count($notRead) : 0,
        );
        $this->render('admin/inbox', $params);
    }

    public function setRead()
    {
        $data = $this->sanitize($_POST);

        if($this->require($data) == "success"){

            if (ContactModel::setRead($data['id']))
                echo "success";

        }else{
            echo "please fill all required fields";
        }
    }

    public function deleteMessage()
    {
        $id = $_POST['id'];
        if( contactModel::delete($id))
            echo "success";
    }

}