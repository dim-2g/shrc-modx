<!doctype html>
<html>
<head>{set $doc = $_modx->resource}
    <base href="{$_modx->config.site_url}" />
    <meta charset="utf-8">
    <title>{$doc.metaTitle ?: $doc.pagetitle}</title>
    <meta name="keywords" content="{$doc.metaKeywords}"/>
    <meta name="description" content="{$doc.metaDescription}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="/assets/template/vendor/slick/slick.css">
    <link rel="stylesheet" href="/assets/template/vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="/assets/template/vendor/magnific-popup/magnific-popup.css">
    
    <!--[if lt IE 9]><link rel="stylesheet" href="/assets/template/vendor/photobox/photobox.ie.css"><![endif]-->

    <link rel="stylesheet" href="/assets/template/css/main.css">
    <link rel="stylesheet" href="/assets/template/css/custom.css">

</head>
<body class="{block 'bodyclass'}{/block}">

<div class="loaderArea">
   <div class="loader">
       <span class="cogs-live">
            <span class="cogs-live__box"></span>
        </span>
   </div>
</div>

<div class="header__burger">
    <a href="#" class="burger toogle-mobile-menu" data-mfp-src="#main-menu"></a>
</div>
{block 'body'}
<header class="header">
    <div class="container">
        <div class="f-row header__topline">
            <a href="/" class="header__logo"><img itemprop="image url" src="/assets/template/img/logo.png" alt=""></a>
            <div class="header__search search">
                <form action="">
                    <input type="text" class="search__input" placeholder=" Поиск по артикулу или номеру детали"/>
                    <button class="btn-cogs search__submit">
                        <span class="cogs-live">
                            <span class="cogs-live__box"></span>
                        </span>
                    </button>
                </form>
            </div>
            <div class="header__phones">
                <a href="tel:{472 | resource : 'phone' | tel}" class="header__phone metal-text">{472 | resource : 'phone'}</a>
            </div>
        </div>
        <div class="f-row topmenu">
            <div class="topmenu__left sidebar">
                <a href="#" class="aside-toggle">
                    <span>Категории</span>
                </a>
            </div>
            <div class="topmenu__center">
                <a href="#topmenu" class="topmenu-toggle"></a>
                <div id="topmenu" class="topmenu__mobile">
                    {$_modx->runSnippet('pdoMenu', [
                    'parents'=>'0',
                    'level'=>1,
                    'templates'=>'-16',
                    ])}
                </div>
                {$_modx->runSnippet('pdoMenu', [
                    'parents'=>'0',
                    'templates'=>'-16',
                    'level'=>3,
                    'outerClass'=>'topmenu__list',
                    'innerClass'=>'',
                    'resources'=>'-469',
                    'parentClass'=>'has-child',
                ])}
                
                
                <ul class="topmenu__cabinet">
                    <li><a class="cabinet__label auth-toggle" href="#authform"><span>Личный кабинет</span></a>
                        <div class="cabinet__wrapper">
                            <div class="cabinet__box" id="authform">
                                <div class="cabinet__header">
                                    <span>Вход</span>
                                    <a href="#">Регистрация</a>
                                </div>
                                <form action="">
                                    <input type="text" placeholder="Логин">
                                    <input type="password" placeholder="Пароль">
                                    <div class="cabinet__actions">
                                        <div class="cabinet__links">
                                            <label class="cabinet__rememmber">
                                                <input name="q2" type="checkbox" class="checkbox">
                                                <span class="checkbox-custom"></span>
                                                <span class="label"> Запомнить</span>
                                            </label>
                                            <a class="cabinet__forgot" href="#">Забыли пароль?</a>
                                        </div>
                                        <div class="cabinet__submit">
                                            <button class="btn">Войти</button>
                                        </div>
                                    </div>
                                    <div class="cabinet-oauth">
                                        <div class="cabinet-oauth__title">Войти с помощью:</div>
                                        <div class="cabinet-oauth__services">
                                            <a href="" class="cabinet-oauth__service cabinet-oauth__service--vk"></a>
                                            <a href="" class="cabinet-oauth__service cabinet-oauth__service--facebook"></a>
                                            <a href="" class="cabinet-oauth__service cabinet-oauth__service--google"></a>
                                            <a href="" class="cabinet-oauth__service cabinet-oauth__service--mailru"></a>
                                            <a href="" class="cabinet-oauth__service cabinet-oauth__service--windows"></a>
                                            <a href="" class="cabinet-oauth__service cabinet-oauth__service--yandex"></a>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="topmenu__right">
                <img src="/assets/template/img/menu-truck.png" alt="" />
            </div>
        </div>
    </div>

</header>


