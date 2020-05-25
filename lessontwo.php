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
    <title>Lesson two</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/lessontwo.css">
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

    <div class="header__title">
        Образование прилагательных. Словообразовательные суффиксы. Предложный <br>
        падеж. Склонение названий городов и стран. Жить где? Приехать откуда?
    </div>

    <section class="lesson2-section1">
        <div class="container">
            <div class="video">
                <video controls width="800" height="400" poster="./img/videolesson/playload.png" preload="none">
                    <source src="./videos/eee.mp4" type="video/mp4" />
                </video>
            </div>
            <div class="video__star">
                <small><span style="color: red;">*</span>Аудио записи обязательны к прослушиванию и повтарению в слух
                    для лучшего освоения материала </small>
            </div>

            <!-- gonukme 1 -->
            <div class="lesson2__gonukme lesson2__gonukme1">
                <h3 class="lesson2__title">
                    1. Прослушайте фразы и запишите, какие языки изучали эти люди. Запись ответа возможна единожды, <br>
                    поэтому рекомендуется прослушать запись дважды, и лишь потом приступать к заданиям. Изменить решение
                    <br>при выбранном варианте не получится. Проверка начинается после нажатия enter.
                </h3>
                <div class="audio">
                    <audio controls>
                        <source src="audios/2.mp3" type="audio/mp3">
                        <source src="audios/2.mp3" type="audio/mpeg">
                        <a href="sounds/1.mp3">Скачать name.mp3</a>
                    </audio>
                </div>
                <div class="lesson2__gonukme-text">
                    <div class="lesson2__gonukme1-item">1. Я знаю, что Андрей Иванович выучил <input type="text"
                            class="ispan ispan1" data-ispn="испанский"><span class="ispan__span"></span> язык.</div>
                    <!--испанский-->
                    <div class="lesson2__gonukme1-item">2. Мне кажется, что <input type="text" class="ispan ispan2"
                            data-ispn="английский"> <span class="ispan__span"></span> язык изучала Ирина.</div>
                    <!--испанский-->
                    <div class="lesson2__gonukme1-item">3. По-моему, Пётр Петрович <input type="text"
                            class="ispan ispan3" data-ispn="шведский"><span class="ispan__span"></span> язык знает.
                    </div>
                    <!--испанский-->
                    <div class="lesson2__gonukme1-item">4. Я думаю, что Леночка говорит на <input type="text"
                            class="ispan ispan4" data-ispn="итальянском"><span class="ispan__span"></span> языке.</div>
                    <!--испанский-->
                    <div class="lesson2__gonukme1-item">5. Мы знаем, что <input type="text" class="ispan ispan5"
                            data-ispn="финский"> <span class="ispan__span"></span> язык Эдик учил.</div>
                    <!--испанский-->
                    <div class="lesson2__gonukme1-item">6. Конечно, Вадим Сергеевич выучил <input type="text"
                            class="ispan ispan6" data-ispn="французский"><span class="ispan__span"></span> язык.</div>
                    <!--испанский-->
                    <div class="lesson2__gonukme1-item">7. Я знаю, что Светлана Андреевна <input type="text"
                            class="ispan ispan7" data-ispn="китайский"><span class="ispan__span"></span> язык изучала.
                    </div>
                    <!--испанский-->
                </div>
            </div>

            <!-- gonukme 2 -->
            <div class="lesson2__gonukme lesson2__gonukme2">
                <h3 class="lesson2__title">
                    2. Прослушайте диалоги и назовите имена их участников. Запись ответа возможна единожды, поэтому <br>
                    рекомендуется прослушать запись дважды, и лишь потом приступать к заданиям. Изменить решение при
                    <br> выбранном варианте не получится. Проверка начинается после нажатия enter.
                </h3>
                <div class="audio">
                    <audio controls>
                        <source src="audios/2.mp3" type="audio/mp3">
                        <source src="audios/2.mp3" type="audio/mpeg">
                        <a href="sounds/1.mp3">Скачать name.mp3</a>
                    </audio>
                </div>
                <div class="lesson2__gonukme-text">
                    <!-- span 1 -->
                    <span style="margin-left: 20px; margin-top: 20px; display: block;"><strong>1.</strong></span> <br>
                    <div class="lesson2__gonukme2-item">- Доброе утро. Я ваш преподаватель. Меня зовут <input
                            type="text" class="elena elena1" data-elena="Елена Ивановна"><span
                            class="elena__span"></span>. А как вас зовут?
                    </div>
                    <!-- Елена Ивановна -->
                    <div class="lesson2__gonukme2-item">- Меня зовут <input type="text" class="elena elena1"
                            data-elena="Павел"><span class="elena__span"></span>. Я очень рад с вами познакомиться.
                    </div>
                    <!-- Павел -->
                    <div class="lesson2__gonukme2-item"> - Мне тоже очень приятно познакомиться с вами. </div>

                    <!-- span 2 -->
                    <span style="margin-left: 20px; margin-top: 20px; display: block;"><strong>2.</strong></span> <br>
                    <div class="lesson2__gonukme2-item">- Привет! Будем знакомы . Я <input type="text"
                            class="elena elena1" data-elena="Филипп"><span class="elena__span"></span>. А как тебя
                        зовут?
                    </div>
                    <!-- Филипп -->
                    <div class="lesson2__gonukme2-item"> - <input type="text" class="elena elena1"
                            data-elena="Антон"><span class="elena__span"></span>. Рад познакомиться.
                    </div>
                    <!-- Антон -->
                    <div class="lesson2__gonukme2-item">- Я тоже. А кто это? </div>
                    <div class="lesson2__gonukme2-item">- Это наш преподаватель. </div>
                    <div class="lesson2__gonukme2-item">- А как его зовут? </div>
                    <div class="lesson2__gonukme2-item">- Его зовут <input type="text" class="elena elena1"
                            data-elena="Виктор Петрович"><span class="elena__span"></span>.</div>
                    <!-- Виктор Петрович -->

                    <!-- span 3 -->
                    <span style="margin-left: 20px; margin-top: 20px; display: block;"><strong>3.</strong></span> <br>
                    <div class="lesson2__gonukme2-item">- Здравствуйте. Будем знакомы. Я ваша преподавательница. Меня
                        зовут <input type="text" class="elena elena1" data-elena="Анна Петровна"><span
                            class="elena__span"></span>. А как вас зовут?
                    </div>
                    <!-- Анна Петровна -->
                    <div class="lesson2__gonukme2-item">- Меня зовут <input type="text" class="elena elena1"
                            data-elena="Джон"><span class="elena__span"></span>. </div>
                    <!--Джон  -->
                    <div class="lesson2__gonukme2-item">- Очень приятно. А как вас зовут, девушка? </div>
                    <div class="lesson2__gonukme2-item">- <input type="text" class="elena elena1"
                            data-elena="Моника"><span class="elena__span"></span>.</div>
                    <!-- Моника -->
                    <div class="lesson2__gonukme2-item">- Очень рада с вами познакомиться. </div>
                </div>
            </div>

            <!-- gonukme 3 -->
            <div class="lesson2__gonukme lesson2__gonukme3">
                <h3 class="lesson2__title">
                    3. Прослушайте диалоги и скажите, студенты какой национальности разговаривают друг с другом. Запись
                    <br>ответа возможна единожды, поэтому рекомендуется прослушать запись дважды, и лишь потом
                    приступать <br> к заданиям. Изменить решение при выбранном варианте не получится. Проверка
                    начинается <br> после нажатия enter.
                </h3>
                <div class="audio">
                    <audio controls>
                        <source src="audios/2.mp3" type="audio/mp3">
                        <source src="audios/2.mp3" type="audio/mpeg">
                        <a href="sounds/1.mp3">Скачать name.mp3</a>
                    </audio>
                </div>
                <div class="lesson2__gonukme-text">
                    <!-- span 1 -->
                    <span style="margin-left: 20px; margin-top: 20px; display: block;"><strong>1.</strong></span> <br>
                    <div class="lesson2__gonukme2-item">- Извините, вы откуда? </div>
                    <div class="lesson2__gonukme2-item">- Я из Швеции, из Стокгольма. </div>
                    <!--  -->
                    <div class="lesson2__gonukme2-item"> - Вы
                        <input type="text" class="elena shwed1" data-shwed="швед"><span class="shwed__span"></span>?
                    </div>
                    <!-- швед -->
                    <div class="lesson2__gonukme2-item">-Да, я <input type="text" class="elena shwed1"
                            data-shwed="швед"><span class="shwed__span"></span>. А вы откуда? </div>
                    <!-- швед -->
                    <div class="lesson2__gonukme2-item">- А я <input type="text" class="elena shwed1"
                            data-shwed="китаец"><span class="shwed__span"></span>, из Шанхая. </div>
                    <!-- китаец -->

                    <!-- span 2 -->
                    <span style="margin-left: 20px; margin-top: 20px; display: block;"><strong>2.</strong></span> <br>

                    <div class="lesson2__gonukme2-item">- Извини, ты откуда?</div>
                    <div class="lesson2__gonukme2-item">- Я из Финляндии, из Хельсинки.</div>
                    <div class="lesson2__gonukme2-item">- Ты <input type="text" class="elena shwed1"
                            data-shwed="финка"><span class="shwed__span"></span>?</div>
                    <!-- финка -->
                    <div class="lesson2__gonukme2-item">- Да, я <input type="text" class="elena shwed1"
                            data-shwed="финка"><span class="shwed__span"></span>. А ты <input type="text"
                            class="elena shwed1" data-shwed="японка"><span class="shwed__span"></span>?</div>
                    <!-- японка -->
                    <div class="lesson2__gonukme2-item">- Нет, я из Китая.</div>

                </div>
            </div>

            <!-- gonukme 4 -->
            <div class="lesson2__gonukme lesson2__gonukme4">
                <h3 class="lesson2__title">
                    4. а) Прослушайте адрес Андрея Петрова и запишите его. Запись ответа возможна единожды, поэтому <br>
                    рекомендуется прослушать запись дважды, и лишь потом приступать к заданиям. Изменить решение при
                    <br>выбранном варианте не получится. Проверка начинается после нажатия enter.
                </h3>
                <div class="audio">
                    <audio controls>
                        <source src="audios/2.mp3" type="audio/mp3">
                        <source src="audios/2.mp3" type="audio/mpeg">
                        <a href="sounds/1.mp3">Скачать name.mp3</a>
                    </audio>
                </div>
                <div class="lesson2__gonukme-text">
                    <div class="lesson2__gonukme2-item">Андрей Петров живёт <input style="width: 500px;" type="text"
                            value="в" class="elena piter1"
                            data-piter="в Петербурге, на проспекте Культуры, в доме номер 16, в квартире номер 214"><span
                            class="piter__span"></span>.
                    </div>
                    <!-- в Петербурге, на проспекте Культуры, в доме номер 16, в квартире номер 214 -->
                    <h3 class="lesson2__title">
                        б) Прослушайте его номер телефона и запишите его. Запись ответа возможна единожды, поэтому
                        <br>рекомендуется прослушать запись дважды, и лишь потом приступать к заданиям. Изменить решение
                        <br>при выбранном варианте не получится. Проверка начинается после нажатия enter.
                    </h3>
                    <div class="lesson2__gonukme2-item">Его телефон <input style="width: 500px;" type="text"
                            placeholder="000-00-00" class="elena piter1" data-piter="559-86-77"><span
                            class="piter__span"></span>.
                    </div>
                </div>

            </div>

            <!-- gonukme 5 -->
            <div class="lesson2__gonukme lesson2__gonukme5">
                <h3 class="lesson2__title">
                    5. Прослушайте текст и выберете правильный вариант, выбрать варианты можно единожды, поэтому
                    <br>рекомендуется прослушать запись дважды, и лишь потом приступать к заданиям. Изменить решение
                    <br> при выбранном варианте не получится. Проверка начинается после нажатия enter.
                </h3>
                <div class="audio">
                    <audio controls>
                        <source src="audios/2.mp3" type="audio/mp3">
                        <source src="audios/2.mp3" type="audio/mpeg">
                        <a href="sounds/1.mp3">Скачать name.mp3</a>
                    </audio>
                </div>
                <div class="lesson2__gonukme-text">
                    <div class="lesson2__gonukme2-item">
                        <h4>1. Лучший друг Саши ... . </h4>
                        <div class="lesson2_5">
                            <span style="display: inline-block; width: 200px;">Эдик</span><input type="radio" 
                                name="sash1" class="sash1 sash"><span></span> <br>
                            <span style="display: inline-block; width: 200px;">Алеша</span><input type="radio"
                                name="sash1" class="sash1 sash"><span></span> <br>
                            <span style="display: inline-block; width: 200px;">Эрик</span><input data-check="1" type="radio"
                                name="sash1" class="sash1 sash"><span></span> <br>
                        </div>
                        <!-- h4  -->
                        <h4>2. Лучший друг Саши ... . </h4>
                        <div class="lesson2_5">
                            <span style="display: inline-block; width: 200px;">из России </span><input type="radio"
                                name="sash2" class="sash2 sash"><span></span> <br>
                            <span style="display: inline-block; width: 200px;">из Швеции </span><input type="radio"
                                name="sash2" class="sash2 sash" data-check="1"><span></span> <br>
                            <span style="display: inline-block; width: 200px;">из Ирландии</span><input type="radio"
                                name="sash2" class="sash2 sash"><span></span> <br>
                        </div>
                        <!-- h4  -->
                        <h4>3. Лучший друг Саши ... . </h4>
                        <div class="lesson2_5">
                            <span style="display: inline-block; width: 200px;">русский </span><input type="radio"
                                name="sash3" class="sash3 sash"><span></span> <br>
                            <span style="display: inline-block; width: 200px;">ирландец </span><input type="radio"
                                name="sash3" class="sash3 sash"><span></span> <br>
                            <span style="display: inline-block; width: 200px;">швед</span><input type="radio"
                                name="sash3" class="sash3 sash" data-check="1"><span></span> <br>
                        </div>
                        <!-- h4  -->
                        <h4>4. Лучший друг Саши изучает в университете … . </h4>
                        <div class="lesson2_5">
                            <span style="display: inline-block; width: 200px;">немецкий язык </span><input type="radio"
                                name="sash4" class="sash4 sash" data-check="1"><span></span> <br>
                            <span style="display: inline-block; width: 200px;">английский язык </span><input
                                type="radio" name="sash4" class="sash4 sash"><span></span> <br>
                            <span style="display: inline-block; width: 200px;">шведский язык</span><input type="radio"
                                name="sash4" class="sash4 sash"><span></span> <br>
                        </div>
                        <!-- h4  -->
                        <h4> 5. Лучший друг Саши хорошо говорит ... . </h4>
                        <div class="lesson2_5">
                            <span style="display: inline-block; width: 200px;">по-русски </span><input type="radio"
                                name="sash5" class="sash5 sash"><span></span> <br>
                            <span style="display: inline-block; width: 200px;">по-немецки </span><input type="radio"
                                name="sash5" class="sash5 sash" data-check="1"><span></span> <br>
                            <span style="display: inline-block; width: 200px;">по-английски</span><input type="radio"
                                name="sash5" class="sash5 sash"><span></span> <br>
                        </div>
                        <!-- h4  -->
                        <h4> 6. Раньше лучший друг Саши учился ... . </h4>
                        <div class="lesson2_5">
                            <span style="display: inline-block; width: 200px;">в Москве </span><input type="radio"
                                name="sash6" class="sash6 sash" data-check="1"><span></span> <br>
                            <span style="display: inline-block; width: 200px;">в Петербурге </span><input type="radio"
                                name="sash6" class="sash6 sash"><span></span> <br>
                        </div>
                        <!-- h4  -->
                        <h4> 7. Сейчас лучший друг Саши учится ... . </h4>
                        <div class="lesson2_5">
                            <span style="display: inline-block; width: 200px;">в университете </span><input type="radio"
                                name="sash7" class="sash7 sash" data-check="1"><span></span> <br>
                            <span style="display: inline-block; width: 200px;">в Институте русского языка </span><input
                                type="radio" name="sash7" class="sash7 sash"><span></span> <br>
                        </div>
                    </div>
                </div>

            </div>

            <!-- gonukme 6 -->
            <div class="lesson2__gonukme lesson2__gonukme6">
                <h3 class="lesson2__title">
                    6. Прочитайте пары слов 一 названий стран и городов и продолжите.
                </h3>
                <div class="lesson2__gonukme-text">
                    <div class="lesson2__gonukme2-item">
                        АвстрИЯ, ВенА - в АвстрИИ, в ВенЕ - ИЗ АвстрИИ, ИЗ ВенЫ
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Германия, Берлин – в Германии, в Берлине - из Германии, из БерлинА
                    </div>
                    <div class="lesson2__gonukme2-item">
                        ИспанИЯ, БарселонА – <input class="bars__input elena" type="text"
                            data-bars="в Испании, в Барселоне"><span class="bars1"></span> – <input
                            class="bars__input elena" type="text" data-bars="из Испании, из Барселоны"><span
                            class="bars1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        ИталИЯ, Рим – <input class="bars__input elena" type="text" data-bars="в Италии, в Риме"><span
                            class="bars1"></span> –
                        <input class="bars__input elena" type="text" data-bars="из Италии, из Рима"><span
                            class="bars1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        ФранцИЯ, Париж – <input class="bars__input elena" type="text"
                            data-bars="Во Франции, в Праиже"><span class="bars1"></span>
                        – <input class="bars__input elena" type="text" data-bars="из Фпанции, из Парижа"><span
                            class="bars1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        АмерикА, АтлантА - В АмерикЕ, В АтлантЕ - ИЗ Америки, ИЗ Атланты
                    </div>
                    <div class="lesson2__gonukme2-item">
                        КанадА, ОттавА – <input class="bars__input elena" type="text"
                            data-bars="в Канаде, в Оттаве"><span class="bars1"></span>
                        – <input class="bars__input elena" type="text" data-bars="из Канады, из Оттавы"><span
                            class="bars1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        КореЯ, Сеул – <input class="bars__input elena" type="text" data-bars="в Корее, в Сеуле"><span
                            class="bars1"></span>
                        – <input class="bars__input elena" type="text" data-bars="из Кории, из Сеула"><span
                            class="bars1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Китай, Пекин - В КитаЕ, В ПекинЕ - ИЗ КитаЯ, ИЗ ПекинА
                    </div>
                </div>

            </div>

            <!-- gonukme 7 -->
            <div class="lesson2__gonukme lesson2__gonukme7">
                <h3 class="lesson2__title">
                    7. а) Прочитайте формы существительных и прилагательных, образованных от них при помощи суффиксов,
                    и продолжите по модели.
                </h3>
                <div class="lesson2__gonukme-text">
                    <div class="lesson2__gonukme2-item">
                        Китай — китаец — китайский, по-китайски
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Италия — итальянец — итальянский, по-итальянски
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Норвегия — норвежец — <input class="kitay__input elena" type="text"
                            data-kitay="норвежский"><span class="kitay1"></span>,
                        <input class="kitay__input elena" type="text" data-kitay="по-норвежски"><span
                            class="kitay1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Швеция — швед — <input class="kitay__input elena" type="text" data-kitay="шведский"><span
                            class="kitay1"></span>, <input class="kitay__input elena" type="text"
                            data-kitay="по-шведски"><span class="kitay1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Франция — француз — <input class="kitay__input elena" type="text"
                            data-kitay="французский"><span class="kitay1"></span>, <input class="kitay__input elena"
                            type="text" data-kitay="по-французски"><span class="kitay1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Финляндия — финн — финский, по-фински
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Германия — немец — <input class="kitay__input elena" type="text" data-kitay="немецкий"><span
                            class="kitay1"></span>, <input class="kitay__input elena" type="text"
                            data-kitay="по-немецки"><span class="kitay1"></span>
                    </div>

                    <div class="look">
                        <div class="look__item">
                            <div class="look__inner"> Запмомните!</div>
                            <div class="look__inner">Германия — немецкий <br> Он немЕЦ, она немКа, они немЦы</div>
                        </div>
                    </div>

                    <h3 class="lesson2__title"> б) Образуйте формы прилагательных. </h3>
                    <div class="lesson2__gonukme2-item">
                        Испания — испанский – испанское
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Корея — <input class="kitay__input elena" type="text" data-kitay="корейский"><span
                            class="kitay1"></span>, <input class="kitay__input elena" type="text"
                            data-kitay="корейское"><span class="kitay1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Япония — <input class="kitay__input elena" type="text" data-kitay="японский"><span
                            class="kitay1"></span>, <input class="kitay__input elena" type="text"
                            data-kitay="японское"><span class="kitay1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Исландия — <input class="kitay__input elena" type="text" data-kitay="исландский"><span
                            class="kitay1"></span>, <input class="kitay__input elena" type="text"
                            data-kitay="исландское"><span class="kitay1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Украина — <input class="kitay__input elena" type="text" data-kitay="украинский"><span
                            class="kitay1"></span>, <input class="kitay__input elena" type="text"
                            data-kitay="украинское"><span class="kitay1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Голландия — <input class="kitay__input elena" type="text" data-kitay="голландский"><span
                            class="kitay1"></span>, <input class="kitay__input elena" type="text"
                            data-kitay="голландское"><span class="kitay1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Китай — <input class="kitay__input elena" type="text" data-kitay="китайский"><span
                            class="kitay1"></span>, <input class="kitay__input elena" type="text"
                            data-kitay="китайское"><span class="kitay1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Ирландия — <input class="kitay__input elena" type="text" data-kitay="ирландский"><span
                            class="kitay1"></span>, <input class="kitay__input elena" type="text"
                            data-kitay="ирландское"><span class="kitay1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Англия — <input class="kitay__input elena" type="text" data-kitay="английский"><span
                            class="kitay1"></span>, <input class="kitay__input elena" type="text"
                            data-kitay="английское"><span class="kitay1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Канада — <input class="kitay__input elena" type="text" data-kitay="канадский"><span
                            class="kitay1"></span>, <input class="kitay__input elena" type="text"
                            data-kitay="канадское"><span class="kitay1"></span>
                    </div>

                </div>

            </div>

            <!-- gonukme 8 -->
            <div class="lesson2__gonukme lesson2__gonukme8">
                <h3 class="lesson2__title">
                    8. Прочитайте словосочетания и продолжите по модели.
                </h3>
                <div class="lesson2__gonukme-text">
                    <div class="lesson2__gonukme2-item">
                        Петербург — Петербургский университет
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Москва — Московский университет
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Токио — ТокийСКий университет
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Сеул — СеульСКий университет
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Рим — <input class="rim__input elena" type="text" data-rim="Римский университет"><span
                            class="rim1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Берлин — <input class="rim__input elena" type="text" data-rim="Берлинский университет"><span
                            class="rim1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Варшава — <input class="rim__input elena" type="text" data-rim="Варшавский университет"><span
                            class="rim1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Пекин — <input class="rim__input elena" type="text" data-rim="Пекинский университет"><span
                            class="rim1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Лондон — <input class="rim__input elena" type="text" data-rim="Лондонский университет"><span
                            class="rim1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Ливерпуль — <input class="rim__input elena" type="text"
                            data-rim="Ливерпульский университет"><span class="rim1"></span>
                    </div>
                    <div class="lesson2__gonukme2-item">
                        Вена — <input class="rim__input elena" type="text" data-rim="Венский университет"><span
                            class="rim1"></span>
                    </div>
                </div>
            </div>

            <div class="section1__footer">
                <div class="section1__finall">
                    <button class="section1__itog section1__itog1">Посчитать итого</button>
                    <button class="section1__itog section1__itog2">Начать заново</button>
                    <a href="lessontwo.html" class="section1__itog section1__itog3" disabled=true>Перейти к
                        следующему заданию</a>
                </div>
                <div class="section1__finall section1__finall2">
                    ИТОГО: <span class="itogo1">0</span> баллов из возможных <span class="itogo2">0</span>
                    . Оценка за урок: <strong class="itogo3">Стоит повторить</strong><img class="level-img" src="./img/prewoshod/bad.png" alt="">
                </div>
            </div>
    </section>

    <script src="./js/lessontwo.js"></script>
</body>

</html>