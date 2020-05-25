<?php
  require_once './core/function.php';
  $conn = connect();
  if(isset($_COOKIE['id']) AND isset($_COOKIE['hash'])) {
    $sql = "SELECT * FROM users WHERE id='".$_COOKIE['id']."' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    if($row['hash'] !== $_COOKIE['hash'] ) {
      setcookie('id', $row['id'], time()-30*24*60*60, '/');
      setcookie('hash', $hash, time()-30*24*60*60, '/');
      header("Location: login.php");
    } 
  } else {
    setcookie('id', $row['id'], time()-30*24*60*60, '/');
    setcookie('hash', $hash, time()-30*24*60*60, '/');
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>admin</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/admin.css" />
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header__item">

        <div class="logo">
          <a href="index.php" class="logo__link">
            <img class="logo__img" src="./img/icons/лого.svg" alt="logo" />
          </a>
        </div>

        <div class="search">
          <div class="search__input">
            <input type="text" placeholder="Поиск" class="search__input-item" />
            <div class="search__icon">
              <img src="./img/icons/interface.svg" alt="poisk" />
            </div>
          </div>
        </div>

        <div class="lichn">
          <div class="user">
            <div class="user__ava">
              <a class="us" href="./logout.php">
                <!-- <img src="./img/icons/pochta.png" alt="pochta" class="user__pochta" /> -->
                <p>Выйти</p>
              </a>
            </div>
            <div class="user__ava">
              <a class="us" href="#">
                <p><?php echo $row['login']?></p>
                <!-- <img src="./img/icons/avatar.svg" alt="user" class="user__avatar" /> -->
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="admin__section1">
    <div class="container">
      <div class="lessons">
        <div class="lessons__item">
          <ul>
            <a href="lessonone.php" class="lesson__link">
              <li class="lesson__li">1. Глаголы «зовут/называется». Родительный падеж. "Как у вас дела?"</li>
            </a>
            <a href="lessontwo.php" class="lesson__link">
              <li class="lesson__li">2. Образование прилагательных. Словообразовательные суффиксы. Предложный падеж.
                Склонение названий городов и стран. Жить где? Приехать откуда?
              </li>
            </a>
            <a href="videolesson.php" class="lesson__link">
              <li class="lesson__li">3. Мужской и женский род профессий. Конструкция «Что за человек…?». Склонение
                прилагательных.
              </li>
            </a>
            <a href="videolesson.php" class="lesson__link">
              <li class="lesson__li">4. Построение вопросов. Спряжение глаголов по лицам и числам – глаголы «вставать,
                уставать, оставаться». Наречия времени: «всегда, иногда, редко, обычно». Глаголы: «учить, изучать».
              </li>
            </a>
            <a href="html" class="lesson__link">
              <li class="lesson__li">5. Образование профессий мужского и женского рода. Прилагательные, описывающие
                работу. Глаголы: «работать, подработать,
                зарабатывать».
              </li>
            </a>
            <a href="html" class="lesson__link">
              <li class="lesson__li">6. Называние времени в разговорной форме. Числительные.
              </li>
            </a>
            <a href="html" class="lesson__link">
              <li class="lesson__li">7. Образование родительного падежа существительных в единственном и множественном
                числах. Единицы мер (литр, килограмм, штука). Глаголы «покупать», «купить».
              </li>
            </a>
            <a href="html" class="lesson__link">
              <li class="lesson__li">8. Повелительное наклонение. Продукты. Овощи и фрукты.
              </li>
            </a>
            <a href="videolesson.php" class="lesson__link">
              <li class="lesson__li">9. Словообразование: образование прилагательных от существительных при помощи
                суффиксов «енн», «онн», «н». Наречия и предлоги (Родительный и творительный падежи). Конструкции: «У
                меня есть + Им.п.»; «У меня нет +Род.п.». Порядковые числительные.
              </li>
            </a>
            <a href="html" class="lesson__link">
              <li class="lesson__li">10. Словообразование: образование существительных от прилагательных при помощи
                суффикса «ость». Краткие прилагательные. Глаголы с «ся». Прилагательные, описывающие характер.
              </li>
            </a>
          </ul>
        </div>
        <div class="lessons__item">
          <div class="lessons__item-inner">
            <div class="lesson__otsenka">
              <img src="./img/adminimg/prevoshodno.png" alt="prewoshodno">
              <div class="lesson__text"><a href="#">Превосходно</a></div>
            </div>
            <div class="lesson__otsenka">
              <img src="./img/adminimg/goodwork.png" alt="good work">
              <div class="lesson__text"><a href="#">Хорошая работа</a></div>
            </div>
            <div class="lesson__otsenka">
              <img src="./img/adminimg/stoitrepeat.png" alt="reapeat">
              <div class="lesson__text"><a href="#">Стоит повторить</a></div>
            </div>
            <div class="lesson__btn">
              <a href="#" class="lesson__btn-link">Пройденные уроки</a>
            </div>
            <div class="points">
              <p><a href="#">2. Глаголы - зовут, - <br>называется ....</a></p>
            </div>
            <div class="points">
              <p><a href="#">1. Глаголы - зовут, - <br>называется ....</a></p>
            </div>
            <div class="points">
              <p><a href="#">0. Введение в курс</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="./js/main.js"></script>
</body>

</html>