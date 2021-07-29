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
        <div class="feedback-form">
            <div class="feedback-form__wrap">
                <form name = "MyForm" id = "callbacks" action = "" method = "post">
                    <img id="closeForm" src="img/x-mark.png" alt="">
                    <h2>Заказать обратный звонок</h2>
                    <input id="form_email" name="email" type="email" class="form-control" placeholder="Введите адрес электронной почты (обязательно)" required="" data-error="Требуется действующее электронное письмо.">
                    <input id="form_number" name="number" type="tel" class="form-control" required="" placeholder="Введите номер телефона (обязательно)">
                    <input id="form_name" name="name" type="text" class="form-control" required="" placeholder="Как к Вам обращаться?">
                    <textarea id="form_message" name="text_comment" class="form-control" placeholder="Пожалуйста, оставьте сообщение" rows="4" required="" data-error="Пожалуйста, оставьте нам сообщение."></textarea>
                    <div class="help-block with-errors"></div>
                    <p>Нажимая кнопку «Отправить» вы даете своё согласие на обработку персональных данных в соответствии с Федеральным законом от 27.07.2006 года №152-Ф3 "О персональных данных" на условиях и для целей, определённых в Согласии на обработку персональных данных.*</p>
                    <div class="feedback-button">
                        <div class="input__wrapper">
                            <input name="image" accept=".jpg, .png, .gif" type="file" id="input__file" class="input input__file" multiple>
                            <label for="input__file" class="input__file-button">
                                <span class="input__file-button-text">Прикрепить файл</span>
                            </label>
                        </div>
                        <div id="formPreview" class="file__preview"></div>
                        <input type="submit" name="btn_submit" id="button_contacts" value="Отправить">
                    </div>
                </form>
                <img id="closeFormFinish" src="img/x-mark.png" alt="">
                <span class="feedback-finish">Спасибо за обращение! <br>Мы перезвоним Вам в ближайшее время.</span>
            </div>
        </div>

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
                        <a href="#">Композитные панели</a>
                    </div>
                </div>

                <div class="main-container__header">
                    <h1>Композитные панели</h1>
                </div>

                <div class="over-hr">
                    <div class="over-hr__availability">
                        <img src="img/green_dot.png" alt="">
                        Наличие: В наличии
                    </div>
                    <div class="over-hr__product-code">
                        Код товара: 195756
                    </div>
                </div>

                <hr>

                <div class="product">
                    <div class="image-wrapper">
                            <div class="image-preview">
                                <img src="img/195756-500x335.jpg" alt="Композитные панели" itemprop="image">
                            </div>
                            <div class="small-image-wrapper">
                                <ul class="small-image-list">
                                    <li class="small-image-item">
                                        <img src="img/195756-500x335.jpg" alt="Композитные панели">
                                    </li>
                                    <li class="small-image-item">
                                        <img src="img/123333.jpg" alt="Композитные панели">
                                    </li>
                                    <li class="small-image-item">
                                        <img src="img/195756-500x335.jpg" alt="Композитные панели">
                                    </li>
                                    <li class="small-image-item">
                                        <img src="img/123333.jpg" alt="Композитные панели">
                                    </li>
                                </ul>
                                <div class="video-button">
                                    <a href="#"><img src="img/play-button.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                 

                    <div>
                        <div class="product-description">
                            <div class="product__price-block">
                                <div class="date__delivery">
                                    <div class="date__delivery-img">
                                        <img src="img/calendar.png" alt="">
                                    </div>
                                    <span>
                                        Сроки поставки товара<br>
                                        <span style="font-weight: bold;">1 - 2</span> рабочих дня
                                    </span>
                                </div>
                                <div class="block-price">
                                    1100 ₽<span>/ м<sup>2</sup></span>
                                </div>
                            </div>
                        </div>

                        <div class="product__buy-panel">
                            <div class="short-desc">
                                <div class="short-desc__elem">
                                    <div class="short-desc__column short-desc__column-margin">
                                        <div class="short-desc__text short-desc__text-margin">
                                            Цвет<a href="#"></a>7006
                                        </div>
                                        <div class="short-desc__text">
                                            Толщина<a href="#"></a>3 мм
                                        </div>
                                    </div>
                                </div>
                                <div class="short-desc__elem">
                                    <div class="short-desc__column">
                                        <div class="short-desc__text short-desc__text-margin">
                                            Длина<a href="#"></a>4000 мм
                                        </div>
                                        <div class="short-desc__text">
                                            Ширина<a href="#"></a>1500 мм
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product__btn-buy">
                                <div id="form" class="btn-buy btn-buy__red">
                                    Отправить заявку
                                </div>
                                <div id="form2" class="btn-buy">
                                    Уточнить сроки
                                </div>
                            </div>
                        </div>


                        <div class="product__info">
                            <div id="button" class="product__info-elem">
                                <div class="product__info-elem-header">
                                    <img class="product__first-ico" src="img/img_shipped.png" alt="">
                                    <span>Информация о доставке</span>
                                    <img class="bottom-arrow" src="img/bottom-arrow.png" alt="">
                                </div>
                                <div id="informer" class="product__info-elem-expanded">
                                    321456415614615
                                </div>
                            </div>
                            <div id="button2" class="product__info-elem2">
                                <div class="product__info-elem-header">
                                    <img class="product__first-ico" src="img/ico_valid.png" alt="">
                                    <span>Варианты оплаты</span>
                                    <img class="bottom-arrow" src="img/bottom-arrow.png" alt="">
                                </div>
                                <div id="informer2" class="product__info-elem-expanded">
                                    321456415614615
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="product-description-section">
                <div class="tab">
                    <div class="container">
                        <div class="tab__controls">
                            <div class="tab__controls-elem tab__controls-elem-active" data-tab="tab-1">
                                Описание товара
                            </div>
                            <div class="tab__controls-elem" data-tab="tab-2">
                                Наличие на складе
                            </div>
                            <div class="tab__controls-elem" data-tab="tab-3">
                                Характеристики
                            </div>
                            <div class="tab__controls-elem" data-tab="tab-4">
                                Оплата
                            </div>
                        </div>

                        <div class="open-tab">
                            <div class="open-tab__elem tab-1 open-tab__active">
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                11111111111111111111
                                
                            </div>
                            <div class="open-tab__elem tab-2">
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                                22222222222222222222
                            </div>
                            <div class="open-tab__elem tab-3">
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                                33333333333333333333
                            </div>
                            <div class="open-tab__elem tab-4">
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                                44444444444444444444
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? include ("inc/footer.inc"); ?>

        <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script defer src="js/script.js"></script>
        <script defer src="js/inform.js"></script>
        <script defer src="js/open_tab.js"></script>
        <script defer src="js/mail.js"></script>


</body>
</html>