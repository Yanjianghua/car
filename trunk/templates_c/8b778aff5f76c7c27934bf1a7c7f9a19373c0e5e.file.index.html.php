<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-09 20:47:21
         compiled from "/Library/WebServer/Documents/che/car/mycms/trunk/application/views/default/channel/index.html" */ ?>
<?php /*%%SmartyHeaderCode:168583992058231ad91a48e0-51841489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b778aff5f76c7c27934bf1a7c7f9a19373c0e5e' => 
    array (
      0 => '/Library/WebServer/Documents/che/car/mycms/trunk/application/views/default/channel/index.html',
      1 => 1478674859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168583992058231ad91a48e0-51841489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_name' => 0,
    'list' => 0,
    'v' => 0,
    'index_er_sou' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58231ad9245b38_54790733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58231ad9245b38_54790733')) {function content_58231ad9245b38_54790733($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>
</title>
		<?php echo $_smarty_tpl->getSubTemplate ('../common/importAll.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<link rel="stylesheet" href="<?php echo formatUrl('domain');
echo formatUrl('home');?>
statics/css/un-index.css" />
		<link rel="stylesheet" href="<?php echo formatUrl('domain');
echo formatUrl('home');?>
statics/css/index_1.css" />
		<link rel="stylesheet" href="<?php echo formatUrl('domain');
echo formatUrl('home');?>
statics/css/zx.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo formatUrl('domain');
echo formatUrl('home');?>
statics/js/hdslide.js" ><?php echo '</script'; ?>
>
		<link href="<?php echo formatUrl('domain');
echo formatUrl('home');?>
statics/<?php echo config_item('style');?>
/css/list_article.css?v=<?php echo config_item('system_version');?>
" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<?php echo $_smarty_tpl->getSubTemplate ('../common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="clear"></div>
		<div id="content">
			<span class="man_baoxie">当前位置：<a href="<?php echo formatUrl('home');?>
">汽车首页</a> &gt; <a href="<?php echo formatUrl('home');?>
channel">汽车资讯</a></span>

			<div class="c_left">
				<div class="zx-div border-5 sg-w-9">
					<h3 class="sg-disp bg-1 sg-p-2 ">汽车资讯</h3>
				<?php if (!empty($_smarty_tpl->tpl_vars['list']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<a href="<?php echo formatUrl('article','article',$_smarty_tpl->tpl_vars['v']->value['id']);?>
">
						<img  src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
"/>
						<div>
							<dd><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</dd>
							<p><?php echo cut_str($_smarty_tpl->tpl_vars['v']->value['content'],100);?>
...</p>
							<dt>发布于：<?php echo date('Y-n-d',$_smarty_tpl->tpl_vars['v']->value['addtime']);?>
</dt>
						</div>
					</a>
					<?php } ?>
				<?php }?>


				</div>
				<div class="c_page">
					<?php echo $_smarty_tpl->tpl_vars['list']->value['pages'];?>

				</div>
			</div>

			<div class="c_right">
				<div class="fr  recommend-div ">

					<!--二手车推荐-->
					<div class="recommend-cont sg-m-3 bg-1">
						<h3>二手车推荐</h3>
						<?php if ($_smarty_tpl->tpl_vars['index_er_sou']->value['rows']) {?>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['index_er_sou']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>

						<?php } ?>
						<?php }?>
					</div>
				</div>
				</div>

			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('../common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div style="display: none;">
			<?php echo config_item('cnzz');?>

		</div>
	</body>

</html><?php }} ?>
