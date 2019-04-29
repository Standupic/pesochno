<?
	if((isset($_POST['name'])&&$_POST['name']!="") &&
	  (isset($_POST['phone'])&&$_POST['phone']!="") &&
	  (isset($_POST['email'])&&$_POST['email'] !="")){
	  $to = $_POST['email']; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Бизнес план франшизы песочно'; //Заголовок сообщения
        $message = "
                <html>
                    <head>
                        <title>".$subject."</title>
                    </head>
                    <body>
                        <p>Ссылка на скачивание Бизнес плана франшизы 'Песочно' <a href='https://yadi.sk/i/qoLR7hdi-J9Y2g'>Бизнес план</a></p>";
           $message .= "</body>
                </html>"; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Франшиза песочно <cp75225@vh24.timeweb.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
	}
?>