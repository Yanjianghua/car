<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-09 19:47:56
         compiled from "/Library/WebServer/Documents/che/car/mycms/trunk/application/views/default/layout/index.html" */ ?>
<?php /*%%SmartyHeaderCode:6398629558230ceca60689-01538294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02642ee0ea9658368d1a2153b3816337ef1e37ee' => 
    array (
      0 => '/Library/WebServer/Documents/che/car/mycms/trunk/application/views/default/layout/index.html',
      1 => 1478674858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6398629558230ceca60689-01538294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_name' => 0,
    'index_zb' => 0,
    'v' => 0,
    'index_gg' => 0,
    'data' => 0,
    'index_zx_r_tu' => 0,
    'index_zx_1' => 0,
    'index_zx_bt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58230cecbe8725_94472473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58230cecbe8725_94472473')) {function content_58230cecbe8725_94472473($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>
</title>

		<link rel="stylesheet" href="<?php echo formatUrl('domain');
echo formatUrl('home');?>
statics/css/un-index.css" />
		<link rel="stylesheet" href="<?php echo formatUrl('domain');
echo formatUrl('home');?>
statics/css/index_1.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo formatUrl('domain');
echo formatUrl('home');?>
statics/js/hdslide.js" ><?php echo '</script'; ?>
>
		<?php echo $_smarty_tpl->getSubTemplate ('../common/importAll.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</head>

	<body>
		<?php echo $_smarty_tpl->getSubTemplate ('../common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!--主体-->
		<div id="main">
			<!--早报-->
			<div class="bg-1">
				<div class="sg-w-1 sg-m-1 ts-p-1 news-div">
					<dl>
						<dt>NEW 汽车早报:</dt>
						<?php if (!empty($_smarty_tpl->tpl_vars['index_zb']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index_zb']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<dd><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></dd>
						<?php } ?>
						<?php }?>
					</dl>
				</div>
			</div>

			<!--广告-->
			<div id="banner-div">
				<div class="sg-m-4 sg-w-1 banner">
					<ul class="sg-ul-1">
						<?php if (!empty($_smarty_tpl->tpl_vars['index_gg']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index_gg']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<li><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['t1'];?>
" /> </li>
						<?php } ?>
						<?php }?>
					</ul>
				</div>
			</div>

			<!--商家推荐-->
			<div id="general">
				<div class="sg-m-1 sg-w-1">
					<div class="sg-div-1 bs-ico">
						<h3 class="h3-2 fl">商家推荐</h3>
						<a href="/car" class="fr ts-m-1" target="_blank">更多>></a>
					</div>

					<div class="ts-div-2 sg-m-3">
						<ul>
                            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['recommandcar'])) {?>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['recommandcar']['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <li>
                                <a href="<?php echo formatUrl('cars','cars',$_smarty_tpl->tpl_vars['v']->value['id']);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['tu1'];?>
" width="280px" height="155px"/> </a>
                                <div class="txt-wrap">
                                    <span class="t1"><a href="<?php echo formatUrl('cars','cars',$_smarty_tpl->tpl_vars['v']->value['id']);?>
" target="_blank"><?php echo cut_str($_smarty_tpl->tpl_vars['v']->value['carname'],30);?>
</a> </span>
                                    <span class="t2"><?php echo cut_str($_smarty_tpl->tpl_vars['v']->value['message'],23);?>
</span>
                                    <span class="t3"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
 万起</span>
                                </div>
                                <dl class="ts-ico-1">
                                    <dt>推荐</dt>
                                </dl>
                            </li>
                            <?php } ?>
                            <?php }?>
						</ul>

						<div class="clear"></div>
					</div>
				</div>
			</div>

			<!--特惠车型-->
			<div id="general">
				<div class="sg-m-1 sg-w-1">
					<div class="sg-div-1 bs-ico2">
						<h3 class="h3-2 fl">特惠车型</h3>
						<a href="/car" class="fr ts-m-1" target="_blank">更多>></a>
					</div>

					<div class="ts-div-3 sg-m-2" id="thcarbox">
						<ul>
                            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['car'])) {?>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['car']['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<li>
								<a href="<?php echo formatUrl('cars','cars',$_smarty_tpl->tpl_vars['v']->value['id']);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['tu1'];?>
" width="280px" height="200px" /> </a>
								<div class="txt-wrap-2">
									<h3><a href="<?php echo formatUrl('cars','cars',$_smarty_tpl->tpl_vars['v']->value['id']);?>
" target="_blank"><?php echo cut_str($_smarty_tpl->tpl_vars['v']->value['carname'],18);?>
</a></h3>
									<span class="t01"><?php echo cut_str($_smarty_tpl->tpl_vars['v']->value['address'],18);?>
</span>
								</div>
								<dl>
									<dd class="dd1">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
万</dd>
									<dt class="dt1">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price']+4;?>
万</dt>
								</dl>
								<a href="<?php echo formatUrl('cars','cars',$_smarty_tpl->tpl_vars['v']->value['id']);?>
" target="_blank"><button type="button">抢先预定</button></a>
							</li>
                            <?php } ?>
                            <?php }?>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>

			<!--汽车资讯-->
			<div  id="news-div">
				<div class="sg-m-1 sg-w-1">
					<div class="sg-div-1 bs-ico3">
						<h3 class="h3-2 fl">汽车资讯</h3>
						<a href="/channel" class="fr ts-m-1" target="_blank">更多>></a>
					</div>

					<div class="fr sg-w-2 ts-m-2">
						<?php if (!empty($_smarty_tpl->tpl_vars['index_zx_r_tu']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index_zx_r_tu']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['t1'];?>
" /> </a>
						<?php } ?>
						<?php }?>
						<ul class="sg-ul-2">
							<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['articleimg'])) {?>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['articleimg']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<li>
								<a href="<?php echo formatUrl('article','article',$_smarty_tpl->tpl_vars['v']->value['id']);?>
" target="_blank"><?php echo cut_str($_smarty_tpl->tpl_vars['v']->value['title'],17);?>
</a>
								<p><?php echo cut_str($_smarty_tpl->tpl_vars['v']->value['content'],35);?>
...</p>
							</li>
							<?php } ?>
							<?php }?>
						</ul>
					</div>

					<div class="fl sg-w-2 ts-m-2" id="catgropic">
						<?php if (!empty($_smarty_tpl->tpl_vars['index_zx_1']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index_zx_1']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['t1'];?>
" /> </a>
						<span><i>车型</i><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></span>
						<?php } ?>
						<?php }?>
					</div>
					<div class="fl sg-w-3 ts-m-2" style="margin-left: 30px;">
						<div class="title-div">
							<?php if (!empty($_smarty_tpl->tpl_vars['index_zx_bt']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index_zx_bt']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
							<?php } ?>
							<?php }?>
						</div>
						<div class="news-list">
							<ul>
                                <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['article'])) {?>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['article']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<li><a href="<?php echo formatUrl('article','article',$_smarty_tpl->tpl_vars['v']->value['id']);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
                                <?php } ?>
                                <?php }?>
							</ul>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<!--报团看车--->

			<div id="general">
				<div class="sg-m-2 sg-w-1">
					<div class="sg-div-1 bs-ico2">
						<h3 class="h3-2 fl">报团看车</h3>
						<a href="/huddle" class="fr ts-m-1" target="_blank">更多>></a>
					</div>

					<div class="ts-div-3 sg-m-2" id="tgcarbox">
						<ul>
                            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['huddle'])) {?>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['huddle']['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<li>
								<a href="/huddle" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['t1'];?>
" width="280px" height="200px"/> </a>
								<div class="txt-wrap-2">
									<h3><a href="/huddle"><?php echo cut_str($_smarty_tpl->tpl_vars['v']->value['bname'],18);?>
</a></h3>
									<span class="t01">地址：<?php echo cut_str($_smarty_tpl->tpl_vars['v']->value['baddress'],18);?>
</span>
								</div>
								<dl>
									<dt class="dt2"><?php echo $_smarty_tpl->tpl_vars['v']->value['people'];?>
人参与</dt>
								</dl>
								<a href="/huddle" target="_blank"><button type="button">立即参团</button></a>
							</li>
                            <?php } ?>
                            <?php }?>

						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>



		</div>
		<div class="clear"></div>

		<?php echo $_smarty_tpl->getSubTemplate ('../common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div style="display: none;">
			<?php echo config_item('cnzz');?>

		</div>
	</body>

</html><?php }} ?>
