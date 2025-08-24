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

  <style>
    body {font-family: Arial, sans-serif; margin:0; padding:0;}
    header {background:#333; color:#fff; padding:15px;}
    nav a {color:#fff; margin:0 10px; text-decoration:none;}
    section {padding:40px 20px;}
    .section--alt {background:#f4f4f4;}
    .lang-switch {position:fixed; top:10px; right:10px;}
    .lang-switch a {margin:0 5px; text-decoration:none; font-weight:bold;}
    .card {border:1px solid #ddd; padding:20px; border-radius:8px; max-width:400px;}
    .btn {padding:10px 20px; border:none; background:#333; color:#fff; cursor:pointer;}
    footer {background:#333; color:#fff; text-align:center; padding:15px;}
  </style>
</head>
<body>

<!-- Переключатель языков -->
<div class="lang-switch">
  <a href="?lang=pl">PL</a> |
  <a href="?lang=ru">RU</a> |
  <a href="?lang=uk">UK</a>
</div>

<header>
  <h1>Olecko Auto Service</h1>
  <nav>
    <a href="#services"><?= $messages['services'] ?></a>
    <a href="#about"><?= $messages['about'] ?></a>
    <a href="#contact"><?= $messages['contact'] ?></a>
  </nav>
</header>

<section class="hero">
  <h2><?= $messages['hero_h1'] ?></h2>
  <p><?= $messages['hero_p'] ?></p>
</section>

<section id="services">
  <h2><?= $messages['services_title'] ?></h2>
  <div class="card">
    <h3><?= $messages['card1_title'] ?></h3>
    <p><?= $messages['card1_text'] ?></p>
  </div>
</section>

<section id="about" class="section--alt">
  <h2><?= $messages['about'] ?></h2>
  <p>Тут будет описание “О нас / O nas / Про нас”.</p>
</section>

<section id="contact">
  <h2><?= $messages['contact'] ?></h2>
  <form method="post" action="contact.php">
    <input type="text" name="name" placeholder="Имя / Ім’я / Imię" required>
    <input type="tel" name="phone" placeholder="Телефон" required>
    <textarea name="message" placeholder="Сообщение / Повідомлення / Wiadomość" rows="4"></textarea>
    <button type="submit" class="btn">OK</button>
  </form>
</section>

<footer>
  © 2025 Olecko Auto Service
</footer>

</body>
</html>
