<?php
$ids = array_merge(array($input), $modx->getParentIds($input));

foreach ($ids as $id) {
    $doc = $modx->getObject('modResource', $id);
    if ($doc->get('template')==5) {
        return $id;
    }
}
return '';
//return $modx->getParentIds($input, 10, array('template' => '5'));
return;
