<?php

namespace App\Application\Controllers;

use Psr\Container\ContainerInterface;

class BaseController {
  protected $c;
  
  public function __construct(ContainerInterface $container){
    $this->c = $container;
  }
}