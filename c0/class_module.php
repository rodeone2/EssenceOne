<?php
/**
*www.essenceone.net (c) 2009-2015 by Robin Deatherage
**/

/**
* WE CALL THE CLASS MODULE PAGE ROUTERS BY MODULE CLASS NAME AUTOMATICALLY
**/

class route_module
{

 //OUR MODULE CLASS ROUTER//

 function routeModule()
 {

  if(isset($_GET['mod']))
  {
   $mod = htmlspecialchars($_GET["mod"]);

    if($mod != '')
    {
    switch($mod)
    {
    //C1/STATIC HOME MODULE PAGE NAMES//
    case'home': $fn='c1'; break; case'users': $fn='c2';
    break;
    //C2/USERS MODULE PAGE NAMES//
    case'users': $fn='c2';
    break;
    //C3/BLOG, FORUM OR WALL MODULE PAGE NAMES//
    case'blog': $fn='c3';
    break;
    //C4/FRIENDS MODULE PAGE NAMES//
    case'friends': $fn='c4';
    break;
    //C5/GROUPS MODULE PAGE NAMES//
    case'groups': $fn='c5';
    break;
    //C6/ALBUMS MODULE PAGE NAMES//

    //C7/

    //C8/
    //ca MODULE-NAME: $f= 'FOLDER-NAME;  break; ADD AND NAME YOUR NEW MODULES HERE**/

    default: $fn='c1';
    }//end switch

    $path='./'.$fn.'/class_'.$mod.'.php';
    if (file_exists($path)) {
    $route='route'.ucfirst($mod);//CAMEL BACKS THE FUNCTION NAME//
    include($path);
    $call='route_'.$mod.'';
    $module = new $call;
    $module->$route();
    } else {
    echo '<h1>404 !</h1>The file' .$path.' does not exist 1.';
    //ADD ERROR FUNCTION HERE//
    }//end if exist

    }else{
    //IF NO MOD IS CALLED WE DEFAULT TO THE HOME MODULE//
    $df_path='./c1/class_home.php';
    if (file_exists($df_path)) {
    include($df_path);
    $module = new route_home;
    $module->routeHome();
    }else{
     echo '<h1>404 !</h1> The file $df_path doen not exist 2.';
    }//end if path
    }//end if mod

  }else{

    $df_path2='./c1/class_home.php';
    if (file_exists($df_path2)) {
    include('./c1/class_home.php');
    $module = new route_home;
    $module->routeHome();
    }else{
     echo'<h1>404 !</h1> The file $df_path2 does not exist 3.';
    }// end if exist
  }//end isset

 }//end func

};//end class
//TO CALL THIS CLASS ON the main INDEX.PHP. CONFIG IS AUTOMATICALLY INCLUDED.//
//include('c0/class_module2);
//$module = new route_module;
//$module->routeModule();
?>
