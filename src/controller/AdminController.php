<?php

namespace App\controller;

use App\controller\AbstractController;

class AdminController extends AbstractController
{
    function index (){
        $response = "<H1>Hello BackOffice</H1>";
        echo $response;
    }
}