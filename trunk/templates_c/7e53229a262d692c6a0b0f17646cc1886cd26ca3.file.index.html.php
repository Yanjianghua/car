<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-09 20:01:34
         compiled from "/Library/WebServer/Documents/che/car/mycms/trunk/application/views/admin/layout/index.html" */ ?>
<?php /*%%SmartyHeaderCode:20497393665823101e291e96-81889866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e53229a262d692c6a0b0f17646cc1886cd26ca3' => 
    array (
      0 => '/Library/WebServer/Documents/che/car/mycms/trunk/application/views/admin/layout/index.html',
      1 => 1478674853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20497393665823101e291e96-81889866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5823101e2bb5f6_28898308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5823101e2bb5f6_28898308')) {function content_5823101e2bb5f6_28898308($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>后台系统</title>
		<?php echo $_smarty_tpl->getSubTemplate ('../../common/importAll.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8">
			$(function() {
				$("#tree_menu").tree({
					lines: true,
					onClick: function (node) {
						console.log(node);
						if (node.controller && node.method) {
							var url = "/" + node.controller + "/" + node.method + "/";
							$('#sys_main').attr('src', url);
						}
					}
				});
			});
		<?php echo '</script'; ?>
>
	</head>

	<body class="easyui-layout">
		<div id="header" region="north" style="height:69px;">
			<div class="right">
				<img src="/statics/images/avatar.gif" />
				<span>欢迎您！<b><?php echo $_smarty_tpl->tpl_vars['login_user']->value['username'];?>
</b></span>
				<div class="links">
					<a href="/Admin_Login/logout/">安全退出</a>
				</div>
			</div>
		</div>

		<div region="west" title="导航菜单" split="true" style="width:200px">
			<div class="easyui-accordion" style="height:100%;">
				<div title="系统设置">
					<ul id="tree_menu" class="easyui-tree" data-options="url:'/Admin_Menu/get_menu/'"></ul>
				</div>
			</div>
		</div>

		<div region="center">
			<iframe id="sys_main" src="/Admin_Article/index/" height="100%" width="100%" frameborder='0' marginheight='0' marginwidth='0' scrolling='yes'></iframe>
		</div>

		<div id="footer" region="south" style="height:35px;">
			<center>
				这里是底部 <a href="#">联系我们</a>
			</center>
		</div>
	</body>

</html><?php }} ?>
