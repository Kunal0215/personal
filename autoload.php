<!--
  *@file
  *This file is basically is working as autoloader so that we don't need to include all classes's file.
 -->
<?php
/**
  * It works when a class new object is created.
  * @return   classname
 */
spl_autoload_register('MyAutoLoader');
// this function include the file which class object is created.
function MyAutoLoader($className) {
  $path = "control/";
  $ext = ".php";
  $fullpath = $path. $className. $ext;

  if(!file_exists($fullpath)) {
    return false;
  }
  include_once $fullpath;
  echo "hi";
}
?>
