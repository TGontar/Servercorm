<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Главная
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<!--ШАПКА САЙТА-->
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h4 class="my-0 mr-md-auto font-weight-normal">Проект "умная кормушка"</h4>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="index.php">Главная</a>
        <a class="p-2 text-dark" href="contr.php">Показания датчиков</a>
        <a class="p-2 text-grey" href="photo.php">Фото птиц</a>
    </nav>
</div>

<div class="container">
    <h1>Тут фото птиц</h1>
    <br>
    <?php
    $dir = 'photos/'; // Папка с изображениями
    $cols = 3; // Количество столбцов в будущей таблице с картинками
    $files = scandir($dir); // Берём всё содержимое директории
    echo "<table>"; // Начинаем таблицу
    $k = 0; // Вспомогательный счётчик для перехода на новые строки
    for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
        if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
            if ($k % $cols == 0) echo "<tr>"; // Добавляем новую строку
            echo "<td>"; // Начинаем столбец
            $path = $dir.$files[$i]; // Получаем путь к картинке
            echo "<a href='$path'>"; // Делаем ссылку на картинку
            echo "<img src='$path' alt='' width='100' />"; // Вывод превью картинки
            echo "</a>"; // Закрываем ссылку
            echo "</td>"; // Закрываем столбец
            /* Закрываем строку, если необходимое количество было выведено, либо данная итерация последняя */
            if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) echo "</tr>";
            $k++; // Увеличиваем вспомогательный счётчик
        }
    }
    echo "</table>"; // Закрываем таблицу
    ?>
</div>
</body>
</html>
