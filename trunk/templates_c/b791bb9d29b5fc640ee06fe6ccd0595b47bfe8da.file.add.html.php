<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-22 11:47:36
         compiled from "/Library/WebServer/Documents/che/car/mycms/trunk/application/views/admin/article/add.html" */ ?>
<?php /*%%SmartyHeaderCode:864266301585b4cd86a86c2-61263649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b791bb9d29b5fc640ee06fe6ccd0595b47bfe8da' => 
    array (
      0 => '/Library/WebServer/Documents/che/car/mycms/trunk/application/views/admin/article/add.html',
      1 => 1478674854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '864266301585b4cd86a86c2-61263649',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_585b4cd86dee19_20436986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585b4cd86dee19_20436986')) {function content_585b4cd86dee19_20436986($_smarty_tpl) {?><form method="post" enctype="multipart/form-data" id="form" style="line-height: 40px; padding: 10px;">
	<input type="hidden" name="id" value="" />
	<div>
		<label>标题名称:</label>
		<input id="title11" name="title" value="" />
	</div>
	<div>
		<label>关键字名称:</label>
		<input id="keywords" name="keywords" value="" />
	</div>
	<div>
		<label>描述测试:</label>
		<input id="description" name="description" value="" />
	</div>
	<div>
		<label>编辑者:</label>
		<input id="editor" name="editor" value="" />
	</div>
	<div>
		<label>内容:</label>
		<!--<input id="content1" data-options="multiline:true" name="content" value="" />-->
		<textarea id="content123" name="content"></textarea>
		<?php echo '<script'; ?>
 type="text/javascript">
				CKEDITOR.replace('content', {
					toolbar: [
						['Source'],
						['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Print', 'SpellChecker', 'Scayt'],
						['Undo', 'Redo', '-', 'Find', 'Replace', '-', 'SelectAll', 'RemoveFormat'],
						['BidiLtr', 'BidiRtl'],
						'/', ['Bold', 'Italic', 'Underline', 'Strike'],
						['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote', 'CreateDiv'],
						['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
						['Link', 'Unlink', 'Anchor'],
						['Image', 'SpecialChar', 'Table'],
						'/', ['Styles', 'Format', 'Font', 'FontSize'],
						['TextColor', 'BGColor'],
						['Maximize', 'ShowBlocks']
					]
				});
		<?php echo '</script'; ?>
>
	</div>

	<div>
		<div id="submit">提交</div>
	</div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">
	function adAdd(check, button) {
		$('#form').form({
			url: "/Admin_Article/add/",
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
		var name = $.trim($("#dir").val());
	}, function() {
		$("#title11").textbox({
			width: "30%",
			prompt: "请输入标题名称",
			type: "text"
		});
		$('#keywords').textbox({
			width: "30%",
			prompt: "请输入关键字名称",
			type: "text"
		});
		$('#description').textbox({
			width: "80%",
			prompt: "请输入描述名称",
			type: "text"
		});
		$('#content').textbox({
			width: "80%",
			height:"300%",
			prompt: "请输入内容",
			type: "text"
		});
		$('#editor').textbox({
			width: "30%",
			prompt: "请输入编辑者",
			type: "text"
		});
		$('#content1').textbox({
			width: "50%",
			height:"300%",
			prompt: "请输入选项1内容",
			type: "text"
		});

		$("#submit").linkbutton({
			iconCls: 'icon-ok'
		}).click(function() {
			$('#form').submit();
		});
	});
<?php echo '</script'; ?>
><?php }} ?>
