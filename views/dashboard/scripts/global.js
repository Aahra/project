function change(str) {
var id=document.getElementById('content');
//alert(str);
var st='<iframe src="views/'+str+'.php"></iframe>';
//alert(st);
id.innerHTML=st;

}