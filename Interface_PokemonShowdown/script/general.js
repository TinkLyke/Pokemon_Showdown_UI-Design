$(document).ready(function(){

    $("a.M-Button").click(function(){
        $(".SideMenu-Panel").slideToggle('fast');
    });


    //when Chat toggle button is clicked, display Chat panel and remove Dmg Calculator panel
    $("a.C-Button").click(function(){

    document.getElementById("chat").style["display"] = "block";
        document.getElementById("dmg-cal").style["display"] = "none";   

        document.getElementById("cbutton").style["background-color"] = "#0097DE";
        document.getElementById("dcbutton").style["background-color"] = "#0073B2";  
     });

     //when Dmg Calculator toggle button is clicked, display Dmg-Cal panel and remove chat panel
    $("a.DC-Button").click(function(){

        document.getElementById("dmg-cal").style["display"] = "block";
        document.getElementById("chat").style["display"] = "none";
        document.getElementById("cbutton").style["background-color"] = "#0073B2";
        document.getElementById("dcbutton").style["background-color"] = "#0097DE";  
    });

    



/*When page is loaded*/
$(window).on("load",function(){
        document.getElementById("chat").style["display"] = "none";
         document.getElementById("sidemenu").style["display"] = "none";
        




  });





	
});

