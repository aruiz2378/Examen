<?php
namespace controller;

use controller\BaseController;
use model\Agregar;

class AgregarController implements BaseController 
{

    public static $mAgregar;

    public function show() {
        return "views/IDOBJ";
		 return "views/Precio";
		  return "views/IVA";
    }

    public function validateUser($Agregar) 
    {
        self::$mAgregar = new Agregar();
		self::$mAgregar->setAgregar($IDOBJ);
        self::$mAgregar->setAgregar($Precio);
        self::$mAgregar->setAgregar($IVA);

        return "views/loggedIn";
    }

    public static function getAgregar() {
        return self::$mAgregar;
    }


}