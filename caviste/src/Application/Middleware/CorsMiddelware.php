<?php
declare(strict_types=1);
namespace App\Application\Middleware;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Slim\Psr7\Request;
use RedBeanPHP\R;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;


/**
 * Description of RedBeanPHPMiddelware
 *
 * @author 1909wanemri
 */
class CorsMiddelware {
    //put your code here
     public function __invoke(Request $request, RequestHandler $handler) {
       
       
       $response = $handler->handle($request);
       
       return $response
                  ->withHeader('Access-Control-Allow-Origin', 'http://mysite')
                  //->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                  ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
       ;
    }
}
