<?php $title = "Григорьев Д.С., ЛР5"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles5.css">
</head>
<body>
<?php
// === ЧТЕНИЕ И ВАЛИДАЦИЯ ПАРАМЕТРОВ ===
$html_type = isset($_GET['html_type']) ? $_GET['html_type'] : null;

// content валидируем — должно быть число от 2 до 9, иначе считаем что не задан
$content = null;
if(isset($_GET['content']) && is_numeric($_GET['content'])) {
    $n = (int)$_GET['content'];
    if($n >= 2 && $n <= 9) $content = $n;
}

// тип отображения: если параметр не задан — табличная по умолчанию
$display_type = ($html_type === 'DIV') ? 'DIV' : 'TABLE';


// === ФУНКЦИЯ: число → ссылка (сбрасывает html_type, не передаёт его) ===
// числа больше 9 ссылками не делаем — для них нет столбца в меню
function outNumAsLink($n) {
    if($n >= 2 && $n <= 9) {
        return '<a class="num-link" href="?content='.$n.'">'.$n.'</a>';
    }
    return '<span class="num-plain">'.$n.'</span>';
}


// === ФУНКЦИЯ: один столбец таблицы умножения для числа $n ===
// $type — 'TABLE' или 'DIV'
function outColumn($n, $type) {
    if($type === 'TABLE') {
        echo '<table class="col-tbl">';
        echo '<tr><th>×'.$n.'</th></tr>';
        for($i = 2; $i <= 9; $i++) {
            echo '<tr><td>'
                .outNumAsLink($n).' × '
                .outNumAsLink($i).' = '
                .outNumAsLink($n * $i)
                .'</td></tr>';
        }
        echo '</table>';
    } else {
        echo '<div class="col-div">';
        echo '<div class="col-head">×'.$n.'</div>';
        for($i = 2; $i <= 9; $i++) {
            echo '<div class="col-row">'
                .outNumAsLink($n).' × '
                .outNumAsLink($i).' = '
                .outNumAsLink($n * $i)
                .'</div>';
        }
        echo '</div>';
    }
}
?>

<header>
    <div class="header-info">
        <h1>Григорьев Д. С., группа 241-353</h1>
        <p>Лабораторная работа №5 — Таблица умножения</p>
    </div>

    <!-- ГЛАВНОЕ МЕНЮ (сверху) — определяет тип вёрстки -->
    <nav class="main-menu">
        <?php
        // === ссылка "Табличная вёрстка" ===
        $href = '?html_type=TABLE';
        if($content !== null) $href .= '&content='.$content;   // сохраняем выбранный столбец
        $cls = ($html_type === 'TABLE') ? ' class="selected"' : '';
        echo '<a href="'.$href.'"'.$cls.'>Табличная вёрстка</a>';

        // === ссылка "Блочная вёрстка" ===
        $href = '?html_type=DIV';
        if($content !== null) $href .= '&content='.$content;
        $cls = ($html_type === 'DIV') ? ' class="selected"' : '';
        echo '<a href="'.$href.'"'.$cls.'>Блочная вёрстка</a>';
        ?>
    </nav>
</header>

<div class="layout">

    <!-- ОСНОВНОЕ МЕНЮ (слева) — определяет содержание таблицы -->
    <aside class="side-menu">
        <?php
        // === ссылка "Всё" ===
        $href = '?';
        if($html_type !== null) $href = '?html_type='.$html_type;   // сохраняем тип вёрстки
        $cls = ($content === null) ? ' class="selected"' : '';
        echo '<a href="'.$href.'"'.$cls.'>Всё</a>';

        // === числовые ссылки 2..9 ===
        for($n = 2; $n <= 9; $n++) {
            $href = '?content='.$n;
            if($html_type !== null) $href .= '&html_type='.$html_type;
            $cls = ($content === $n) ? ' class="selected"' : '';
            echo '<a href="'.$href.'"'.$cls.'>'.$n.'</a>';
        }
        ?>
    </aside>

    <!-- ТАБЛИЦА УМНОЖЕНИЯ (основная часть) -->
    <main>
        <?php
        if($content === null) {
            // полная таблица — 8 столбцов рядом
            echo '<div class="columns all">';
            for($n = 2; $n <= 9; $n++) {
                outColumn($n, $display_type);
            }
            echo '</div>';
        } else {
            // один столбец крупно
            echo '<div class="columns single">';
            outColumn($content, $display_type);
            echo '</div>';
        }
        ?>
    </main>

</div>

<!-- ИНФОРМАЦИЯ В ПОДВАЛЕ -->
<footer>
    <?php
    $s = ($display_type === 'TABLE') ? 'Табличная вёрстка. ' : 'Блочная вёрстка. ';
    $s .= ($content === null) ? 'Полная таблица. ' : 'Столбец на '.$content.'. ';
    $s .= date('d.m.Y H:i:s');
    echo $s;
    ?>
</footer>
        
</body>
</html>
