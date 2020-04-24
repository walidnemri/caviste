<?php

namespace App\Application\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use RedBeanPHP\R;

class WineController extends BaseController {

  public function index(Request $request, Response $response){
    $title = 'liste des vins';
   /*
    $data = 'bonjour';
    $title = 'liste des vins';
    $vins = R::load('wine',42);
    $vin->year = 2019;
    $vin->name = 'boutteille';

    R::store($vin);
    */
    $vins = R::findAll('wine');
    $country = [];
    foreach ($vins as $vin ) {
      $country[] = $vin->country;
    };
    
    return $this->c->get('view')->render($response,'catalogue.twig',[
        'title'=> $title,
        'vins'=>$vins,
        'country'=>array_unique($country),
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

  public function search(Request $request, Response $response, array $args){
    $keyword = $args['keyword'];
    //var_dump($keyword); die;
    $vins = R::findAll('wine', 'name LIKE ?',["%$keyword%"]);
    $title = 'liste des vins'; 
    return $this->c->get('view')->render($response,'catalogue.twig',[
        'title'=> $title,
        'vins'=>$vins,
    ]);

  }

  public function filter(Request $request, Response $response, array $args){
    $filter = $args['filter'];
    //var_dump($keyword); die;
    $vins = R::findAll('wine', 'country = ?',["$filter"]);
    $title = 'liste des vins'; 
    foreach ($vins as $vin ) {
      $country[] = $vin->country;
    };
    
    return $this->c->get('view')->render($response,'catalogue.twig',[
        'title'=> $title,
        'vins'=>$vins,
        'country'=>array_unique($country),
    ]);

  }

  public function sort(Request $request, Response $response, array $args){
    $sort = $args['sort'];
    //var_dump($sort); die;
    $vins = R::findAll('wine', 'ORDER BY '.$sort.' ASC');
    //var_dump($vins); die;
    $title = 'liste des vins'; 
    return $this->c->get('view')->render($response,'catalogue.twig',[
        'title'=> $title,
        'vins'=>$vins,
    ]);

  }
}