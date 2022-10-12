<?php
  function conn(){
    echo "salam mr Habib!!";
  }

  function connect(){
    $connect=mysqli_connect("localhost","root","");
    mysqli_select_db($connect,"school1");
    return $connect;
  }
?>
