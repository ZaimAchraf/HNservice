<?php

namespace app\Controllers;
use app\core\Controller;


use app\core\Application;
use app\core\Helper;
use app\core\Request;
use app\core\Router;
use app\core\Session;
use app\core\Validator;
use app\models\CommandModel;
use app\models\ContactModel;
use app\models\ServiceModel;

class SiteController extends Controller
{

    use Helper, Validator;
    private $session;


    public function __construct()
    {
        $this->session = new Session();
    }

    /**
     * @throws \SmartyException
     */
    public function homePage()
    {
        global $lang;
        $data['lang'] = $lang;
        $this->render('home', $data);
    }

    /**
     * @throws \SmartyException
     */
    public function aboutPage()
    {
        global $lang;
        $data['lang'] = $lang;
        $this->render('about', $data);
    }

    /**
     * @throws \SmartyException
     */
    public function galleriesPage()
    {
        global $lang;
        $data['lang'] = $lang;
        $this->render('gallery', $data);
    }

    /**
     * @throws \SmartyException
     */
    public function servicesPage()
    {
        global $lang;
        $data = array (
            "services" => ServiceModel::getAll(),
        );
        $data['lang'] = $lang;

        $this->render('services', $data);
    }


    public function addCommand()
    {
        $message = $_POST['message'] != '' ? $_POST['message'] : 'no message';
        unset($_POST['message']);
        $data = $this->sanitize($_POST);
        $commandModel = new CommandModel();

        if($this->require($data) == "success"){

            $commandModel->setFullName($data['fullName']);
            $commandModel->setPhone($data['phone']);
            $commandModel->setEmail($data['email']);
            $commandModel->setService($data['service']);
            $commandModel->setMessage($message);

            if($commandModel->register()){

                echo "success";
            }

        }else{
            echo "please fill all required fields";
        }
    }

    /**
     * @throws \SmartyException
     */
    public function contactPage()
    {
        global $lang;
        $data['lang'] = $lang;
        $this->render('contact', $data);
    }



//send message

    public function sendMessage()
    {
        $data       = $this->sanitize($_POST);

        if($this->require($data) == "success"){

            $contact = new ContactModel();

            $contact->setFirstname($data['firstName']);
            $contact->setLastname($data['lastName']);
            $contact->setEmail($data['email']);
            $contact->setSubject($data['subject']);
            $contact->setMessage($data['message']);
            $contact->register();

            echo "success";
        }else{
            echo "please fill all required fields";
        }
    }

}