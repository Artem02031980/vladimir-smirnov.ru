<?php

if(isset($_POST['okbutton']))
   {    echo "<script language='JavaScript'>window.location.href = 'thanks.html'</script>"; 
        $to = 'vladimsmirnov@yandex.ru, artem0203@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Сообщение с сайта VLADIMIR-SMIRNOV.RU'; //Заголовок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>
						<p>Сообщение: '.$_POST['report'].'</p>
                    </body>
                </html>'; //Текст сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Потенциальный работодатель <smirnov>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail        
   };

?>