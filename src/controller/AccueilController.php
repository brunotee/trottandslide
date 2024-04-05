<?php

namespace App\controller;

use App\controller\AbstractController;

class AccueilController extends AbstractController
{

    function index (){
        $response = "<H1>Hello Controller Accueil</H1>";
        $script=$_SERVER['SCRIPT_NAME'];
        $response.="<a href='".$script."/admin'>Backoffice</a>";
        echo $response;
    }

}