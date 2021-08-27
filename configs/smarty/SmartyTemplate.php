<?php


namespace app\configs\smarty;


class SmartyTemplate extends \Smarty
{
    public function __construct()
    {
        parent::__construct();
        $smarty_dir = dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'smarty' . DIRECTORY_SEPARATOR ;
        $this->setTemplateDir($smarty_dir . 'templates');
        $this->setCacheDir($smarty_dir . 'cache');
        $this->setCompileDir($smarty_dir . 'template_c');
        $this->setConfigDir($smarty_dir . 'configs');
    }
}