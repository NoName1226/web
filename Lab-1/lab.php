<?php $title = "Григорьев Д.С. ЛР1 - Психология"; ?>
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
            $active=false;
            echo $link;
        ?>"<?php
            if($active) echo ' class="active"';
            echo '>'.$name;
        ?></a>

        <a href="<?php
            $name='Психология';
            $link='lab.php';
            $active=true;
            echo $link;
        ?>"<?php
            if($active) echo ' class="active"';
            echo '>'.$name;
        ?></a>
    </nav>
</header>

<main>
    <h1>Психология цвета</h1>

    <h2>Как цвет влияет на человека</h2>
    <p>Цвет оказывает сильное влияние на настроение и поведение человека, даже если тот этого не осознаёт. Тёплые цвета — красный, оранжевый, жёлтый — ассоциируются с энергией, активностью и теплом, поэтому часто используются в кафе быстрого питания и рекламе, чтобы стимулировать аппетит и быстрое принятие решений. Холодные цвета — синий, зелёный, фиолетовый — наоборот, успокаивают, помогают сосредоточиться и вызывают ощущение надёжности, поэтому их предпочитают банки, страховые компании и медицинские учреждения. Нейтральные цвета — белый, серый, бежевый — создают ощущение чистоты и спокойствия, они универсальны и не перетягивают внимание на себя. Психологи давно заметили, что цветовые предпочтения человека могут многое рассказать о его характере и текущем эмоциональном состоянии, на этом основаны некоторые известные психологические тесты, например тест Люшера.</p>

    <h2>Цвет в дизайне и маркетинге</h2>
    <p>В веб-дизайне и маркетинге выбор цветовой гаммы напрямую влияет на восприятие бренда. Красный используют для привлечения внимания и призывов к действию, синий — для создания ощущения доверия, зелёный ассоциируется с природой и здоровьем, а чёрный с элегантностью и премиальностью. Правильно подобранная палитра может повысить узнаваемость бренда и повлиять на решение о покупке. Однако важно учитывать культурные различия: в одних странах белый цвет символизирует чистоту и свадьбы, в других — траур.</p>

    <h2>Ассоциации цветов</h2>
    <table>
        <?php echo '<tr><th>Цвет</th><th>Эмоция</th><th>Где применяют</th></tr>'; ?>
        <tr>
            <td><?php echo 'Синий'; ?></td>
            <td><?php echo 'Доверие'; ?></td>
            <td><?php echo 'Банки'; ?></td>
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
