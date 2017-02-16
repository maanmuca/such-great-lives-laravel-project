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

//        $("#myVideo").attr("width","672");
//        $("#myVideo").attr("height","372");
    }
    if(width<768)
    {
        $(".sidenav").css("width", "0px");

        $("#closeNav").click(function () {
            $(".sidenav").css("width", "0px");
        });

//        $("#myVideo").attr("width","448");
//        $("#myVideo").attr("height","248");
    }

    if(width<480)
    {
        $(".sidenav").css("width", "0px");

        $("#closeNav").click(function () {
            $(".sidenav").css("width", "0px");
        });

        $("#myVideo").attr("width","269");
        $("#myVideo").attr("height","149");
    }

    if(width<320)
    {
        $(".sidenav").css("width", "0px");

        $("#closeNav").click(function () {
            $(".sidenav").css("width", "0px");
        });

//        $("#myVideo").attr("width","180");
//        $("#myVideo").attr("height","100");
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
//            $("#myVideo").attr("width","672");
//            $("#myVideo").attr("height","372");

            $("#closeNav").click(function () {
                $(".sidenav").css("width", "0px");
            });
        }

    var title =[ "Such Great Lives - Nien Nunb (Rehearsal)"
        ,"Such Great Lives - Gato Negro (live)"
        ,"Such Great Lives - El Turco"
        ,"Such Great Lives - No Retreat"
        ,"Such Great Lives - Nien Nunb (Part 2)"
        ,"Such Great Lives - Nien Nunb (Part 1)"
        ,"Such Great Lives - Smartphone"
        ,"Such Great Lives - Nien Nunb (live)"
        ,"Such Great Lives - Trivia Nights"
        ,"Such Great Lives - Gotta Girlfriend Today / Smartphone (live)"
        ,"3.3 Album Promo [2016]"
        ,"Such Great Lives - Blamer"
        ,"WHAT A CACK! Album Promo (2011)"
        ,"Such Great Lives - Kitchen Table"
        ,"THE MANIA Album Promo (2014)"
        ,"Such Great Lives - Gotta Girlfriend Today (live )"
        ,"Such Great Lives - Don't Say When (live)"
        ,"Such Great Lives - Sexy Secretary (live)"
        ,"Such Great Lives - Purple Parliament"
        ,"Such Great Lives - Szabology"
        ,"Such Great Lives - Kitchen Table (live)"
        ,"Such Great Lives - Pleasure"
        ,"Such Great Lives - I'm Like A Bear (live)"
        ,"Such Great Lives - Ewok Song"
        ,"Such Great Lives - Pescaterian Paradise"
        ,"Such Great Lives - Girls Of The World"
        ,"Such Great Lives - I'll Take You To The Bush"
        ,"Such Great Lives - Gezellig"
        ,"Such Great Lives - Stan's Van"
        ,"Such Great Lives - UVPPP"
        ,"Such Great Lives - Don't Be A Stranger"
        ,"Such Great Lives - Waiting For Episode 7"
    ];



    var thumbnails=["https://i.ytimg.com/vi/Oh3d0wSKDBY/hqdefault.jpg",
                    "https://i.ytimg.com/vi/JMewgpPTMrE/hqdefault.jpg",
                    "https://i.ytimg.com/vi/zZ6Fb1z8Y4Y/hqdefault.jpg",
                    "https://i.ytimg.com/vi/YavdHwUwm94/hqdefault.jpg",
                    "https://i.ytimg.com/vi/eM5VRZgSKOs/hqdefault.jpg",
                    "https://i.ytimg.com/vi/KpkJtkNEGSk/hqdefault.jpg",
                    "https://i.ytimg.com/vi/MxHvBMBL3uc/hqdefault.jpg",
                    "https://i.ytimg.com/vi/-psicPaFTMA/hqdefault.jpg",
                    "https://i.ytimg.com/vi/FSXwPpdT61c/hqdefault.jpg",
                    "https://i.ytimg.com/vi/Xk-igObV4MI/hqdefault.jpg",
                    "https://i.ytimg.com/vi/sWgBu_6tiE8/hqdefault.jpg",
                    "https://i.ytimg.com/vi/H9H9BAa-kIA/hqdefault.jpg",
                    "https://i.ytimg.com/vi/xrGuK6Vg8o0/hqdefault.jpg",
                    "https://i.ytimg.com/vi/K5APe7Rd6Xc/hqdefault.jpg",
                    "https://i.ytimg.com/vi/XNhyhm2380Q/hqdefault.jpg",
                    "https://i.ytimg.com/vi/fenfL18jx3s/hqdefault.jpg",
                    "https://i.ytimg.com/vi/Ser9KH-j6w0/hqdefault.jpg",
                    "https://i.ytimg.com/vi/XBvH6jU-EOo/hqdefault.jpg",
                    "https://i.ytimg.com/vi/7pAjJ_vWFS8/hqdefault.jpg",
                    "https://i.ytimg.com/vi/2gqkyMjG5uM/hqdefault.jpg",
                    "https://i.ytimg.com/vi/ciO5W4xBpoA/hqdefault.jpg",
                    "https://i.ytimg.com/vi/RoOnWZmqzFM/hqdefault.jpg",
                    "https://i.ytimg.com/vi/OyXPvJHqKBE/hqdefault.jpg",
                    "https://i.ytimg.com/vi/mZjzvAvqNR4/hqdefault.jpg",
                    "https://i.ytimg.com/vi/eEhwhZcfIgU/hqdefault.jpg",
                    "https://i.ytimg.com/vi/jtL8WLARpyA/hqdefault.jpg",
                    "https://i.ytimg.com/vi/5WUtIN5fsqE/hqdefault.jpg",
                    "https://i.ytimg.com/vi/_nRrXkvna0o/hqdefault.jpg",
                    "https://i.ytimg.com/vi/L7T9djJrWJQ/hqdefault.jpg",
                    "https://i.ytimg.com/vi/lNiSVNNE_Tg/hqdefault.jpg",
                    "https://i.ytimg.com/vi/j__KAElQ-o8/hqdefault.jpg",
                    "https://i.ytimg.com/vi/vo9kZasoXC4/hqdefault.jpg"
        ]



    //high: 14 an 15 what is that?

    //alert(title.length);
    //alert(thumbnails.length);
    //alert(videoId.length);

    var thumbnailHtml = "";

    for (var i = 0; i < thumbnails.length; i++) {
        thumbnailHtml += "<div class='col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center'>";
        thumbnailHtml += "<img src='" + thumbnails[i] + "' onclick='changeVideoLgImage(" + i + ")' id='videoImage" + i + "' class='eachImageStyle img-responsive' >";
        thumbnailHtml += "<a id='top"+i+"'><img src='../images/you_tube_btn.png' onclick='changeVideo(" + i + ")' onmouseenter='fullOpacity(" + i + ")' id='thumbnail" + i + "' class='youTubeBtnStyle'></a>";
        thumbnailHtml += "<p class='youtubeTitle'>"+title[i]+"</p>"
        thumbnailHtml += "</div>";
    }
    $("#myThumbnails").html(thumbnailHtml);

   /* window.fbAsyncInit = function() {
        FB.init({
            appId      : '1858518364430034',
            xfbml      : true,
            version    : 'v2.8'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    ShowMyName();

    function ShowMyName() {
        FB.api(
            "/419230241763612/feed",
            function (response) {
                if (response && !response.error)
                {
                    alert(response.length);
                }
            }
        );
    }*/



   /* var channelId ="UCd6sEEFIAg7SPoM5fBujc8g";
    var APIKey ="AIzaSyAc9K34Rzx7sPBKcpKjWjhF7i9IK11Q6-o";
    var yt_url='https://www.googleapis.com/youtube/v3/activities?part=snippet,contentDetails&channelId='+channelId+'&maxResults=50&key='+APIKey;
    var videoID;
    $.ajax
    ({
        type: "GET",
        url: yt_url,
        dataType: "jsonp",
        success: function (response) {
            //var i =  response.items.length;
            //alert(i);

            //alert( response.items[0].contentDetails.upload.videoId);
            //alert( response.items[30].snippet.thumbnails.high.url);

            alert(title.length);
            var videos = [];
            var thumbnails = [];

            $.each(response.items, function (i, l) {
                videos[i] = response.items[i].contentDetails.upload.videoId;
                alert(response.items[i].contentDetails.upload.videoId);
                thumbnails[i] = response.items[i].snippet.thumbnails.high.url;
                alert(response.items[i].snippet.thumbnails.high.url);
            });

            alert(thumbnails.length);
            alert(videos[0]);


            var mainVideo = '<iframe width="100%" height="480" src="https://www.youtube.com/embed/' + videos[0] + '?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="0" allowfullscreen></iframe>';
            $("#player").html(mainVideo);

            var thumbnailHtml = "";

            for (var i = 0; i < thumbnails.length; i++) {
                thumbnailHtml += "<div class='col-lg-3 '>";
                thumbnailHtml += "<img src='" + thumbnails[i] + "' height='200' id='videoImage" + i + "' class='eachImageStyle' >";
                thumbnailHtml += "<img src='../images/you_tube_btn.png' onmouseenter='fullOpacity(" + i + ")' id='thumbnail" + i + "' class='youTubeBtnStyle'  >";
                thumbnailHtml += "</div>";
            }
            $("#myThumbnails").html(thumbnailHtml);
        }
    });*/
});

