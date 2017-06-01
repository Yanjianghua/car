<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-09 20:01:23
         compiled from "/Library/WebServer/Documents/che/car/mycms/trunk/application/views/admin/login/index.html" */ ?>
<?php /*%%SmartyHeaderCode:164062940858231013cb3ba2-83904670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f6bb31794e282ab585954f3a2c1f398822ede6' => 
    array (
      0 => '/Library/WebServer/Documents/che/car/mycms/trunk/application/views/admin/login/index.html',
      1 => 1478674857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164062940858231013cb3ba2-83904670',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58231013cdab59_66473476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58231013cdab59_66473476')) {function content_58231013cdab59_66473476($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>登录</title>
		<?php echo $_smarty_tpl->getSubTemplate ('../../common/importAll.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <link href="/statics/css/login.css" rel="stylesheet" />
		<?php echo '<script'; ?>
 src="/statics/js/admin/Login/win.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/statics/js/admin/Login/form.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
	</head>

	<body>
    <div class="wrap">
        <div class="login">
            <div class="logo"></div>
            <form method="post" action="/admin_Login/index/">
                <label>
                    <span>用户名：</span>
                    <input type="text" name="username" />
                </label>
                <label>
                    <span>密　码：</span>
                    <input type="password" name="password" />
                </label>
                <label>
                    <span>验证码：</span>
                    <input type="text" name="code" class="code" />
                    <img src="/admin_Login/code/" class="codeimg" />
                </label>
                <input type="image" class="submit" src="/statics/images/dl_06.gif" value="" />
            </form>
            <?php echo '<script'; ?>
 type="text/javascript">
                $(".codeimg").attr("src", $(".codeimg").attr("src") + "?s=" + Math.random());
                $(".codeimg").click(function() {
                    $(this).attr("src", $(this).attr("src") + "?s=" + Math.random());
                });
                $("form input").focus(function() {
                    $(this).addClass("focus");
                }).blur(function() {
                    $(this).removeClass("focus");
                });
            <?php echo '</script'; ?>
>
        </div>
    </div>
	</body>

</html><?php }} ?>
