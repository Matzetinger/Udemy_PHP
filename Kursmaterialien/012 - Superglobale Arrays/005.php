<?php


var_dump($_FILES);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="POST" action="index.php" enctype="multipart/form-data">
  <input type="file" name="uploaded_file">
  <input type="submit" value="Upload">
</form>
</body>
</html>







