<?php
if(isset($_POST["done"])) {
  if ($_POST["name"] == "")
      echo "Write your name";
  else
      header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form name="test" action="" method="post">
      <label>Name: </label><br>
      <input type="text" name="name" placeholder="Name"><br>
      <label>Email: </label><br>
      <input type="text" name="email" placeholder="Email"><br>
      <label>Message: </label><br>
      <textarea name="message" cols="30" rows="10"></textarea> <br>
      <input type="submit" name="done" value="Done">
    </form>
  </body>
</html>
