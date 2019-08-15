<?
	if((isset($_POST['name'])&&$_POST['name']!="")  &&
	  (isset($_POST['phone'])&&$_POST['phone']!="") &&
	  (isset($_POST['email'])&&$_POST['email']!="") &&
      (isset($_POST['city'])&&$_POST['city']!="")){
	  $to = $_POST['email']; //Почта получателя, через запятую можно указать сколько угодно адресов
	  $to2 = 'satndupic87@gmail.com,pesochnofranchise@gmail.com';

        $subject = 'Заявка на франшизу Песочно'; //Заголовок сообщения
        $subject2 = 'Кто то интересовался франшизой Песочно';
        $message2 =  "<html>
        				<head>
        					<title>".$subject2."</title>
        				</head>
        				<body>
        					<p>
        						Артем доношу до Вашего сведения что некто ".$_POST['name']." запросил информацию о твоей франшизе.
        					</p>
        					<p>Контактные данные:</p>
        					<p>Телефон: <a href='tel:+".$_POST["phone"]."'>".$_POST['phone']."</a></p>
        					<p>Почта: ".$_POST['email']."</p>
                            <p>Город: ".$_POST['city']."</p>
        				</body>
        			</html>";
        $message = "
                <html>
                    <head>
                        <title>".$subject."</title>
                    </head>
                    <body>
                        <p>Ваша заявка на франшизу 'Песочно' была принята. В ближайщее время c Вами свяжутся.</p>
                    </body>
                  </html>";
           $message .= "</body>
                </html>"; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Франшиза песочно <cp75225@vh24.timeweb.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); 
        mail($to2, $subject2, $message2, $headers);
	}
?>