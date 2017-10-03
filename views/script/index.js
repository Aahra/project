<<<<<<< HEAD

=======
//alert("hell yeah");
>>>>>>> d01f22b5422893dc5b9040ca28865d190f4587da
var index=0;
slide();
function slide() {
    var i;
    var x=document.getElementById("slideshow");
    alert(x);
    for(i=0;i<x.length;i++)
    {
        x[i].style.display="none";
    }
    index++;
    if(index>x.length)
    {
        index=1;
    }
    x[index-1].style.display="block";
    setTimeout(slide,2000);


<<<<<<< HEAD
}
=======
}
>>>>>>> d01f22b5422893dc5b9040ca28865d190f4587da
