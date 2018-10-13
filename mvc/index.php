<?php
//include 'Autoloader.php';

//require_once('./includes/views/AboutUs.php');

//require_once( ".\includes\_Globals.php" );




// function __autoload($class_name){
//   if(file_exists(".\includes\classes")){
//       require_once( ".\includes\classes\".$class_name.".php");
//     }



//$a = new DB;

function loadClasses2($class_name){
        $classesPath = './includes/classes/'.$class_name.'.php';
        $controllersPath = './includes/controllers/'.$class_name.'.php';

        if(file_exists($classesPath)){
            require_once($classesPath);
        }else if(file_exists($controllersPath)){
            require_once($controllersPath);
        }
    }

    spl_autoload_register(loadClasses2);

    require_once('./includes/routes/Routes.php');












/*Directories that contain classes*/

// function __autoload($class_name) {
//     global $classesDir;
//     foreach ($classesDir as $directory) {
//         if (file_exists($directory . $class_name . '.php')) {
//             require_once ($directory . $class_name . '.php');
//             return;
//         }
//     }
// }



// function __autoload($class_name) {
//
//    if(file_exists(".\includes\classes\")){
//        require_once '.\includes\classes\'.$class_name.'.php';
//      }
//
//     else if(file_exists('.\includess\controllers\'.$class_name.'.php')){
//           require_once '.\includes\controllers\'.$class_name.'.php';
//       }
//
//
//
//    require_once('.\includess\routes\Routes.php');





 ?>
