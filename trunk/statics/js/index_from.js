$(function(){
				var tm1=false;
                var tm2=false;               
                var tnum=/^1[34578]\d{9}$/;                                                              
                 // 验证用户名
                $('input[name="username"]').focus(function(){
                    $(this).next().text('姓名应为2个字符以上').removeClass('dd4').addClass('dd3');
                }).blur(function(){
                    if($(this).val().length >= 2 && $(this).val().length <=12 && $(this).val()!=''){
                        $(this).next().text('输入正确').removeClass('dd3').addClass('dd2');
                        tm1=true;
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
                        tm2=true;
                        
                    }
                     
                });
                                
                $("#fromshow2").hide();              
                $(".closefrom").click(function(){
                	 $("#fromshow2").hide();
                });
                
				$('.but1').click(function(){
					if((tm1==true) &&(tm2==true)){
                        $("#fromshow2").hide(function(){
                        	$("#fromshow2 #myform3")[0].reset();
                        });
                        
                    }else{
                        return false;
                    }
				});
			})

