<?php

namespace app\test;

class User implements Role {
  public function text() : string {
    return 'Jestem userem';
  }
}

?>
