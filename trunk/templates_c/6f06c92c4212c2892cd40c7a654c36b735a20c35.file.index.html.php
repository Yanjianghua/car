<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-29 17:25:24
         compiled from "/Library/WebServer/Documents/che/car/mycms/trunk/application/views/admin/menu/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1688336758583d49849b7e85-72098155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f06c92c4212c2892cd40c7a654c36b735a20c35' => 
    array (
      0 => '/Library/WebServer/Documents/che/car/mycms/trunk/application/views/admin/menu/index.html',
      1 => 1478674853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1688336758583d49849b7e85-72098155',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_583d4984a0dde6_95527078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583d4984a0dde6_95527078')) {function content_583d4984a0dde6_95527078($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>后台系统</title>
		<?php echo $_smarty_tpl->getSubTemplate ('../../common/importAll.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</head>

	<body>
	<div id="window"></div>
	<div class="main">
		<div id="data_table" style="float: left;">
			<table id="data_table_body">

			</table>
		</div>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript">
		$('#data_table_body').treegrid({
			singleSelect: true,
			ctrlSelect: true,
			url: "/Admin_Menu/get_list/",
			idField: 'id',
			treeField: 'name',
			width: 1000,
			height:600,
			columns: [
				[{
					field: 'id',
					title: 'ID',
					width: "80"
				}, {
					field: 'name',
					title: '菜单名称',
					width: "160"
				}, {
					field: 'controller',
					title: '控制器名',
					width: "160"
				}, {
					field: 'method',
					title: '方法名',
					width: "120"
				}, {
					field: 'hide',
					title: '是否隐藏',
					width: "80",
					formatter: function(value) {
						if (value == "<?php echo Menu_model::HIDE_YES;?>
") {
							return "<span style='color:red;'>是</span>";
						} else if (value == "<?php echo Menu_model::HIDE_NO;?>
") {
							return "否"
						} else {
							return "未知";
						}
					}
				}, {
					field: 'built',
					title: '内置菜单',
					width: "80",
					formatter: function(value) {
						if (value == "<?php echo Menu_model::HIDE_YES;?>
") {
							return "<span style='color:red;'>是</span>";
						} else if (value == "<?php echo Menu_model::HIDE_NO;?>
") {
							return "否"
						} else {
							return "未知";
						}
					}
				}]
			],
			toolbar: [{
				iconCls: "icon-add",
				text: "添加菜单",
				id: "add",
				enable: true,
				handler: function() {
					$("#window").window({
						title: "添加菜单",
						width: 800,
						height: 500,
						closed: true,
						minimizable: false,
						maximizable: false,
						collapsible: false,
						href: "/Admin_Menu/add/",
						doSize: true,
						modal: true
					}).window("open");
				}
			}, {
				iconCls: "icon-edit",
				text: "修改菜单",
				id: "edit",
				enable: true,
				handler: function() {
					$("#window").window({
						title: "修改菜单",
						width: 800,
						height: 500,
						closed: true,
						minimizable: false,
						maximizable: false,
						collapsible: false,
						href: "/Admin_Menu/edit/?id=" + $("#data_table_body").datagrid("getSelected").id,
						doSize: true,
						modal: true
					}).window("open");
				}
			}, {
				text: "删除",
				iconCls: 'icon-cancel',
				handler: function() {
					var row = $("#data_table_body").datagrid("getSelected");
					$.post("/Admin_Menu/del/?id=" + row.id, {
						id: row.id
					}, function(response) {
						if (response.success) {
							$("#data_table_body").datagrid("load");
						} else {
							alert(response.msg);
						}
					});
				}
			}]
		});
	<?php echo '</script'; ?>
>
	</body>
</html><?php }} ?>
