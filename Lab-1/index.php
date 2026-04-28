<?php $title = "Григорьев Д.С. ЛР1 - Главная"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?php echo $title; ?></title>
    <style>
        header {position:fixed; top:0; left:0; right:0; height:60px; background:#006400; color:white;}
        nav {padding:20px;}
        nav a {color:white; margin:0 15px; text-decoration:none;}
        nav a.active {color:#90ee90;}
        nav a:hover {color:#ffd700;}
        footer {position:fixed; bottom:0; left:0; right:0; height:50px; background:#333; color:#ccc;}
        main {margin-top:60px; margin-bottom:90px; padding:20px;}
        th, td {border:1px solid black; padding:5px;}
        table {border-collapse:collapse;}
    </style>
</head>
<body>

<header>
    <nav>
        <a href="<?php
            $name='Главная';
            $link='index.php';
            $active=true;
            echo $link;
        ?>"<?php
            if($active) echo ' class="active"';
            echo '>'.$name;
        ?></a>

        <a href="<?php
            $name='Палитра';
            $link='about.php';
            $active=false;
            echo $link;
        ?>"<?php
            if($active) echo ' class="active"';
            echo '>'.$name;
        ?></a>

        <a href="<?php
            $name='Психология';
            $link='lab.php';
            $active=false;
            echo $link;
        ?>"<?php
            if($active) echo ' class="active"';
            echo '>'.$name;
        ?></a>
    </nav>
</header>

<main>
    <h1>Мир цветов</h1>

    <h2>Что такое цвет</h2>
    <p>Цвет — это зрительное ощущение, возникающее у человека при попадании световых волн определённой длины на сетчатку глаза. Видимый человеческим глазом спектр охватывает диапазон примерно от 380 до 780 нанометров, и именно в этих пределах помещаются все оттенки, которые мы способны различать. Каждый цвет — это, по сути, электромагнитная волна конкретной частоты: красный соответствует длинным волнам, фиолетовый — коротким. Благодаря способности воспринимать цвет человек ориентируется в окружающем мире, оценивает эмоциональное состояние собеседника, наслаждается произведениями искусства и выбирает одежду по вкусу. Наука о цвете называется колористикой и тесно связана с физикой, физиологией, психологией и искусствоведением. Каждая из этих дисциплин рассматривает цвет со своей стороны: физик изучает длину волны, художник — сочетания и контрасты, психолог — влияние на эмоции и поведение человека.</p>

    <h2>Основные цвета</h2>
    <table>
        <?php echo '<tr><th>Цвет</th><th>HEX-код</th><th>Ассоциация</th></tr>'; ?>
        <tr>
            <td><?php echo 'Красный'; ?></td>
            <td><?php echo '#FF0000'; ?></td>
            <td><?php echo 'Энергия'; ?></td>
        </tr>
    </table>

    <img src="photo.jpg" alt="Статическое фото" width="300">
    <?php echo '<img src="photo'.(date('s')%2+1).'.jpg" alt="Меняющееся фото" width="300">'; ?>
</main>

<footer style="padding:15px; text-align:center;">
    
    Сформировано <?php 
    date_default_timezone_set('Europe/Moscow');
    echo date('d.m.Y в H:i:s'); 
    ?>
</footer>

</body>
</html>
