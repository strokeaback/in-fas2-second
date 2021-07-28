<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <meta name=viewport content="width=1200">
    <title>Калькулятор композитного фасада</title>
</head>
<body>
    <? include ("inc/header.inc"); ?>

        <div class="main-container main-container-color">
            <div class="container">
                <div class="breadcrumbs">
                    <div class="breadcrumbs__elem">
                        <a href="in-fas.ru">Главная</a>
                    </div>
                    <div class="breadcrumbs__elem">
                        <img src="img/right-arrow-breadcrumbs.png" alt="">
                    </div>
                    <div class="breadcrumbs__elem">
                        <a href="#">Расчет композитного фасада</a>
                    </div>
                </div>

                <div class="main-container__header">
                    <h1>Сервисы расчета от производителя ИН-ФАС</h1>
                </div>

                <div class="white-bg">
                    <div class="calc__title">
                        Выберите толщину панелей
                    </div>
                    <div class="calc__help">
                        <a href="#">У Вас сложный тип фасада? Напишите нам!</a>
                    </div>
                    <div class="calc__input-row">
                        <div class="input-row__elem">
                            <img src="img/roof-type-1.png" alt="">
                            <div class="input-row__text">3 мм</div>
                        </div>
                        <div class="input-row__elem">
                            <img src="img/roof-type-2.png" alt="">
                            <div class="input-row__text">4 мм</div>
                        </div>
                    </div>

                    <div class="calc__title">
                        Выберите размер панелей
                    </div>
                    <div class="calc__help">
                        <a href="#">У Вас сложный тип фасада? Напишите нам!</a>
                    </div>
                    <div class="calc__input-row">
                        <div class="input-row__elem-2">
                            <div class="input-row__text-2">4000x1220</div>
                        </div>
                        <div class="input-row__elem-2">
                            <div class="input-row__text-2">4000x1500</div>
                        </div>
                    </div>
                    
                    <hr class="hr-wgb">

                    <div class="calc__title">
                        Размеры вашего фасада
                    </div>
                    <div class="calc__fasad-block">
                        <div class="calc__fasad-input">
                            <p><a href="#">Как правильно делать замер</a></p>
                            
                            <div class="input-block">
                                <input type="text">
                                <input type="text">
                                <input type="text">
                            </div>

                        </div>
                        <div class="calc__fasad-img">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <? include ("inc/footer.inc"); ?>
    <script defer src="js/script.js"></script>
</body>
</html>