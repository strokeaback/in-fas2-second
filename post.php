<?php
    $msg_box = ""; // в этой переменной будем хранить сообщения формы
    $errors = array(); // контейнер для ошибок
    // проверяем корректность полей
	if($_POST['form_email'] == "")   $errors[] = "Поле <span style='color: #666;'>Ваш e-mail</span> не заполнено";
    if($_POST['form_number'] == "")    $errors[] = "Поле <span style='color: #666;'>Ваш номер телефона</span> не заполнено";

    // если форма без ошибок
    if(empty($errors)){     
        // собираем данные из формы
        $message  = "Имя пользователя: " . $_POST['form_name'] . "<br/>";
        $message .= "Номер телефона: " . $_POST['form_number'] . "<br/>";
        $message .= "E-mail пользователя: " . $_POST['form_email'] . "<br/><br/>";
        $message .= "Текст письма: " . $_POST['form_message'];      
        send_mail($message); // отправим письмо
    }
 
    // делаем ответ на клиентскую часть в формате JSON
    echo json_encode(array(
        'result' => $msg_box
    ));
     
     
    // функция отправки письма
    function send_mail($message){
        // почта, на которую придет письмо
        $mail_to = "tasshabaev.nurali@mail.ru";
        // тема письма
        $subject = "Заявка с сайта in-fas.ru";
         
        // заголовок письма
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From: Заявка с in-fas.ru <no-reply@test.com>\r\n"; // от кого письмо
         
        // отправляем письмо 
        mail($mail_to, $subject, $message, $headers);
    }
     
?>

<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['#form_name'])) {$phone = $_POST['#form_name'];}
if (isset($_POST['#form_number'])) {$name = $_POST['#form_number'];}

/* Сюда впишите свою эл. почту */
$myaddres  = "email@yandex .ru"; // кому отправляем

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Заказ обратного звонка!\nТелефон: $phone\nИмя: $name";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказ'; //сабж
$email='Заказ обратного звонка'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
