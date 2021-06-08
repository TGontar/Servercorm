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
        <a class="p-2 text-grey" href="contr.php">Показания датчиков</a>
        <a class="p-2 text-dark" href="photo.php">Фото птиц</a>
    </nav>
</div>

<div class="container">
    <h1>Показания датчиков</h1>
    <br><p>
        <?php
            $lines = file('./log.txt');

            // Осуществим проход массива и выведем содержимое в виде HTML-кода вместе с номерами строк.
            foreach ($lines as $line_num => $line) {
                echo htmlspecialchars($line) . "<br />\n";
            }
        ?>
    </p>
</div>
</body>
</html>
