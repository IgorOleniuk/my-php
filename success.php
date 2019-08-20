<?php
  session_start();
  if($_GET['send'] == 1) {
  echo 'Вы успешно отправили сообщения на email  '.$_SESSION['to'];
  }
?>
