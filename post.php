
<?php
var_dump($_POST);
var_dump($_GET);
var_dump($_FILES);

die();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHTML(true);

//От кого письмо
$mail->setFrom('admin@7024.ru', 'Фрилансер по жизни');
//Кому отправить
$mail->addAddress('tasshabaev.nurali@mail.ru');
//Тема письма
$mail->Subject = 'Привет! Это "Фрилансер по жизни"';

//Тело письма
$body = '<h1>Встречайте супер письмо!</h1>';

if(trim(!empty($_POST['form_name']))){
    $body.='<p><strong>Имя:</strong> '.$_POST['form_name'].'</p>';
}
if(trim(!empty($_POST['form_email']))){
    $body.='<p><strong>E-mail:</strong> '.$_POST['form_email'].'</p>';
}
if(trim(!empty($_POST['form_number']))){
    $body.='<p><strong>Номер:</strong> '.$_POST['form_number'].'</p>';
}
if(trim(!empty($_POST['form_message']))){
    $body.='<p><strong>Сообщение:</strong> '.$_POST['form_message'].'</p>';
}

//Прикрепить файл
if (!empty($_FILES['input__file']['tmp_name'])) {
    //путь загрузки файла
    $filePath = __DIR__ . "/files/" . $_FILES['input__file']['name'];
    //грузим файл
    if (copy($_FILES['input__file']['tmp_name'], $filePath)){
        $fileAttach = $filePath;
        $body.='<p><strong>Фото в приложении</strong>';
        $mail->addAttachment($fileAttach);
    }
}

$mail->Body = $body;

//Отправляем
if (!$mail->send()) {
    $message = 'Ошибка';
} else {
    $message = 'Данные отправлены!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);

//var_dump($_POST);
//if (isset($_FILES)) { //если есть файлы в форме
//    foreach ($_FILES as $file_item) {
//        if (!is_array($file_item['error'])) { //проверяем множественное или нет поле файла
//            if ($file_item['error'] == UPLOAD_ERR_OK) {
//                $mail->AddAttachment($file_item['tmp_name'],$file_item['name']);
//            }
//        } else {
//            foreach ($file_item["error"] as $key => $error){
//                if ($error == UPLOAD_ERR_OK) {
//                    $tmp_name = $file_item["tmp_name"][$key];
//                    $name = $file_item["name"][$key];
//                    $mail->AddAttachment($tmp_name,$name);
//                }
//            }
//        }
//    }
//}

//die();


//    $msg_box = ""; // в этой переменной будем хранить сообщения формы
//    $errors = array(); // контейнер для ошибок
//    // проверяем корректность полей
//	if($_POST['form_email'] == "")   $errors[] = "Поле <span style='color: #666;'>Ваш e-mail</span> не заполнено";
//    if($_POST['form_number'] == "")    $errors[] = "Поле <span style='color: #666;'>Ваш номер телефона</span> не заполнено";
//
//    // если форма без ошибок
//    if(empty($errors)){
//        // собираем данные из формы
//        $message  = "Имя пользователя: " . $_POST['form_name'] . "<br/>";
//        $message .= "Номер телефона: " . $_POST['form_number'] . "<br/>";
//        $message .= "E-mail пользователя: " . $_POST['form_email'] . "<br/><br/>";
//        $message .= "Текст письма: " . $_POST['form_message'];
//        send_mail($message); // отправим письмо
//    }
//
//    // делаем ответ на клиентскую часть в формате JSON
//    echo json_encode(array(
//        'result' => $msg_box
//    ));
//
//
//    // функция отправки письма
//    function send_mail($message){
//        // почта, на которую придет письмо
//        $mail_to = "tasshabaev.nurali@mail.ru";
//        // тема письма
//        $subject = "Заявка с сайта in-fas.ru";
//
//        // заголовок письма
//        $headers= "MIME-Version: 1.0\r\n";
//        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
//        $headers .= "From: Заявка с in-fas.ru <no-reply@test.com>\r\n"; // от кого письмо
//
//        // отправляем письмо
//        mail($mail_to, $subject, $message, $headers);
//    }
//
//?>
<!---->
<?php
///* Здесь проверяется существование переменных */
//if (isset($_POST['#form_name'])) {$phone = $_POST['#form_name'];}
//if (isset($_POST['#form_number'])) {$name = $_POST['#form_number'];}
//
///* Сюда впишите свою эл. почту */
//$myaddres  = "email@yandex .ru"; // кому отправляем
//
///* А здесь прописывается текст сообщения, \n - перенос строки */
//$mes = "Тема: Заказ обратного звонка!\nТелефон: $phone\nИмя: $name";
//
///* А эта функция как раз занимается отправкой письма на указанный вами email */
//$sub='Заказ'; //сабж
//$email='Заказ обратного звонка'; // от кого
//$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
//
//ini_set('short_open_tag', 'On');
//header('Refresh: 3; URL=index.html');
//?>
