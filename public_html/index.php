<?php
session_start();
$_SESSION['time'] = time();

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

$action_start = strtotime("01 February 2021");
$action_days = ceil((time() - $action_start) / (60 * 60 * 24));
$cycles = ceil($action_days / 14);
$action_days_show = $cycles * 14 - $action_days + 1;
$action_begin = date("d.m", ($action_start + ($cycles - 1) * 14 * 60 * 60 * 24));
$action_end = date("d.m", ($action_start + $cycles * 14 * 60 * 60 * 24));
$action_end_full = explode(".", date("d.m.Y", ($action_start + $cycles * 14 * 60 * 60 * 24)));
$rus_month = $Month_r[$action_end_full[1]];
$action_end_rus_short = $action_end_full[0] . '&nbsp;' . $rus_month;
$action_end_rus = $action_end_full[0] . '&nbsp;' . $rus_month . '&nbsp;' . $action_end_full[2];
$last_year = date("Y", strtotime("-1 YEAR"));


$utm_source = isset($_GET['utm_source']) ? $_GET['utm_source'] : null;

// Backgrounds
$webp = 'img';
if (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false) {
    $webp = 'webp';
}

/* <gtm> */

?>


<!DOCTYPE html>
<html lang="ru-RU">

</html>

<head>

    <link rel=dns-prefetch href="//code.jquery.com">
    <link rel=preconnect href="//fonts.googleapis.com">
    <link rel=preconnect href="//fonts.gstatic.com">
    <link rel=dns-prefetch href='//mc.yandex.ru' />
    <link rel=dns-prefetch href='//www.google-analytics.com' />
    <link rel=dns-prefetch href='//www.googletagmanager.com' />
    <link rel=dns-prefetch href='//vk.com' />
    <link rel=dns-prefetch href='//www.facebook.com' />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name=format-detection content="telephone=no" />
    <!-- <meta name=theme-color content="#3990C8"/> -->
    <meta http-equiv="x-rim-auto-match" content="none">
    <!-- <meta name=apple-mobile-web-app-status-bar-style content="#3990C8"/> -->

    <!-- <link rel=icon type="image/vnd.microsoft.icon" href=favicon.ico />
<link type="image/x-icon" rel=icon href=favicon.ico />
<link rel=apple-touch-icon sizes=57x57 href="img/favicon/xapple-icon-57x57.png.pagespeed.ic.C0GgKIdyIW.png">
<link rel=apple-touch-icon sizes=60x60 href="img/favicon/xapple-icon-60x60.png.pagespeed.ic.ihMWyxfXiz.png">
<link rel=apple-touch-icon sizes=72x72 href="img/favicon/xapple-icon-72x72.png.pagespeed.ic.HE-DHLNo8m.png">
<link rel=apple-touch-icon sizes=76x76 href="img/favicon/xapple-icon-76x76.png.pagespeed.ic.6yZWlcI_7z.png">
<link rel=apple-touch-icon sizes=114x114 href="img/favicon/xapple-icon-114x114.png.pagespeed.ic.qsNSJS8cuc.png">
<link rel=apple-touch-icon sizes=120x120 href="img/favicon/xapple-icon-120x120.png.pagespeed.ic.pDqbFmfAg_.png">
<link rel=apple-touch-icon sizes=144x144 href="img/favicon/xapple-icon-144x144.png.pagespeed.ic.6qTbHlZ2An.png">
<link rel=apple-touch-icon sizes=152x152 href="img/favicon/xapple-icon-152x152.png.pagespeed.ic.l5g6QajGv4.png">
<link rel=apple-touch-icon sizes=180x180 href="img/favicon/xapple-icon-180x180.png.pagespeed.ic.07_5gcrzpS.png">
<link rel=icon type="image/png" sizes=192x192 href="img/favicon/xandroid-icon-192x192.png.pagespeed.ic.RqJGteIPTV.png">
<link rel=icon type="image/png" sizes=32x32 href="img/favicon/xfavicon-32x32.png.pagespeed.ic.g1BcTB3y09.png">
<link rel=icon type="image/png" sizes=96x96 href="img/favicon/xfavicon-96x96.png.pagespeed.ic.hIrM8_wFgn.png">
<link rel=icon type="image/png" sizes=16x16 href="img/favicon/xfavicon-16x16.png.pagespeed.ic.v6jXZ8PSlI.png">
<link rel=manifest href="/img/favicon/manifest.json"> -->

    <title>Продли свой знак</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="" rel="canonical" />
    <!-- <link rel="shortcut icon" href="favicon.ico" /> -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Патентное бюро Железно">
    <meta property="og:url" content="">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:image" content="">
    <meta property="og:title" content="Зарегистрируй товарный знак. Защити бизнес от конкурентов.">
    <meta property="og:description" content="Оставьте заявку на регистрацию торговой марки &#8482; пока не поздно.Ускоренные схемы регистрации. Проверка по закрытым базам ФИПС">

    <link href="styles/core.css" type="text/css" rel=stylesheet />
    <link href="styles/common.css" type="text/css" rel=stylesheet />
    <link href="styles/fancybox.min.css" type="text/css" rel=stylesheet />
    <style data-template-style=true>

    </style>
    <link href="styles/njBox.css" type="text/css" data-template-style=true rel=stylesheet />
    <link href="styles/order-css.css" type="text/css" data-template-style=true rel=stylesheet />

    <style data-template-style=true>
        @import url(https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@1,400;1,700&family=Open+Sans:wght@300;400;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap);
    </style>
    <link href="styles/styles.css" type="text/css" data-template-style=true rel=stylesheet />
    <link href="styles/template_styles.css" type="text/css" data-template-style=true rel=stylesheet />

    <script rel=preload as=script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin=anonymous></script>
    <script src="js/libs/slick.min.js"></script>
    <script src="js/libs/typeit.js"></script>
    <script src="js/libs/jquery.scroolly.js"></script>
    <script type="text/javascript" src="js/template.js"></script>
    <script src="js/fancybox.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/njBox.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

    <!-- <gtm>  -->
</head>

<!-- <gtm>  -->

