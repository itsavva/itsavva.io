<?php
// Определяем язык (по умолчанию польский)
$lang = $_GET['lang'] ?? 'pl';
if (!in_array($lang, ['pl','ru','uk'])) {
    $lang = 'pl';
}
$messages = require __DIR__ . "/lang/$lang.php";
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olecko Auto Service</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Переключатель языков -->
<div style="position:fixed; top:10px; right:10px;">
  <a href="?lang=pl">PL</a> |
  <a href="?lang=ru">RU</a> |
  <a href="?lang=uk">UK</a>
</div>

<!-- Header -->
<header class="header">
  <div class="container header__wrap">
    <div class="logo">Olecko<span>Auto</span>Service</div>
    <nav class="nav" id="nav">
      <a href="#services"><?= $messages['services'] ?></a>
      <a href="#about"><?= $messages['about'] ?></a>
      <a href="#contact"><?= $messages['contact'] ?></a>
    </nav>
    <button class="burger" id="burger" aria-label="menu">≡</button>
  </div>
</header>

<!-- Hero -->
<section class="hero">
  <div class="hero__inner container">
    <h1><?= $messages['hero_h1'] ?></h1>
    <p><?= $messages['hero_p'] ?></p>
  </div>
</section>

<!-- Services -->
<section id="services" class="section">
  <div class="container">
    <h2 class="section__title"><?= $messages['services_title'] ?></h2>
    <div class="services">
      <article class="card">
        <div class="card__content">
          <h3 class="card__title"><?= $messages['card1_title'] ?></h3>
          <p class="card__text"><?= $messages['card1_text'] ?></p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- About -->
<section id="about" class="section section--alt">
  <div class="container">
    <h2 class="section__title"><?= $messages['about'] ?></h2>
    <p class="about__text">Tu wpisz dodatkowy tekst “О нас / O nas / Про нас” по языкам.</p>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="section">
  <div class="container">
    <h2 class="section__title"><?= $messages['contact'] ?></h2>
    <form class="form" method="post" action="contact.php">
      <div class="form__row">
        <input type="text" name="name" placeholder="Имя / Ім’я / Imię" required>
        <input type="tel" name="phone" placeholder="Телефон" required>
      </div>
      <textarea name="message" placeholder="Сообщение / Повідомлення / Wiadomość" rows="4"></textarea>
      <button type="submit" class="btn">OK</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="container">© 2025 Olecko Auto Service</div>
</footer>

<script src="assets/js/app.js"></script>
</body>
</html>
