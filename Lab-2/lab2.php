<?php $title = "Григорьев Д.С., ЛР2, вариант 3"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <img src="logo.png" alt="Логотип университета" class="logo">
    <div class="info">
        <h1>Григорьев Д. С., группа 241-353</h1>
        <p>Лабораторная работа №2, вариант 3</p>
    </div>
</header>

<main>
<?php
// === НАСТРОЙКИ ===
$x         = 0;        // начальное значение аргумента
$count     = 20;       // количество вычисляемых значений
$step      = 2;        // шаг изменения аргумента
$min_value = -100000;  // минимальное значение функции
$max_value = 100000;   // максимальное значение функции
$type      = 'D';      // тип верстки: 'A', 'B', 'C', 'D' или 'E'
$loop_type = 'for';    // тип цикла: 'for', 'while' или 'do-while'

$values = array();     // массив для статистики

// === ФОРМУЛА ВАРИАНТА 3 (вынесена в функцию, чтобы не повторять в трёх циклах) ===
function calculate_f($x) {
    if($x <= 10) {
        return 3 * $x * $x * $x + 2;
    } else if($x < 20) {
        return 5 * $x + 7;
    } else {
        if($x == 22) {
            return 'error';                  // защита от деления на ноль
        }
        return $x / (22 - $x) - $x;
    }
}

// === ВЫВОД ОДНОЙ СТРОКИ (тоже в функции, чтобы не повторять в трёх циклах) ===
function render_row($x, $f, $i, $count, $type) {
    switch($type) {
        case 'A':
            echo 'f('.$x.')='.$f;
            if($i < $count - 1) echo '<br>';
            break;
        case 'B':
        case 'C':
            echo '<li>f('.$x.')='.$f.'</li>';
            break;
        case 'D':
            echo '<tr><td>'.($i + 1).'</td><td>'.$x.'</td><td>'.$f.'</td></tr>';
            break;
        case 'E':
            echo '<div class="block">f('.$x.')='.$f.'</div>';
            break;
    }
}

// === ОТКРЫВАЮЩИЕ ТЕГИ ===
switch($type) {
    case 'B': echo '<ul>'; break;
    case 'C': echo '<ol>'; break;
    case 'D': echo '<table class="result-table"><tr><th>№</th><th>x</th><th>f(x)</th></tr>'; break;
    case 'E': echo '<div class="blocks">'; break;
}


// === ВАРИАНТ 1: ЦИКЛ СО СЧЁТЧИКОМ (for) ===
if($loop_type === 'for') {
    for($i = 0; $i < $count; $i++, $x += $step) {
        $f = calculate_f($x);
        if($f !== 'error') $f = round($f, 3);

        if($f !== 'error' && ($f >= $max_value || $f < $min_value)) {
            break;
        }

        if($f !== 'error') $values[] = $f;
        render_row($x, $f, $i, $count, $type);
    }
}


// === ВАРИАНТ 2: ЦИКЛ С ПРЕДУСЛОВИЕМ (while) ===
if($loop_type === 'while') {
    $i = 0;
    while($i < $count) {
        $f = calculate_f($x);
        if($f !== 'error') $f = round($f, 3);

        if($f !== 'error' && ($f >= $max_value || $f < $min_value)) {
            break;
        }

        if($f !== 'error') $values[] = $f;
        render_row($x, $f, $i, $count, $type);

        $i++;          // счётчик и шаг увеличиваем вручную
        $x += $step;
    }
}


// === ВАРИАНТ 3: ЦИКЛ С ПОСТУСЛОВИЕМ (do-while) ===
if($loop_type === 'do-while') {
    $i = 0;
    do {
        $f = calculate_f($x);
        if($f !== 'error') $f = round($f, 3);

        if($f !== 'error' && ($f >= $max_value || $f < $min_value)) {
            break;
        }

        if($f !== 'error') $values[] = $f;
        render_row($x, $f, $i, $count, $type);

        $i++;
        $x += $step;
    } while($i < $count);
}


// === ЗАКРЫВАЮЩИЕ ТЕГИ ===
switch($type) {
    case 'B': echo '</ul>'; break;
    case 'C': echo '</ol>'; break;
    case 'D': echo '</table>'; break;
    case 'E': echo '</div>'; break;
}


// === СТАТИСТИКА ===
if(count($values) > 0) {
    $max_f = max($values);
    $min_f = min($values);
    $sum_f = array_sum($values);
    $avg_f = $sum_f / count($values);

    echo '<h2>Статистика</h2>';
    echo '<p>Максимум: '.$max_f.'</p>';
    echo '<p>Минимум: '.$min_f.'</p>';
    echo '<p>Сумма: '.round($sum_f, 3).'</p>';
    echo '<p>Среднее арифметическое: '.round($avg_f, 3).'</p>';
}
?>
</main>

<footer>
    Тип верстки: <?php echo $type; ?> | Тип цикла: <?php echo $loop_type; ?> | Сформировано <?php echo date('d.m.Y в H:i:s'); ?>
</footer>

</body>
</html>
