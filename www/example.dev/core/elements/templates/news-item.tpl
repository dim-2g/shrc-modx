{extends 'file:templates/layout.tpl'}

{block 'sidebar'}
	<div class="leftmenu">

        {$_modx->runSnippet('pdoMenu', [
            'parents'=>'0',
            'resources'=>'473,474,475,476,477',
            'level'=>5,
            'showHidden'=>1,
        	'tpl'=>'@INLINE <li class="{$classnames}"><a href="{$link}" {$attributes}><span>{$menutitle}</span></a>{$wrapper}</li>'
        ])}

    </div>
{/block}

