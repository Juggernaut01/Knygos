<?php

class Controller extends DB {


public static function test(){

print_r(self::query("SELECT * FROM table1"));

}


 public static function CreateView($view){
   require_once( './includes/views/'.$view.'.php' );
}







}


 ?>
