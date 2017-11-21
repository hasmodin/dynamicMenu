
<?php

function connect(){
  $connection = mysqli_connect('localhost', 'root', 'root', 'cms');
  if(!$connection){
    die('failed to connect with cms DB');
  }
  return $connection;
}

function get_menus(){
  $connection = connect();
  $sql = "SELECT * FROM 'menus'";
  $result = mysqli_query($connection, $sql);
  if(mysqli_num_rows($result)){
    echo 'data exist';
  }else{
    echo 'data does not exist';
  }
}
get_menus();
 ?>
