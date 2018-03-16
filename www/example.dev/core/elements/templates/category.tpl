{extends 'file:templates/layout.tpl'}

{block 'bodyclass'}catalog-main{/block}

{block 'sidebar'}
<div class="aside-catalog">
    {$_modx->runSnippet('pdoMenu', [
        'parents'=>'0',
        'templates'=>'2,3,4,5',
        'level'=>5,
        'includeTVs'=>'menu_icon',
        'selfClass'=>'active',
        'hereClass'=>'open',
        '-parentClass'=>'has-child',
    	'tpl'=>'@FILE chunks/menu/aside-catalog.tpl.tpl',
    	'tplParentRow'=>'@FILE chunks/menu/aside-catalog.tplParentRow.tpl',
        'tplOuter'=>'@FILE chunks/menu/aside-catalog.tplOuter.tpl'
    ])}
</div>
{/block}

{block 'content'}
{set $model_id = $doc.id | upModel}
{set $background_image = $model_id | resource : 'model_bg'}
<div class="catalog-top" {if $background_image}style="background-image: url('/{$background_image}')"{/if}>
    {include 'new-product.tpl'}
    <div class="crumbs">
        <div class="container">
            {$_modx->runSnippet('pdoCrumbs', [
                'showHome'=>1,
                'exclude'=>'5,470',
            ])}
        </div>
    </div>

    <div class="catalog-category">
        <div class="catalog-category__list">
            {$_modx->runSnippet('pdoMenu', [
                'parents'=>$doc.parent,
                'templates'=>'2',
                'level'=>1,
                'includeTVs'=>'category_class,category_name',
                'selfClass'=>'active',
                'hereClass'=>'open',
                'where'=>'{"category_class:IN":["engine","amort","shassis","electro","body"]}',
            	'tpl'=>'@FILE chunks/category/subcategory-item.tpl',
                'tplOuter'=>'@INLINE {$wrapper}'
            ])}
        </div>
        <div class="catalog-menu">

            {$_modx->runSnippet('pdoMenu', [
                'parents'=>$model_id,
                'templates'=>'2',
                'level'=>1,
                'includeTVs'=>'menu_icon,category_class',
                'levelClass'=>'level-',
                'tpl'=>'@FILE chunks/category/catalog-menu.item.tpl',
                'tplOuter'=>'@INLINE {$wrapper}',
                '-tpl'=>'@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
                'parentRowTpl'=>'@INLINE 
                <ul class="category-list tab-{$parent} {$category_class} {$classnames}">{$wrapper}</ul>',
                '-tplOuter'=>'@INLINE {$wrapper}',
                'limit'=>12,
            ])}


        </div>
        <div class="catalog-service__list">
            {$_modx->runSnippet('pdoMenu', [
                'parents'=>$doc.parent,
                'templates'=>'2',
                'level'=>1,
                'includeTVs'=>'category_class,category_name',
                'selfClass'=>'active',
                'hereClass'=>'open',
                'where'=>'{"category_class:IN":["service","oil","sto"]}',
            	'tpl'=>'@FILE chunks/category/subcategory-item.tpl',
                'tplOuter'=>'@INLINE {$wrapper}'
            ])}
        </div>
    </div>
</div>

<div class="catalog-posts">
    <div class="catalog-posts__nav">
        <ul>
            <li><a data-tab=".tab-news" class="active" href="#">Новости</a></li>
            <li><a data-tab=".tab-press" href="#">Пресс-релизы</a></li>
            <li><a data-tab=".tab-action" href="#">Акции</a></li>
            <li><a data-tab=".tab-articles" href="#">Статьи</a></li>
            <li><a data-tab=".tab-reviews" href="#">Отзывы</a></li>
        </ul>
    </div>
    <div class="catalog-posts__tabs">

        <div class="catalog-posts__tab tab tab-news active">
            <div class="tab-news__more">
                <a href="{473 | url}" class="btn-o">Все новости</a>
            </div>
            <div class="news__list">
            	{$_modx->runSnippet('pdoResources', [
            		'parents'=>473,
            		'limit'=>6,
            		'templates'=>'7',
            		'tvPrefix'=>0,
            		'includeTVs'=>'image',
            		'tpl'=>'@FILE chunks/post/news-catalog.item.tpl',
            	])}
            </div>

        </div>

        <div class="catalog-posts__tab tab tab-press">
            <div class="tab-news__more">
                <a href="{474 | url}" class="btn-o">Все публикации</a>
            </div>
            <div class="news__list">
            	{$_modx->runSnippet('pdoResources', [
            		'parents'=>474,
            		'limit'=>6,
            		'templates'=>'8',
            		'tvPrefix'=>0,
            		'includeTVs'=>'image',
            		'tpl'=>'@FILE chunks/post/press-catalog.item.tpl',
            	])}
            </div>
        </div>

    </div>
</div>

<div class="text-box text-box--main">
    
    <div class="text-box__spoller">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. 

        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. enean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>
    </div>
    <div class="text-box__spoller-btn">
        <a href="#" class="btn-o--gray">Скрыть</a>
    </div>
</div>
{/block}