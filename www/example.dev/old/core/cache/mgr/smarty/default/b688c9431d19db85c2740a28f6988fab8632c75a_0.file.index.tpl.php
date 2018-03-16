<?php /* Smarty version 3.1.27, created on 2018-03-06 07:59:58
         compiled from "/var/www/example.dev/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:677452005a9e4a7edbcc45_76436739%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b688c9431d19db85c2740a28f6988fab8632c75a' => 
    array (
      0 => '/var/www/example.dev/manager/templates/default/workspaces/index.tpl',
      1 => 1514271075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '677452005a9e4a7edbcc45_76436739',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a9e4a7eddf039_57175481',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a9e4a7eddf039_57175481')) {
function content_5a9e4a7eddf039_57175481 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '677452005a9e4a7edbcc45_76436739';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>