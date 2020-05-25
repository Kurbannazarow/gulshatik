<?php
    require_once './core/function.php';
    $conn = connect();
    if(isset($_POST['email']) AND isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT id, password FROM users WHERE email='".$email."' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);

        if($row['password'] == md5($_POST['password']) ) {
            $hash = generateHash(10);
            mysqli_query($conn, "UPDATE users SET hash='".$hash."' WHERE id=".$row['id']);

            setcookie('id', $row['id'], time()+30*24*60*60);
            setcookie('hash', $hash, time()+30*24*60*60, null, null, null, true);

            header("Location: admin.php");
            exit();
        }  else {

        }
        
    }

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
    <form method="POST" class="form">
        <h1 class="form__title">Вход</h1>
        <div class="form__group">
            <input name="email" type="email" class="form__input" placeholder=" " required>
            <label  class="form__label">Email</label>
        </div>
        <div class="form__group">
            <input name="password" type="text" class="form__input" placeholder=" " required>
            <label  class="form__label">Пароль</label>
        </div>
        <div class="center">
        <button type="submit" class="form__button">Войти</button>
        <a href="logup.php" class="form__button">Регистрация</a>
        </div>
    </form>
</body>
</html>