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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson one</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/lessonone.css">
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
                <nav class="nav">
                    <a href="admin.php">
                        <li>Курс</li>
                    </a>
                    <a class="acti" href="index.php#news">
                        <li>Новости</li>
                    </a>
                    <a href="index.php#about">
                        <li>О нас</li>
                    </a>
                    <a href="index.php#social">
                        <li>Связаться</li>
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <section class="lesson1-section1">
        <div class="container">

            <div class="video">
                <video controls width="800" height="400" poster="./img/videolesson/playload.png" preload="none">
                    <source src="./videos/eee.mp4" type="video/mp4" />
                </video>
            </div>

            <div class="lesson1__section1-item">

                <!-- gonikme 1-->
                <div class="lesson1__section1-inner">
                    <h2 class="lesson1__section1-title">1. Слушайте и повторяйте слоги.</h2>
                    <div class="audio">
                        <audio controls>
                            <source src="audios/1.mp3" type="audio/mp3">
                            <source src="audios/1.mp3" type="audio/mpeg">
                            <a href="sounds/1.mp3">Скачать name.mp3</a>
                        </audio>
                    </div>
                </div>

                <!-- gonikme 2 -->
                <div class="lesson1__section1-inner">
                    <h2 class="lesson1__section1-title">2. Слушайте и пишите слоги, что слышите. Пишите через запятую и
                        с пробелом!
                    </h2>
                    <div class="audio">
                        <audio controls>
                            <source src="audios/2.mp3" type="audio/mp3">
                            <source src="audios/2.mp3" type="audio/mpeg">
                            <a href="sounds/1.mp3">Скачать name.mp3</a>
                        </audio>
                    </div>
                    <div class="input ">
                        <input type="text" class="input__inner">
                        <div class="input1"></div>
                    </div>
                </div>

                <!-- gonikme 3 -->
                <div class="lesson1__section1-inner">
                    <h2 class="lesson1__section1-title">3. Слушайте имена. Отмечайте в своём списке те имена, которые вы
                        слышите. Отвечайте плюсом или минусом соответсвенно!
                    </h2>
                    <div class="audio">
                        <audio controls preload="metadata">
                            <source src="audios/3.mp3" type="audio/mp3">
                            <a href="sounds/3.mp3">Скачать name.mp3</a>
                        </audio>
                    </div>
                    <div class="input">
                        <div class="input__item">
                            <span class="input__man" data-man="Андрей  Михайлович">Андрей Михайлович</span>
                            <input class="plus-minus" type="text">
                            <span class="plus-x"></span>
                        </div>
                        <div class="input__item">
                            <span class="input__man" data-man="Михаил Петрович">Михаил Петрович</span>
                            <input class="plus-minus" type="text">
                            <span class="plus-x"></span>
                        </div>
                        <div class="input__item">
                            <span class="input__man" data-man="Валерий  Сергеевич">Валерий Сергеевич</span>
                            <input class="plus-minus" type="text">
                            <span class="plus-x"></span>
                        </div>
                        <div class="input__item">
                            <span class="input__man" data-man="Анатолий  Борисович">Анатолий Борисович</span>
                            <input class="plus-minus" type="text">
                            <span class="plus-x"></span>
                        </div>
                        <div class="input__item">
                            <span class="input__man" data-man="Нина  Михайловна">Нина Михайловна</span>
                            <input class="plus-minus" type="text">
                            <span class="plus-x"></span>
                        </div>
                        <div class="input__item">
                            <span class="input__man" data-man="Ирина Сергеева">Ирина Сергеева</span>
                            <input class="plus-minus" type="text">
                            <span class="plus-x"></span>
                        </div>
                        <div class="input__item">
                            <span class="input__man" data-man="Елена  Николаевна">Елена Николаевна</span>
                            <input class="plus-minus" type="text">
                            <span class="plus-x"></span>
                        </div>
                        <div class="input__item">
                            <span class="input__man" data-man="Лариса  Васильевна">Лариса Васильевна</span>
                            <input class="plus-minus" type="text">
                            <span class="plus-x"></span>
                        </div>
                        <div class="asa">aaaaa</div>
                    </div>
                </div>

                <!-- gonikme 4 -->
                <div class="lesson1__section1-inner">
                    <h2 class="lesson1__section1-title">4. Слушайте фразы. Впишите в пробелах в своём списке имена,
                        которые вы слышите.
                    </h2>
                    <div class="audio">
                        <audio controls preload="metadata">
                            <source src="audios/4.mp3" type="audio/mp3">
                            <a href="sounds/4.mp3">Скачать name.mp3</a>
                        </audio>
                    </div>
                    <div class="input">
                        <div class="input__item">1. Девочка <input type="text" class="irochka" data-irochka="Ирочка">
                            гуляла в парке.</div>
                        <!--Ирочка-->
                        <div class="input__item">2. Очень долго <input type="text" class="irochka"
                                data-irochka="Светлана Борисовна"> не знала, что
                            делать.</div>
                        <!--Светлана Борисовна -->
                        <div class="input__item">3. Я не знаю <input type="text" class="irochka"
                                data-irochka="Татьяну Петровну">. </div>
                        <!--Татьяну Петровну.-->
                        <div class="input__item">4. У меня был знакомый, которого все называли <input type="text"
                                class="irochka" data-irochka="Васильевич">. </div>
                        <!--Васильевич-->
                        <div class="input__item">5. Меня познакомили с красивой девушкой. Её зовут <input type="text"
                                class="irochka" data-irochka="Елена">. </div>
                        <!--Елена-->
                        <div class="input__item">6. Моя мама называла меня <input type="text" class="irochka"
                                data-irochka="Серёженька">. </div>
                        <!--Серёженька-->
                        <div class="input__item">7. Вчера мы встретили <input type="text" class="irochka"
                                data-irochka="Владимира Борисовича">. </div>
                        <!--Владимира Борисовича-->
                    </div>
                </div>

                <!-- gonikme 5 -->
                <div class="lesson1__section1-inner">
                    <h2 class="lesson1__section1-title">5. Слушайте фразы, в которых есть названия стран. Впишите
                        названия стран, которые вы услышали.
                    </h2>
                    <div class="audio">
                        <audio controls preload="metadata">
                            <source src="audios/5.mp3" type="audio/mp3">
                            <a href="sounds/5.mp3">Скачать name.mp3</a>
                        </audio>
                    </div>
                    <div class="input">
                        <div class="input__item">1. <input type="text" class="city" data-city="Япония"> мне очень
                            нравится.</div>
                        <!--Япония-->
                        <div class="input__item">2. В <input type="text" class="city" data-city="Канаду"> она поедет
                            через месяц.</div>
                        <!--Канаду-->
                        <div class="input__item">3. Мы очень любим отдыхать в <input type="text" class="city"
                                data-city="Турции">
                            осенью. </div>
                        <!--Турции-->
                        <div class="input__item">4. Я всегда хотел поехать во <input type="text" class="city"
                                data-city="Францию">.
                        </div>
                        <!--Францию-->
                        <div class="input__item">5. Мой брат любит путешествовать по <input type="text" class="city"
                                data-city="Америке">. </div>
                        <!--Америке-->
                        <div class="input__item">6. Я был в <input type="text" class="city" data-city="Швеции">только
                            один раз. </div>
                        <!--Швеции-->
                        <div class="input__item">7. Мой друг работал в <input type="text" class="city"
                                data-city="Англии"> в прошлом
                            году. </div>
                        <!--Англии-->
                    </div>
                </div>

                <!-- gonikme 6 -->
                <div class="lesson1__section1-inner">
                    <h2 class="lesson1__section1-title">6. а) Проверьте, знаете ли вы эти выражения. Отвечайте плюсом
                        или минусом соответсвенно!
                    </h2>
                    <div class="input">
                        <div class="input__item"><b>Как жизнь?</b> — Ýagdaýlaryň (Ýaşaýşyň) gowmy? <input
                                class="plus-minus2 ynam" type="text"></div>
                        <div class="input__item"><b>Прекрасно!</b> — Ajaýyp! <input class="plus-minus2 ynam"
                                type="text">
                        </div>
                        <div class="input__item"><b>Как ваши дела?</b> — Ýagdaýlaryň gowmy? <input
                                class="plus-minus2 ynam" type="text"> </div>
                        <div class="input__item"><b>Нормально!</b> — Oňat! <input class="plus-minus2 ynam" type="text">
                        </div>
                        <div class="input__item"><b>Передавать привет (кому?)</b> — Salam ýollaň (kime?) <input
                                class="plus-minus2 ynam" type="text"> </div>
                        <div class="input__item"><b>Отлично!</b> — Gül ýaly! <input class="plus-minus2 ynam"
                                type="text">
                        </div>
                        <div class="input__item"><b>Всё в порядке (у кого?).</b> — Hemme zat gowmy (kimde?) <input
                                class="plus-minus2 ynam" type="text"> </div>
                        <div class="input__item"><b>Ничего.</b> — Hiç hili. <input class="plus-minus2 ynam" type="text">
                        </div>
                    </div>
                </div>

                <!-- gonikme 7 -->
                <div class="lesson1__section1-inner">
                    <h2 class="lesson1__section1-title">6. б) Прочитайте диалоги с расстановкой ударений и пауз в словах
                        как расставлено в диалогах.
                    </h2>
                    <div class="input">
                        <div class="input__item"><b>А</b></div>
                        <div class="input__item">— Доброе <span class="udareniye">у</span>тро! </div>
                        <div class="input__item">— Здр<span class="udareniye">а</span>вствуйте. Как ваши дел<span
                                class="udareniye">а</span>? </div>
                        <div class="input__item">— Спас<span class="udareniye">и</span>бо, / нормально. А в<span
                                class="udareniye">а</span>ши? </div>
                        <div class="input__item">— У меня всё в пор<span class="udareniye">я</span>дке. </div>
                        <div class="input__item">— Я очень р<span class="udareniye">а</span>д! </div>
                        <div class="input__item"><b>Б</b></div>
                        <div class="input__item">- Добрый д<span class="udareniye">е</span>нь! </div>
                        <div class="input__item">- Здр<span class="udareniye">а</span>вствуйте. Каку вас дел<span
                                class="udareniye">а</span>? </div>
                        <div class="input__item">- Прекр<span class="udareniye">а</span>сно! А как у в<span
                                class="udareniye">а</span>с? </div>
                        <div class="input__item">- Спас<span class="udareniye">и</span>бо. У меня всё отл<span
                                class="udareniye">и</span>чно! </div>
                        <div class="input__item">- Я очень р<span class="udareniye">а</span>да! </div>
                    </div>
                </div>

                <div class="section1__footer">
                    <div class="section1__finall">
                        <button class="section1__itog section1__itog1">Посчитать итого</button>
                        <button class="section1__itog section1__itog2">Начать заново</button>
                        <a href="lessontwo.html" class="section1__itog section1__itog3" disabled=true>Перейти к следующему заданию</a>
                    </div>
                    <div class="section1__finall section1__finall2">
                        ИТОГО: <span class="itogo1">0</span> баллов из возможных <span class="itogo2">89</span> 
                        . Оценка за урок: <strong class="itogo3">Стоит повторить</strong>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="./js/lessonone.js"></script>
</body>

</html>