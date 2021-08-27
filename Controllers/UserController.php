<?php


namespace app\Controllers;


use app\core\Controller;
use app\core\Helper;
use app\core\Session;
use app\core\Validator;
use app\models\CategoryModel;
use app\models\ProductModel;
use app\models\ProductPicModel;
use app\models\SubcategoryModel;
use app\models\AdminModel;

class UserController extends Controller
{
    use Helper, validator;
    private $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    public function loginPage()
    {
        $this->render('login', []);
    }

    // add admin


    public function signIn()
    {


        if (isset($_SESSION['timer']) && isset($_SESSION['attempts']) && $_SESSION['attempts'] > 2 && (time() - $_SESSION['timer']) < 30) {
            echo "wait " . (30 - (time() - $_SESSION['timer'])) . " seconds";
            return;
        }

        if (isset($_SESSION['timer']) && isset($_SESSION['attempts']) && (time() - $_SESSION['timer']) > 30){
            unset($_SESSION['attempts']);
            unset($_SESSION['timer']);
        }

        $data   = $this->sanitize($_POST);

        if($this->require($data) == "success")
        {
            $arr = array(
                'email' => $data['email']
            );

            if ($result = AdminModel::getByAllColumns($arr)){
                if($this->verify_hashed_undecrypted_data($data['password'], $result[0]['password'])){

                    $_SESSION['token'] = $result[0];
                    echo 'success';

                }else{
                    $_SESSION['attempts'] = isset($_SESSION['attempts']) ? $_SESSION['attempts'] + 1 : 1;
                    if ($_SESSION['attempts'] > 2) {
                        $_SESSION['timer'] = time();
                        echo "limit";
                        return;
                    }
                    echo 'please check your password and email and try again';
                }
            }else{
                $_SESSION['attempts'] = isset($_SESSION['attempts']) ? $_SESSION['attempts'] + 1 : 1;
                if ($_SESSION['attempts'] > 2) {
                    $_SESSION['timer'] = time();
                    echo "limit";
                    return;
                }
                echo 'please check your password and email and try again';
            }

        }else{
            echo 'please fill required fields';
        }
    }

    public function logout()
    {
        unset($_SESSION['token']);
        $this->redirect('/');
    }

    public function updateProfile()
    {
        $session = new Session();


        $tel = $_POST['tel'] ?? '';
        $address = $_POST['address'] ?? '';

        unset($_POST['tel']);
        unset($_POST['address']);

        $data = $this->sanitize($_POST);
        $errors = $this->require($data);
        $userModel = new AdminModel();

        if (isset($_FILES["pictures"]["error"][1]))
            $errors['uploads'][] = "* You can't upload multiple files";

        if(empty($errors)){
            $upload = $this->UploadFile('users', $data['fullname']);
            $errors['uploads'] = $upload['errors'];

            if(empty($errors['uploads'])){

                $avatar = $upload['uploaded'][0] ?? $_SESSION['token']['picture'];
                $pass   = $_SESSION['token']['password'];
                $id     = $_SESSION['token']['userID'];

                $userModel->setUserId($id);
                $userModel->setFullname($data['fullname']);
                $userModel->setEmail($data['email']);
                $userModel->setPassword($pass);
                $userModel->setTel($tel);
                $userModel->setPicture($avatar);
                $userModel->setAddress($address);

                if($userModel->update()){
                    $_SESSION['token']['fullname']    = $data['fullname'];
                    $_SESSION['token']['address'] = $data['address'];
                    $_SESSION['token']['email']  = $data['email'];
                    $_SESSION['token']['tel']    = $tel;
                    $_SESSION['token']['picture'] = $avatar;
                    $_SESSION['token']['address'] = $address;

                    $this->redirect('/user/profile');
                }
                return;

            }

        }

        $session->setFlash("errors", $errors);
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }

    public function deletePic()
    {
        $arr = array(
            'picture' => 'avatar.png'
        );
        if (AdminModel::UpdateColumns($_SESSION['token']['userID'], $arr)){
            $_SESSION['token']['picture'] = 'avatar.png';
            $this->redirect('/admin/profile');
        }

    }

    public function profilePage()
    {
        $params = [
            "title" => $_SESSION['token']['fullname'] . ' | ' . 'profile',
            "style" => 'user-profile.css',
            "script" => ['profile.js'],
            "subcats"   => SubcategoryModel::getAll()
        ];
        $this->render('profile', $params);
    }

}