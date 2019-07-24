<?
if((isset($_POST['name'])&&$_POST['name']!="")&&
   (isset($_POST['phone'])&&$_POST['phone']!="")
   &&(isset($_POST['city'])&&$_POST['city']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'satndupic87@gmail.com,pesochnofranchise@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заявка на приобретение франшизы песочно'; //Заголовок сообщения
        $message = "
                <html>
                    <head>
                        <title>".$subject."</title>
                    </head>
                    <body>
                        <p>Имя: ".$_POST['name']."</p>
                        <p>Телефон: ".$_POST['phone']."</p>
                        <p>Город: ".$_POST['city']."</p>";
           $message .= "</body>
                </html>"; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Франшиза песочно <cp75225@vh24.timeweb.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>
