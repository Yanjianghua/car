<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-15 14:37:46
         compiled from "/Library/WebServer/Documents/che/car/mycms/trunk/application/views/admin/main/index.html" */ ?>
<?php /*%%SmartyHeaderCode:61375456358a3f73a13f8f4-67791555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79de0cea6d842398670ce587accc47f76459de61' => 
    array (
      0 => '/Library/WebServer/Documents/che/car/mycms/trunk/application/views/admin/main/index.html',
      1 => 1478674854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61375456358a3f73a13f8f4-67791555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_name' => 0,
    'server_url' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58a3f73a1c2ba6_97825341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a3f73a1c2ba6_97825341')) {function content_58a3f73a1c2ba6_97825341($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<?php echo $_smarty_tpl->getSubTemplate ('../../common/importAll.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</head>

	<body>
		<div id="window"></div>
		<div class="main">
            <form method="post" enctype="multipart/form-data" id="form" style="line-height: 40px; padding: 10px;">
                <div>
                    <label>网站名称:</label>
                    <input id="webname" name="webname" value="<?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>
" />
                </div>
                <div>
                    <label>网站网址:</label>
                    <input id="wenurl" name="wenurl" value="<?php echo $_smarty_tpl->tpl_vars['server_url']->value;?>
" />
                </div>
                <div>
                    <label>网站底部:</label>
                    <input data-options="multiline:true"  id="footer" name="footer" value="<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
" />
                </div>
                <div>
                    <div id="submit">提交</div>
                </div>
            </form>
		</div>
        <?php echo '<script'; ?>
 type="text/javascript">
            function adAdd(check, button) {
                $('#form').form({
                    url: "/Admin_Main/index/",
                    onSubmit: function() {
                        if(check() === false){
                            return false;
                        }
                        $("#window").mask();
                        return true;
                    },
                    success: function(data) {
                        data = JSON.parse(data);
                        if (!data.success) {
                            alert(data.msg);
                        } else {
                            $("#data_table_body").datagrid("reload");
                            $("#window").window("close");
                        }
                        $("#window").unmask();
                    }
                });
                button();
            }
            adAdd(function() {
                var webname = $.trim($("#webname").val());
                var wenurl = $.trim($("#wenurl").val());
                if (webname == "") {
                    alert("网站名不能为空");
                    return false;
                }
                if (wenurl == "") {
                    alert("网址不能为空");
                    return false;
                }
            }, function() {
                $("#webname").textbox({
                    width: "30%",
                    prompt: "请输入网站名称",
                    type: "text"
                });
                $("#wenurl").textbox({
                    width: "30%",
                    prompt: "请输入网站网址",
                    type: "text"
                });
                $("#footer").textbox({
                    width: "30%",
                    height: "200px",
                    prompt: "请输入网站footer",
                    type: "text"
                });
                $("#submit").linkbutton({
                    iconCls: 'icon-ok'
                }).click(function() {
                    $('#form').submit();
                });
            });
        <?php echo '</script'; ?>
>
	</body>

</html><?php }} ?>
