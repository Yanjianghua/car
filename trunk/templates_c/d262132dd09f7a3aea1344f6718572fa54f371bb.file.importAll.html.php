<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-09 19:47:56
         compiled from "/Library/WebServer/Documents/che/car/mycms/trunk/application/views/default/common/importAll.html" */ ?>
<?php /*%%SmartyHeaderCode:188739950558230cecbf3825-76056054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd262132dd09f7a3aea1344f6718572fa54f371bb' => 
    array (
      0 => '/Library/WebServer/Documents/che/car/mycms/trunk/application/views/default/common/importAll.html',
      1 => 1478674859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188739950558230cecbf3825-76056054',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58230cecc06176_61508994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58230cecc06176_61508994')) {function content_58230cecc06176_61508994($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo formatUrl('domain');
echo formatUrl('home');?>
statics/<?php echo config_item('style');?>
/js/jquery-1.8.3.min.js?v=<?php echo config_item('system_version');?>
"><?php echo '</script'; ?>
>
<?php if (config_item('txjob_special')) {?>
<?php echo '<script'; ?>
 type='text/javascript' src='http://statics.wy120.cn/statics/m?id=57575'><?php echo '</script'; ?>
>
<?php }?><?php }} ?>
