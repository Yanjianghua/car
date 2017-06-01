$(function() {
	function checkEdit() {
		var selections = $(this).datagrid("getSelections");
		if (selections.length > 1 || selections.length == 0) {
			$("#edit").linkbutton("disable");
			$("#del").linkbutton("disable");
			$("#deletebar").linkbutton("disable");
			$("#enablebar").linkbutton("disable");
			$("#addcarprice").linkbutton("disable");
			$("#addhuddle").linkbutton("disable");
			$("#deleteinneruser").linkbutton("disable");
			$("#setgooduser").linkbutton("disable");
			$("#deletegooduser").linkbutton("disable");
			$("#setUseAdv1").linkbutton("disable");
			$("#setUseAdv2").linkbutton("disable");
			$("#recommand").linkbutton("disable");
			$("#unrecommand").linkbutton("disable");
		} else {
			$("#edit").linkbutton("enable");
			$("#del").linkbutton("enable");
			$("#deletebar").linkbutton("enable");
			$("#enablebar").linkbutton("enable");
			$("#addcarprice").linkbutton("enable");
			$("#addhuddle").linkbutton("enable");
			$("#deleteinneruser").linkbutton("enable");
			$("#setgooduser").linkbutton("enable");
			$("#deletegooduser").linkbutton("enable");
			$("#setUseAdv1").linkbutton("enable");
			$("#setUseAdv2").linkbutton("enable");
			$("#recommand").linkbutton("enable");
			$("#unrecommand").linkbutton("enable");
		}
	}

	function checkDelete() {
		var selections = $(this).datagrid("getSelections");
		if (selections.length <= 0) {
			//$("#recommand").linkbutton("disable");
			//$("#unrecommand").linkbutton("disable");
			$("#edit").linkbutton("disable");
			$("#del").linkbutton("disable");
		} else {
			//$("#recommand").linkbutton("enable");
			//$("#unrecommand").linkbutton("enable");
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
		url: '/Admin_Car/get_list/',
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
				field: 'store',
				title: '店名',
				width: 120,
				align: 'center'
			}, {
				field: 'carname',
				title: '车名',
				width: 120,
				align: 'center'
			}, {
				field: 'price',
				title: '优惠价格',
				width: 80,
				align: 'center',
                formatter: function(val) {
                    return val + '万元';
                }
			}, {
                field: 'cj_price',
                title: '厂家价格',
                width: 80,
                align: 'center',
                formatter: function(val) {
                    return val + '万元';
                }
            }, {
				field: 'brand',
				title: '品牌',
				width: 80,
				align: 'center'
			}, {
				field: 'grade',
				title: '级别',
				width: 80,
				align: 'center'
			}, {
				field: 'address',
				title: '商家地址',
				width: 180,
				align: 'center'
			}, {
				field: 'telephone',
				title: '电话',
				width: 120,
				align: 'center'
			}, {
				field: 'edittime',
				title: '最近编辑时间',
				width: 80,
				align: 'center'
			}, {
				field: 'status',
				title: '状态',
				width: 60,
				align: 'center',
				formatter: function(val) {
					if (val == 1) {
						return "启用";
					} else {
						return "禁用";
					}
				}
			}, {
				field: 'recommand',
				title: '推荐',
				width: 80,
				align: 'center',
				formatter: function(val) {
					if (val == 1) {
						return "推荐";
					} else {
						return "不推荐";
					}
				}
			}]
		],
		toolbar: [{
			iconCls: "icon-add",
			text: "添加",
			id: "add",
			enable: true,
			handler: function() {
				$("#window").window({
					title: "添加用户",
					width: 800,
					height: 500,
					closed: true,
					minimizable: false,
					maximizable: false,
					collapsible: false,
					href: "/Admin_Car/add/",
					doSize: true,
					modal: true
				}).window("open");
			}
		}, {
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
							href: "/Admin_Car/edit/?id=" + id,
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
					$.post("/Admin_Car/del/", {
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
					$.post("/Admin_Car/status/", {
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
					$.post("/Admin_Car/status/", {
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
		},{
			iconCls: "icon-ok",
			text: "推荐",
			id: "recommand",
			disabled: true,
			handler: function() {
				doCallback(function(row, rowindex, selections) {
					var id = selections[0].id;
					$.post("/Admin_Car/recommand/", {
						id: id,
						status: 1
					}, function(data) {
						if (data.success) {
							$("#data_table_body").datagrid("reload");
						} else {
							alert(data.msg);
						}
					});
				});
			}
		}, {
			iconCls: "icon-cancel",
			text: "取消推荐",
			id: "unrecommand",
			disabled: true,
			handler: function() {
				doCallback(function(row, rowindex, selections) {
					var id = selections[0].id;
					$.post("/Admin_Car/recommand/", {
						id: id,
						status: 0
					}, function(data) {
						if (data.success) {
							$("#data_table_body").datagrid("reload");
						} else {
							alert(data.msg);
						}
					});
				});
			}
		}, {
            iconCls: "icon-add",
            text: "添加车型价格",
            id: "addcarprice",
            enable: true,
            handler: function() {
                doCallback(function(row, rowindex, selections) {
                    var id = selections[0].id;
                    $("#window").window({
                        title: "添加车型价格",
                        width: 800,
                        height: 500,
                        closed: true,
                        minimizable: false,
                        maximizable: false,
                        collapsible: false,
                        href: "/Admin_Carprice/add/?id=" + id,
                        doSize: true,
                        modal: true
                    }).window("open");
                })
            }
        }, {
			iconCls: "icon-add",
			text: "添加团活动",
			id: "addhuddle",
			enable: true,
			handler: function() {
				doCallback(function(row, rowindex, selections) {
					var id = selections[0].id;
					$("#window").window({
						title: "添加车型价格",
						width: 800,
						height: 500,
						closed: true,
						minimizable: false,
						maximizable: false,
						collapsible: false,
						href: "/Admin_Huddle/add/?id=" + id,
						doSize: true,
						modal: true
					}).window("open");
				})
			}
		}, {
            iconCls: "icon-ok",
            text: "集客数据",
            id: "jike",
            enable: true,
            handler: function() {
                doCallback(function(row, rowindex, selections) {
                    var id = selections[0].id;
                    window.location.href = '/Admin_Jike/details?carid=' + id;
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