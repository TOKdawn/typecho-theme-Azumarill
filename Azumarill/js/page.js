//Ready
$(document).ready(function () {
    console.log('公主已仙逝');
    console.log('少年血仍烧');
    console.log('恶龙今犹在');
    console.log('不见安徒生');
    hSize();



    var $overlay = $('.z_overlay');
    var $star = $('.star-1');
    var $star_2 = $('.star-2');
    var $star_3 = $('.star-3');
    TweenMax.to($overlay,
        7, {
            css: {
                backgroundPosition: '100% 50%'
            },
            repeat: -1,
            yoyo: true
        });
    TweenMax.from($star, 7, {
        css: {
            left: '-100px'
        },
        repeat: -1
    });
    TweenMax.from($star_2, 10, {
        css: {
            left: '-100px'
        },
        repeat: -1
    });
    TweenMax.from($star_3, 5, {
        css: {
            left: '-100px'
        },
        repeat: -1
    });
});
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



var timer;

function getkoto() {
    var loader = document.createElement('script');
    loader.setAttribute('src', 'http://api.hitokoto.us/rand?encode=jsc&fun=echokoto');
    document.getElementById("loadbox").appendChild(loader);
    timer = setTimeout("getkoto()", 5000);
}

function echokoto(result) {
    var hc = eval(result);
    document.getElementById("hitokoto").innerHTML = hc.hitokoto;
}