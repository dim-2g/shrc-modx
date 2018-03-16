{extends 'file:templates/layout.tpl'}

{block 'css'}
<link rel="stylesheet" href="/assets/template/vendor/photobox/photobox.css">
{/block}

{block 'bodyclass'}main{/block}

{block 'body'}
<div class="main-top">
    <div class="logo-box">
        <a href="/"><img itemprop="image url" src="/assets/template/img/logo-main.png" alt=""></a>
    </div>

    <div class="main-top__line">
        <div class="search">
            <form action="">
                <input type="text" class="search__input" placeholder=" Поиск по артикулу или номеру детали"/>
                <!-- <button type="submit" class="search__submit"></button> -->
                <button class="btn-cogs search__submit">
                <span class="cogs-live">
                    <span class="cogs-live__box"></span>
                </span>
                </button>
            </form>
        </div>
        <div class="main-top__menus">
            <div class="m-catalog-menu" toggle-class="active" >

                <a class="m-catalog-menu__caption" href="#">
                    <i class="m-catalog-menu__burger"></i>
                    <span class="m-catalog-menu__title">Каталог</span>
                    <i class="m-catalog-menu__arrow"></i>
                </a>
                <div class="m-catalog-menu__list">
                    <div class="m-catalog-menu__body">
                        {$_modx->runSnippet('pdoMenu', [
                            'parents'=>'5',
                            'templates'=>'-16',
                            'level'=>2,
                            'outerClass'=>'topmenu__list',
                            'innerClass'=>'',
                            'resources'=>'-469',
                            'parentClass'=>'has-child',
                        ])}
                    </div>
                </div>

            </div>
            <div class="m-cabinet-menu">
                <a class="m-cabinet-menu__caption auth-toggle" href="#authform">
                    <span class="m-catalog-menu__title">Личный кабинет</span>
                    <i class="m-cabinet-menu__arrow"></i>
                </a>

            </div>
            <div class="main-top__cart">
                <img src="/assets/template/img/menu-truck.png" alt="">
            </div>
        </div>
    </div>
</div>


<div style="display: none;">
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

{block 'main-center'}
<div class="main-center">
<div class="main-navigation--mobile">
    <div>
        <a href="{3 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-hino.png" alt=""  ></a>
    </div>
    <div>
        <a href="{2 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-isuzu.png" alt="" ></a>
    </div>
    <div>
        <a href="{4 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-mitsubishi.png" alt="" ></a>
    </div>
</div>
<div class="main-navigation">

    <div class="carousel" data-gap="20">

        <figure style="transform-origin: 50% 50% -600.159px; transform: rotateY(0rad);">
            <div slide-index="1" style="">
                <div class="main-navigation__item">
                    <a href="{3 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-hino.png" alt="" ></a>
                </div>
            </div>
            <div slide-index="2" style="transform-origin: 50% 50% -1403.25px; transform: rotateY(0.523599rad);">
                <div class="main-navigation__item">
                    <a href="{2 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-isuzu.png" alt="" ></a>
                </div>
            </div>
            <div slide-index="3" style="transform-origin: 50% 50% -1403.25px; transform: rotateY(1.0472rad);">
                <div class="main-navigation__item">
                    <a href="{4 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-mitsubishi.png" alt="" ></a>
                </div>
            </div>
            <div slide-index="4" style="transform-origin: 50% 50% -1403.25px; transform: rotateY(1.5708rad);">
                <div class="main-navigation__item">
                    <a href="{3 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-hino.png" alt="" ></a>
                </div>
            </div>
            <div slide-index="5" style="transform-origin: 50% 50% -1403.25px; transform: rotateY(2.0944rad);">
                <div class="main-navigation__item">
                    <a href="{2 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-isuzu.png" alt=""  ></a>
                </div>
            </div>
            <div slide-index="6" style="transform-origin: 50% 50% -1403.25px; transform: rotateY(2.61799rad);">
                <div class="main-navigation__item">
                    <a href="{4 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-mitsubishi.png" alt=""  ></a>
                </div>
            </div>
            <div slide-index="7" style="transform-origin: 50% 50% -1403.25px; transform: rotateY(3.14159rad);">
                <div class="main-navigation__item">
                    <a href="{3 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-hino.png" alt=""  ></a>
                </div>
            </div>
            <div slide-index="8" style="transform-origin: 50% 50% -1403.25px; transform: rotateY(3.66519rad);">
                <div class="main-navigation__item">
                    <a href="{2 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-isuzu.png" alt=""  ></a>
                </div>
            </div>
            <div slide-index="9" style=" transform-origin: 50% 50% -1403.25px; transform: rotateY(4.18879rad);">
                <div class="main-navigation__item">
                    <a href="{4 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-mitsubishi.png" alt=""  ></a>
                </div>
            </div>
            <div slide-index="10" style=" transform-origin: 50% 50% -1403.25px; transform: rotateY(4.71239rad);">
                <div class="main-navigation__item">
                    <a href="{3 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-hino.png" alt=""  ></a>
                </div>
            </div>
            <div slide-index="11" style=" transform-origin: 50% 50% -1403.25px; transform: rotateY(5.23599rad);">
                <div class="main-navigation__item">
                    <a href="{2 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-isuzu.png" alt=""  ></a>
                </div>
            </div>
            <div slide-index="12" style=" transform-origin: 50% 50% -1403.25px; transform: rotateY(5.75959rad);">
                <div class="main-navigation__item">
                    <a href="{4 | url}" ajax-load-dis=".main-center"><img src="/assets/template/img/brand-mitsubishi.png" alt=""  ></a>
                </div>
            </div>
        </figure>


    </div>

    <button class="main-nav prev">
        <svg class="arrow-live">
            <polygon class="arrow-top" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3 "/>
            <polygon class="arrow-middle" points="37.6,45.8 0.8,18.7 4.4,16.4 37.6,41.2 71.2,16.4 74.5,18.7 "/>
            <polygon class="arrow-bottom" points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "/>
        </svg>
    </button>

    <button class="main-nav next">
        <svg class="arrow-live">
            <polygon class="arrow-top" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3 "/>
            <polygon class="arrow-middle" points="37.6,45.8 0.8,18.7 4.4,16.4 37.6,41.2 71.2,16.4 74.5,18.7 "/>
            <polygon class="arrow-bottom" points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "/>
        </svg>
    </button>


</div>

</div>
{/block}


<div class="main-footer">
    <div class="main-footer__left">
        <div class="main-footer__copyright">
            Copyright 2018 · All rights reserved.
        </div>
    </div>
    <div class="main-footer__right">
        <a href="tel:{472 | resource : 'phone' | tel}" class="main-footer__phone metal-text">{472 | resource : 'phone'}</a>
    </div>
</div>

{/block}