<?php
    require_once './core/function.php';
    $conn = connect();
    if(isset($_POST['name2']) AND isset($_POST['fam2']) AND isset($_POST['email2']) AND isset($_POST['password2'])) {
        $name = trim($_POST['name2']);
        $fam = trim($_POST['fam2']);
        $email = trim($_POST['email2']);
        $password = trim($_POST['password2']);
        
        $sql = "INSERT INTO users (login, fam, email, password, hash) VALUES ('{$name}', '{$fam}', '{$email}', '".md5($password)."', '')";
        if(mysqli_query($conn, $sql) ) {
            header("Location: login.php");
            exit();

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
            <input name="name2" type="text" class="form__input" placeholder=" " required>
            <label  class="form__label">Имя</label>
        </div>
        <div class="form__group">
            <input name="fam2" type="text" class="form__input" placeholder=" " required>
            <label  class="form__label">Фамилия</label>
        </div>
        <div class="form__group">
            <input name="email2" type="email" class="form__input" placeholder=" " required>
            <label  class="form__label">Email</label>
        </div>
        <div class="form__group">
            <input name="password2" type="text" class="form__input" placeholder=" " required>
            <label  class="form__label">Пароль</label>
        </div>
        <div class="center">
            <button type="submit" class="form__button">Зарегистрировать</button>
            <a href="login.php" class="form__button">Вход</a>
        </div>
        
    </form>
</body>
</html>