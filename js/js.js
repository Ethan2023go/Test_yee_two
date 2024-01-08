// JavaScript Document
function lo(th,url)
{
	$.ajax(url,{cache:false,success: function(x){$(th).html(x)}})
}
function good(news) {  
	$.post("./api/good.php",{news},()=>{
		location.reload(); 
		// reload方式 很消耗流量 (但是考試很快)
		
		
		// 下面這個方法屬於省流方法

		// switch($("#n"+news).text()){
		// 	case "讚":
		// 		$("#n"+news).text("收回讚")
		// 		$("#g"+news).text($("#g"+news).text()*1+1)
		// 	break;
		// 	case "收回讚":
		// 		$("#n"+news).text("讚")
		// 		$("#g"+news).text($("#g"+news).text()*1-1)
		// 	break;
		// }
        
	})  
  }