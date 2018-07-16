$(document).ready(function(){
    //carousel for team
    var owl = $('.team-mates').owlCarousel({
        loop:false,
        //margin:200,
        autowidth:false,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            800:{
                items:3
            },
            1070:{
                items:4
            }
        }
    });

    //button left far team carousel
    $('.owl-prev').click(function(){
        console.log("fired");
        owl.trigger('prev.owl.carousel');
    });

    //button right far team carousel
    $('.owl-next').click(function(){
        console.log("fired");
        owl.trigger('next.owl.carousel');
    });

    //toggle burger
    $('.burger').click(function(){
        if($('.nav-list')!=null){
            $('.nav-list').toggleClass('show');
        }
        if($('.menu')!=null){
            $('.menu').toggleClass('show');
        }
        //$('.social-icons').toggleClass('show');
    });

    //store button interaction
    $('.section li').click(function(){
        $('.section li').removeClass('show');
        $('.description,.features,.dimensions').removeClass('visible');
        $(this).addClass('show');
        var temp = $(this).text().toLowerCase();
        $('.'+temp).addClass('visible');
    });

    //store owl carousel
    var boards = $('.board-gallery').owlCarousel({
        loop:false,
        autowidth:true,
        nav:false,
        dots:true,
        items:1,
        singleItem: true,
        //dotsData: true,
        responsive:{
            0:{
                items:1
            }
        }
    });

    // adds images to thumbnails
    $('.owl-dot').each(function(ind) {
        var imgs = [];
        for(var i=0; i<$('.store .owl-item img').length;i++){
            imgs[i]=$('.store .owl-item img')[i].src;
        }
        //console.log(imgs);
        $(this).css('background-image',"url('"+imgs[ind]+"')");
    });

    //adds icon that is hidden in html
    var waveIcon = $('#wave-icon').html();
    $('#menu-footer-menu li a').prepend("<img src=" + waveIcon + " alt='wave'>");

    //corrects height of youtube video, after apge refresh
    var video = document.getElementById('video').offsetWidth;
    document.getElementById("video").style.height = video*0.55 + "px";

    //uzraso zvaigzdes
    var countStars = parseInt($('.stars').html(),10);
    var finalStarsText = "<span>";
    for(var i = 0; i<countStars; i++){
        finalStarsText+="&#9733";
    }
    finalStarsText+="</span>";
    for(var i = 0; i<5-countStars; i++){
        finalStarsText+="&#9734";
    }
    $('.stars').html(finalStarsText+" (213)");
    console.log();
});


// removes instagram captions, must execute before dom is laoded
$(".instagram-media").removeAttr("data-instgrm-captioned");

