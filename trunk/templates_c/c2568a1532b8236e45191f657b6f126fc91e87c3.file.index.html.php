<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-15 14:38:34
         compiled from "/Library/WebServer/Documents/che/car/mycms/trunk/application/views/admin/system/index.html" */ ?>
<?php /*%%SmartyHeaderCode:6169741958a3f76a70d160-19633646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2568a1532b8236e45191f657b6f126fc91e87c3' => 
    array (
      0 => '/Library/WebServer/Documents/che/car/mycms/trunk/application/views/admin/system/index.html',
      1 => 1478674854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6169741958a3f76a70d160-19633646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leibie' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58a3f76a7690c8_85895330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a3f76a7690c8_85895330')) {function content_58a3f76a7690c8_85895330($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<?php echo $_smarty_tpl->getSubTemplate ('../../common/importAll.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php echo '<script'; ?>
 src="/statics/admin/js/admin_system/data_table_body.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/statics/admin/js/admin_system/ad.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			function FindData() {
				$('#data_table_body').datagrid('load', {
					name: $('#name').val(),
					leibie: $('#leibie').val(),
					status: 1
				});
			}
		<?php echo '</script'; ?>
>
	</head>

	<body>
		<div id="window"></div>
		<div class="main">
			<div>
				<label>
					<input class="easyui-searchbox" id="name" style="width:100px" data-options="prompt:'请输入名称'" /> 名称：
					<select id="leibie" name="leibie">
						<option value="">不限</option>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['leibie']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
						<?php } ?>
					</select>类别
					<a href="javascript:FindData()" class="easyui-linkbutton" data-options="iconCls:'icon-search'">查询</a>
				</label>
			</div>
			<div id="data_table" style="float: left;">
				<table id="data_table_body">

				</table>
			</div>
		</div>
	</body>

</html><?php }} ?>
