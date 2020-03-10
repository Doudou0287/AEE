var btnTop = document.getElementById("btnScrollToTop"); 

btnTop.addEventListener("click" ,function ()
{
    //window.scrollTo(0,0);
    window.scrollTo({
        top : 0,
        left : 100,
        behavior : "smooth",

    
    })


});

var i = 0,text; 
text = "Bienvenue sur notre site !"

function typing()
{
    if(i<text.length)
    {
        document.getElementById("titlebine").innerHTML += text.charAt(i);
        i++;
    }
    setTimeout(typing,100);
}
typing();

