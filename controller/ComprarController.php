<?php
namespace controller;

use controller\BaseController;
use model\Comprar;

class ComprarController implements BaseController 
{

    public static $mComprar;

    public function show() {
        return "views/IDOBJ";
    }

    public function validateComprar($Comprar) 
    {
        self::$mComprar = new User();
        self::$mComprar->setComprar($IDOBJ);
        

        return "views/loggedIn";
    }

    public static function getComprar() {
        return self::$mComprar;
    }


}