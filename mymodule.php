<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class MyModule extends Module //susikuriame modulį
{
    public function __construct() //nurodau modulio parametrus

    {
        $this->name = 'mymodule';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Karolina Jurkauskaite';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.6',
            'max' => '1.7.99',
        ];
        $this->bootstrap = true;

        parent::__construct(); //iškviečiame konstruktorių

        $this->displayName = $this->l('Ulter modulis');
        $this->description = $this->l('Modulis, kuris pritaikytas sistemos išbandymui');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MYMODULE_NAME')) {
            $this->warning = $this->l('No name provided');
        }
    }
    public function install() //užrašome instaliavimo metodą
    {
        return parent::install() && $this->registerHook('displayHome');
    }
    public function uninstall() //tuomet ir išinstaliavimo metodą
    {
        return parent::uninstall();
    }
    public function getContent() //užrašome funkciją konfigūracijos failui atidaryti
    {
        return $this->display(__FILE__, 'views/templates/admin/configure.tpl');
    }
}