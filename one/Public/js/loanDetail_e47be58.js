define("invest:page/loan/details/loanDetail",["require","exports","module","common:widget/oui/lib/jquery/1.9.1/jquery","common:widget/oui/arale/tip/1.1.4/tip","common:widget/oui/common","common:widget/oui/protocol","common:widget/oui/widgets/widgets","common:widget/oui/components/components","common:widget/oui/arale/dialog/1.3.3/dialog","common:widget/oui/lib/handlebars/1.0.0/handlebars"],function(e,t,n){function a(){var e="true"==o("#authenticated").text(),t="true"==o("#pg-helper-is-investor").text(),n=o("#pg-helper-be-investor-message").html(),a=o("#fullTime");if(a.length){var c=a.data("time"),p=c.match(/(\d+)天/);p=null!==p?Number(p[1]):p;var g=c;g=p>0?c.split("分")[0]+"分":c.split("天")[1],g=g.replace(/(\d)+/g,function(e){return"<i class='num-family font-36px'>"+e+"</i>"}),a.html(g)}var u=(parseFloat(o("#max-account").data("account"),10),{container:o("#investment-terminal"),authenticated:e,qualified:t,qualifiedMessage:n});if(o("#pg-helper-has-withdraw-password").length>0){var h="true"==o("#pg-helper-has-withdraw-password").text();t=h&&t}var f,v,w;if(o("#pg-loan-invest").length>0?(f=parseInt(o("#max-amount").data("amount"),10),o.extend(u,{page:"loan-invest",unit:"amount",template:o("#confirm-loan-template"),amountPerShare:"cf"==o("#loan-type").val()?1e3:50,maxAmount:f,maxShares:f/w})):o("#pg-loan-transfer").length>0&&(v=parseInt(o("#max-shares").data("shares"),10),w=parseFloat(o("#amount-per-share").data("amount-per-share"),10),o.extend(u,{page:"loan-transfer",unit:"shares",template:o("#confirm-transfer-in-template"),amountPerShare:w,maxAmount:v*w,maxShares:v,utmSourceTransfer:"cf"==o("#loan-type-tr").val()?!0:!1})),new s.InvestmentTerminal(u).init(),o("#loan-details").length>0){var x=o("#pg-helper-loan-id").text();o.each(o(".pg-helper.large-number"),function(e,t){var n=o("#"+o(t).data("name")),a=o(t).text(),i=n.children("em"),r=n.children(".prefix"),m=n.children(".suffix");if(a){var s=parseFloat(a,10),d=parseInt(100*l.translator._bankersRound(s/100),10);(d!=s||s>=1e5)&&r.text("约"),d>=1e5?(r.length>0?(d=Math.floor(d/1e4),i.text(d)):i.text(l.translator._fixedFloat2(d/1e4)),m.text("万元")):i.text(d)}else i.text("0")}),o.each(o(".maybe-empty"),function(e,t){o(t).text()||o(t).text("-")}),r.fillTemplate({container:o("#verification-container"),template:o("#credit-info-template"),data:o("#credit-info-data"),api:l.API.getCreditInfo,isResponse:!0}),r.fillTemplate({container:o("#verification-container2"),template:o("#credit-info-template2"),data:o("#credit-info-data"),api:l.API.getCreditInfo,isResponse:!0}),new m.Tab({name:"loan",switched:function(e,t,n){return n?!0:("investment"==t&&d("investment",l.API.getLoanInvestmentRecords,{loanId:x}),"repayment"==t&&(d("repayment",l.API.getLoanRepaymentRecords,{loanId:x}),d("collection",l.API.getLoanCollectionRecords,{loanId:x})),"transferred"==t&&d("lender",l.API.getLoanLenderRecords,{loanId:x}),"transfer"==t&&d("transferred",l.API.getLoanTransferRecords,{loanId:x}),!0)}}).init()}o("#tipCon").length&&o("#tips").length&&new i({element:"#tipCon",trigger:"#tips",direction:"right"}),o("#tipCon_0").length&&o("#tips_0").length&&new i({element:"#tipCon_0",trigger:"#tips_0",direction:"right"}),o("#tipCon_1").length&&o("#tips_1").length&&new i({element:"#tipCon_1",trigger:"#tips_1",direction:"right"}),o("#tipCon_2").length&&o("#tips_2").length&&new i({element:"#tipCon_2",trigger:"#tips_2",direction:"down",arrowShift:-22})}var o=e("common:widget/oui/lib/jquery/1.9.1/jquery"),i=e("common:widget/oui/arale/tip/1.1.4/tip"),r=e("common:widget/oui/common"),l=e("common:widget/oui/protocol"),m=e("common:widget/oui/widgets/widgets"),s=e("common:widget/oui/components/components"),d=(e("common:widget/oui/arale/dialog/1.3.3/dialog"),e("common:widget/oui/lib/handlebars/1.0.0/handlebars"),m.GoTop(),function(e,t,n){var a=new m.List({name:e,api:t,title:!0,params:n,container:o("#"+e+"-records"),rendered:function(e){var n=e.status,a=e.data,i=l.translator;if(0===n&&t==l.API.getLoanInvestmentRecords&&o("#investor-count").text(a.lenderRecords.length),0===n&&t==l.API.getLoanLenderRecords&&o("#loan-buyer-count").text(a.lenders.length),0===n&&t==l.API.getLoanTransferRecords&&(o("#loan-done-amount").text(i._commaFloat(a.account)),o("#loan-left-amount").text(i._commaFloat(a.noAccount))),0===n&&t==l.API.getLoanCollectionRecords&&0===a.dunInfoList.length&&o("#collection-records").parent().remove(),0===n&&t==l.API.getLoanRepaymentRecords&&(o("#repayment-done-amount").text(i._commaFloat(a.repaid)),o("#repayment-left-amount").text(i._commaFloat(a.unRepaid))),0===n&&t==l.API.getPlanJoinedRecords){o("#joined-count").text(a.jsonList.length);var r=0;o.each(a.jsonList,function(e,t){r+=Number(t.amount.replace(/,/g,""))}),o("#reserve-had-pay-amount").html(r)}if(0===n&&t==l.API.getPlanReserveRecords){var m=0;o.each(a.rsvList,function(e,t){"未支付"==t.status&&(m+=t.planAmountNotComma)}),o("#reserve-not-pay-amount").html(m),o("#reserve-count").text(a.rsvList.length)}}}).init();return a._update(a.getParams()),a}),c={init:a};n.exports=c});