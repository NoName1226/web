<?php $title = "Григорьев Д.С., ЛР3"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles3.css">
</head>
<body>

<header>
    <img src="logo.png" alt="Логотип университета" class="logo">
    <div class="info">
        <h1>Григорьев Д. С., группа 241-353</h1>
        <p>Лабораторная работа №3 — Виртуальная клавиатура</p>
    </div>
</header>

<main>
<?php
// если параметр store ещё не передан — это первая загрузка, создаём пустую строку
if(!isset($_GET['store'])) {
    $_GET['store'] = '';
}
// если нажата какая-то кнопка с цифрой — добавляем цифру к строке
else if(isset($_GET['key'])) {
    $_GET['store'] .= $_GET['key'];
}

// счётчик нажатий: если ещё не было — 0, иначе увеличиваем на 1
if(!isset($_GET['clicks'])) {
    $_GET['clicks'] = 0;
} else {
    $_GET['clicks'] = (int)$_GET['clicks'] + 1;
}

$store  = $_GET['store'];
$clicks = $_GET['clicks'];
?>  

<!-- окно вывода результата -->
<div class="result"><?php echo $store; ?></div>

<!-- кнопки клавиатуры -->
<div class="keyboard">
    <a class="btn" href="?key=1&store=<?php echo $store; ?>&clicks=<?php echo $clicks; ?>">1</a>
    <a class="btn" href="?key=2&store=<?php echo $store; ?>&clicks=<?php echo $clicks; ?>">2</a>
    <a class="btn" href="?key=3&store=<?php echo $store; ?>&clicks=<?php echo $clicks; ?>">3</a>
    <a class="btn" href="?key=4&store=<?php echo $store; ?>&clicks=<?php echo $clicks; ?>">4</a>
    <a class="btn" href="?key=5&store=<?php echo $store; ?>&clicks=<?php echo $clicks; ?>">5</a>
    <a class="btn" href="?key=6&store=<?php echo $store; ?>&clicks=<?php echo $clicks; ?>">6</a>
    <a class="btn" href="?key=7&store=<?php echo $store; ?>&clicks=<?php echo $clicks; ?>">7</a>
    <a class="btn" href="?key=8&store=<?php echo $store; ?>&clicks=<?php echo $clicks; ?>">8</a>
    <a class="btn" href="?key=9&store=<?php echo $store; ?>&clicks=<?php echo $clicks; ?>">9</a>
    <a class="btn" href="?key=0&store=<?php echo $store; ?>&clicks=<?php echo $clicks; ?>">0</a>
</div>

<!-- кнопка СБРОС: ведёт на страницу с уже увеличенным счётчиком, но без store и key -->
<a class="btn-reset" href="?clicks=<?php echo $clicks; ?>">СБРОС</a>

</main>

<footer>
    Всего нажатий: <?php echo $clicks; ?>
</footer>

</body>
</html>