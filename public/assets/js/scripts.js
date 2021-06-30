var span = document.getElementsByTagName('span');
var post = document.getElementsByClassName('post');
var l = 0;
span[1].onclick = ()=>{
    l++;
    for(var i of post)
    {
        if(l==0){i.style.left = "0px";}
        if(l==1){i.style.left = "-1050px";}
        if(l>3){l=3;}
    }
}

span[0].onclick = ()=>{
    l--;
    for(var i of post)
    {
        if(l==0){i.style.left = "0px";}
        if(l==1){i.style.left = "-1050px";}
        if(l<0){l=0;}
    }
}