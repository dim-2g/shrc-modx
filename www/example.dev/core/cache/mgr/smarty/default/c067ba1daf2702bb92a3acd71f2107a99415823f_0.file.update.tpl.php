<?php /* Smarty version 3.1.27, created on 2018-03-16 08:29:52
         compiled from "/var/www/example.dev/manager/templates/default/element/tv/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:581417925aab808050fb12_04396770%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c067ba1daf2702bb92a3acd71f2107a99415823f' => 
    array (
      0 => '/var/www/example.dev/manager/templates/default/element/tv/update.tpl',
      1 => 1520274307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '581417925aab808050fb12_04396770',
  'variables' => 
  array (
    'onTVFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aab8080527f58_41111455',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aab8080527f58_41111455')) {
function content_5aab8080527f58_41111455 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '581417925aab808050fb12_04396770';
?>
<div id="modx-panel-tv-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onTVFormPrerender']->value;

}
}
?>