$(document).ready(function() {
            App.init();
        });
$(document).ready(function() {
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true
      });
    })
    document.getElementById("datetimedisplay").innerHTML = formatAMPM();
    function formatAMPM() {
        var d = new Date(),
        minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
        hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
        ampm = d.getHours() >= 12 ? 'pm' : 'am',
        months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
        days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
        return days[d.getDay()]+' '+months[d.getMonth()]+' '+d.getDate()+' '+d.getFullYear()+' '+hours+':'+minutes+ampm;
    }
    function headeradjust(){
        if ($(window).width() <= 767) return;
        $(window).scroll(function() {
            var topschead = $(".top-nav").outerHeight();
            var headerheight = $(".header").outerHeight();
            if ($(this).scrollTop() > topschead){
                $('.header').css({'position':'fixed','z-index':'9999','top':'0px','width':'100%'});
                $('.fullslider').css({'margin-top':headerheight});
                $('.breadcrumbmar').css({'margin-top':headerheight});
            }
            else{
               $('.header').css({'position':'relative','z-index':'9999','top':'0px','width':'100%'});
               $('.fullslider').css({'margin-top':'0px'});
               $('.breadcrumbmar').css({'margin-top':'0px'});
            }
        });
    };
    headeradjust();
     function headeradjustmob(){
        if ($(window).width() >= 767) return;
        $(window).scroll(function() {
            var topschead = $(".top-nav").outerHeight();
            var headerheight = $(".header").outerHeight();
            if ($(this).scrollTop() > topschead){
                $('.header').css({'position':'fixed','z-index':'9999','top':'0px','width':'100%'});
                $('.fullslider').css({'margin-top':headerheight});
                $('.breadcrumbmar').css({'margin-top':headerheight});
            }
            else{
               $('.header').css({'position':'relative','z-index':'9999','top':'0px','width':'100%'});
               $('.fullslider').css({'margin-top':'0px'});
               $('.breadcrumbmar').css({'margin-top':'0px'});
            }
        });
    };
    headeradjustmob();
    if ($(window).width() <= 767){
        function filter_boxopen() {
        document.getElementById("rightsideblogfilter").style.right = "0%";
        $("body").css("overflow","hidden");
        }
        function filter_boxclose() {
        document.getElementById("rightsideblogfilter").style.right = "-100%";
        $("body").css("overflow","visible");
        }
        var headerheightmob = $(".header").outerHeight();
        var windowheightmob = $(window).outerHeight();
        var windowheightmobminhed = windowheightmob - headerheightmob;
        $('.sidebarscroll').css('height', windowheightmobminhed);
    }
   
        