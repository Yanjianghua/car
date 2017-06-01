<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-12 13:25:44
         compiled from "/Library/WebServer/Documents/che/car/mycms/trunk/application/views/default/huddle/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1531689735826a7d8af8f96-66979648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17214d4f14f0597f08fbc02b75d93d998cc6d870' => 
    array (
      0 => '/Library/WebServer/Documents/che/car/mycms/trunk/application/views/default/huddle/index.html',
      1 => 1478674863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1531689735826a7d8af8f96-66979648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_name' => 0,
    'list' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5826a7d8b7d3d1_01690525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5826a7d8b7d3d1_01690525')) {function content_5826a7d8b7d3d1_01690525($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
statics/css/bt.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo formatUrl('domain');
echo formatUrl('home');?>
statics/js/hdslide.js" ><?php echo '</script'; ?>
>


	</head>

	<body>
		<?php echo $_smarty_tpl->getSubTemplate ('../common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="clear"></div>
		<div id="min">
			<div class="sg-w-1 sg-m-1">
				<div id="navbox">
					<span>
					   <a href="/car">商家推荐</a>
					   <a href="#" class="select6">报团看车</a>
					   </span>
				</div>
				<div id="listpicbox">
					<ul>
						<?php if (!empty($_smarty_tpl->tpl_vars['list']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<li>
							<span>
								<h3><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a> </h3>
								<label><?php echo $_smarty_tpl->tpl_vars['v']->value['bxx'];?>

								</label>
								<i><button type="button" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >报名参加</button></i>
								<dd class="bs-ico8"><?php echo $_smarty_tpl->tpl_vars['v']->value['stime'];?>
~<?php echo $_smarty_tpl->tpl_vars['v']->value['etime'];?>
<em><?php echo $_smarty_tpl->tpl_vars['v']->value['people'];?>
人已抢到优惠</em></dd>
								<dt><?php echo $_smarty_tpl->tpl_vars['v']->value['baddress'];?>
</dt>
								<b><?php echo $_smarty_tpl->tpl_vars['v']->value['telephone'];?>
</b>
							</span>
							<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['t1'];?>
" />
						</li>
						<?php } ?>
						<?php }?>
					</ul>
				</div>
				<div class="c_page">
					<?php echo $_smarty_tpl->tpl_vars['list']->value['pages'];?>

				</div>

			</div>

		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('../common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div style="display: none;">
			<?php echo config_item('cnzz');?>

		</div>

		<div id="fromshow" class="shown" >
			<div class="formbg"></div>
			<div class="formdiv">
				<form method="post" id="myform2">
					<h3 id="hu3">现代瑞纳2014款全系优惠8000</h3>
					<p>√参与活动折扣优惠 √额外礼包 √专属顾问提供购车指导</p>
					<label> <input type="text" name="username" value="" id="user1" placeholder="姓名" class="input1 bs-ico9" /><dd>请输入用户名</dd> </label>
					<label> <input type="hidden" id="huddles" name="huddleId" /><input type="text" name="telnum" value="" id="telnum" placeholder="手机号" class="input1 bs-ico10" /><dd>请输入手机号</dd> </label>
					<label> <input type="checkbox" checked="ture"/>我已阅读并同意<a href="#">《汽车交易条款》</a></label>
					<label><button type="button" value="" class="but1">立即提交</button></label>
					<span class="closefrom"></span>
				</form>
			</div>
		</div>

		<?php echo '<script'; ?>
 type="text/javascript">
			$(function(){
				var ok1=false;
				var ok2=false;
				var tnum=/^1[34578]\d{9}$/;
				// 验证用户名
				$('input[name="username"]').focus(function(){
					$(this).next().text('姓名应为2个字符以上').removeClass('dd4').addClass('dd3');
				}).blur(function(){
					if($(this).val().length >= 2 && $(this).val().length <= 12 && $(this).val()!=''){
						$(this).next().text('输入正确').removeClass('dd3').addClass('dd2');
						ok1=true;
					}else{
						$(this).next().text('请输入姓名').removeClass('dd2').addClass('dd3');
					}

				});


				//验证电话
				$('input[name="telnum"]').focus(function(){
					$(this).next().text('请输入正确的电话号码').removeClass('dd4').addClass('dd3');
				}).blur(function(){
					if($(this).val().search(tnum)){
						$(this).next().text('请输入正确的电话号码').removeClass('dd2').addClass('dd3');

					}else{
						$(this).next().text('输入正确').removeClass('dd3')
						ok2=true;

					}

				});

				$("#fromshow").hide();
				$(".closefrom").click(function(){
					$("#fromshow").hide();
				});

				$('.but1').click(function(){
					if((ok1==true) &&(ok2==true)){
						$("#fromshow").hide(function(){
							$("#myform2")[0].reset();
						});
						$.ajax({
							url: '/huddle/jike',
							method: 'post',
							dataType: 'json',
							data: {
								username:$("#user1").val(),
								telephone:$("#telnum").val(),
								huddleid:$("#huddles").val()
							},
							success:function (data) {
							}
						});

					}else{
						return false;
					}
				});
			})
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			var fromShows=document.getElementById("fromshow");
			var listDiv=document.getElementById("listpicbox");
			var listButton=listDiv.getElementsByTagName("button");
			var listH3=document.getElementById("listpicbox").getElementsByTagName("h3");
			var myFrom2=document.getElementById("myform2").getElementsByTagName("h3");

			for (var n=0;n<listButton.length;n++) {
				listButton[n].index=n;
				listButton[n].onclick=function(a){
					$("#myform2 #hu3").html(listH3[this.index].innerText);
					fromShows.style.display="block";
					$("#myform2 #huddles").val(a.target.value);
				}

			}
		<?php echo '</script'; ?>
>

	</body>

</html><?php }} ?>
