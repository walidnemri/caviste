<?php

namespace App\Application\Models;

use RedBeanPHP\SimpleModel;

class Wine extends SimpleModel {
  public function update() {
    if (is_null($this->year)) {
      throw new \Exception('year is mandatory ');
    }
  }
}