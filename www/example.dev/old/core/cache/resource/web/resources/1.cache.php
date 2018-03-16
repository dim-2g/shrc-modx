<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Home',
    'longtitle' => 'Congratulations!',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1514271169,
    'editedby' => 1,
    'editedon' => 1520323381,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!doctype html>
<html>
<head>
    {set $doc = $_modx->resource}
    <base href="{$_modx->config.site_url}" />
    <meta charset="utf-8">
    <title>{$doc.metaTitle ?: $doc.pagetitle}</title>
    <meta name="keywords" content="{$doc.metaKeywords}"/>
    <meta name="description" content="{$doc.metaDescription}"/>
{block \'bodystyle\'}{/block}
</head>
<body class="{block \'bodyclass\'}{/block}" >
    
<div class="wrapper">
    {block \'header\'}

    {/block}
    {block \'crumbs\'}
    <div class="crumbs">
        <div class="container">
            {$_modx->runSnippet(\'pdoCrumbs\', [
                \'showHome\'=>1,
                \'exclude\'=>12,
            ])}
        </div>
    </div>
    {/block}
    {block \'body\'}
    <div class="content">
        <div class="container">
            {block \'content\'}
            {if $doc.longtitle}
            <h1 class="header1">{$doc.longtitle}</h1>
            {else}
            <div class="header1">{$doc.pagetitle}</div>
            {/if}
            <div class="stext">
            {$doc.content}
            </div>
            {/block}
        </div>
    </div>
    {/block}
{ignore}

{/ignore}
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
    ),
    'modSnippet' => 
    array (
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);