<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
		function input($data){
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
		}
      $name = input($_POST["name"]);
      $email = input($_POST["email"]);
      $district =input($_POST["district"]);
      $gender=input($_POST["gender"]);

      echo "Welcome <b>$name</b>.<br> and Your email is: <b>$email</b> .<br>Your District is:<b> $district.</b><br/> and your Gender is:<b> $gender.</b>"

?>


  </body>
</html>
