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
class RedBeanPHPMiddelware {
    //put your code here
     public function __invoke(Request $request, RequestHandler $handler) {
       R::setup('mysql:host=localhost;dbname=cellar','root','root');
       $response = $handler->handle($request);
       R::close();
       return $response;
    }
}
