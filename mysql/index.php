<?php
  /*define ('DB_HOST','localhost');
  define ('DB_USER','root');
  define ('DB_PASWORD','root');
  define ('DB_NAME','sqldb');

 $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASWORD, DB_NAME);
  if($mysqli->connect_error) {
    die('Error of connect'.$db->connect_error);
  }
  echo $mysqli->query("INSERT INTO `users` (`id`, `login`, `password`, `reg_day`)
   VALUES (NULL, 'ivan', MD5('123'), UNIX_TIMESTAMP())");
  //echo 'Connection succesfully';
 $mysqli->close ();*/

 //как добавить нового пользователя в таблицц user in DB
 define ('DB_HOST','localhost');
 define ('DB_USER','root');
 define ('DB_PASWORD','root');
 define ('DB_NAME','sqldb');

 $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASWORD, DB_NAME);
  if($mysqli->connect_error) {
    die('Error of connect'.$mysqli->connect_error);
  }
   $mysqli->query("INSERT INTO `users` (`id`, `login`, `password`, `reg_day`)
   VALUES (NULL, 'maria', MD5('12345'), '".time()."')");
   echo 'Connection succesfully<br>';
//Как добавить много пользователей за 1 раз
   for ($i = 1; $i < 10; $i++) {
     $mysqli  ->query("INSERT INTO `users` (`id`, `login`, `password`, `reg_day`)
     VALUES (NULL, '$i', MD5('$i'), '".time()."')");
   }
//Как обновить какую-то ячейку
   $mysqli->query("UPDATE `users` SET `password` = '5' WHERE `users`.`id` = 1");

   $mysqli->query("UPDATE `users` SET `reg_day` = '10' WHERE `login` = 'shop' OR (`id` > 5 AND `id` < 8)");

//Как удалять елементи, можно и все если не указивать where
  $mysqli->query("DELETE FROM `users` WHERE `users`.`id` = 9");

//Как вибраты елемент из БД
  function printResult ($result_set) {
    while (($row = $result_set->fetch_assoc()) != false) {
      print_r ($row);
      echo '<br>';
    }
    echo '<br>';
  }

  $result_set = $mysqli->query("SELECT * FROM `users`");
 printResult($result_set);

   $result_set = $mysqli->query("SELECT * FROM `users` ORDER BY 'login' DESC LIMIT 2, 5");
  printResult($result_set);

  $result_set = $mysqli->query("SELECT COUNT('id') FROM `users`");
  printResult($result_set);

  $db->close ();

?>
