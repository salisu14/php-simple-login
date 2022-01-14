<?php

   $username = 'salisu14';
   $password = 'p@55w0rd';
   $host='localhost';
   $database='practice';

   $dsn="mysql:host=$host;dbname=$database;";


   try {
      $pdo = new PDO($dsn, $username, $password);
      #echo '<h1>Connection successful.</h1>';
   } catch(PDOException $e) {
      throw new PDOException($e->getMessage(), (int)$e->getCode());
   }


   # CREATE USER 'salisu14'@'localhost' IDENTIFIED BY 'p@55w0rd';
   # GRANT UPDATE, DELETE, INSERT, SELECT 
   # ON practice.*
   # TO 'salisu14';