<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-09 19:47:56
         compiled from "/Library/WebServer/Documents/che/car/mycms/trunk/application/views/default/common/header.html" */ ?>
<?php /*%%SmartyHeaderCode:105272643958230cecc093d4-66376657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f455dafcc1f2e02c05f1298cfb9724902c6dbc8' => 
    array (
      0 => '/Library/WebServer/Documents/che/car/mycms/trunk/application/views/default/common/header.html',
      1 => 1478674859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105272643958230cecc093d4-66376657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index_re' => 0,
    'v' => 0,
    'index_lunzhuan' => 0,
    'k' => 0,
    'brand' => 0,
    'price' => 0,
    'grade' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58230cecc91555_36991479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58230cecc91555_36991479')) {function content_58230cecc91555_36991479($_smarty_tpl) {?><!--头部-->
<div id="heads">
	<div class="sg-m-1 sg-w-1 ts-p-2">
		<a href="#" title="韶关家园汽车频道" class="fl"><img src="/statics/images/logo.png" /> </a>
		<div class="search fl">
			<!--搜索-->
			<form name="myform1" method="get" action="/search" id="myform1">
				<input type="text" name="carname" placeholder="请输入搜索关键词" value=""  />
				<button type="submit" value="">搜 索</button>
			</form>
			<div class="clear"></div>
					<span class="keyspan">
						<?php if (!empty($_smarty_tpl->tpl_vars['index_re']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index_re']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
						<?php } ?>
						<?php }?>
					</span>
		</div>
		<div class="clear"></div>
	</div>
	<!--导航-->
	<div id="nav-div" class="border-1">
		<div class="sg-m-1 sg-w-1 ">
			<div class="catenav fl">
				<span>家园汽车</span>
			</div>
			<div class="nav fl">
				<ul>
					<li><a href="/">汽车首页</a></li>
					<li><a href="/car">特惠车型</a></li>
					<li><a href="/huddle">报团看车</a></li>
					<li><a href="/channel">汽车资讯</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<!--头部结束-->


<!--主体-->
<div id="main">

	<!--焦点图-->
	<div id="focusbox">
		<div class="piclist" id="picbox">
			<ul>
				<?php if (!empty($_smarty_tpl->tpl_vars['index_lunzhuan']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['index_lunzhuan']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['k']->value==1) {?>
				<li style="display: block;"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['t1'];?>
" /></a></li>
				<?php } else { ?>
				<li style="display: none;"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['t1'];?>
" /></a></li>
				<?php }?>
				<?php } ?>
				<?php }?>

			</ul>
		</div>
		<div class=" sg-m-1 sg-w-1 sg-position-1">
			<div class="navlist" id="inputbox">

				<label>
					<form name="myform1" method="get" action="/search" id="myform2">
					<input type="text" name="carname" placeholder="快速找车" value=""/>
					<button type="submit" value="">查找</button>
					</form>
				</label>
				<div class="lm-div">
					<h3 class="h3-1 ts-m-2">品牌</h3>
					<?php if (!empty($_smarty_tpl->tpl_vars['brand']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brand']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<a href="/search?brand=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
					<?php } ?>
					<?php }?>
				</div>
				<div class="lm-div border-3">
					<h3 class="h3-1 ts-m-2">价格</h3>
					<?php if (!empty($_smarty_tpl->tpl_vars['price']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['price']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<a href="/search?price=<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
万</a>
					<?php } ?>
					<?php }?>

				</div>
				<div class="lm-div border-3">
					<h3 class="h3-1 ts-m-2">级别</h3>
					<?php if (!empty($_smarty_tpl->tpl_vars['grade']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grade']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<a href="/search?grade=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
					<?php } ?>
					<?php }?>
				</div>
			</div>
			<div id="tab-1">
				<ul>
					<li class="select1"></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
	</div>
	</div><?php }} ?>
