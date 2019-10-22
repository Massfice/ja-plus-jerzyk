<?php

namespace app\test;

class Factory {
  public static function createRole(string $role) : Role {
    $role = '\\app\\test\\'.ucfirst($role);
    
    if(class_exists($role) && isset(class_implements($role)['app\\test\\Role'])) {
      return new $role();
    } else {
      return new class() implements Role {
        public function text() : string {
          return 'Niewłaściwa rola';
        }
      };
    }
  }
}

?>
