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
    <title>video-lesson</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/videolesson.css" />
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

    <section class="video-section1">
      <div class="container">
        <div class="video__item">
          <h2 class="video__title">
            Глаголы русского языка -зовут, - называется;
          </h2>

          <div class="video">
            <video
              controls
              width="800"
              height="400"
              poster="./img/videolesson/playload.png"
              preload="none"
            >
              <source src="./videos/eee.mp4" type="video/mp4" />
            </video>
          </div>
          <div class="audio">
            <h3>Аудио запись обязательна к прослушиванию и повтарению </h3>
            <audio controls>
              <source src="./audios/gulsht.mp3" type="audio/ogg; codecs=vorbis">
            </audio>
          </div>

          <div class="questions">
            <div class="question__time">
              <h3 class="question__title">Ответьте на вопросы</h3>
            </div>
            <div class="question__time">
              1. - В вашем доме только один этаж. Какой у вас дом? - У нас
              <input type="text" class="question__answer question__answer1" data-otwet1="одноэтажный"/>
            </div>
            <div class="question__time">
              2. - В их доме только два этажа. Какой у них дом? 
              <input type="text" class="question__answer question__answer1"  data-otwet1="двухэтажный" />
            </div>
            <div class="question__time">
              3. - В её доме только три этажа. Какой у неё дом?
              <input type="text" class="question__answer question__answer1"  data-otwet1="трехэтажный" />
            </div>
            <div class="question__time">
              4. - В нашем доме четыре этажа. Какой у нас дом?
              <input type="text" class="question__answer question__answer1"  data-otwet1="четырехэтажный" />
            </div>
            <div class="question__time">
              5. - У твоей подруги в квартире только одна комната. Какая
              квартира у твоей подруги?
              <input type="text" class="question__answer question__answer1"  data-otwet1="однокомнатная" />
            </div>
            <div class="question__time">
              6. - У её сестры в квартире только две комнаты. Какая квартира у
              её сестры?
              <input type="text" class="question__answer question__answer1" data-otwet1="двухкомнатная" />
            </div>
            <div class="question__time">
              7. - У их родителей в квартире пять комнат. Какая квартира у их
              родителей?
              <input type="text" class="question__answer question__answer1"   data-otwet1="пятикомнатная"/>
            </div>

            <div class="places question__time">
              <div class="places__item"><strong>Какой этаж?</strong></div>
              <div class="places__item">1 — первый</div>
              <div class="places__item">2 — второй</div>
              <div class="places__item">3 — третий</div>
              <div class="places__item">4 — четвёртый</div>
              <div class="places__item">5 — пятый</div>
              <div class="places__item">6 — шестой</div>
              <div class="places__item">7 — седьмой</div>
              <div class="places__item">8 — восьмой</div>
              <div class="places__item">9 — девятый</div>
              <div class="places__item">10 — десятый</div>
            </div>

            <div class="places__item question__time">
              <strong>Прочитайте вопросы и ответьте на них.</strong>
            </div>
            <div class="question__time">
              1. На каком этаже находится ваша квартира? <br />
              <input
                type="text"
                class="question__answer question__answer-end"
              />
            </div>
            <div class="question__time">
              2. На каком этаже находится ваша комната? <br />
              <input
                type="text"
                class="question__answer question__answer-end"
              />
            </div>
            <div class="question__time">
              3. На каком этаже живут ваши родители? <br />
              <input
                type="text"
                class="question__answer question__answer-end"
              />
            </div>
            <div class="question__time">
              4. На каком этаже вы сейчас живёте? <br />
              <input
                type="text"
                class="question__answer question__answer-end"
              />
            </div>
            <div class="question__time">
              5. На каком этаже находится библиотека? <br />
              <input
                type="text"
                class="question__answer question__answer-end"
              />
            </div>
            <div class="question__time">
              6. На каком этаже находится аудитория номер 207? <br />
              <input
                type="text"
                class="question__answer question__answer-end"
              />
            </div>
            <div class="question__time">
              7. На каком этаже находится аудитория номер 316? <br />
              <input
                type="text"
                class="question__answer question__answer-end"
              />
            </div>
            <div class="question__time">
              8. На каком этаже находится аудитория номер 125? <br />
              <input
                type="text"
                class="question__answer question__answer-end"
              />
            </div>

            <div class="places question__time">
              <div class="places__item">
                <strong> а) Проверьте, знаете ли вы эти слова.</strong>
              </div>
              <div class="places__item">гостиная — myhman jayy</div>
              <div class="places__item">
                шкаф — shkaf (egin eshik ucin), бооксазе (kitaplar ucin)
              </div>
              <div class="places__item">спальня — yatag jay</div>
              <div class="places__item">кресло — отургыч юмшак</div>
              <div class="places__item">кухня — кухня</div>
              <div class="places__item">полка — polka</div>
              <div class="places__item">ванная комната — wanna otagy</div>
              <div class="places__item">мебель — mebel</div>
              <div class="places__item">диван — diwan</div>
              <div class="places__item">широкий — iri</div>
              <div class="places__item">узкий — ince</div>
            </div>
          </div>

          <div class="video-itog">
            <p class="itog"><span class="itog__title">ИТОГО</span>: 
              <span class="itog1">0</span>% баллов из возможных <span class="itog2">89</span>%  
            </p>
            <p class="nagrada">
              Оценка за урок: <span class="for__lesson">Ответьте на все вопросы</span> 
            </p>
          </div>

        </div>
      </div>
    </section>

    <script src="./js/main.js"></script>
  </body>
</html>
