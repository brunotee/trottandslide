<?php

namespace App\controller;

use App\controller\AbstractController;

class ConnectionController extends AbstractController
{
    function index (){
        $response = "<H1>Connection</H1>";
        $response .= "<form>Id:<input type='text'></form>";
        echo $response;
    }
}