<section class="middle">
    <div class="container">
        <div class="f-row f-row__content">
            <aside class="sidebar">
                {block 'sidebar'}
                <div class="aside-catalog">
                    {set $parent = $doc.id | pdofield : '{"top":1,"field":"id"}'}
                    {$_modx->runSnippet('pdoMenu', [
                        'parents'=>$parent,
                        '-templates'=>'2,3,4,5',
                        'level'=>1,
                        'tpl'=>'@INLINE <li{$classes}><a href="{$link}" {$attributes}><span>{$menutitle}</span></a>[[+wrapper]]</li>',
                    ])}
                </div>
                {/block}
            </aside>

            <div class="content ">
                {block 'content'}

                {include 'file:chunks/content/crumbs.tpl'}
                <div class="text-box">
                    <h1 class="header1">{$doc.pagetitle ?: $doc.longtitle}</h1>
                    {$doc.content}
                </div>

                {/block}


            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <a href="#" class="footer__toggle footer-toggle">Меню</a>
    <div class="container">

        <div class="f-row footer__box">
            <div class="footer__left sidebar">
                <div class="footer__logo">
                    <img src="/assets/template/img/footer__logo.png" alt="">
                </div>
                <div class="footer-review">
                    <div class="footer-review__caption">Отзывы</div>
                    <div class="footer-review__text">Очень хороший магазин</div>
                    <div class="footer-review__author">Елена</div>
                    <div class="footer-review__stars">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="footer-review__more">
                        <a href="#review">Еще отзывы (3150)</a>
                    </div>
                </div>
            </div>
            <div class="footer__center">
                <div class="footer-box">
                    <div class="footer-box__caption">Информация</div>
                    {$_modx->runSnippet('pdoMenu', [
                        'parents'=>1603,
                        'level'=>1,
                        'outerClass'=>'footer-box__list',
                    ])}
                </div>
                <div class="footer-box">
                    <div class="footer-box__caption">Для клиентов</div>
                    {$_modx->runSnippet('pdoMenu', [
                        'parents'=>1592,
                        'level'=>1,
                        'outerClass'=>'footer-box__list',
                    ])}
                </div>
                <div class="footer-box">
                    <div class="footer-box__caption">Доставка</div>
                    {$_modx->runSnippet('pdoMenu', [
                        'parents'=>1598,
                        'level'=>1,
                        'outerClass'=>'footer-box__list',
                    ])}
                </div>
                <div class="footer-box">
                    <div class="footer-box__caption">Наши реквизиты</div>
                    <ul class="footer-box__list">
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="footer-box footer-box__double">
                    <div class="footer-box__top">
                        <div class="footer-box__caption">Наши партнеры</div>
                        <div class="footer-box__payments pay__list">
                            <span class="pay__yandex-walet"></span>
                            <span class="pay__sberbank"></span>
                            <span class="pay__visa"></span>
                            <span class="pay__mastercard"></span>
                        </div>
                    </div>
                    <div class="footer-box__bottom">
                        <div class="footer-box__caption">Наши соц сети</div>
                        <div class="footer-box__social social__list">
                            <a href="#" class="social__vk"></a>
                            <a href="#" class="social__instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__right">
                <a href="tel:{472 | resource : 'phone' | tel}" class="footer__phone metal-text">{472 | resource : 'phone'}</a>
                <div class="yandex-review">
                    <img src="/assets/template/img/tmp/yandex-review.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="f-row copyright">
            {472 | resource : 'copyright'}
        </div>
    </div>
</footer>
{/block}
    <script src="assets/template/vendor/jquery-3.2.1.min.js"></script>
    <script src="assets/template/vendor/slick/slick.js"></script>
    <script src="assets/template/vendor/magnific-popup/magnific-popup.js"></script>
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/assets/template/vendor/selectric/selectric.css" />
    <script src="/assets/template/vendor/selectric/jquery.selectric.min.js"></script>
    <link rel="stylesheet" href="/assets/template/vendor/animejs/anime.css" />
    <script src="assets/template/vendor/animejs/js/anime.2.1.0.js"></script>
    <script src="assets/template/js/scripts.js"></script>



    <script type="text/javascript" src="/assets/components/msearch2/js/web/default.js"></script>
    <script type="text/javascript" src="/assets/components/minishop2/js/web/default.js?v=14f1a1db65"></script>

    <script type="text/javascript">
        if ($("#mse2_mfilter").length) {
            if (window.location.hash != "" && mSearch2.Hash.oldbrowser()) {
                var uri = window.location.hash.replace("#", "?");
                window.location.href = document.location.pathname + uri;
            }
            else {
                mSearch2.initialize("body");
            }
        }
    </script>

</body>
</html>