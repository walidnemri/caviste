<?php

namespace App\Application\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use RedBeanPHP\R;

class WineController extends BaseController {

  public function index(Request $request, Response $response){
   
    $data = 'bonjour';
    $title = 'liste des vins';
    $vin = R::load('wine',42);
    $vin->year = 2019;
    $vin->name = 'boutteille';

    R::store($vin);
    
    return $this->c->get('view')->render($response,'index.twig',[
        'data' => $data,
        'title'=> $title,
        'vin'=>$vin,
    ]);

  }

  public function show(Request $request, Response $response, array $args){
    $id = $args['id'];
    $data = 'bonjour';
    $title = 'liste des vins';
    $vin = R::load('wine',$id);
    
    return $this->c->get('view')->render($response,'show.twig',[
        'data' => $data,
        'title'=> $title,
        'vin'=>$vin,
    ]);

  }
}