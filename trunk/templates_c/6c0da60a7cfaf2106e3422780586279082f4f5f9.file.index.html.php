<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-09 22:13:54
         compiled from "/Library/WebServer/Documents/che/car/mycms/trunk/application/views/admin/car/index.html" */ ?>
<?php /*%%SmartyHeaderCode:59829789858232f22df0583-42635066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c0da60a7cfaf2106e3422780586279082f4f5f9' => 
    array (
      0 => '/Library/WebServer/Documents/che/car/mycms/trunk/application/views/admin/car/index.html',
      1 => 1478674855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59829789858232f22df0583-42635066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brand' => 0,
    'v' => 0,
    'grade' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58232f22eb7ce2_75764215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58232f22eb7ce2_75764215')) {function content_58232f22eb7ce2_75764215($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<?php echo $_smarty_tpl->getSubTemplate ('../../common/importAll.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php echo '<script'; ?>
 type="text/javascript" src="/statics/js/lib/my97date/WdatePicker.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/statics/js/lib/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/statics/admin/js/car/data_table_body.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/statics/admin/js/car/ad.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			function FindData() {
				$('#data_table_body').datagrid('load', {
					store: $('#store').val(),
					carname: $('#carname').val(),
					brand: $("#brand").val(),
					grade: $("#grade").val(),
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
					<input class="easyui-searchbox" id="store" style="width:100px" data-options="prompt:'请输入店名'" /> 店名：
					<input class="easyui-searchbox" id="carname" style="width:100px" data-options="prompt:'请输入车型名称'" /> 车型名称：
					<select id="brand" name="brand">
						<option value="">不限品牌</option>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['brand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
						<?php } ?>
					</select>品牌
					<select id="grade" name="grade">
						<option value="">不限级别</option>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['grade']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
						<?php } ?>
					</select>级别
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
