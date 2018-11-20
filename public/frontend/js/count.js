document.writeln("<!--弹窗计算器 开始-->");
document.writeln("<div class=\'calculator_popup_mask\'></div>");
document.writeln("<div class=\'bottom_slide_box calculator_popup\'>");
document.writeln("<a id=\'calculator_popup_close\' class=\'close\' href=\'javascript:void(0)\' title=\'关闭\'>×</a>");
document.writeln("<div class=\'zxbj_zxys\'>");
document.writeln("					<div class=\'con_bj clear\'><!-- calculate -->");
document.writeln("						<div class=\'con_bj_cal col_l\'>");
document.writeln("							<h3 class=\'calputer_tit\'>开店计算器<span>今天已有 <em class=\'zxys_num_man\'>"+parseInt(Math.random()*(4000-2500+1)+2500,10)+"</em> 位创业者获取了开店预算</span></h3>");
document.writeln("							<form onsubmit=\'return false;\'>");
document.writeln("								<div class=\'mod_form bj_form\'>");
document.writeln("									<div class=\'form_line\'>");
document.writeln("										<label for=\'\' class=\'label\'><em class=\'label_start\'>*</em>加盟费用：</label>");
document.writeln("										<div class=\'element\'>");
document.writeln("											<div class=\'text_wrap\'>");
document.writeln("												<input type=\'text\' class=\'text area_text\' name=\'jmfy\' id=\'jmfy\'>");
document.writeln("										</div>");
document.writeln("									</div>");
document.writeln("									</div>");
document.writeln("									");
document.writeln("									<div class=\'form_line\'>");
document.writeln("										<label for=\'\' class=\'label\'><em class=\'label_start\'>*</em>店铺租金：</label>");
document.writeln("										<div class=\'element\'>");
document.writeln("											<div class=\'text_wrap\'>");
document.writeln("												<input type=\'text\' class=\'text area_text\' name=\'dpzj\' id=\'dpzj\'>");
document.writeln("										</div>");
document.writeln("									</div>");
document.writeln("									</div>");
document.writeln("									");
document.writeln("									<div class=\'form_line\'>");
document.writeln("										<label for=\'\' class=\'label\'><em class=\'label_start\'>*</em>人员成本：</label>");
document.writeln("										<div class=\'element\'>");
document.writeln("											<div class=\'text_wrap\'>");
document.writeln("												<input type=\'text\' class=\'text area_text\' name=\'rycb\' id=\'rycb\'>");
document.writeln("										</div>");
document.writeln("									</div>");
document.writeln("									</div>									");
document.writeln("									");
document.writeln("									");
document.writeln("									<div class=\'form_line\'>");
document.writeln("										<label for=\'\' class=\'label\'><em class=\'label_start\'>*</em>每单均价：</label>");
document.writeln("										<div class=\'element\'>");
document.writeln("											<div class=\'text_wrap\'>");
document.writeln("												<input type=\'text\' class=\'text area_text\' name=\'mdjj\' id=\'mdjj\'>");
document.writeln("										</div>");
document.writeln("									</div>");
document.writeln("									</div>");
document.writeln("									<div class=\'form_line\'>");
document.writeln("										<label for=\'\' class=\'label\'><em class=\'label_start\'>*</em>日成交量：</label>");
document.writeln("										<div class=\'element\'>");
document.writeln("											<div class=\'text_wrap\'>");
document.writeln("												<input type=\'text\' class=\'text area_text\' name=\'mrcb\' id=\'mrcb\'>");
document.writeln("										</div>");
document.writeln("									</div>");
document.writeln("									</div>");
document.writeln("");
document.writeln("									<div class=\'form_line\' id=\'zxys_phoneInput\'>");
document.writeln("										<label for=\'\' class=\'label\'><em class=\'label_start\'>*</em>手机号码 ：</label>");
document.writeln("										<div class=\'element\'>");
document.writeln("											<div class=\'text_wrap\'>");
document.writeln("												<input id=\'zxys_phonenumber\' type=\'text\' class=\'text phonetext\' name=\'phone\'> ");
document.writeln("												</div>");
document.writeln("										</div>");
document.writeln("									</div>");
document.writeln("									<div class=\'form_line\'><a href=\'javascript:void(0);\' class=\'calc-btn-start\' id=\'zxys_calc_btn\'>");
document.writeln("										<label for=\'zxys_calc_btn\' id=\'zxys_btn_calc\' class=\'calcstart\'>开始计算</label>");
document.writeln("										<!-- 开始计算 -->");
document.writeln("										<input type=\'hidden\' id=\'zxys_myptag\' name=\'ptag\' value=\'1_1_1_99\'>");
document.writeln("										</a></div>");
document.writeln("								</div>");
document.writeln("							</form>");
document.writeln("						</div>");
document.writeln("						<!-- results -->");
document.writeln("						<div class=\'con_bj_res col_l\'><!--<h3>计算结果</h3>-->");
document.writeln("							<div class=\'zxys_result\'><span class=\'zxys-result-span\'>您的开店预算</span><b id=\'bprice\'>？</b><span>元</span></div>");
document.writeln("							<div class=\'zxgs-list\'>");
document.writeln("								<ul class=\'zxgs-list-before\' id=\"replacecontent\">");
document.writeln("									<li class=\'\'><span>加盟费：</span><strong id=\'materialPay\'><em>？</em>元</strong></li>");
document.writeln("									<li class=\'\'><span>成本费：</span><strong id=\'artificialPay\'><em>？</em>元</strong></li>");
document.writeln("									<li class=\'\'><span>营业额：</span><strong id=\'designPay\'><em>？</em>元</strong></li>");
document.writeln("									<li class=\'\'><span>日利润：</span><strong id=\'qualityPay\'><em>？</em>元</strong></li>");
document.writeln("								</ul>");
document.writeln("							</div>");
document.writeln("							<div class=\'bj_explain zxys_explain\' style=\'display:none\'>");
document.writeln("								<p class=\'attention holiday-text\'><b>*</b>稍候加盟顾问将给您回电、具体介绍加盟的相关准则和优惠信息</p>");
document.writeln("								<p class=\'text-none\'><b>*</b>因具体地区和店面不同，具体数据以加盟顾问提供数据为准</p>");
document.writeln("							</div>");
document.writeln("");
document.writeln("						</div>");
document.writeln("					</div>");
document.writeln("				</div>");
document.writeln("</div>");
document.writeln("<!--弹窗计算器 结束-->");
$(function(){

    $("#zxys_calc_btn").click(function(){

        var phoneno = $("#zxys_phonenumber").val();
        var jmfy=$("#jmfy").val();
        var dpzj=$("#dpzj").val();
        var rycb=$("#rycb").val();
        var mdjj=$("#mdjj").val();
        var mrcb=$("#mrcb").val();
        var host=window.location.href;

        if( phoneno  && /^1[3|4|5|8]\d{9}$/.test(phoneno) ){
            $.ajax({
                //提交数据的类型 POST GET
                type:"POST",
                //提交的网址
                url:"/phone/complate/list/",
                //提交的数据
                data:{"phoneno":phoneno,"jmfy":jmfy,"dpzj":dpzj,"rycb":rycb,"mdjj":mdjj,"mrcb":mrcb,"host":host},
                //返回数据的格式
                datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".

                success:function (response, stutas, xhr) {
                    //alert(response);
                    $("#replacecontent").html(response);
                }
            });

        } else{
            alert("您输入的手机号码"+phoneno+"不正确，请重新输入")
        }
    })
});
