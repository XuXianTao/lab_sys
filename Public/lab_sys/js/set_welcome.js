function init() {
	var myDate = new Date();
	document.getElementById("welcome").innerHTML = "欢迎，"+{$user[0]['nam']}+"！<br>当前时间："+
	myDate.getFullYear().toString()+"年"+myDate.getMonth().toString()+"月"+
	myDate.getDate().toString()+"日"+myDate.getHours().toString()+"时"+
	myDate.getMinutes().toString()+"分"+myDate.getSeconds().toString()+"秒";
	window.setTimeout(init, 1000);
}