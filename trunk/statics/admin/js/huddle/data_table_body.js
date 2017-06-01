$(function() {
	function checkEdit() {
		var selections = $(this).datagrid("getSelections");
		if (selections.length > 1 || selections.length == 0) {
			//$("#edit").linkbutton("disable");
			//$("#del").linkbutton("disable");
			$("#reset").linkbutton("disable");
			$("#setmedia").linkbutton("disable");
			$("#resetad").linkbutton("disable");
			$("#setinneruser").linkbutton("disable");
			$("#deleteinneruser").linkbutton("disable");
			$("#setgooduser").linkbutton("disable");
			$("#deletegooduser").linkbutton("disable");
			$("#setUseAdv1").linkbutton("disable");
			$("#setUseAdv2").linkbutton("disable");
		} else {
			//$("#edit").linkbutton("enable");
			//$("#del").linkbutton("enable");
			$("#reset").linkbutton("enable");
			$("#setmedia").linkbutton("enable");
			$("#resetad").linkbutton("enable");
			$("#setinneruser").linkbutton("enable");
			$("#deleteinneruser").linkbutton("enable");
			$("#setgooduser").linkbutton("enable");
			$("#deletegooduser").linkbutton("enable");
			$("#setUseAdv1").linkbutton("enable");
			$("#setUseAdv2").linkbutton("enable");
		}
	}

	function checkDelete() {
		var selections = $(this).datagrid("getSelections");
		if (selections.length <= 0) {
			$("#deletebar").linkbutton("disable");
			$("#enablebar").linkbutton("disable");
			$("#edit").linkbutton("disable");
			$("#del").linkbutton("disable");
		} else {
			$("#deletebar").linkbutton("enable");
			$("#enablebar").linkbutton("enable");
			$("#edit").linkbutton("enable");
			$("#del").linkbutton("enable");
		}
	}

	function doCallback(callback) {
		var row = $('#data_table_body').datagrid("getSelected");
		var rowindex = $('#data_table_body').datagrid("getRowIndex", row);
		var selections = $('#data_table_body').datagrid("getSelections");
		callback.call(this, row, rowindex, selections);
	}
	$('#data_table_body').datagrid({
		url: '/Admin_Huddle/get_list/',
		nowrap: true,
		width: "1100px",
		pagination: true,
		pagePosition: "bottom",
		pageNumber: 1,
		pageSize: 10,
		pageList: [10, 20, 30, 40, 50],
		striped: true,
		ctrlSelect: true,
		columns: [
			[{
				field: 'id',
				title: 'ID',
				width: 80,
				align: 'center'
			}, {
				field: 'bname',
				title: '团活动名',
				width: 180,
				align: 'center',
			}, {
				field: 'bxx',
				title: '活动信息',
				width: 180,
				align: 'center'
			}, {
				field: 'baddress',
				title: '地址',
				width: 220,
				align: 'center'
			}, {
				field: 'people',
				title: '人数',
				width: 50,
				align: 'center'
			}, {
				field: 'telephone',
				title: '电话',
				width: 110,
				align: 'center'
			}, {
				field: 'stime',
				title: '开始时间',
				width: 90,
				align: 'center'
			}, {
				field: 'etime',
				title: '结束时间',
				width: 90,
				align: 'center'
			}, {
				field: 'status',
				title: '状态',
				width: 80,
				align: 'center',
				formatter: function(val) {
					if (val == 1) {
						return "启用";
					} else {
						return "禁用";
					}
				}
			}]
		],
		toolbar: [{
			iconCls: "icon-edit",
			text: "修改",
			id: "edit",
			enable: true,
			handler: function() {
				doCallback(function(row, rowindex, selections) {
					var id = selections[0].id;
						$("#window").window({
							title: "修改",
							width: 800,
							height: 500,
							closed: true,
							minimizable: false,
							maximizable: false,
							collapsible: false,
							href: "/Admin_Huddle/edit/?id=" + id,
							doSize: true,
							modal: true
						}).window("open");
				})
			}
		}, {
			iconCls: "icon-cancel",
			text: "删除",
			id: "del",
			enable: true,
			handler: function() {
				doCallback(function(row, rowindex, selections) {
					if (!confirm("真的要删除么？")) {
						return;
					}
					var options = [];
					for (var i = 0; i < selections.length; i++) {
						options.push({
							id: selections[i].id,
						});
					}
					$.post("/Admin_Huddle/del/", {
						"options": options
					}, function(data) {
						if (data.success) {
							$("#data_table_body").datagrid("reload");
						}else{
							alert(data.msg);
						}
					});
				});
			}
		}, {
			iconCls: "icon-cancel",
			text: "禁用",
			id: "deletebar",
			disabled: true,
			handler: function() {
				doCallback(function(row, rowindex, selections) {
					var id = selections[0].id;
					$.post("/Admin_Huddle/status/", {
						"id": id,
						"status": 0
					}, function(data) {
						if (data.success) {
							$("#data_table_body").datagrid("reload");
						}
						alert(data.msg);
					});
				});
			}
		}, {
			iconCls: "icon-ok",
			text: "启用",
			id: "enablebar",
			disabled: true,
			handler: function() {
				doCallback(function(row, rowindex, selections) {
					var id = selections[0].id;
					$.post("/Admin_Huddle/status/", {
						"id": id,
						"status": 1
					}, function(data) {
						if (data.success) {
							$("#data_table_body").datagrid("reload");
						}
						alert(data.msg);
					});
				});
			}
		}, {
            iconCls: "icon-ok",
            text: "集客数据",
            id: "jike",
            enable: true,
            handler: function() {
                doCallback(function(row, rowindex, selections) {
                    var id = selections[0].id;
                    window.location.href = '/Admin_Jike/details?huddleid=' + id + window.location.href;
                })
            }
        }],
		onSelect: function(rowIndex, rowData) {
			checkEdit.call(this);
			checkDelete.call(this);
		},
		onUnselect: function(rowIndex, rowData) {
			checkEdit.call(this);
			checkDelete.call(this);
		}
	});
});