define("user:page/fund/index/index",["require","exports","module","common:widget/oui/lib/handlebars/1.0.0/handlebars","common:widget/oui/common","common:widget/oui/protocol","common:widget/oui/widgets/widgets","common:widget/ui/dialog/dialog","user:widget/ui/redemptionDialog/redemptionSingleton.jsx","common:widget/oui/arale/tip/1.1.4/tip","common:widget/oui/lib/jquery/1.9.1/jquery"],function(require,exports,module){var Handelbars=require("common:widget/oui/lib/handlebars/1.0.0/handlebars"),Common=require("common:widget/oui/common"),Protocol=require("common:widget/oui/protocol"),Widgets=require("common:widget/oui/widgets/widgets"),Dialog=require("common:widget/ui/dialog/dialog"),redeemDialog=require("user:widget/ui/redemptionDialog/redemptionSingleton.jsx");Tip=require("common:widget/oui/arale/tip/1.1.4/tip"),$=require("common:widget/oui/lib/jquery/1.9.1/jquery");var exports={init:function(){exports.myFuntTab(),exports.checkUserState()&&exports.myHoldingList()},checkUserState:function(){return!window.userData.rolePass&&window.userData.hasCashPass?($(".J_rolePass").show(),!1):!window.userData.hasCashPass&&window.userData.rolePass?($(".J_hasCashPass").show(),!1):window.userData.hasCashPass||window.userData.rolePass?window.userData.fundAccOpen?!0:($(".J_fundAccOpen").show(),!1):($(".J_roleAndPass").show(),!1)},myFuntTab:function(){new Widgets.Tab({name:"fund-account",switched:function(e,t,i){if(i)return!0;if("inhand-fund"==t&&(exports.mySubscribingList(),new NewTab({name:"inhand",switched:function(e,t,i){if(i)return!0;if("redeeming"==t){if(!exports.checkUserState())return;new Widgets.List({name:"redeeming-list",api:Protocol.API.getUserFundRedeeming,title:!0,pagination:!0,rendered:function(){this.container.find("span.shares_tips").each(function(){$(this).hover(function(){$("#shares_tipCon .ui-poptip-content").html("将赎回至尾号"+$(this).data("ui-poptip-content")+"的银行卡"),$("#shares_tipCon").css({position:"absolute",left:$(this).offset().left+22,top:$(this).offset().top-9,zIndex:99}).show()},function(){$("#shares_tipCon").hide()})})}}).init()._update()}if("callOption"==t){if(!exports.checkUserState())return;new Widgets.List({name:"callOption-list",api:Protocol.API.getUserFundCallOption,title:!0,pagination:!0,rendered:function(){this.container.find("span.reckonConfirmTime_tips").each(function(){$(this).hover(function(){$("#reckonConfirmTime_tipCon").css({position:"absolute",left:$(this).offset().left-13,top:$(this).offset().top+23,zIndex:99}).show()},function(){$("#reckonConfirmTime_tipCon").hide()})})}}).init()._update()}}}).init()),"retired-fund"==t){if(!exports.checkUserState())return;new Widgets.List({name:"retired-fund-list",api:Protocol.API.getUserLoansRetired,title:!0,pagination:!0,rendered:function(){}}).init()._update()}}}).init()},myHoldingList:function(){new Widgets.List({name:"holding-fund-list",api:Protocol.API.getUserHoldingFund,title:!0,pagination:!0,rendered:function(){this.container.find("a.J_redeem-btn").each(function(i){var fundcode=$(this).data("fundcode"),fundChannel=$(this).data("fundchannel");$(this).click(function(){$.ajax({url:"/fund/userFundAction!redemptionDetail.action?fundCode="+fundcode+"&fundChannel="+fundChannel,success:function(result){var result=eval("("+result+")");if("0"==result.status||0==result.status){var data={showing:!0,userData:window.userData,fullName:result.data.fundName,code:result.data.fundCode,feeUrl:"/fund/info/"+result.data.fundCode+"-tag010002#selectTabItem=fee",minShares:void 0==result.data.minRedemp?"--":result.data.minRedemp,maxShares:result.data.shares,refundPace:result.data.refundPace||"2",fundChannel:result.data.fundChannel,bankInfo:{bankCode:result.data.bankNo,bankType:result.data.bankName,tailNumber:result.data.cardNo.slice(-4)},time:result.data.arriveTime};redeemDialog.show(data)}else alert(result.message)}})})})}}).init(Common.loadJSON("#holding-fund-list-rsp",!0))},mySubscribingList:function(){exports.checkUserState()&&new Widgets.List({name:"subscribing-list",api:Protocol.API.getUserFundSubscribing,title:!0,pagination:!0,rendered:function(){this.container.find("span.reckonConfirmTime_tips").each(function(){$(this).hover(function(){$("#reckonConfirmTime_tipCon").css({position:"absolute",left:$(this).offset().left-13,top:$(this).offset().top+23,zIndex:99}).show()},function(){$("#reckonConfirmTime_tipCon").hide()})})}}).init()._update()}},NewTab=function(e){$.extend(this,{name:e.name,tabs:e.tabsContainer||$("#"+e.name+"-tab"),contents:e.contentsContainer||$("#"+e.name+"-tab-content"),switched:e.switched||function(){},clicked:e.clicked||function(){},_current:null}),this.tabItems=this.tabs.find(".ui-new-tab-item"),this.contentItems=this.contents.find(".ui-new-tab-content"),this.ui={};var t=this;$.each(this.tabItems,function(e,i){var n=$(i);name=n.data("name"),t.ui[name]||(t.ui[name]={}),t.ui[name].tab=n,t.ui[name].initialized=!1}),$.each(this.contentItems,function(e,i){var n=$(i);name=n.data("name"),t.ui[name].content=n})};$.extend(NewTab.prototype,{init:function(){this._current=this.getName(this.tabs.find(".ui-new-tab-item-current")),this.ui[this._current].initialized=!0;var e=this;this.tabItems.click(function(){var t=e._current,i=e.getName($(this));if(e._current=i,e.clicked(i,e.ui[i].initialized),t!=i){e.ui[t].tab.removeClass("ui-new-tab-item-current"),e.ui[t].content.removeClass("ui-new-tab-content-current"),e.ui[i].tab.addClass("ui-new-tab-item-current"),e.ui[i].content.addClass("ui-new-tab-content-current");var n=e.switched(t,i,e.ui[i].initialized);e.ui[i].initialized=n}})},getName:function(e){return e.data("name")}}),module.exports=exports});