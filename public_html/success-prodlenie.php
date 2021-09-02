<?php
/*
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
*/

function d($var)
{
    die('<pre>' . print_r($var, 1) . '</pre>');
}

session_start();


$Month_r = array(
    "01" => "января",
    "02" => "февраля",
    "03" => "марта",
    "04" => "апреля",
    "05" => "мая",
    "06" => "июня",
    "07" => "июля",
    "08" => "августа",
    "09" => "сентября",
    "10" => "октября",
    "11" => "ноября",
    "12" => "декабря"
);

$date_full = explode(".", date("d.m.Y", strtotime("+30 DAYS")));
$date_short = date("d.m", strtotime("+30 DAYS"));
$rus_month = $Month_r[$date_full[1]];
$rus_date = $date_full[0] . '&nbsp;' . $rus_month . '&nbsp;' . $date_full[2];


$last_year = date("Y", strtotime("-1 YEAR"));

function LastModified($file = '')
{

    if (empty($file)) {
        $file = __FILE__;
    }

    if (!file_exists($file)) {
        return;
    }
    $LastModified_unix = strtotime(date("D, d M Y H:i:s", filectime($file)));
    $LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
    $IfModifiedSince = false;
    if (isset($_ENV['HTTP_IF_MODIFIED_SINCE'])) {
        $IfModifiedSince = strtotime(substr($_ENV['HTTP_IF_MODIFIED_SINCE'], 5));
    }
    if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])) {
        $IfModifiedSince = strtotime(substr($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5));
    }
    if ($IfModifiedSince && $IfModifiedSince >= $LastModified_unix) {
        header($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');
        exit;
    }
    header('Last-Modified: ' . $LastModified);
}
LastModified();

// Backgrounds
$webp = 'img';
if (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false) {
    $webp = 'webp';
}

$method = $_SERVER['REQUEST_METHOD'];

//Подготавливаем тело письма
if ($method === 'POST') {
    $queryStr = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_QUERY);
    $query = [];
    parse_str($queryStr, $query);
    /* 			require('amo/in.php'); */
    $message = "";
    $c = "";
    foreach ($_POST as $key => $value) {
        $message_value = $value;
        $message_key = "";
        if ($key === "name") $message_key = "Имя";
        if ($key === "phone") $message_key = "Телефон";
        if ($key === "email") $message_key = "Email";
        if ($key === "utm_source") $message_key = "utm source";
        if ($key === "utm_medium") $message_key = "utm medium";
        if ($key === "utm_campaign") $message_key = "utm campaign";
        if ($key === "utm_content") $message_key = "utm content";
        if ($key === "utm_term") $message_key = "utm term";
        $message .= "
					" . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
						<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$message_key</b></td>
						<td style='padding: 10px; border: #e9e9e9 1px solid;'>$message_value</td>
					</tr>
					";
    }
    $message = "<table style='width: 100%;'>$message</table>";
    //отправляем письмо

    $headers  = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: Товарный знак <from@tovarnyj-znak.ru>\r\n";
    $headers .= "Reply-To: from@tovarnyj-znak.ru\r\n";

    mail("agt.patent@mail.ru", "Заявка с сайта", $message, $headers);
}

$ny = '';
$h1 = "<h1 class=\"blue\">Мы получили Вашу <span>заявку</span></h1>";
$message = "<p class=\"subtitle\">Мы свяжемся с вами в течение <span>15 минут</span>. <br />График работы нашего офиса: <br />Пн-Пт, с 09:00 до 18:00 (Мск)</p>";

$holiday_start = new DateTime(date('Y-m-d H:i:s', strtotime('2020-12-30 17:30:00')));
$holiday_end = new DateTime(date('Y-m-d H:i:s', strtotime('2021-01-03 23:59:59')));
$today = new DateTime(date('Y-m-d H:i:s'));

if (($holiday_start < $today) && ($today < $holiday_end)) {
    $ny = 'ny';
    $h1 = "<h1 class=\"blue\">Спасибо <span>за заказ</span></h1>";
    $message = "<p class=\"subtitle\">Сейчас праздники, и до 4 января мы отдыхаем. Приносим извинения за возможные неудобства. <br /> Мы обязательно свяжемся с вами в понедельник, 4 января 2021 г.</p><p class=\"subtitle\"><span class=\"blue\">С Новым годом!</span></p>";
}

?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">

    <title>Спасибо за заявку - &#174; &#8482; </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link href="https://" rel="canonical" />
    <link rel="shortcut icon" href="favicon.ico" />

    <style data-template-style=true>
        @import url(https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@1,400;1,700&family=Open+Sans:wght@300;400;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap);
    </style>
    <link rel="dns-prefetch" href="//yastatic.net/">
    <link rel="dns-prefetch" href="//google-analytics.com/">
    <link rel="stylesheet" href="styles/common.css">
    <link rel="stylesheet" href="styles/success.css">
    <!--[if lt IE 9]> <script src="scripts/html5.js"></script> <![endif]-->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TJFHL4B');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJFHL4B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="wrapper">

        <header id="header" class="header <?= $webp ?>">
            <div class="container">
                <div class="header__logo">
                    <a href="/" class="img-container">
                        <picture>
                            <source srcset="img/logo.webp" type="image/webp">
                            <img src="img/logo.jpg" alt="" title="Патентное бюро Железно">
                        </picture>
                    </a>
                    <p>Патентное бюро</p>
                </div>
            </div>
        </header>

        <div class="main">
            <div class="container">
                <h1 class="main__title">Спасибо!<br>Ваша заявка принята.</h1>
                <div class="main__subtitle">Полный пакет документов придет на почту<span class="main__email">{e-mail}</span></div>
            </div>
        </div>

    </div> <!-- end of wrapper -->

    <script src="scripts/jquery.js"></script>
    <script type="text/javascript" src="./scripts/utm_parser.js"></script>
</body>

</html>