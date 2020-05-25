<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>site</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/arrow.css" />
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
            <a class="a" href="#news">
              <li>Новости</li>
            </a>
            <a href="#about">
              <li>О нас</li>
            </a>
            <a href="#social">
              <li>Связаться</li>
            </a>
          </nav>
        </div>
      </div>
    </header>

    <section class="section__header">
      <div class="container">
        <div class="head">
          <div class="free"></div>
          <div class="free__text">
            <h1>
              Онлайн-курс <br />
              по обучению <br />
              Русского Языка
            </h1>
            <p>
              Курс по обучению русского языка предназначен для всех носителей
              туркмено-тюрского языка.
            </p>
            <div class="free__btn">
              <a href="admin.php">
                <button class="free__btn-inner">
                  Начать обучение
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="head__icon">
          <a href="#news">
            <!-- <img
              src="./img/icons/down-arrows_icon-icons.com_70186.svg"
              alt="downArrow"
            /> -->
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
          </a>
        </div>
      </div>
    </section>
<div class="polosa"></div>
    <!-- Новости -->
    <section class="news" id="news">
      <div class="container">
        <div class="news__block">
          <div class="news__item">
            <h2 class="news__title">Новости</h2>
            <div class="news__img">
              <img src="./img/gok_block.png" alt="News Image Blue" />
            </div>
            <div class="news__text">
              Эти новости будут как блог, типа постов инстаграмма, кстати и инфа
              для этого блога тоже будут браться не знаю может ссылкой из
              инстаграм, <a href="#" class="news__link">@russian_for_tm</a> и
              картинка и пост оттуда ...
              <a href="#" class="news__link">Далее</a>
            </div>
          </div>
        </div>
        <!-- <div class="news__item--block"></div> -->
      </div>
    </section>

    <!-- О нас  -->
    <section class="about" id="about">
      <div class="container">
        <div class="about__block">
          <div class="about__item">
            <h2 class="about__title">
              О нас
            </h2>
            <div class="about__text">
              Этот курс предназначен для всех пользователей, с уровнем владения
              русского языка ниже среднего, он был разработан педагогами
              русского языка университета Московского Политехнического
              Университета, для подтягивания уровня владения русским языком до
              разговорного уровня и для подготовки к Международному
              государственному экзамену по русскому языку ТРКИ. Он состоит из
              20-уроков, с видео и аудио материалами, прикрепленными к ним
              упражнениями для подкрепления изученной информации. Рекомендуется
              изначально просматривать видео материал, далее прослушивать аудио
              файл и обязательно повторять прослушанные и просмотренные файлы
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Соц. сети - блок -->
    <section class="social" id="social">
      <div class="container">
        <div class="social__item">
          <p class="social__title">Отвечаем в мессенджерах и в соц. сетях</p>
          <div class="social__item--block">
            <div class="social__link">
              <div class="social__link">
                <a href="#">
                  <img
                    class="social__img"
                    src="./img/icons/skype.svg"
                    alt="skype"
                  />
                </a>
              </div>
              <div class="social__link">
                <a href="#">
                  <img
                    class="social__img"
                    src="./img/icons/telegram.svg"
                    alt="skype"
                  />
                </a>
              </div>
              <div class="social__link">
                <a href="#">
                  <img
                    class="social__img"
                    src="./img/icons/vk.svg"
                    alt="skype"
                  />
                </a>
              </div>
              <div class="social__link">
                <a href="#">
                  <img
                    class="social__img"
                    src="./img/icons/facebook.svg"
                    alt="skype"
                  />
                </a>
              </div>
            </div>
            <div class="social__link">
              <div class="social__link">
                <a href="#">
                  <img
                    class="social__img"
                    src="./img/icons/imo.svg"
                    alt="skype"
                  />
                </a>
              </div>
              <div class="social__link">
                <a href="#">
                  <img
                    class="social__img"
                    src="./img/icons/whatsapp.svg"
                    alt="skype"
                  />
                </a>
              </div>
              <div class="social__link">
                <a href="#">
                  <img
                    class="social__img"
                    src="./img/icons/viber.svg"
                    alt="skype"
                  />
                </a>
              </div>
              <div class="social__link">
                <a href="#">
                  <img
                    class="social__img"
                    src="./img/icons/instagram-sketched.svg"
                    alt="skype"
                  />
                </a>
              </div>
            </div>
            <div class="social__link">
              <div class="social__link">
                <a href="#">
                  <img
                    class="social__img"
                    src="./img/icons/youtube.svg"
                    alt="skype"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="footer__item">
          <div class="footer__inner">
            <div class="footer__link">
              <a href="#" class="link">Программа курса</a>
            </div>
            <div class="footer__link">
              <a href="#" class="link">Блог - Новости</a>
            </div>
            <div class="footer__link">
              <a href="#" class="link">Отзывы о курсе</a>
            </div>
          </div>
          <div class="footer__inner">
            <div class="footer__link">
              <a href="#" class="link">О нас</a>
            </div>
            <div class="footer__link">
              <a href="#" class="link">Контакты</a>
            </div>
            <div class="footer__link">
              <a href="#" class="link">Уроки по скайпу</a>
            </div>
          </div>
          <div class="footer__inner">
            <div class="footer__link">
              <a href="#" class="link">Подготовка к ВВИ</a>
            </div>
            <div class="footer__link">
              <a href="#" class="link">Тестирование РКИ</a>
            </div>
            <div class="footer__link">
              <a href="#" class="link active">Партнеры проекта</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="./js/main.js"></script>
  </body>
</html>