function fullOpacity(i)
{
    $('#thumbnail'+i).hover
    (
        function () {
            $('#thumbnail'+i).css("opacity", "1");
        },
        function () {
            $('#thumbnail'+i).css("opacity", "0.5");
        }
    );

    $('#videoImage'+i).hover
    (
        function () {
            $('#thumbnail'+i).css("opacity", "1");
        },
        function () {
            $('#thumbnail'+i).css("opacity", "0.5");
        }
    );


}
var videoId =["Oh3d0wSKDBY","JMewgpPTMrE","zZ6Fb1z8Y4Y","YavdHwUwm94","eM5VRZgSKOs","KpkJtkNEGSk","MxHvBMBL3uc","-psicPaFTMA",
    "FSXwPpdT61c","Xk-igObV4MI","sWgBu_6tiE8","H9H9BAa-kIA","xrGuK6Vg8o0","K5APe7Rd6Xc","XNhyhm2380Q","fenfL18jx3s",
    "Ser9KH-j6w0","XBvH6jU-EOo","7pAjJ_vWFS8","2gqkyMjG5uM","ciO5W4xBpoA","RoOnWZmqzFM","OyXPvJHqKBE","mZjzvAvqNR4",
    "eEhwhZcfIgU","jtL8WLARpyA","5WUtIN5fsqE","_nRrXkvna0o","L7T9djJrWJQ","lNiSVNNE_Tg","j__KAElQ-o8","vo9kZasoXC4"];

function  changeVideo(i)
{
        $("html, body").animate({ scrollTop: 0 }, 600);
        $("#myVideo").attr("src","https://www.youtube.com/embed/"+videoId[i]+"?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie");
        $("#myVideo")[0].src += "&autoplay=1";

}

function changeVideoLgImage(i)
{
        $('#top'+i).animate({ scrollTop: 0 }, 600);
        $("#myVideo").attr("src","https://www.youtube.com/embed/"+videoId[i]+"?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie");
        $("#myVideo")[0].src += "&autoplay=1";
}

