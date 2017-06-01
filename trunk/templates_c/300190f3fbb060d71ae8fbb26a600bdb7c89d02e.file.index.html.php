<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-09 20:46:44
         compiled from "/Library/WebServer/Documents/che/car/mycms/trunk/application/views/default/search/index.html" */ ?>
<?php /*%%SmartyHeaderCode:60071785058231ab429a842-32647885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '300190f3fbb060d71ae8fbb26a600bdb7c89d02e' => 
    array (
      0 => '/Library/WebServer/Documents/che/car/mycms/trunk/application/views/default/search/index.html',
      1 => 1478674858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60071785058231ab429a842-32647885',
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
  'unifunc' => 'content_58231ab4380173_10381333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58231ab4380173_10381333')) {function content_58231ab4380173_10381333($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
							<li ast="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><a href="brand=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
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
							<li ast="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><a href="grade=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
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
							<li ast="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" ><a href="price=<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
万元</a></li>
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
							<a href="ny.html"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['tu1'];?>
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
									<dd class="bs-ico8">特惠时间：<?php echo date('Y年M月d日',$_smarty_tpl->tpl_vars['v']->value['stime']);?>
~<?php echo date('Y年M月d日',$_smarty_tpl->tpl_vars['v']->value['etime']);?>
</dd>
								</dl>
							</span>
							<label>
								<dl>
									<dt>现价：￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
万</dt>
									<dt>厂家指导价:10.5万(含税)</dt>
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
					<?php echo $_smarty_tpl->tpl_vars['list']->value['list']['pages'];?>

				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('../common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div style="display: none;">
			<?php echo config_item('cnzz');?>

		</div>
	</body>
	<?php echo '<script'; ?>
>
var ast = {
	getbrand : null,//url中brand值
	getgrade : null,//url中grade值
	getprice : null,//url中price值
	dombrand : null,
	domgrade : null,
	domprice : null,
	init : function(){
		ast.urlResolve();//获取url中三个参数
		
		ast.dombrand = $('#brand li');
		ast.operateSelect(ast.dombrand,ast.getbrand);
		ast.operateHref(ast.dombrand,'brand');
		
		ast.domgrade = $('#brand2 li');
		ast.operateSelect(ast.domgrade,ast.getgrade);
		ast.operateHref(ast.domgrade,'grade');

		ast.domprice = $('#brand3 li');
		ast.operateSelect(ast.domprice,ast.getprice);
		ast.operateHref(ast.domprice,'price');
	},
	urlResolve : function(){
		/*
		以?分隔符，如果返回数组长度等于2，get[1]的数据类似brand=2&grade=13&price=0-5
		再以&分隔符分隔参数，再分别用brand=、grade=、price=得到各自的url参数
		*/
		get = document.location.href.split('?');
		if (get.length==2){
			gets = get[1].split('&');
			for (i=0;i<gets.length;i++){
				tem = gets[i].split('brand=');
				if (tem.length==2){ast.getbrand = tem[1];	continue;}
				tem = gets[i].split('grade=');
				if (tem.length==2){ast.getgrade = tem[1];	continue;}
				tem = gets[i].split('price=');
				if (tem.length==2){ast.getprice = tem[1];	continue;}
			}
		}
	},
	operateSelect : function(dom,urlattr){
		/*
		如果特定url参数不为空，比如brand=2，则首先清除不限的选中样式
		再循环查找到li属性ast=urlattr，标记选中，结束循环
		*/
		if (urlattr!=null){
			dom.first().removeClass('select3');
			ast._urlattr = urlattr;
			dom.each(function(){
				if ($(this).attr('ast')==ast._urlattr){
					$(this).addClass('select3');	return;
				}
			});
		}
	},
	operateHref : function(dom,type){
		/*
		将三url参数保存到副本中，type枚举:'brand'、'grade'、'price'
		当type='brand'表示操作<div id="brand">，此时ast._getbrand不取url中brand值，而取<li ast="2">中ast参数
		type='grade'、type='price' 类推
		
		_getbrand如果为空返回‘?’，不为空返回'?brand='
		href 不等于'?'且_getgrade不为空，则需要&拼接
		最终得到相应href字符串
		*/
		ast._type = type;
		dom.each(function() {
			ast._getbrand = ast.getbrand;
			ast._getgrade = ast.getgrade;
			ast._getprice = ast.getprice;
			
			switch (ast._type){
				case 'brand':
					ast._getbrand = $(this).attr('ast');	break;
				case 'grade':
					ast._getgrade = $(this).attr('ast');	break;
				case 'price':
					ast._getprice = $(this).attr('ast');	break;
			}
			href = ast._getbrand==null ? '?' : '?brand=' + ast._getbrand;
			href += ((href!='?' && ast._getgrade!=null) ? '&' : '') + (ast._getgrade==null ? '' : 'grade=' + ast._getgrade);
			href += ((href!='?' && ast._getprice!=null) ? '&' : '') + (ast._getprice==null ? '' : 'price=' + ast._getprice);
			$(this).children('a').attr('href',href);
        });
	}
}
$(function(){
	ast.init();
});
	<?php echo '</script'; ?>
>

</html>
<?php }} ?>
