$('.carousel').carousel({
    interval: 9000
});

$(window).resize(function()
{
    var width = $(window).width();
    //alert(width);

    var positionLeftMenu=width-(width*0.2);
    var height = $(window).height();
    var positionTopMenu =height-(height*0.2);

        $("#menu-slider").css("right","10%");
        $("#menu-slider").css("top","80%");
    if(width<1024)
    {
        $(".sidenav").css("width", "0px");

        $("#closeNav").click(function () {
            $(".sidenav").css("width", "0px");
        });
    }
    else
    {
        $(".sidenav").css("width", "150px");
    }
});

$(document).ready(function() {
    var width = $(window).width();
    //alert(width);
    var positionLeftMenu=width-200;
    var height = $(window).height();
    var positionTopMenu =height-100;

        $("#menu-slider").css("right","10%");
        $("#menu-slider").css("top","80%");
        $("#menu-slider").click(function()
        {
           $(".sidenav").css("width","150px");
        });

        if(width<1024)
        {

            $("#closeNav").click(function () {
                $(".sidenav").css("width", "0px");
            });
        }


});

