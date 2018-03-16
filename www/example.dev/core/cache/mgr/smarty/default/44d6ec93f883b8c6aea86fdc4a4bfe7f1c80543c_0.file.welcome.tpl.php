<?php /* Smarty version 3.1.27, created on 2018-03-14 09:47:30
         compiled from "/var/www/example.dev/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9129223585aa8efb236c383_82375650%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44d6ec93f883b8c6aea86fdc4a4bfe7f1c80543c' => 
    array (
      0 => '/var/www/example.dev/manager/templates/default/welcome.tpl',
      1 => 1520274307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9129223585aa8efb236c383_82375650',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aa8efb23c6ee6_09107227',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8efb23c6ee6_09107227')) {
function content_5aa8efb23c6ee6_09107227 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9129223585aa8efb236c383_82375650';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>