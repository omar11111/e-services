

/************* start slider**************************/
var team = document.getElementsByClassName("team");
var selctedindex=1;

function show(n)
{
    selctedindex+=n;
    slid(selctedindex);
    
}


 function slid(n)
{
    if(selctedindex>team.length)
        {
            selctedindex=1;
            
        }
    
    if(selctedindex<1)
        {
            selctedindex=team.length;
            
        }
    
    for(var i = 0 ; i<team.length; i++)
        {
            team[i].style.display="none";
            
        }
    team[selctedindex-1].style.display="block"
}

slid(1);

/************* end slider**************************/




var btns = document.querySelectorAll(".ui");
var panels = document.querySelectorAll(".shops");
panels[0].style.display = "block";

btns[0].style.color = "#09c";
btns[0].style.borderBottom = '1px solid #09c';

function showPanel(panelIndx , clrIndx , brdrIndx){
    
   
    
    panels.forEach(function(e){
        e.style.display = "none";
    })
    panels[panelIndx].style.display = "block"
    
    
     btns.forEach(function(e){
        e.style.color = "";
        e.style.borderBottom = "";
    })
    btns[panelIndx].style.color = clrIndx
    btns[panelIndx].style.borderBottom = brdrIndx
    
}



//console.log(panels)







var btnUp = document.getElementById("up")

btnUp.style.display = "none"

window.addEventListener("scroll" , function(){
    console.log(window.pageYOffset)
    if(    window.pageYOffset >= 711){
        btnUp.style.display = "block"
    } else{
        btnUp.style.display = "none"
    }
})




btnUp.addEventListener("click" ,function(){
    window.scrollTo(0,0)
})





/***********************************statrt**************/



var heads = document.querySelectorAll(".head")
var bodys = document.querySelectorAll(".accbody")
heads[0].lastChild.setAttribute("class" , "fa fa-minus")
bodys[0].style.display = "block"

for(var i=0 ; i<heads.length ; i++){
    heads[i].addEventListener("click" , function(){
        bodys.forEach(function(e){
        e.style.display = "none"
    })
        
            heads.forEach(function(e){
            e.lastChild.setAttribute("class" , "fa fa-plus")
        })
        this.nextElementSibling.style.display = "block"
        this.lastChild.setAttribute("class" , "fa fa-minus")
        
    })
}






































/***********************************end**********/






