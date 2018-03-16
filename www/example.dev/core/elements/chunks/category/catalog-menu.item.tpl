<ul class="category-list {$category_class} {$classnames}">
{$_modx->runSnippet('pdoMenu', [
    'parents'=>$id,
    'templates'=>'3',
    'level'=>1,
    'limit'=>12,
    'tplOuter'=>'@INLINE {$wrapper}',
])}
</ul>