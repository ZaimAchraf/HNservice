<?php


namespace app\core;
use app\configs\smarty\SmartyTemplate;


class Controller
{
    /**
     * @throws \SmartyException
     */
    public function render($view, $params)
    {
        $app = Application::$app;

//        echo '<pre>';
//        var_dump($params);
//        echo '</pre>' ;exit();
        $app->tpl->assign('data', $params);
        $app->tpl->display($view . '.tpl');
    }

    public function renderAdmin($view, $params)
    {
        $app = Application::$app;
        return $app->router->viewRenderAdmin($view, $params);
    }

    public function renderEmpty($view, $params)
    {
        $app = Application::$app;
        return $app->router->viewRenderEmpty($view, $params);
    }
}