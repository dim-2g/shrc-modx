<?php /* Smarty version 3.1.27, created on 2018-03-16 07:33:55
         compiled from "/var/www/example.dev/manager/templates/default/element/tv/renders/input/textbox.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10007346895aab7363d6a3b0_06934724%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cdeefdc5ab20dcbc17a34b32c65d2d3c5fd7f68' => 
    array (
      0 => '/var/www/example.dev/manager/templates/default/element/tv/renders/input/textbox.tpl',
      1 => 1520274307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10007346895aab7363d6a3b0_06934724',
  'variables' => 
  array (
    'tv' => 0,
    'style' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aab7363f065a5_60490963',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aab7363f065a5_60490963')) {
function content_5aab7363f065a5_60490963 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10007346895aab7363d6a3b0_06934724';
?>
<input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
	type="text" class="textfield"
	value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
"
	<?php echo $_smarty_tpl->tpl_vars['style']->value;?>

	tvtype="<?php echo $_smarty_tpl->tpl_vars['tv']->value->type;?>
"
/>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'textfield'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['minLength']) {?>,minLength: <?php echo $_smarty_tpl->tpl_vars['params']->value['minLength'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['maxLength']) {?>,maxLength: <?php echo $_smarty_tpl->tpl_vars['params']->value['maxLength'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['regex']) {?>,regex: new RegExp('<?php echo $_smarty_tpl->tpl_vars['params']->value['regex'];?>
')<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['regexText']) {?>,regexText: '<?php echo $_smarty_tpl->tpl_vars['params']->value['regexText'];?>
'<?php }?>
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
    MODx.makeDroppable(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>