<?php


namespace app\Controllers;


use app\core\Controller;
use app\core\Helper;
use app\core\Validator;
use app\models\CategoryModel;
use app\models\commentModel;
use app\models\ProductModel;
use app\models\ProductPicModel;
use app\models\RateModel;
use app\models\SubcategoryModel;

class ProductController extends Controller
{
    use Helper, Validator;

    /**
     * @throws \SmartyException
     */
    public function singleProduct()
    {
        $data['product'] = ProductModel::getByPk($_GET['id'])[0];
        $data['comments'] = commentModel::getAll(' AND productID = ' . $data['product']['productID']);

        $arr = array(
            'productID' => $data['product']['productID']
        );

        $data['product']['pictures'] = ProductPicModel::getByAllColumns($arr);
        $data['style']   = 'SingleProduct.css';
        $data['title']   = 'product | ' . $data['product']['title'];
        $data['script']  = ['singleProduct.js', 'chart.js'];
        $this->render("singleProduct", $data);
    }

    public function addComment()
    {


        $data = $this->sanitize($_POST);
        $errors = $this->require($data);
        $commentModel = new CommentModel();
        if(empty($errors)){

            $commentModel->setProductID($data['id']);
            $commentModel->setComment($data['comment']);
            $commentModel->setUserID($_SESSION['token']['userID']);

            if($commentModel->register()){
                $this->redirect('/product?id=' . $data['id']);
            }

        }
    }

    public function addRate()
    {


        $data = $this->sanitize($_POST);
        $errors = $this->require($data);
        $rateModel = new RateModel();

        if(empty($errors)){
            $rateModel->setProductID($data['id']);
            $rateModel->setRate($data['rate']);
            $rateModel->setUserID($_SESSION['token']['userID']);

            if($rateModel->register()){
                echo json_encode('success');
            }
        }else{
            echo json_encode($errors);
        }


    }

    public function search()
    {
        $params = array(
            'title' => 'Products Page',
            'style' => ['show-services.css'],
            'cats'  => CategoryModel::getAll()
        );

        if (is_array($params['cats'])) foreach ($params['cats'] as $cat)
            $params['subCats'][$cat['CatID']] = SubcategoryModel::getByColumns(array(
                'catID' => $cat['CatID']
            ));

        if ($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            if (isset($_GET['subCat']))
            {
                $params['services'] = (ProductModel::getByColumns(
                    array(
                        'subCatID' => $_GET['subCat']
                    )
                ));
            }else
                $params['services'] = (ProductModel::getAll());

            if (is_array($params['services'])) foreach ($params['services'] as $product){
                $params['pictures'][$product['productID']] = ProductPicModel::getByColumns(array(
                    'productID' => $product['productID']
                ));
            }
            return $this->render("all_products_page", $params);
        }





        $data = $this->sanitize($_POST);
        $errors = $this->require($data);

        if(empty($errors))
        {
            if ($data['column'] == "title")
            {
                $params['services'] = (ProductModel::searchByTitle($data['SearchedValue']));
                if (is_array($params['services'])) foreach ($params['services'] as $product)
                    $params['pictures'][$product['productID']] = ProductPicModel::getByColumns(array(
                        'productID' => $product['productID']
                    ));

            }else
            {
                $params['services'] = (ProductModel::searchByUser($data['SearchedValue']));
                if (is_array($params['services'])) foreach ($params['services'] as $product)
                    $params['pictures'][$product['productID']] = ProductPicModel::getByColumns(array(
                        'productID' => $product['productID']
                    ));
            }

            return $this->render("all_products_page",$params);
        }
    }
}