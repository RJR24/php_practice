<?php


if (isset($_GET['username']) && isset($_GET['password'])) {

$username = $_GET['username'];
$password = $_GET['password'];

var_dump($username,$password);
} else {
    echo 'username or password field is empty______';
}

var_dump($_POST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>$_GET and $_POST</title>

</head>

<body>
    <form action="/login.php" method='post'>

        <?php if (isset($_POST['username'])) {?>
            
            <h3>Hast dadash hast</h3>
        <?php } ?>    
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit">send</button>

    </form>
</body>
</html>