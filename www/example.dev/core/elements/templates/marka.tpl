{extends 'file:templates/main.tpl'}

{block 'main-center'}
<div class="test">
<div class="main-center">

    <div class="main-section">
        <div class="main-brands">
            {$_modx->runSnippet('pdoMenu', [
                'parents'=>5,
                'templates'=>'4',
                'level'=>1,
                'includeTVs'=>'marka_class',
                'selfClass'=>'active',
                'hereClass'=>'open',
            	'tpl'=>'@FILE chunks/marka/menu-item.tpl',
                'tplOuter'=>'@INLINE {$wrapper}'
            ])}
        </div>
        <div class="main-models">
            <div class="main-models__list">
                {$_modx->runSnippet('pdoMenu', [
                    'parents'=>$doc.id,
                    'templates'=>'5',
                    'level'=>5,
                    'includeTVs'=>'main_icon',
                    'selfClass'=>'active',
                    'hereClass'=>'open',
                	'tpl'=>'@FILE chunks/marka/model-item.tpl',
                    'tplOuter'=>'@INLINE {$wrapper}'
                ])}
                <div class="main-models__circle"></div>
            </div>


            <div class="main-category">
                
            </div>


        </div>

        

    </div>



</div>

</div>
{/block}