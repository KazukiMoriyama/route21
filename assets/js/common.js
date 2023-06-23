$(document).ready(function () {
    // メニューの開閉
    $('.toggle-menu').on('click', function () {
        $(this).toggleClass('open');
        $('header').toggleClass('open');
    });

    // メニューボタンのクリック時の動作
    $('.header_menu_btn').on('click', function () {
        $('header.open').removeClass('open');
    });

    // ヘッダーの固定とmain要素へのmargin-topの追加
    $(window).scroll(function () {
        if ($(window).width() >= 920) {
            if ($(this).scrollTop() > 300) {
                $('#header').addClass('fixed');
                $('main').css('margin-top', '120px');
            } else {
                $('#header').removeClass('fixed');
                $('main').css('margin-top', '0');
            }
        } else {
            $('#header').removeClass('fixed');
            $('main').css('margin-top', '0');
        }
    });

    // ページトップボタンの固定
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.page_top').addClass('fixed');
        } else {
            $('.page_top').removeClass('fixed');
        }
    });

    // アコーディオンエリアの開閉
    $('.accordion-area .click').on('click', function () {
        var findElm = $(this).parent().next('.box');
        $(findElm).slideToggle();
        $(this).toggleClass('close');
    });
});

$(document).ready(function () {
    // トップページでのみ#headerに.header_sp_closeを追加
    if ($('body').hasClass('home')) {
        $('#header').addClass('header_sp_close');

        $(window).scroll(function () {
            if ($(window).width() <= 769) {
                // スクロール位置が505pxを超えたら.header_sp_closeを消す
                if ($(document).scrollTop() > 505) {
                    $('#header').removeClass('header_sp_close');
                } else {
                    $('#header').addClass('header_sp_close');
                }
            }
        });
    }
});

$('.slider').slick({
    arrows: false,//左右の矢印はなし
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
    speed: 13000,//スライドのスピード。初期値は300。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
    pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
    cssEase: 'linear',//動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
    slidesToShow: 3,//スライドを画面に4枚見せる
    slidesToScroll: 1,//1回のスライドで動かす要素数
    responsive: [
        {
            breakpoint: 769,//モニターの横幅が769px以下の見せ方
            settings: {
                slidesToShow: 2,//スライドを画面に2枚見せる
            }
        },
        {
            breakpoint: 426,//モニターの横幅が426px以下の見せ方
            settings: {
                slidesToShow: 1.5,//スライドを画面に1.5枚見せる
            }
        }
    ]
});
$('.slider2').slick({
    arrows: false,//左右の矢印はなし
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
    speed: 30000,//スライドのスピード。初期値は300。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
    pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
    cssEase: 'linear',//動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
    slidesToShow: 1,//スライドを画面に4枚見せる
    slidesToScroll: 1,//1回のスライドで動かす要素数
    responsive: [
        {
            breakpoint: 769,//モニターの横幅が769px以下の見せ方
            settings: {
                slidesToShow: 1,//スライドを画面に2枚見せる
            }
        },
        {
            breakpoint: 426,//モニターの横幅が426px以下の見せ方
            settings: {
                slidesToShow: 1,//スライドを画面に1.5枚見せる
            }
        }
    ]
});