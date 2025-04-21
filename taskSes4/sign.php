<?php 


print_r($_FILES['img']['name']);
$img_name = time() . $_FILES['img']['name'];
$img_tmp = $_FILES['img']['tmp_name'];
move_uploaded_file($img_tmp, "./upload/$img_name");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <form action="./profile.php" method="post" enctype="multipart/form-data">
        <input type="text" name="username"/>
        <input type="email" name="useremail"/>
        <input type="password" name="userpass"/>
        <input type="file" name="img"/>
        <button type="submit">submit</button>
    </form>
</body>
</html>