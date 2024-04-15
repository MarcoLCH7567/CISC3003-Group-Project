var lbtn = document.querySelector('.logobutton');
var zhang = document.querySelector('#zhang');
var mima = document.querySelector('#mima');
var yanzheng = document.querySelector('#yanzheng');
var huoquyan = document.querySelector('#huoquyan');
var check = document.querySelector('#check');
huoquyan.onclick=function(){
	alert('Verification code sent!');
}
lbtn.onclick=function(){
	if(pn.value=='' || pw.value=='' || ck.value=='' || check.checked==false){
		alert('The text box cannot be empty!');
	}
}