<?php $title = "Григорьев Д.С. ЛР1 - Палитра"; ?>
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
            $active=false;
            echo $link;
        ?>"<?php
            if($active) echo ' class="active"';
            echo '>'.$name;
        ?></a>

        <a href="<?php
            $name='Палитра';
            $link='about.php';
            $active=true;
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
    <h1>Палитра и цветовые модели</h1>

    <h2>Первичные и вторичные цвета</h2>
    <p>В классической цветовой модели выделяют три первичных цвета — красный, жёлтый и синий. Эти цвета называются первичными потому, что их нельзя получить путём смешения других красок. При смешивании первичных цветов попарно получают вторичные: красный и жёлтый дают оранжевый, жёлтый и синий — зелёный, а синий с красным образуют фиолетовый. Дальнейшее смешивание первичных цветов со вторичными даёт третичные оттенки и так далее. Все эти цвета удобно располагать на цветовом круге, который был впервые предложен Исааком Ньютоном ещё в XVII веке. Противоположные на круге цвета называются комплементарными или дополнительными — они создают наибольший визуальный контраст и часто используются дизайнерами для привлечения внимания.</p>

    <h2>Цветовые модели RGB и CMYK</h2>
    <p>В компьютерной графике применяются две основные цветовые модели. RGB (Red, Green, Blue) используется для экранов и основана на сложении излучаемого света: при полном смешении всех трёх каналов получается белый цвет. CMYK (Cyan, Magenta, Yellow, Key) применяется в полиграфии и работает по принципу вычитания — краски поглощают часть света, а при смешении всех трёх основных цветов получается почти чёрный. Именно поэтому одна и та же картинка на экране и при печати может выглядеть немного по-разному.</p>

    <h2>Сравнение моделей</h2>
    <table>
        <?php echo '<tr><th>Модель</th><th>Применение</th><th>Принцип</th></tr>'; ?>
        <tr>
            <td><?php echo 'RGB'; ?></td>
            <td><?php echo 'Экраны'; ?></td>
            <td><?php echo 'Сложение'; ?></td>
        </tr>
    </table>

    <img src="photo.jpg" alt="Статическое фото" width="300">
    <?php echo '<img src="photo'.(date('s')%2+1).'.jpg" alt="Меняющееся фото" width="300">'; ?>
</main>

<footer style="padding:15px; text-align:center;">
    Сформировано <?php echo date('d.m.Y в H-i:s'); ?>
</footer>

</body>
</html>
