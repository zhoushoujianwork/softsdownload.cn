function checkUserid(){
	var ueridObj=document.getElementById("userid");
	var userid=trim(ueridObj.value);
	var useridRegex= /^\w{6,12}$/;
	var msg ="   <img src='img/true.gif' style='width:12px'>";
	if(!userid)
		msg ="<font color='red'>账号不能为空！</font>";
	else if(!useridRegex.test(userid))
		msg ="<font color='red'>账号长度不对！</font>";
	var span = document.getElementById("useridSpan");
	span.innerHTML = msg;
	return msg == "   <img src='img/true.gif' style='width:12px'>";
	}
function trim(s){
   return s.replace(/^\s+|\s+$/g,"");
}
