//Ready
$(document).ready(function () {
    console.log('公主已仙逝');
    console.log('少年血仍烧');
    console.log('恶龙今犹在');
    console.log('不见安徒生');
    hSize();


    var $overlay = $('.zzz');
    var $star = $('.star-1');
    var $star_2 = $('.star-2');
    var $star_3 = $('.star-3');

    TweenMax.to($overlay,
        8, {
            css: {
                x: -900
            },
            repeat: -1,
            yoyo: true
        });
    TweenMax.from($star, 7, {
        css: {
            x: -420
        },
        repeat: -1
    });
    TweenMax.from($star_2, 10, {
        css: {
            x: -420
        },
        repeat: -1
    });
    TweenMax.from($star_3, 5, {
        css: {
            x: -420
        },
        repeat: -1
    });

})
//Resize
$(window).resize(function () {
    hSize();
});

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        $('.gotop').css('bottom', '0px');
    } else {
        $('.gotop').css('bottom', '-50px');
    }
});

// 同步header大小
function hSize() {
    if ($("body").width() > 650) {
        var sidebarH = $(".sidebar .z_overlay").outerHeight();
        $('.header .mob').css('display', 'none');
    }
    if ($("body").width() < 650) {
        var sidebarH = "100px";
        $('.header .mob').css('display', 'block');
    }
    $(".header").css("height", sidebarH);
    $(".main").css("top", sidebarH);
}

function menu() {
    if ($('.sidebar').css('display') == "none") {
        $('.sidebar').css('display', 'block');
        $(".menuicon i").removeClass().addClass("icon-cancel");
    } else {
        $('.sidebar').css('display', 'none');
        $(".menuicon i").removeClass().addClass("icon-menu");
    }
}

function gotop() {
    $("body,html").animate({
        scrollTop: 0
    }, 1000);
}