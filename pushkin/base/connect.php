<?php
   $mysqli = false;
   function connectDB() {
      global $mysqli;
      mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
      $mysqli = new mysqli("localhost", "workinyf_pushkin", "O*Mcizp6", "workinyf_pushkin");
      $mysqli->query("SET NAMES 'utf8'");
   }

   function closeDB() {
      global $mysqli;
      $mysqli->close();
   }

   function resultToArray($result){
      $array = array();
      while (($row = $result->fetch_assoc()) != false)
         $array[] = $row;

      return $array;
   }
?>
