define("user:page/setting/layout/layout",["require","exports","module","common:widget/oui/lib/jquery/1.9.1/jquery","common:widget/oui/rsa/index","common:widget/oui/widgets/widgets"],function(e,o,t){var i=e("common:widget/oui/lib/jquery/1.9.1/jquery"),n=e("common:widget/oui/rsa/index"),d=e("common:widget/oui/widgets/widgets"),a=d.Form,s={init:function(){function e(e,o){e.length&&(o?e.removeAttr("disabled").removeClass("ui-button-disabled"):e.attr("disabled","disabled").addClass("ui-button-disabled"))}i(document.body).on("click",".backBt",function(){location.href="/account/info!basicInfo.action"});var o=function(){{var e=i(".success");i(".backBt")}e.length&&(i(".content").delay(1e3).slideUp(),e.delay(1e3).slideDown(),setTimeout(function(){location.href="/account/info!basicInfo.action"},2e3))},t=i(".success").length,d=i("#modPswForm,#modCashPswForm,#findCashPswFormStepOneForm,#findCashPswFormStepTwoForm,#modMobileByPhoneStepOneForm,#modMobileByPhoneStepTwoForm,#modMobileByIdStepOneForm,#modMobileByIdStepTwoForm,#emailUpdateByOldStepOneForm,#emailUpdateByOldStepTwoForm,#emailUpdateByMobileStepOneForm,#setIdForm,#setEmailForm,#setMobileForm,#setCashPwdForm,#setNickNameForm");i("#reSendMail").click(function(e){var o=i("#mailType").val()||"old";i.post(i(this).attr("href"),{mailType:o},function(e){if(e&&"string"==typeof e)try{e=i.parseJSON(e)}catch(o){e={status:1,message:"解析后端结果出错,请稍后再试"}}e&&e.message?a.msg("#reSendMail",e.message):a.msg("#reSendMail","服务器出错,请稍后再试")}),e.preventDefault()}),d.length&&a.validate({target:"#"+d[0].id,before:function(){i("#getMobileCode").length&&(a.sendPhoneCode("phone","getVoiceCode","/sendPhoneCode!voiceCode.action?&checkCode=other&phone=",{onStart:function(){e(i("#getMobileCode"),!1)},onClear:function(){e(i("#getMobileCode"),!0)}}),a.sendPhoneCode("phone","getMobileCode","/sendPhoneCode.action?&checkCode=other&phone=",{onStart:function(){i(".voice").show(),e(i("#getVoiceCode"),!1)},onClear:function(){e(i("#getVoiceCode"),!0)}})),i("#getMobileCodeWithoutMobile").length&&(a.sendPhoneCode("phone","getVoiceCode","/account/bindMobile!sendOrigionalPhoneCode.action?type=VOICE&checkCode=other",{onStart:function(){e(i("#getMobileCodeWithoutMobile"),!1)},onClear:function(){e(i("#getMobileCodeWithoutMobile"),!0)}}),a.sendPhoneCode("","getMobileCodeWithoutMobile","/account/bindMobile!sendOrigionalPhoneCode.action?&checkCode=other",{onStart:function(){i(".voice").show(),e(i("#getVoiceCode"),!1)},onClear:function(){e(i("#getVoiceCode"),!0)}})),i("#randImage").length&&a.randImage()},validateData:{submitHandler:function(e){var s=i("input[type=password]",e);"undefined"!=typeof n&&s.each(function(){i(this).val(n(i(this).val()))}),t?a.ajaxSubmit(i(e),{msgafter:"#"+d.find("input[type='submit']")[0].id,success:function(e){s.each(function(){i(this).val("")}),this.msg(e.message,"warn"),0===e.status&&o()}}):e.submit()}}})}};t.exports=s});