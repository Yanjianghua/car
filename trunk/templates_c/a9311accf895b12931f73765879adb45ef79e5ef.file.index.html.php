<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-12 13:25:33
         compiled from "/Library/WebServer/Documents/che/car/mycms/trunk/application/views/default/car/index.html" */ ?>
<?php /*%%SmartyHeaderCode:18475652335826a7cd443524-20844340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9311accf895b12931f73765879adb45ef79e5ef' => 
    array (
      0 => '/Library/WebServer/Documents/che/car/mycms/trunk/application/views/default/car/index.html',
      1 => 1478674860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18475652335826a7cd443524-20844340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_name' => 0,
    'brand' => 0,
    'v' => 0,
    'grade' => 0,
    'price' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5826a7cd523455_09088970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5826a7cd523455_09088970')) {function content_5826a7cd523455_09088970($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
statics/css/lm.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo formatUrl('domain');
echo formatUrl('home');?>
statics/js/hdslide.js" ><?php echo '</script'; ?>
>

	</head>

	<body>
		<?php echo $_smarty_tpl->getSubTemplate ('../common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="clear"></div>
		<!--主体-->
		<div id="min">
			<!--筛选-->
			<div class="sg-m-1 sg-w-1">
				<div class="sg-m-2 sg-border-1">
					<div id="brand">
						<span>品牌</span>
						<ul>
							<li class="select3"><a href="#">不限</a> </li>
							<?php if (!empty($_smarty_tpl->tpl_vars['brand']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brand']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <li><a href="/search?brand=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
							<?php } ?>
							<?php }?>
						</ul>

					</div>

					<div id="brand2" class="border-5">
						<span>级别</span>
						<ul>
							<li class="select3"><a href="#">不限</a> </li>
							<?php if (!empty($_smarty_tpl->tpl_vars['grade']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grade']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <li><a href="/search?grade=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
							<?php } ?>
							<?php }?>
						</ul>
					</div>

					<div id="brand3" class="border-5">
						<span>价格</span>
						<ul>
							<li class="select3"><a href="#">不限</a> </li>
							<?php if (!empty($_smarty_tpl->tpl_vars['price']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['price']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <li><a href="/search?price=<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
							<?php } ?>
							<?php }?>
						</ul>
					</div>
				</div>
			</div>

			<div class="sg-w-1 sg-m-1">
				<div class="carstyle-div">
					<h3>特惠车型</h3>
					<dl>
						<dt class="select4"><a href="#">默认排列</a> </dt>
						<dt><a href="#">最新发布</a> </dt>
						<dt><a href="#">最新价格</a> </dt>
					</dl>
				</div>

				<div class="carlistbox">
					<ul>
						<?php if (!empty($_smarty_tpl->tpl_vars['list']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<li>
							<a href="<?php echo formatUrl('cars','cars',$_smarty_tpl->tpl_vars['v']->value['id']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['tu1'];?>
" height="190px" width="285" /></a>
							<span>
								<h3><a href="<?php echo formatUrl('cars','cars',$_smarty_tpl->tpl_vars['v']->value['id']);?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['carname'];?>
</a></h3>
								<dl>
									<dt class="bs-ico6">商家名称：<?php echo $_smarty_tpl->tpl_vars['v']->value['store'];?>
</dt>
									<dt class="bs-ico7">商家地址：<?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</dt>
									<dd class="bs-ico8">特惠时间：<?php echo date('Y年m月d日',$_smarty_tpl->tpl_vars['v']->value['stime']);?>
~<?php echo date('Y年m月d日',$_smarty_tpl->tpl_vars['v']->value['etime']);?>
</dd>
								</dl>
							</span>
							<label>
								<dl>
									<dt>现价：￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
万</dt>
									<dt>厂家指导价:<?php echo $_smarty_tpl->tpl_vars['v']->value['cj_price'];?>
万(含税)</dt>
									<dd><?php echo $_smarty_tpl->tpl_vars['v']->value['telephone'];?>
</dd>
								</dl>
							</label>
						</li>
						<?php } ?>
						<?php }?>
					</ul>

				</div>

				<div class="c_page">
                    <?php if (!empty($_smarty_tpl->tpl_vars['list']->value)) {?>
					<?php echo $_smarty_tpl->tpl_vars['list']->value['list']['pages'];?>

                    <?php }?>
				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('../common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div style="display: none;">
			<?php echo config_item('cnzz');?>

		</div>
	</body>

</html><?php }} ?>