<body>
    <header class="header">
        <div class="header__wrapper container">
            <div class="header__logo">
                <a href="">
                    <picture>
                        <source srcset="img/logo.webp" type="image/webp">
                        <img src="img/logo.jpg" alt="" title="Патентное бюро Железно">
                    </picture>
                </a>
                <p class="header__brand-name">Патентное бюро</p>
            </div>
            <div class="header__middle">
                <p>Мы работаем по всей России</p>
            </div>
            <div class="header__phone-block phone-block">
                <a class="phone-block__phone" href="tel:84951047454">8 495 104-74-54</a>
                <a class="phone-block__button button-light fancybox" data-src="#call-modal" data-fancybox="" href="">Заказать звонок</a>
                <a class="phone-block__mobile" href="tel:84951047454">
                    <picture>
                        <source srcset="img/call_icon.webp" type="image/webp">
                        <img src="img/call_icon.png" alt="" title="позвонить">
                    </picture>
                </a>
                <a class="phone-block__whatsapp" href="//api.whatsapp.com/send?phone=79229092784<?= $whatsapp_text ?>" target="_blank"></a>
            </div>
        </div>
    </header>

    <main class=article-main>

        <!--         <a data-fancybox="" data-src="#hidden-content" href="javascript:;">
            Открыть окно
        </a>
        <div style="display: none;" id="hidden-content">
            Встроенный HTML-элемент
        </div> -->

        <div class="body-container">

            <div class="intro <?= $webp; ?>">
                <div class="container">
                    <div class="intro__box">
                        <h1 class="intro__title">Продлите исключительное право <span></span></h1>
                        <div class="intro__subtitle">
                            <p class="intro__about">Спецпроект патентного бюро “Железно”</p>
                            <ul>
                                <li>Продление товарного знака за <span class="black">3990 руб.</span></li>
                                <li>Подаем заявку в Роспатент <b>в день обращения.</b></li>
                                <li>Полное делопроизводство и <b>финансовая гарантия.</b></li>
                            </ul>
                        </div>
                        <div class="intro__btn-wrap">
                            <!--<a href="#" data-scroll class="g-btn6 fancybox" data-src="#step1" data-fancybox="">Продлить</a> -->
                            <a href="#" id="call-first-step" data-scroll class="g-btn6">Продлить</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="partners js-scroll-add-cls-10">
                <div class="partners__container container">
                    <div class=partners__wrapper>
                        <div class=partners__slider>
                            <div class=partners__item>
                                <div class=partners__logo>
                                    <img src="img/partners/svetlogorsk.png">
                                </div>
                                <div class="partners__about">
                                    <p class="partners__title">Светлогорск</p>
                                    <p class="partners__desc">Администрация муниципального образования "Светлогорский городской округ”</p>
                                </div>
                            </div>
                            <div class=partners__item>
                                <div class=partners__logo>
                                    <img src="img/partners/taezhnyj-kraj.png" alt=logo2>
                                </div>
                                <div class="partners__about">
                                    <p class="partners__title">ООО “Дары Байкала”</p>
                                    <p class="partners__desc">Производство мясных полуфабрикатов, переработка ягод</p>
                                </div>
                            </div>
                            <div class=partners__item>
                                <div class=partners__logo>
                                    <img src="img/partners/bibliosha.png" alt=logo3>
                                </div>
                                <div class="partners__about">
                                    <p class="partners__title">ООО “БГ Групп” (группа компаний “Библио-Глобус”)</p>
                                    <p class="partners__desc">Старейший книжный магазин России. Крупный туроператор</p>
                                </div>
                            </div>
                            <div class=partners__item>
                                <div class=partners__logo>
                                    <img src="img/partners/ecoMarket.png" alt=logo4>
                                </div>
                                <div class="partners__about">
                                    <p class="partners__title">ООО “Экомаркет”</p>
                                    <p class="partners__desc">Интернет-магазин, доставка продуктов питания</p>
                                </div>
                            </div>
                            <div class=partners__item>
                                <div class=partners__logo>
                                    <img src="img/partners/HEPC.png" alt=logo5>
                                </div>
                                <div class="partners__about">
                                    <p class="partners__title">ООО “Нефтехимическая компания НЕРС+”</p>
                                    <p class="partners__desc">Оптовый поставщик нефтехимической продукции</p>
                                </div>
                            </div>
                            <div class=partners__item>
                                <div class=partners__logo>
                                    <img src="img/partners/myasnoi.png" alt=logo7>
                                </div>
                                <div class="partners__about">
                                    <p class="partners__title">ИП Маргарян А.А.</p>
                                    <p class="partners__desc">Розничная торговля мясом всех видов.</p>
                                </div>
                            </div>
                            <div class=partners__item>
                                <div class=partners__logo>
                                    <img src="img/partners/rocketCall.png" alt=logo8>
                                </div>
                                <div class="partners__about">
                                    <p class="partners__title">Поповичева А.И.</p>
                                    <p class="partners__desc">RocketCall - дистанционный колл-центр.</p>
                                </div>
                            </div>
                        </div>
                        <div class="partners__arrows g-slider-arrow"></div>
                    </div>
                </div>
            </div>

            <div class="experience">
                <div class="container">
                    <div class="experience__title">Сохраните свое право на интеллектуальную собственность <span class="no-wrap">с ПБ “Железно”</span></div>
                    <div class="experience__grid">
                        <div class="experience__item">
                            <div class="experience__num">24</div>
                            <div class="experience__sub">часа - подадим заявку в Роспатент сегодня</div>
                        </div>
                        <div class="experience__item">
                            <div class="experience__num">45</div>
                            <div class="experience__sub">дней от заявки до продления</div>
                        </div>
                        <div class="experience__item">
                            <div class="experience__num">30</div>
                            <div class="experience__sub">процентов экономии - скидка на гос.пошлину</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=pros>
                <div class=container>
                    <div class=pros__grid>
                        <div class=pros__item>
                            <svg width=21 height=21 viewBox="0 0 21 21" fill=none xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.239187 12.2603C1.76136 13.7616 7.00442 18.7658 9.03399 20.7675C9.37225 21.1011 10.0488 21.1011 10.2179 20.6007C11.7401 17.9318 16.3066 9.2578 20.8732 3.75316C21.0423 3.41955 21.0423 3.08593 20.8732 2.75232C20.0275 1.91828 19.0127 0.917439 18.1671 0.250211C17.8288 -0.0834036 17.3214 -0.0834036 17.1523 0.250211C13.4314 4.25358 10.0488 10.0918 8.86486 12.2603C8.69573 12.7607 8.01921 12.7607 7.68094 12.4271C6.15877 11.0927 4.29833 9.4246 2.94528 8.09015C2.60702 7.92334 1.9305 7.92334 1.76137 8.42376C1.25397 9.2578 0.74658 10.4254 0.0700562 11.4263C-0.0990746 11.7599 0.0700565 12.0935 0.239187 12.2603Z" fill="#1BC47D" />
                            </svg>
                            <span>Продление под ключ - без доплат и скрытых платежей.</span>
                        </div>
                        <div class="pros__item pros__item--center">
                            <svg width=21 height=21 viewBox="0 0 21 21" fill=none xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.239187 12.2603C1.76136 13.7616 7.00442 18.7658 9.03399 20.7675C9.37225 21.1011 10.0488 21.1011 10.2179 20.6007C11.7401 17.9318 16.3066 9.2578 20.8732 3.75316C21.0423 3.41955 21.0423 3.08593 20.8732 2.75232C20.0275 1.91828 19.0127 0.917439 18.1671 0.250211C17.8288 -0.0834036 17.3214 -0.0834036 17.1523 0.250211C13.4314 4.25358 10.0488 10.0918 8.86486 12.2603C8.69573 12.7607 8.01921 12.7607 7.68094 12.4271C6.15877 11.0927 4.29833 9.4246 2.94528 8.09015C2.60702 7.92334 1.9305 7.92334 1.76137 8.42376C1.25397 9.2578 0.74658 10.4254 0.0700562 11.4263C-0.0990746 11.7599 0.0700565 12.0935 0.239187 12.2603Z" fill="#1BC47D" />
                            </svg>
                            <span>Без визита в офис - экономьте своё время!</span>
                        </div>
                        <div class=pros__item>
                            <svg width=21 height=21 viewBox="0 0 21 21" fill=none xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.239187 12.2603C1.76136 13.7616 7.00442 18.7658 9.03399 20.7675C9.37225 21.1011 10.0488 21.1011 10.2179 20.6007C11.7401 17.9318 16.3066 9.2578 20.8732 3.75316C21.0423 3.41955 21.0423 3.08593 20.8732 2.75232C20.0275 1.91828 19.0127 0.917439 18.1671 0.250211C17.8288 -0.0834036 17.3214 -0.0834036 17.1523 0.250211C13.4314 4.25358 10.0488 10.0918 8.86486 12.2603C8.69573 12.7607 8.01921 12.7607 7.68094 12.4271C6.15877 11.0927 4.29833 9.4246 2.94528 8.09015C2.60702 7.92334 1.9305 7.92334 1.76137 8.42376C1.25397 9.2578 0.74658 10.4254 0.0700562 11.4263C-0.0990746 11.7599 0.0700565 12.0935 0.239187 12.2603Z" fill="#1BC47D" />
                            </svg>
                            <span>С гарантией по договору.</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="remark">
                <div class="container remark__container remark__container_colored">
                    <div class="main-subtitle remark__main-subtitle">Важно!</div>
                    <p> Если срок продления вашего знака прошел - подготовим ходатайство в Роспатент. Бесплатно!</p>
                </div>
            </div>

            <div class=n-steps>
                <div class=container>
                    <div class="n-steps__title main-subtitle">Продление товарного знака за 3 простых шага</div>
                    <div class="n-steps__slider js-scroll-add-cls-20 main-animate">
                        <div class=n-steps__item>
                            <div class="n-steps__inner n-steps__inner--1">
                                <div class=n-steps__num>1 шаг</div>
                                <div class=n-steps__act><span>Заполните</span><br> простую форму.</div>
                                <div class=n-steps__desc>Укажите номер вашего товарного знака, на кого он был зарегистрирован и почту, куда мы можем отправить документы. </div>
                                <div class=n-steps__timing>5 минут</div>
                            </div>
                        </div>
                        <div class=n-steps__item>
                            <div class="n-steps__inner n-steps__inner--2">
                                <div class=n-steps__num>2 шаг</div>
                                <div class=n-steps__act><span>Оплатите</span><br>гос. пошлину.</div>
                                <div class=n-steps__desc>Мы сформируем пакет документов и вышлем вам на почту. Пока вы оплачиваете пошлины - мы готовим заявку в Роспатент.</div>
                                <div class=n-steps__timing>24 часа</div>
                            </div>
                        </div>
                        <div class=n-steps__item>
                            <div class="n-steps__inner n-steps__inner--3">
                                <div class=n-steps__num>3 шаг</div>
                                <div class=n-steps__act><span>Получите</span> приложение к свидетельству.</div>
                                <div class=n-steps__desc>Ваш знак продлен! Запись публикуется в реестрах. Мы высылаем вам закрывающие документы и оригинал приложения.</div>
                                <div class=n-steps__timing>45-60 дней</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-block">
                <div class="container">
                    <div class="main-subtitle video-block__title">Процедура продления товарного знака с ПБ “Железно”. </div>
                    <div class="undertitle">От заявки до получения свидетельства.</div>
                    <div id="video-team" class="video"></div>
                </div>
            </div>

            <div class="n2-tariffs" id="tariffs">
                <div class="n2-tariffs__container container">
                    <div class="n2-tariffs__title main-subtitle">Выберите удобный тариф</div>
                    <div class="undertitle">Варианты сотрудничества</div>
                    <div class="n2-tariffs__slider">

                        <div class=n2-tariffs__wrap>
                            <div class=n2-tariffs__item>
                                <div class=js-match-height>
                                    <img class=n2-tariffs__icon src="img/icons/01.png">
                                    <div class=n2-tariffs__name>Продление товарного знака</div>
                                    <div class=n2-tariffs__old-cost>6 990 ₽</div>
                                    <div class=n2-tariffs__cost>3 990 ₽</div>
                                    <div class=n2-tariffs__desc>
                                        <ul>
                                            <li>Подготовка документов в ФИПС</li>
                                            <li>Электронная подача заявки</li>
                                            <li>Расчет и формирование квитанций со скидкой в 30%</li>
                                            <li>Ответы на запросы Роспатента</li>
                                            <li>Контроль внесения изменений в реестры</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="n2-tariffs__extra js-match-height-bottom">Ходатайство о продлении сроков продления - бесплатно!</div>
                                <div class=n2-tariffs__wrap-btn>
                                    <a href="#" class=g-btn7>Выбрать</a>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="n2-tariffs__wrap n2-tariffs__wrap--color">
                            <div class=n2-tariffs__item>
                                <div class=js-match-height>
                                    <img class=n2-tariffs__icon src="img/icons/02.png">
                                    <div class=n2-tariffs__name>Товарный знак: продление + изменения</div>
                                    <div class=n2-tariffs__old-cost>16 990 ₽</div>
                                    <div class=n2-tariffs__cost>6 990 ₽</div>
                                    <div class=n2-tariffs__desc>
                                        <ul>
                                            <li>Подготовка документов в ФИПС</li>
                                            <li>Заявление о внесении изменений в сведения о правообладателе</li>
                                            <li>Электронная подача заявки</li>
                                            <li>Расчет и формирование квитанций со скидкой в 30%</li>
                                            <li>Ответы на запросы Роспатента</li>
                                            <li>Контроль внесения изменений в реестры</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="n2-tariffs__extra js-match-height-bottom">Пригодится, если изменился правообладатель или юридический адрес.</div>
                                <div class=n2-tariffs__wrap-btn>
                                    <a href="" class=g-btn8>Выбрать</a>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="n2-tariffs__wrap">
                            <div class=n2-tariffs__item>
                                <div class=js-match-height>
                                    <img class=n2-tariffs__icon src="img/icons/03.png">
                                    <div class=n2-tariffs__name>Продление прав на изобретение</div>
                                    <div class=n2-tariffs__old-cost>6 990 ₽</div>
                                    <div class=n2-tariffs__cost>3 990 ₽</div>
                                    <div class=n2-tariffs__desc>
                                        <ul>
                                            <li>Подготовка документов в ФИПС</li>
                                            <li>Электронная подача заявки.</li>
                                            <li>Расчет и формирование квитанций со скидкой в 30%</li>
                                            <li>Ответы на запросы Роспатента</li>
                                            <li>Контроль внесения изменений в реестры</li>
                                            <li>Восстановление прав на интеллектуальную собственность (при необходимости)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="n2-tariffs__extra js-match-height-bottom">Продлить патент на изобретение можно 1 раз на 5 лет, в случае, если это агрохимикат, пестицид или лекарственное средство</div>
                                <div class=n2-tariffs__wrap-btn>
                                    <a href="#" class=g-btn7>Выбрать</a>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="n2-tariffs__wrap">
                            <div class=n2-tariffs__item>
                                <div class=js-match-height>
                                    <img class=n2-tariffs__icon src="img/icons/04.png">
                                    <div class=n2-tariffs__name>Продление прав на промышленный образец</div>
                                    <div class=n2-tariffs__old-cost>6 990 ₽</div>
                                    <div class=n2-tariffs__cost>3 990 ₽</div>
                                    <div class=n2-tariffs__desc>
                                        <ul>
                                            <li>Подготовка документов в ФИПС</li>
                                            <li>Электронная подача заявки.</li>
                                            <li>Расчет и формирование квитанций со скидкой в 30%</li>
                                            <li>Ответы на запросы Роспатента</li>
                                            <li>Контроль внесения изменений в реестры</li>
                                            <li>Восстановление прав на интеллектуальную собственность (при необходимости)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="n2-tariffs__extra js-match-height-bottom">Продлить право на промышленный образец можно неоднократно, на 5 лет.</div>
                                <div class=n2-tariffs__wrap-btn>
                                    <a href="#" class=g-btn7>Выбрать</a>
                                    <br>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="n2-tariffs__arrows g-slider-arrow"></div>
                    <div class="n2-tariffs__dots g-slider-dots"></div>
                </div>
            </div>

            <div class="action">
                <div class="action__container container">
                    <div class="action__grid">
                        <div class="action__col action__col-left">
                            <div class="action__title">Акция!</div>
                            <div class="main-subtitle">Продлим исключительное право на <span class="uppercase">полезную модель</span> <span class="no-wrap">за 2 990 руб </span></div>
                            <div class="action__button button-container">
                                <a href="#" class="g-btn7 g-btn7_white">Продлить</a>
                            </div>
                        </div>
                        <div class="action__col action__col_right">
                            <div class="action__col-wrapper">
                                <div class="action__text">Вам важно поддерживать в силе патент на полезную модель?</div>
                                <div class="action__list-title"> Воспользуйтесь нашим спецпредложением.<br>За 24 часа:</div>
                                <ul class="action__list">
                                    <li class="action__item">Подготовим пакет документов для Роспатента;</li>
                                    <li class="action__item">Индивидуально рассчитаем сумму госпошлин;</li>
                                    <li class="action__item">Без ошибок сформируем квитанции;</li>
                                    <li class="action__item">Проконтролируем их оплату.</li>
                                </ul>
                                <div class="action__summary">Ваш патент будет продлен вовремя! </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="remark-2">
                <div class="container">
                    <div class="remark-2__grid">
                        <div class="remark-2__col remark-2__col-left">
                            <div class="main-subtitle remark-2__title">Важно</div>
                        </div>
                        <div class="remark-2__col remark-2__col-right">
                            <div class="remark-2__text">
                                <p>Eсли вы пропустили срок уплаты пошлин и действие патента приостановлено - не страшно. Ваши права можно восстановить.</p>
                                <p>Без доплат составим <b>ходатайство о восстановлении действия патента.</b> А через год напомним вам, что пришло время оплатить пошлины.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=ask>
                <div class=ask__inner-wrap>
                    <div class="ask__container container">
                        <div class=ask__grid>
                            <div class="ask__col ask__col--left">
                                <div class=ask__title>Задайте вопросы</div>
                                <div class=ask__desc>Получите бесплатную консультацию по продлению прав на интеллектуальную собственность. Оставьте свой номер телефона, и мы вам перезвоним. Или напишите нам в WhatsApp.</div>
                                <div class=ask__link-block>
                                    <a href="tel:+78000000000" class="ask__link ask__link--phone">
                                        <img src="img/icons/icon-phone-block-ask.svg" alt="icon phone">
                                        <span>8 (800) 00-00-00</span>
                                    </a>
                                    <br>
                                    <div class="ask__link ask__link--chat">
                                        <img src="img/icons/icon-phone-block-chat.svg" alt="icon phone">
                                        <span>Whatsapp</span>
                                    </div>
                                </div>
                                <div class=ask__note>
                                    Бесплатный звонок для всей России <br>
                                    Мы работаем <b>с 8:00 до 21:00</b> по московскому времени
                                </div>
                            </div>
                            <div class="ask__col ask__col--right">
                                <img class="js-scroll-add-cls-20 main-animate" src="img/437x629xexpert_steps.png.pagespeed.ic.ovlICh38hG.png" width=437 height=629 alt="Эксперт">
                                <div class=n-faq__signature>
                                    <div class=n-faq__signature-box>
                                        <div class=n-faq__signature-name>Дина Никулина</div>
                                        <div class=n-faq__signature-position>специалист по сопровождению</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--             <div class=n-faq>
                <div class="n-faq__container container">
                    <div class=n-faq__grid>
                        <div class="n-faq__col n-faq__col--left">
                            <div class=n-faq__expert-wrap>
                                <img class="js-scroll-add-cls-20 main-animate" src="img/535xNxn2-expert-faq.png.pagespeed.ic.Yb9UHXgI5L.png" width=535 alt="Эксперт">
                                <div class=n-faq__signature>
                                    <div class=n-faq__signature-box>
                                        <div class=n-faq__signature-name>Никулина Дина</div>
                                        <div class=n-faq__signature-position>Специалист по сопровождению</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="n-faq__col n-faq__col--right">
                            <div class="n-faq__subtitle main-subtitle">ТОП-5 вопросов о продлении прав</div>
                            <div class=n-faq__accordion>
                                <div class=n-faq__question-wrap>
                                    <div class="n-faq__question">
                                        <div class=n-faq__question-text>Когда нужно продлевать права на интеллектуальную собственность?</div>
                                        <div class=n-faq__question-arrow><svg class=icon-el>
                                                <use xlink:href="#arrow-down2"></use>
                                            </svg></div>
                                    </div>
                                    <div class="n-faq__text">
                                        <p>Срок действия товарного знака - 10 лет с даты подачи заявки. Заявление на продление необходимо подать в течение последнего года действия товарного знака. Продлевать действие товарного знака можно неограниченно</p>
                                        <p>Продлить патент на изобретение можно, только если вы производите агрохимикат, пестицид или лекарственное средство. Патент продлевается только 1 раз. Срок - 5 лет.</p>
                                        <p>Права на пром.образец продлеваются раз в 5 лет. Общий срок действия права при этом - не более 25 лет.</p>
                                        <p>Патент на полезную модель продлить нельзя.</p>
                                    </div>
                                </div>
                                <div class=n-faq__question-wrap>
                                    <div class=n-faq__question>
                                        <div class=n-faq__question-text>Сколько времени занимает продление патента?</div>
                                        <div class=n-faq__question-arrow><svg class=icon-el>
                                                <use xlink:href="#arrow-down2"></use>
                                            </svg></div>
                                    </div>
                                    <div class=n-faq__text>
                                        <p>Срок предоставления услуги Роспатентом - 60 рабочих дней. Патентное бюро Железно ускоряет процедуру: в среднем наши клиенты получают документ о продлении через 45 дней после оплаты пошлин.</p>
                                    </div>
                                </div>
                                <div class=n-faq__question-wrap>
                                    <div class=n-faq__question>
                                        <div class=n-faq__question-text>Какие пошлины платятся за продление прав на товарный знак, изобретение и пром.образец?</div>
                                        <div class=n-faq__question-arrow><svg class=icon-el>
                                                <use xlink:href="#arrow-down2"></use>
                                            </svg></div>
                                    </div>
                                    <div class=n-faq__text>
                                        <p>При продлении знака или патента через нашу компанию вы получаете скидку 30% на все пошлины Роспатента. </p>
                                        <p>Стандартный размер пошлин за продление товарного знака - <span class="no-wrap">20 000</span> + <span class="no-wrap">1 000 руб.</span> (за каждый из классов МКТУ свыше 5). Размер пошлин при работе с “Железно” - <span class="no-wrap">14 000</span> + <span class="no-wrap">700 руб.</span></p>
                                        <p><b>Ваша экономия - 30%.</b></p>
                                        <p>Если необходимо внести изменения в сведения о правообладателе, уплачивается дополнительная пошлина <span class="no-wrap">3 360 руб.</span></p>
                                        <p>Пошлины за поддержание в силе патента Российской Федерации на изобретение и полезную модель рассчитываются иначе. Сумма зависит от года действия патента. Оставьте заявку на сайте, и мы рассчитаем стоимость пошлин именно для вашего патента.</p>
                                    </div>
                                </div>
                                <div class=n-faq__question-wrap>
                                    <div class=n-faq__question>
                                        <div class=n-faq__question-text>Что делать, если не успели вовремя продлить свое право?</div>
                                        <div class=n-faq__question-arrow><svg class=icon-el>
                                                <use xlink:href="#arrow-down2"></use>
                                            </svg></div>
                                    </div>
                                    <div class=n-faq__text>
                                        <p>Если вы пропустили срок продления прав на интеллектуальную собственность - ничего страшного. Вы можете получить дополнительные 6 месяцев, чтобы продлить свои права. Для этого необходимо одновременно подавать ходатайство о продлении срока действия патента и заявление о восстановлении срока.</p>
                                        <p>Размер пошлин за восстановление срока: </p>
                                        <ul>
                                            <li>для товарного знака - <span class="no-wrap">2 500 руб.</span> С “Железно” - <span class="no-wrap">1 700 руб.</span></li>
                                            <li>для изобретения - <span class="no-wrap">3 000 рублей.</span> С “Железно” - <span class="no-wrap">2 100 руб</span< /li>
                                        </ul>
                                        <p><b>Ваша экономия при продлении через патентное бюро “Железно” - 30%.</b></p>
                                        <p>Если необходимо внести изменения в сведения о правообладателе, уплачивается дополнительная пошлина <span class="no-wrap">3 360 руб.</span></p>
                                        <p><b>P.S.</b> Если вы пропустили срок продления более чем на 6 месяцев, то знак все равно можно спасти. Оставьте заявку, мы объясним что нужно делать в таком случае.</p>
                                    </div>
                                </div>
                                <div class=n-faq__question-wrap>
                                    <div class=n-faq__question>
                                        <div class=n-faq__question-text>Какие документы потребуются для продления?</div>
                                        <div class=n-faq__question-arrow><svg class=icon-el>
                                                <use xlink:href="#arrow-down2"></use>
                                            </svg></div>
                                    </div>
                                    <div class=n-faq__text>
                                        <p>Только реквизиты вашей компании. Продление происходит полностью в электронном виде. Доверенность не требуется.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class=n-faq>
                <div class="n-faq__container container">
                    <div class=n-faq__grid>
                        <div class="n-faq__col n-faq__col--left">
                            <div class=n-faq__expert-wrap>
                                <img class="js-scroll-add-cls-20 main-animate" src="img/535xNxn2-expert-faq.png.pagespeed.ic.Yb9UHXgI5L.png" width=535 alt="Эксперт">
                                <div class=n-faq__signature>
                                    <div class=n-faq__signature-box>
                                        <div class=n-faq__signature-name>Никулина Дина</div>
                                        <div class=n-faq__signature-position>Специалист по сопровождению</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="n-faq__col n-faq__col--right">
                            <div class="n-faq__subtitle main-subtitle">ТОП-5 вопросов о продлении прав</div>
                            <div class=n-faq__accordion>
                                <div class=n-faq__question-wrap>
                                    <div class="n-faq__question">
                                        <div class=n-faq__question-text>Когда нужно продлевать права на интеллектуальную собственность?</div>
                                        <div class=n-faq__question-arrow><svg class=icon-el>
                                                <use xlink:href="#arrow-down2"></use>
                                            </svg></div>
                                    </div>
                                    <div class="n-faq__text">
                                        <p>Срок действия товарного знака - 10 лет с даты подачи заявки. Заявление на продление необходимо подать в течение последнего года действия товарного знака. Продлевать действие товарного знака можно неограниченно</p>
                                        <p>Продлить патент на изобретение можно, только если вы производите агрохимикат, пестицид или лекарственное средство. Патент продлевается только 1 раз. Срок - 5 лет.</p>
                                        <p>Права на пром.образец продлеваются раз в 5 лет. Общий срок действия права при этом - не более 25 лет.</p>
                                        <p>Патент на полезную модель продлить нельзя.</p>
                                    </div>
                                </div>
                                <div class=n-faq__question-wrap>
                                    <div class=n-faq__question>
                                        <div class=n-faq__question-text>Сколько времени занимает продление патента?</div>
                                        <div class=n-faq__question-arrow><svg class=icon-el>
                                                <use xlink:href="#arrow-down2"></use>
                                            </svg></div>
                                    </div>
                                    <div class=n-faq__text>
                                        <p>Срок предоставления услуги Роспатентом - 60 рабочих дней. Патентное бюро Железно ускоряет процедуру: в среднем наши клиенты получают документ о продлении через 45 дней после оплаты пошлин.</p>
                                    </div>
                                </div>
                                <div class=n-faq__question-wrap>
                                    <div class=n-faq__question>
                                        <div class=n-faq__question-text>Какие пошлины платятся за продление прав на товарный знак, изобретение и пром.образец?</div>
                                        <div class=n-faq__question-arrow><svg class=icon-el>
                                                <use xlink:href="#arrow-down2"></use>
                                            </svg></div>
                                    </div>
                                    <div class=n-faq__text>
                                        <p>При продлении знака или патента через нашу компанию вы получаете скидку 30% на все пошлины Роспатента. </p>
                                        <p>Стандартный размер пошлин за продление товарного знака - <span class="no-wrap">20 000</span> + <span class="no-wrap">1 000 руб.</span> (за каждый из классов МКТУ свыше 5). Размер пошлин при работе с “Железно” - <span class="no-wrap">14 000</span> + <span class="no-wrap">700 руб.</span></p>
                                        <p><b>Ваша экономия - 30%.</b></p>
                                        <p>Если необходимо внести изменения в сведения о правообладателе, уплачивается дополнительная пошлина <span class="no-wrap">3 360 руб.</span></p>
                                        <p>Пошлины за поддержание в силе патента Российской Федерации на изобретение и полезную модель рассчитываются иначе. Сумма зависит от года действия патента. Оставьте заявку на сайте, и мы рассчитаем стоимость пошлин именно для вашего патента.</p>
                                    </div>
                                </div>
                                <div class=n-faq__question-wrap>
                                    <div class=n-faq__question>
                                        <div class=n-faq__question-text>Что делать, если не успели вовремя продлить свое право?</div>
                                        <div class=n-faq__question-arrow><svg class=icon-el>
                                                <use xlink:href="#arrow-down2"></use>
                                            </svg></div>
                                    </div>
                                    <div class=n-faq__text>
                                        <p>Если вы пропустили срок продления прав на интеллектуальную собственность - ничего страшного. Вы можете получить дополнительные 6 месяцев, чтобы продлить свои права. Для этого необходимо одновременно подавать ходатайство о продлении срока действия патента и заявление о восстановлении срока.</p>
                                        <p>Размер пошлин за восстановление срока: </p>
                                        <ul>
                                            <li>для товарного знака - <span class="no-wrap">2 500 руб.</span> С “Железно” - <span class="no-wrap">1 700 руб.</span></li>
                                            <li>для изобретения - <span class="no-wrap">3 000 рублей.</span> С “Железно” - <span class="no-wrap">2 100 руб</span< /li>
                                        </ul>
                                        <p><b>Ваша экономия при продлении через патентное бюро “Железно” - 30%.</b></p>
                                        <p>Если необходимо внести изменения в сведения о правообладателе, уплачивается дополнительная пошлина <span class="no-wrap">3 360 руб.</span></p>
                                        <p><b>P.S.</b> Если вы пропустили срок продления более чем на 6 месяцев, то знак все равно можно спасти. Оставьте заявку, мы объясним что нужно делать в таком случае.</p>
                                    </div>
                                </div>
                                <div class=n-faq__question-wrap>
                                    <div class=n-faq__question>
                                        <div class=n-faq__question-text>Какие документы потребуются для продления?</div>
                                        <div class=n-faq__question-arrow><svg class=icon-el>
                                                <use xlink:href="#arrow-down2"></use>
                                            </svg></div>
                                    </div>
                                    <div class=n-faq__text>
                                        <p>Только реквизиты вашей компании. Продление происходит полностью в электронном виде. Доверенность не требуется.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=reviews>
                <div class="reviews__container container">
                    <div class=reviews__title>Реальные отзывы наших клиентов</div>
                    <div class=reviews__slider>

                        <div class=reviews__item-wrap>
                            <div class=reviews__item>
                                <div class=reviews__block-info>
                                    <div class=reviews__name>QFI</div>
                                    <a href="#" target=_blank class=reviews__tag>оптовая продажа непродовольственных товаров</a>
                                </div>
                                <img src="img/feedback/feedb1.jpg" alt="">
                            </div>
                        </div>

                        <div class=reviews__item-wrap>
                            <div class=reviews__item>
                                <div class=reviews__block-info>
                                    <div class=reviews__name>HARDCRAFT</div>
                                    <a href="#" target=_blank class=reviews__tag>изготовление мебели</a>
                                </div>
                                <img src="img/feedback/feedb2.jpg" alt="">
                            </div>
                        </div>

                        <div class=reviews__item-wrap>
                            <div class=reviews__item>
                                <div class=reviews__block-info>
                                    <div class=reviews__name>Jeweler One Master</div>
                                    <a href="#" target=_blank class=reviews__tag>Ювелирная мастерская</a>
                                </div>
                                <img src="img/feedback/feedb3.jpg" alt="">
                            </div>
                        </div>

                        <div class=reviews__item-wrap>
                            <div class=reviews__item>
                                <div class=reviews__block-info>
                                    <div class=reviews__name>LASCALI</div>
                                    <a href="#" target=_blank class=reviews__tag>производство декоративной и лечебной косметики</a>
                                </div>
                                <img src="img/feedback/feedb4.jpg" alt="">
                            </div>
                        </div>

                        <div class=reviews__item-wrap>
                            <div class=reviews__item>
                                <div class=reviews__block-info>
                                    <div class=reviews__name>MALVICOSMETICS</div>
                                    <a href="#" target=_blank class=reviews__tag>производство косметики</a>
                                </div>
                                <img src="img/feedback/feedb5.jpg" alt="">
                            </div>
                        </div>

                        <div class=reviews__item-wrap>
                            <div class=reviews__item>
                                <div class=reviews__block-info>
                                    <div class=reviews__name>TWOCSU </div>
                                    <a href="#" target=_blank class=reviews__tag>производство топливных брикетов из дерева</a>
                                </div>
                                <img src="img/feedback/feedb6.jpg" alt="">
                            </div>
                        </div>

                        <div class=reviews__item-wrap>
                            <div class=reviews__item>
                                <div class=reviews__block-info>
                                    <div class=reviews__name>ГРИЛЬВИЧ</div>
                                    <a href="#" target=_blank class=reviews__tag>ресторан, общепит, фудкорт, доставка еды</a>
                                </div>
                                <img src="img/feedback/feedb7.jpg" alt="">
                            </div>
                        </div>

                        <div class=reviews__item-wrap>
                            <div class=reviews__item>
                                <div class=reviews__block-info>
                                    <div class=reviews__name>МУРЛЭНД</div>
                                    <a href="#" target=_blank class=reviews__tag>производство и продажа одежды для животных</a>
                                </div>
                                <img src="img/feedback/feedb8.jpg" alt="">
                            </div>
                        </div>

                        <div class=reviews__item-wrap>
                            <div class=reviews__item>
                                <div class=reviews__block-info>
                                    <div class=reviews__name>ЯРАД</div>
                                    <a href="#" target=_blank class=reviews__tag>магазин универсам, одежда, обувь, детские вещи</a>
                                </div>
                                <img src="img/feedback/feedb9.jpg" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="reviews__arrows g-slider-arrow"></div>
                    <div class="reviews__dots g-slider-dots"></div>
                </div>
            </div>

        </div>

    </main>

    <div class="page-search none" id=page-search-event>
        <div class=page-search__form-container>
            <form action="search/" method=GET class=form-search>
                <input type=text placeholder="Напишите, что вы ищите" required="" name=q value="">
                <input class=search__input type=submit name=s value="Найти" placeholder="" required="">
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="footer__wrapper container">
            <div class="footer__top">
                <div class="footer__logo">
                    <div class="img-container">
                        <picture>
                            <img src="img/logo-footer.jpg" alt="Патентное бюро Железно" title="Официальный сайт патетного бюро Железно">
                        </picture>
                    </div>
                    <p>Патентное бюро</p>
                </div>
                <ul class="footer__offer">
                    <li class="footer__offer-item"><a href="https://tovarnyj-znak.ru" target="_blank">Регистрация товарного знака</a></li>
                    <li class="footer__offer-item"><a href="https://tovarnyj-znak.ru/dogovor-otchuzhdeniya-peredacha-prava" target="_blank">Отчуждение товарного знака</a></li>
                    <li class="footer__offer-item"><a href="https://tovarnyj-znak.ru/licenzionnyj-dogovor" target="_blank">Лицензионный договор</a></li>
                    <li class="footer__offer-item"><a href="https://tovarnyj-znak.ru/mezhdunarodnaya-registraciya" target="_blank">Международная регистрация</a></li>
                </ul>
                <div class="footer__contacts">
                    <a class="footer__phone phone" href="tel:84951047454">8 (495) 104-74-54</a>
                    <a class="footer__email email" href="mailto:info@tovarnyj-znak.ru">info@tovarnyj-znak.ru</a>
                    <p class="footer__whatsapp whatsapp"><a href="//api.whatsapp.com/send?phone=79229092784<?= $whatsapp_text ?>" target="_blank">Написать в Whatsapp</a></p>
                </div>
            </div>
            <div class="footer__line"></div>
            <div class="footer__bottom">
                <div class="footer__requisites">
                    <p>ООО Патентное бюро "ЖЕЛЕЗНО"</p>
                    <p>ИНН 4345497285</p>
                    <p>ОГРН 1194350012867</p>
                </div>
                <div class="footer__copyright">
                    <div class="docs">
                        <p><a href="docs/soglashenie.pdf">Пользовательское соглашение</a></p>
                        <p><a href="docs/confidentiality.pdf">Политика конфиденциальности</a></p>
                    </div>
                    <p>Все права защищены. Использование материалов разрешено только с согласия правообладателей.</p>
                    <p>Полное или частичное копирование сайта запрещено и преследуется по закону. <a href="/docs/sout.pdf" rel="noindex, nofollow" target="_blank"> СОУТ</a></p>
                </div>
            </div>
    </footer>

    <svg style="display:none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

        <symbol id=arrow-down width=8 height=6 viewBox="0 0 8 6" fill=none xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L4 4L7 1" stroke-width=2 stroke-linecap=round />
        </symbol>

        <symbol id=close viewBox="0 0 22 21" fill=none xmlns="http://www.w3.org/2000/svg">
            <path fill-rule=evenodd clip-rule=evenodd d="M21.3415 0.585787C20.5604 -0.195262 19.2941 -0.195262 18.513 0.585787L1.5841 17.5147C0.803055 18.2958 0.803055 19.5621 1.5841 20.3431C2.36515 21.1242 3.63148 21.1242 4.41253 20.3431L21.3415 3.41421C22.1225 2.63317 22.1225 1.36683 21.3415 0.585787Z" fill="#BAC0C7" />
            <path fill-rule=evenodd clip-rule=evenodd d="M21.341 20.3434C22.122 19.5624 22.122 18.296 21.341 17.515L4.41204 0.586054C3.63099 -0.194994 2.36466 -0.194994 1.58361 0.586054C0.802565 1.3671 0.802565 2.63343 1.58361 3.41448L18.5125 20.3434C19.2936 21.1245 20.5599 21.1245 21.341 20.3434Z" fill="#BAC0C7" />
        </symbol>

        <svg id=phone viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule=evenodd clip-rule=evenodd d="M3.08692 0.290058L5.17253 2.32046C5.51205 2.70721 5.51205 3.33567 5.17253 3.72241L4.15398 4.68927C4.73601 6.04288 5.31804 7.00974 6.14258 7.83157C7.01563 8.70174 7.98568 9.28186 9.29525 9.81363L10.2653 8.84677C10.6048 8.50837 11.2354 8.50837 11.6234 8.84677L13.709 10.9255C14.097 11.3123 14.097 11.9407 13.709 12.3275L12.7389 13.2943C9.00424 17.0167 -3.0244 4.97933 0.710294 1.25692L1.68035 0.290058C2.06837 -0.096686 2.6989 -0.096686 3.08692 0.290058Z" />
        </svg>


        <symbol id=arrow-l viewBox="0 0 30 30" fill=none xmlns="http://www.w3.org/2000/svg">
            <path d="M14.0243 14.5032L19.7554 8.89146C19.9132 8.73732 20 8.53122 20 8.31146C20 8.09159 19.9132 7.88561 19.7554 7.73122L19.2532 7.23976C19.0956 7.08512 18.885 7 18.6606 7C18.4361 7 18.2258 7.08512 18.0681 7.23976L11.2444 13.921C11.0861 14.0759 10.9994 14.2828 11 14.5028C10.9994 14.7238 11.0859 14.9305 11.2444 15.0855L18.0617 21.7602C18.2194 21.9149 18.4298 22 18.6544 22C18.8788 22 19.0892 21.9149 19.247 21.7602L19.749 21.2688C20.0757 20.9489 20.0757 20.4282 19.749 20.1084L14.0243 14.5032Z" fill="#D1D5DC" />
        </symbol>

        <symbol id=arrow-r viewBox="0 0 30 30" fill=none xmlns="http://www.w3.org/2000/svg">
            <path d="M15.9757 15.4968L10.2446 21.1085C10.0868 21.2627 10 21.4688 10 21.6885C10 21.9084 10.0868 22.1144 10.2446 22.2688L10.7468 22.7602C10.9044 22.9149 11.115 23 11.3394 23C11.5639 23 11.7742 22.9149 11.9319 22.7602L18.7556 16.079C18.9139 15.9241 19.0006 15.7172 19 15.4972C19.0006 15.2762 18.9141 15.0695 18.7556 14.9145L11.9383 8.23976C11.7806 8.08512 11.5702 8 11.3456 8C11.1212 8 10.9108 8.08512 10.753 8.23975L10.251 8.73122C9.92428 9.0511 9.92427 9.57183 10.251 9.89158L15.9757 15.4968Z" fill="#D1D5DC" />
        </symbol>

        <symbol id=arrow-l2 viewBox="0 0 31 18" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule=evenodd clip-rule=evenodd d="M8.39373 16.7648C7.92101 17.3037 7.14866 17.3151 6.67602 16.7617L0.36076 9.56123C-0.120563 9.02773 -0.11988 8.14484 0.360579 7.61134L6.6759 0.411489C7.14824 -0.142384 7.92135 -0.130219 8.39373 0.408321C8.8651 0.944981 8.8558 1.81849 8.39975 2.35659L8.3934 2.36395L4.13805 7.20627L29.7944 7.20627C30.4729 7.20627 31 7.83999 31 8.59234C31 9.35554 30.4629 9.96632 29.7944 9.96755L4.13645 9.96755L8.39373 14.8211C8.86182 15.354 8.86109 16.232 8.39373 16.7648Z" />
        </symbol>

        <symbol id=arrow-r2 viewBox="0 0 31 18" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule=evenodd clip-rule=evenodd d="M22.6063 0.408077C23.079 -0.130842 23.8513 -0.142206 24.324 0.411116L30.6392 7.61162C31.1206 8.14512 31.1199 9.02801 30.6394 9.56151L24.3241 16.7614C23.8518 17.3152 23.0787 17.3031 22.6063 16.7645C22.1349 16.2279 22.1442 15.3544 22.6003 14.8163L22.6066 14.8089L26.862 9.96658H1.20562C0.527067 9.96658 0 9.33286 0 8.58051C0 7.81732 0.53712 7.20654 1.20562 7.2053L26.8636 7.20531L22.6063 2.35175C22.1382 1.81882 22.1389 0.940901 22.6063 0.408077Z" />
        </symbol>

        <symbol id=btn-arrow viewBox="0 0 25 24" fill=none xmlns="http://www.w3.org/2000/svg">
            <path fill-rule=evenodd clip-rule=evenodd d="M9.79289 16.7071C9.40237 16.3166 9.40237 15.6834 9.79289 15.2929L13.0858 12L9.79289 8.70711C9.40237 8.31658 9.40237 7.68342 9.79289 7.29289C10.1834 6.90237 10.8166 6.90237 11.2071 7.29289L15.9142 12L11.2071 16.7071C10.8166 17.0976 10.1834 17.0976 9.79289 16.7071Z" fill=white />
            <circle opacity=0.5 cx=12.5 cy=12 r=11.5 stroke=white />
        </symbol>

        <symbol id=arrow-l3 viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule=evenodd clip-rule=evenodd d="M6.70711 9.70711C7.09763 9.31658 7.09763 8.68342 6.70711 8.29289L3.41421 5L6.70711 1.70711C7.09763 1.31658 7.09763 0.683417 6.70711 0.292893C6.31658 -0.0976315 5.68342 -0.0976315 5.29289 0.292893L0.585787 5L5.29289 9.70711C5.68342 10.0976 6.31658 10.0976 6.70711 9.70711Z" />
        </symbol>

        <symbol id=arrow-r3 viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule=evenodd clip-rule=evenodd d="M0.292893 9.70711C-0.0976311 9.31658 -0.0976312 8.68342 0.292893 8.29289L3.58579 5L0.292893 1.70711C-0.0976315 1.31658 -0.0976315 0.683417 0.292893 0.292893C0.683417 -0.0976315 1.31658 -0.0976315 1.70711 0.292893L6.41421 5L1.70711 9.70711C1.31658 10.0976 0.683418 10.0976 0.292893 9.70711Z" />
        </symbol>

        <symbol id=arrow-down2 viewBox="0 0 15 9" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.49683 5.97567L13.1085 0.244616C13.2627 0.086811 13.4688 -1.82596e-08 13.6885 -1.5639e-08C13.9084 -1.3017e-08 14.1144 0.0868111 14.2688 0.244616L14.7602 0.746803C14.9149 0.904359 15 1.11497 15 1.33941C15 1.56385 14.9149 1.77422 14.7602 1.9319L8.07902 8.75563C7.92415 8.91393 7.7172 9.00062 7.4972 9C7.27622 9.00062 7.06951 8.91406 6.91451 8.75563L0.239756 1.93825C0.0851212 1.78057 8.85994e-08 1.5702 9.12773e-08 1.34564C9.39537e-08 1.1212 0.0851213 0.910836 0.239756 0.753031L0.731219 0.250969C1.0511 -0.0757267 1.57183 -0.0757267 1.89159 0.250969L7.49683 5.97567Z" />
        </symbol>

    </svg>

    <div id="call-modal" class="form-popup">
        <div class="form-container">
            <p class="modal-title">Заказать звонок</p>
            <p class="modal-subtitle">Мы перезвоним в течение 10 минут</p>
            <form method="post" action="success.php">
                <div class="hide"><label><input type="text" name="name_family" placeholder="Ваше имя фамилия"></label></div>
                <input type="hidden" name="title" value="Call-order"><span class="name"></span>
                <label for="name" class="columns"><input type="text" name="name" placeholder="Ваше имя" data-hint="имя" autocomplete="off"><span class="name"></span></label>
                <label for="phone" class="columns"><input type="text" name="phone" placeholder="Ваш телефон" data-hint="телефон" autocomplete="off"><span class="phone"></span></label>
                <input type="submit" value="Заказать звонок" class="g-btn6">
            </form>
        </div>
    </div>

    <div id="step1" class="form-popup">
        <div class="form-container">
            <p class="modal-title">Введите контактные данные</p>
            <p class="modal-subtitle">(шаг 1 из 2)</p>
            <form method="post">
                <div class="hide"><label><input type="text" name="name_family" placeholder="Ваше имя фамилия"></label></div>
                <input type="hidden" name="title" value="Call-order"><span class="name"></span>
                <label for="name" class="columns"><input type="text" name="name" placeholder="Имя" data-hint="имя" autocomplete="off"><span class="name"></span></label>
                <label for="phone" class="columns"><input type="tel" name="phone" placeholder="Телефон" data-hint="телефон" autocomplete="off"><span class="phone"></span></label>
                <!-- <input type="submit" value="Далее" class="g-btn6"> -->
                <!--                 <a class="g-btn6 fancybox" data-src="#step2" data-fancybox="" href="">Далее</a> -->
                <!--  <a class="g-btn6" href="#" id="call-second-step">Далее</a> -->
                <input type="submit" id="call-second-step" value="Далее" class="g-btn6">
            </form>
        </div>
    </div>

    <div id="step2" class="form-popup">
        <div class="form-container">
            <p class="modal-title">Введите данные о знаке</p>
            <p class="modal-subtitle">(шаг 2 из 2)</p>
            <!--             <form method="post" action="success-prodlenie.php"> -->
            <form method="post" action="success-prodlenie.php">
                <div class="hide"><label><input type="text" name="name_family" placeholder="Ваше имя фамилия"></label></div>
                <input type="hidden" name="title" value="step-two"><span class="name"></span>
                <label for="number" class="columns"><input type="text" name="number" placeholder="Номер свидетельства о регистрации" data-hint="номер свидетельства" autocomplete="off"><span class="name number"></span></label>
                <label for="owner" class="columns"><input type="text" name="owner" placeholder="Правообладатель знака" data-hint="правообладателя" autocomplete="off"><span class="name"></span></label>
                <label for="email" class="columns"><input type="email" name="email" placeholder="e-mail" data-hint="e-mail" autocomplete="off"><span class="email"></span></label>
                <div class="form-subtext">*на почту придут документы о продлении</div>
                <input id="send-order" type="submit" value="Отправить" class="g-btn6">
            </form>
        </div>
    </div>

    <script src="js/jquery.maskedinput.js"></script>
</body>

</html>