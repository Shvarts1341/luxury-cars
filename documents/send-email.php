<?php

ini_set('display_errors', 'On');
error_reporting('E_ALL');

$to = 'shvartsenberg2015@mail.ru';
$sitename = $_SERVER['SERVER_NAME'];

if (isset($_POST['phone']) && !empty($_POST['phone'])) {
    $phone  = strip_tags($_POST['phone']);
    $name  = strip_tags($_POST['name']);
    $email  = strip_tags($_POST['email']);

    // Формирование заголовка письма
    $subject  = "[Zajavka s sajta " . $sitename . "]";
    $headers  = "From: mail@" . $sitename . " \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    // Формирование тела письма
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка:</h2>\r\n";
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $msg .= "<p><strong>Имя:</strong> " . $name . "</p>\r\n";
    }
    if (isset($_POST['phone']) && !empty($_POST['phone'])) {
        $msg .= "<p><strong>Телефон:</strong> " . $phone . "</p>\r\n";
    }
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $msg .= "<p><strong>E-mail:</strong> " . $email . "</p>\r\n";
    }

    $msg .= "</body></html>";
    // отправка сообщения
    mail($to, $subject, $msg, $headers);
} else {
    echo "Заявка не отправлена :(";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width,initial-scale=1'>
    <title>Ваша заявка принята</title>
    <style>
        body {
            margin: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            line-height: 1.5;
            background-color: rgb(238, 241, 243);
        }

        .thankyou {
            overflow: hidden;
            box-sizing: border-box;
            min-height: 100vh;
            text-align: center;
            position: relative;
            padding: 10px;
            font-size: 16px;
        }

        .thankyou__title {
            color: rgb(10, 161, 80);
            font-size: 36px;
        }

        .thankyou__title--error {
            color: #da0000;
        }

        .thankyou__divider {
            max-width: 100%;
        }

        p {
            font-size: 20px;
        }

        .button {
            background: transparent linear-gradient(to bottom, rgb(13, 181, 57) 0%, rgb(0, 144, 67) 100%) repeat scroll 0 0;
            border: none;
            border-bottom: 2px solid rgb(21, 90, 53);
            outline: 0 none;
            padding: 15px 25px;
            text-transform: uppercase;
            color: #fff;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
            transform: translateY(-1px);
        }
    </style>
</head>

<body>
    <div class='thankyou'>

        <h1 class="thankyou__title">Спасибо, заявка принята!</h1>
        <p class="thankyou__notice">
            Оператор свяжется с Вами в течение 15 минут </p>
        <p class="thankyou__notice">Вы ввели следующие данные:</p>
        <p class="thankyou__notice">Имя: <?php echo $name; ?></p>
        <p class="thankyou__notice">Телефон: <?php echo $phone; ?></p>
        <p class="thankyou__notice">Почта: <?php echo $email; ?></p>
        <p class="thankyou__notice">Если Вы допустили ошибку, вернитесь на страницу заказа и отправьте форму еще раз</p>


        <button class="button" onclick="history.go(-1);">Вернуться</button>
    </div>
</body>

</html>