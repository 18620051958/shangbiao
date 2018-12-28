<?php
include_once '../IpSearch.class.php';
$IpSearch = new IpSearch();
//获取ip
$ip = $IpSearch->get_client_ip();
//获取地理位置，亚洲|中国|香港|九龙|||810200|Hong Kong|HK|114.17495|22.327115
$address = $IpSearch->get();

//判断移动端
$res = $IpSearch->checkmobile();

//城市限制
$address_limit = 0;
$ips = array('140.205.30');
$citys = array('北京', '厦门', '广州');
foreach ($citys as $val) {
    if ($address && strpos($address, $val) !== false)
        $address_limit = 1;
}

// 获取 string_query

$channel = '';
$channel0 = '';

if (!$_SERVER['QUERY_STRING']) {
    $channel0 = 'BD3';
    $channel = '?id=BD3';
} else {
    $channel = '?' . $_SERVER['QUERY_STRING'];
    $matches = array();
    if (!empty(strchr($channel, '&bd_vid='))) {
        preg_match('/(&bd_vid).*/', $channel, $matches);
        $channel = str_ireplace($matches[0], "", $channel);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="keywords"
          content="上海牌手表SH3021,上海手表官方在线商城,上海表63周年款,上海全自动手表,上海机械表,上海手表专卖店"/>
    <meta name="description"
          content="上海牌手表，始创于1955年，是中国首块机械表的生产商，同时也被授予“中华老字号”品牌。2018年上海手表已经度过63个年头，推出型号SH3021纪念款首表，全球限量5000只，前1000只更可以享受6折优惠！"/>
    <title>上海牌手表SH3021,上海手表官方在线商城,上海牌陀飞轮手表,上海全自动手表,上海机械表,上海手表专卖店</title>
    <script>
        // flexible 代码
        ;
        (function (designWidth, maxWidth) {
            var doc = document,
                win = window;
            var docEl = doc.documentElement;
            var tid;
            var rootItem, rootStyle;

            function refreshRem() {
                var width = docEl.getBoundingClientRect().width;
                if (!maxWidth) {
                    maxWidth = 540;
                }
                ;
                if (width > maxWidth) {
                    width = maxWidth;
                }
                //与淘宝做法不同，直接采用简单的rem换算方法1rem=100px
                var rem = width * 100 / designWidth;
                //兼容UC开始
                rootStyle = "html{font-size:" + rem + 'px !important}';
                rootItem = document.getElementById('rootsize') || document.createElement("style");
                if (!document.getElementById('rootsize')) {
                    document.getElementsByTagName("head")[0].appendChild(rootItem);
                    rootItem.id = 'rootsize';
                }
                if (rootItem.styleSheet) {
                    rootItem.styleSheet.disabled || (rootItem.styleSheet.cssText = rootStyle)
                } else {
                    try {
                        rootItem.innerHTML = rootStyle
                    } catch (f) {
                        rootItem.innerText = rootStyle
                    }
                }
                //兼容UC结束
                docEl.style.fontSize = rem + "px";
            };
            refreshRem();

            win.addEventListener("resize", function () {
                clearTimeout(tid); //防止执行两次
                tid = setTimeout(refreshRem, 300);
            }, false);

            win.addEventListener("pageshow", function (e) {
                if (e.persisted) { // 浏览器后退的时候重新计算
                    clearTimeout(tid);
                    tid = setTimeout(refreshRem, 300);
                }
            }, false);

            if (doc.readyState === "complete") {
                doc.body.style.fontSize = "16px";
            } else {
                doc.addEventListener("DOMContentLoaded", function (e) {
                    doc.body.style.fontSize = "16px";
                }, false);
            }
        })(640, 640);
    </script>
    <link rel="icon" href="http://tyson.oss-cn-shenzhen.aliyuncs.com/18-7-8/979919.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/swiper.min.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/area.min.js"></script>

    <!-- 百度统计统计代码添加 -->
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?b2745678706fc8dea6c8270287ce08c6";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

    <!-- 美洽咨询工具 -->
    <script type='text/javascript'>
        (function (m, ei, q, i, a, j, s) {
            m[i] = m[i] || function () {
                    (m[i].a = m[i].a || []).push(arguments)
                };
            j = ei.createElement(q),
                s = ei.getElementsByTagName(q)[0];
            j.async = true;
            j.charset = 'UTF-8';
            j.src = 'https://static.meiqia.com/dist/meiqia.js?_=t';
            s.parentNode.insertBefore(j, s);
        })(window, document, 'script', '_MEIQIA');
        _MEIQIA('entId', 113387);
    </script>


    <!-- OCPC code -->
    <script type="text/javascript">
        window._agl = [];
        ;
        (function () {
            _agl.push(
                ['production', '_f7L2XwGXjyszb4d1e2oxPybgD']
            );
            (function () {
                var agl = document.createElement('script');
                agl.type = 'text/javascript';
                agl.async = true;
                agl.src = 'https://fxgate.baidu.com/angelia/fcagl.js?production=_f7L2XwGXjyszb4d1e2oxPybgD';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(agl, s);
            })();
        })();
    </script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-63530279-11"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-63530279-11');
    </script>

    <style>
        .container {
            width: 100%;
        }

        .outofquantity {
            color: rgba(0, 0, 0, .6) !important;
            background-color: rgba(0, 0, 0, .1) !important;
            border: 1px solid rgba(0, 0, 0, .2) !important;;
        }

        .outofquantity.selected {
            background-color: rgba(0, 0, 0, .4) !important;
            color: rgba(0, 0, 0, 1) !important;

        }

        /* ------------------ 移动 ------------------ */

        @media screen and (min-width: 320px) and (max-width: 640px) {
            .fubiao {
                /*display: none;*/
                position: fixed;
                bottom: 1.4rem;
                right: .5rem;
                width: 1rem;
                height: 1rem;
                z-index: 1000;
            }

            .fubiao img {
                width: 100%;
            }

            .fubiao a {
                position: absolute;
                top: 0;
                left: 0;
                display: block;
                width: 100%;
                height: 100%;
            }

            .alertBG {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background-color: rgba(0, 0, 0, .3);
                z-index: 1000;
            }

            .alertWrap {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -65%);
                width: 90%;
                height: auto;
            }

            .alertWrap img {
                width: 100%;
            }

            .alertBox {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                padding: 8.60% 7.48% 9.16% 7.16%;
            }

            .alertBox .content {
                padding: 0 .4rem;
            }

            .alertBox .content h2 {
                width: auto;
                padding: .4rem 0 .12rem;
                font-size: 18px;
                text-align: center;
            }

            .alertBox .content p {
                font-size: 14px;
                text-indent: 2em;
                line-height: 19px;
                font-family: '微软雅黑';

                word-break: break-all;
                word-wrap: break-word;
            }

            .alertBox .content .title {
                text-indent: 0;
                margin-bottom: .16rem;
            }

            .alertBox .content .hr01 {
                border: .5px solid #ddd;
                margin: .03rem auto .07rem;
            }

            .alertBox .content .hr02 {
                border: .5px solid #ddd;
                margin: .05rem auto .07rem;
            }

            .alertBox .content button {
                display: block;
                outline: none;
                border: none;
                width: 2rem;
                height: .544rem;
                background-color: transparent;
                margin: .06rem auto 0;
            }

            .recommendPart {
                width: 100%;
                padding: .1rem 0 .8rem;
            }

            .recommendPart .swiper-slide {
                width: 100%;
                /*background: #fff url() no-repeat fixed center 0;*/
            }

            .recommendPart .swiper-slide .itemWrap {
                position: relative;
                display: -moz-box;
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
                -webkit-flex-wrap: nowrap;
                -webkit-flex-wrap: nowrap;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                width: 100%;
                padding: .1rem .2rem;
                cursor: pointer;
                color: #000;
                text-decoration: none;
            }

            .recommendPart .itemWrap .logo {
                position: absolute;
                left: .3rem;
                top: .2rem;
                width: .5rem;
                height: .5rem;
            }

            .recommendPart .itemWrap .imgWrap {
                width: 40%;
                height: auto;
                border: 1px solid #CEA56A;
                margin-right: .2rem;
            }

            .recommendPart .itemWrap .imgWrap img {
                width: 100%;
            }

            .recommendPart .itemWrap .content {
                flex: 1;
                display: -moz-box;
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                flex-direction: column;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
                padding: .1rem 0;
                font-size: 16px;
            }

            .recommendPart .itemWrap .title {
                line-height: .4rem;
            }

            .recommendPart .itemWrap .price {
                color: #ff9900;
                font-weight: bold;
            }

            .count-sum {
                position: relative !important;
                margin: 0 auto .5rem;
            }

            .discountTip {
                width: 84%;
                height: .4rem;
                margin: .6rem auto .4rem;
                border-bottom: 1px solid #000;
                box-sizing: content-box;
                font-size: 16px;
                line-height: .4rem;
            }

            .officalprice {
                float: left;
            }

            .discount {
                float: right;
                color: #DF3434;
            }

            .discount img {
                display: inline-block !important;
                width: .4rem;
                margin-right: .1rem;
                vertical-align: text-top;
            }

            .count-sum .sum {
                border: none !important;
            }

            .productsViewerWrap {
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, .5);
                z-index: 1000;
            }

            .productsViewerWrap #swiper02 {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 100%;
            }

            .productsViewerWrap #swiper02 .titleWrap {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: .8rem;
                line-height: .8rem;
                background-color: rgba(0, 0, 0, .6);
                color: #fff;
                text-align: center;
            }

            #thumbs {
                position: relative;
            }

            #thumbs .fangdajing {
                position: absolute;
                right: .1rem;
                bottom: .1rem;
                width: .5rem;
                height: .5rem;
            }

            #thumbs li img {
                border: 1px solid #BF985F;
                cursor: pointer;
            }

            .colors li:nth-child(6) {
                padding: 0 .4rem;
                margin-right: .2rem;
            }

            .colors li:nth-child(7) {
                padding: 0 .4rem;
                margin-right: .2rem;
            }

            .colors li:nth-child(8) {
                padding: 0 .4rem;
                margin-right: .2rem;
            }

            #cent {
                height: .7rem;
            }

            .subCover {
                height: .7rem;
            }
        }

        /* ------------------ PC ------------------ */

        @media screen and (min-width: 640px) {
            .fubiao {
                /*display: none;*/
                position: fixed;
                bottom: .8rem;
                right: .6rem;
                width: .7rem;
                height: .7rem;
                z-index: 1000;
            }

            .fubiao img {
                width: 100%;
            }

            .fubiao a {
                position: absolute;
                top: 0;
                left: 0;
                display: block;
                width: 100%;
                height: 100%;
                cursor: pointer;
            }

            .alertBG {
                position: fixed;
                display: none;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background-color: rgba(0, 0, 0, .3);
                z-index: 800;
            }

            .alertWrap {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -70%);
                width: 6.5rem;
                height: auto;
                z-index: 1000;
            }

            .alertWrap img {
                width: 100%;
            }

            .alertBox {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                padding: 5.040% 9.400% 5.040% 9.673%;
            }

            .alertBox .content {
                padding: .1rem .3rem 0;
            }

            .alertBox .content h2 {
                margin: .1rem 0 .08rem;
                font-size: 20px;
                text-align: center;
                font-family: 'microsoft yahei' !important;
            }

            .alertBox .content p {
                font-size: 16px;
                text-indent: 2em;
                line-height: 19px;
                font-family: 'microsoft yahei' !important;
                word-break: break-all;
                word-wrap: break-word;
            }

            .alertBox .content .title {
                text-indent: 0;
                margin-bottom: .15rem;
            }

            .alertBox .content .hr01,
            .alertBox .content .hr02 {
                border: .5px solid #ddd;
                margin: .05rem auto .05rem;
            }

            .alertBox button {
                display: block;
                outline: none;
                border: none;
                width: 1.6rem;
                height: .43rem;
                margin: .12rem auto 0;
                background-color: transparent;
                cursor: pointer;
            }

            .turnToTop {
                position: fixed;
                bottom: 50px;
                right: 50px;
                width: 60px;
                padding: 5px;
                text-align: center;
                background-color: #fff;
                border: 1px solid #ccc;
                font-size: 16px;
                color: #C10015;
                font-weight: bold;
                box-sizing: border-box;
                z-index: 999;
            }

            .turnToTop img {
                display: block;
                width: 100%;
            }

            .jumpToChe {
                display: block;
                cursor: pointer;
            }

            .jumpToChe img {
                display: block;
            }

            .recommendPart {
                display: -moz-box;
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
                -webkit-flex-wrap: nowrap;
                -webkit-flex-wrap: nowrap;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                width: 12rem;
                height: auto;
                box-sizing: border-box;
                margin: .2rem auto;
                padding: 0 .5rem;
                font-size: 14px;
            }

            .recommendPart .itemWrap {
                flex: 1;
                position: relative;
                padding: 0 .1rem;
                text-decoration: none;
                cursor: pointer;
                color: #000;
            }

            .recommendPart .itemWrap .imgWrap {
                width: 100%;
                border: 1px solid #CEA56A;
                margin: .1rem 0;
            }

            .recommendPart .itemWrap .imgWrap img {
                width: 100%;
                margin: 0 auto;
                transition: all 1s;
            }

            .recommendPart .itemWrap .imgWrap img:hover {
                transform: scale3d(1.1, 1.1, 1.1) translateZ(0);
            }

            .recommendPart .itemWrap .logo {
                position: absolute;
                left: .15rem;
                top: .15rem;
                width: 20%;
            }

            .recommendPart .itemWrap .title {
                margin-bottom: .1rem;
            }

            .recommendPart .itemWrap .price {
                color: #ff9900;
                font-weight: bold;
            }

            .chooseColors .count-sum {
                border: none !important;
                margin: .2rem auto 0 !important;
            }

            .chooseColors .count-sum .tip, .chooseColors .count-sum .outofquantity_tip {
                top: -.95rem;
                left: 0rem;
            }

            .discountTip {
                width: 90%;
                height: .4rem;
                margin: .5rem auto 0;
                border-bottom: 1px solid #000;
                box-sizing: content-box;
                font-size: 18px;
                line-height: .4rem;
            }

            .officalprice {
                float: left;
            }

            .discount {
                float: right;
                color: #DF3434;
            }

            .discount img {
                display: inline-block !important;
                width: .4rem;
                margin-right: .1rem;
                vertical-align: text-bottom;
            }

            #magnifier {
                position: relative;
                width: 4rem;
                height: 4rem;
                margin: 0 auto;
                border: 1px solid #CEA56A;
            }

            .magnifier-container {
                position: relative;
            }

            .move-view {
                display: none;
                position: absolute;
                width: 2rem;
                height: 2rem;
                background: url('images/icons/move-view.png');
                z-index: 1000;
            }

            .magnifier-view {
                display: none;
                position: absolute;
                right: -4.1rem;
                top: -1px;
                width: 4rem;
                height: 4rem;
                border: 1px solid #000;
                overflow: hidden;
                background: #fff;
                z-index: 1000;
            }

            .subCover {
                height: .4rem;
            }
        }
    </style>
</head>
<body>
<!-- 弹窗模板 -->
<div class="alertBG">
    <div class="alertWrap">
        <?php if ($res) { ?>
            <!-- 移动图 -->
            <img src="imgs/moBox.png" alt="上海牌手表订购">
        <?php } else { ?>
            <!-- PC图 -->
            <img src="imgs/pcBox0.png" alt="上海牌手表订购">
        <?php } ?>
        <div class="alertBox">
            <div class="content">
                <h2>上海牌手表官方在线商城</h2>
                <p class="title">尊敬的顾客：</p>
                <p>恭喜您成功提交订单信息。
                    我们会在24小时内回访您确认收货信息并安排配送，届时请您留意 021- 80270871 的来电。
                </p>
                <div class="hr01"></div>
                <p>
                    微信搜索“上海表”，关注官方公众号，获取更多优惠信息、尊享贴心售后服务！期待您的再次光临！
                </p>
                <div class="hr02"></div>
                <p>
                    感谢您对民族品牌 --- 上海牌手表的支持！
                </p>
                <button class="alertBtn"><img src="imgs/moBtn.png"
                                              alt="上海牌手表订购"></button>
            </div>
        </div>
    </div>
</div>

<!-- 浮标 -->
<div class="fubiao">
    <img src="images/fubiao/fubiao03.png" alt="上海表-立即购买">
    <a href="#order"></a>
</div>
<script>
    ;
    (function () {
        $(window).scroll(function () {
            var screenH = $(window).height(),
                scrollH = $(window).scrollTop(),
                cheTop = $('#order').offset().top;
            if (scrollH >= cheTop - screenH) {
                $('.fubiao').hide();
            } else {
                $('.fubiao').show();
            }
        });
    })();
</script>

<div class="container">
    <!-- 产品图片流开始 -->
    <img src="images/3068/mo_1224/1 (1).jpg" alt="">
    <img src="images/3068/mo_1224/1 (2).jpg" alt="">
    <img src="images/3068/mo_1224/1 (3).jpg" alt="">
    <img src="images/3068/mo_1224/1 (4).jpg" alt="">
    <img src="images/3068/mo_1224/1 (5).jpg" alt="">
    <img src="images/3068/mo_1224/1 (6).jpg" alt="">
    <img src="images/3068/mo_1224/1 (7).jpg" alt="">
    <img src="images/3068/mo_1224/1 (8).jpg" alt="">
    <img src="images/3068/mo_1224/1 (9).jpg" alt="">
    <img src="images/3068/mo_1224/1 (10).jpg" alt="">
    <img src="images/3068/mo_1224/1 (11).jpg" alt="">
    <img src="images/3068/mo_1224/1 (12).jpg" alt="">
    <img src="images/3068/mo_1224/1 (13).jpg" alt="">
    <img src="images/3068/mo_1224/1 (14).jpg" alt="">
    <img src="images/3068/mo_1224/1 (15).jpg" alt="">
    <img src="images/3068/mo_1224/1 (16).jpg" alt="">

    <img src="images/3068/mo_1224/玉表落地页第二部分_01.jpg" alt="">
    <img src="images/3068/mo_1224/玉表落地页第二部分_02.jpg" alt="">
    <img src="images/3068/mo_1224/玉表落地页第二部分_03.jpg" alt="">
    <img src="images/3068/mo_1224/玉表落地页第二部分_04.jpg" alt="">
    <img src="images/3068/mo_1224/玉表落地页第二部分_05.jpg" alt="">
    <img src="images/3068/mo_1224/玉表落地页第二部分_06.jpg" alt="">
    <img src="images/3068/mo_1224/玉表落地页第二部分_07.jpg" alt="">
    <img src="images/3068/mo_1224/玉表落地页第二部分_08.jpg" alt="">
    <img src="images/3068/mo_1224/玉表落地页第二部分_09.jpg" alt="">
    <img src="images/3068/mo_1224/玉表落地页第二部分_10.jpg" alt="">
    <img src="images/3068/mo_1224/玉表落地页第二部分_11.jpg" alt="">
    <img src="images/3068/mo_1224/玉表落地页第二部分_12.jpg" alt="">

    <!-- 产品图片流结束 -->

    <!-- 表单 -->
    <div id="content" style="width: auto">
        <!-- 标题二 -->
        <div class="formTitle formTitle02">
            <h2></h2>
        </div>

        <!-- 推荐模块 -->
        <?php if (!$res) { ?> <!-- PC 端展示 -->
            <div class="recommendPart">
                <a class="itemWrap"
                   href="http://sg.shwatch.cn/mobile/ty_sh3021_pvid.php<?php echo $channel; ?>-SLEY">
                    <div class="imgWrap"><img src="./images/recommend/3021.png"
                                              alt="上海牌手表SH3021"></div>
                    <div class="content">
                        <p class="title">上海牌手表 SH3021：真钻镶嵌63周年纪念腕表</p>
                        <span class="price">￥ 1280.00</span>
                    </div>
                    <img src="./images/icons/logo.jpg" alt="" class="logo">
                </a>
                <a class="itemWrap"
                   href="http://sg.shwatch.cn/mobile/TY_6001_pc.php<?php echo $channel; ?>-SLEY">
                    <div class="imgWrap"><img src="./images/recommend/6001.png"
                                              alt="上海牌手表SH6001"></div>
                    <div class="content">
                        <p class="title">上海牌手表 SH6001：蓝刚指针镂空飞轮机械表</p>
                        <span class="price">￥ 1680.00</span>
                    </div>
                    <img src="./images/icons/logo.jpg" alt="" class="logo">
                </a>
                <a class="itemWrap"
                   href="http://sg.shwatch.cn/mobile/ty_SH3022_mo.php<?php echo $channel; ?>-SLEY">
                    <div class="imgWrap"><img src="./images/recommend/3022.png"
                                              alt="上海牌手表SH3022"></div>
                    <div class="content">
                        <p class="title">上海牌手表 SH3022：闪耀匠作夜光双历机械表</p>
                        <span class="price">￥ 1780.00</span>
                    </div>
                    <img src="./images/icons/logo.jpg" alt="" class="logo">
                </a>
                <a class="itemWrap"
                   href="http://sg.shwatch.cn/mobile/ty_SH3009_mo.php<?php echo $channel; ?>-SLEY">
                    <div class="imgWrap"><img src="./images/recommend/3009.png"
                                              alt="上海牌手表SH3009"></div>
                    <div class="content">
                        <p class="title">上海牌手表 SH3009：商务双历简约风格机械表</p>
                        <span class="price">￥ 1360.00</span>
                    </div>
                    <img src="./images/icons/logo.jpg" alt="" class="logo">
                </a>
                <a class="itemWrap"
                   href="http://sg.shwatch.cn/mobile/ty_SH5005_mo.php<?php echo $channel; ?>-SLEY">
                    <div class="imgWrap"><img src="./images/recommend/5005.jpg"
                                              alt="上海牌手表SH5005"></div>
                    <div class="content">
                        <p class="title">上海牌手表 SH5005：艺术镂空雕花机械腕表</p>
                        <span class="price">￥ 1980.00</span>
                    </div>
                    <img src="./images/icons/logo.jpg" alt="" class="logo">
                </a>
            </div>
        <?php } else { ?> <!-- 移动端展示 -->
            <div class="recommendPart swiper-container swiper-container-horizontal"
                 id="swiper01" style="width: 100%; overflow: hidden;">
                <div class="swiper-wrapper"
                     style="transition-duration: 0ms; transform: translate3d(-5400px, 0px, 0px);">
                    <div class="swiper-slide">
                        <a class="itemWrap"
                           href="http://sg.shwatch.cn/mobile/ty_sh3021_pvid.php<?php echo $channel; ?>-SLEY">
                            <div class="imgWrap"><img
                                    src="./images/recommend/3021.png"
                                    alt="上海牌手表SH3068"></div>
                            <div class="content">
                                <div class="title"><p>上海牌手表 SH3068</p>
                                    真钻镶嵌63周年纪念腕表
                                </div>
                                <span class="price">￥ 1280.00</span>
                            </div>
                            <img src="./images/icons/logo.jpg" alt=""
                                 class="logo">
                        </a>
                        <a class="itemWrap"
                           href="http://sg.shwatch.cn/mobile/TY_6001_pc.php<?php echo $channel; ?>-SLEY">
                            <div class="imgWrap"><img
                                    src="./images/recommend/6001.png"
                                    alt="上海牌手表SH6001"></div>
                            <div class="content">
                                <div class="title"><p>上海牌手表 SH6001</p>
                                    蓝刚指针镂空飞轮机械表
                                </div>
                                <span class="price">￥ 1680.00</span>
                            </div>
                            <img src="./images/icons/logo.jpg" alt=""
                                 class="logo">
                        </a>
                        <a class="itemWrap"
                           href="http://sg.shwatch.cn/mobile/ty_SH3022_mo.php<?php echo $channel; ?>-SLEY">
                            <div class="imgWrap"><img
                                    src="./images/recommend/3022.png"
                                    alt="上海牌手表Sh3022"></div>
                            <div class="content">
                                <div class="title"><p>上海牌手表 SH3022</p>
                                    闪耀匠作夜光双历机械表
                                </div>
                                <span class="price">￥ 1780.00</span>
                            </div>
                            <img src="./images/icons/logo.jpg" alt=""
                                 class="logo">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="itemWrap"
                           href="http://sg.shwatch.cn/mobile/ty_SH3009_mo.php<?php echo $channel; ?>-SLEY">
                            <div class="imgWrap"><img
                                    src="./images/recommend/3009.png"
                                    alt="上海牌手表Sh3009"></div>
                            <div class="content">
                                <div class="title"><p>上海牌手表 SH3009</p>
                                    商务双历简约风格机械表
                                </div>
                                <span class="price">￥ 1360.00</span>
                            </div>
                            <img src="./images/icons/logo.jpg" alt=""
                                 class="logo">
                        </a>
                        <a class="itemWrap"
                           href="http://sg.shwatch.cn/mobile/ty_SH5005_mo.php<?php echo $channel; ?>-SLEY">
                            <div class="imgWrap"><img
                                    src="./images/recommend/5005.jpg"
                                    alt="上海牌手表SH5005"></div>
                            <div class="content">
                                <div class="title"><p>上海牌手表 SH5005</p>艺术镂空雕花机械腕表
                                </div>
                                <span class="price">￥ 1980.00</span>
                            </div>
                            <img src="./images/icons/logo.jpg" alt=""
                                 class="logo">
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-clickable">
                    <span class="swiper-pagination-bullet"></span><span
                        class="swiper-pagination-bullet"></span>
                </div>
                <span class="swiper-notification" aria-live="assertive"
                      aria-atomic="true"></span>
            </div>

            <script src="js/swiper.min.js"></script>
            <script>
                var swiper = new Swiper('#swiper01', {
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        dynamicBullets: true
                    }
                });
            </script>
        <?php } ?>
        <form>
            <!-- 隐藏域：产品价格 -->
            <input type="hidden" id="price" value="5980">
            <!-- 隐藏域：产品ID -->
            <input type="hidden" id="productId" value="3068_63周年">
            <!-- 隐藏域：模板编号 -->
            <input type="hidden" id="templateid" value="newSurface0702">

            <!-- 标题一 -->
            <div class="formTitle formTitle01" id="order">
                <h2></h2>
            </div>

            <!-- PC 端 -->
            <?php if (!$res) { ?>
            <!-- 包裹 -->
            <div class="wrapper">
                <?php } ?>
                <!-- 颜色数量选择 -->
                <div class="chooseColors">
                    <?php if ($res) { ?>
                        <div class="banner" style="width: 90%; margin: .3rem auto .2rem;">
                            <img src="images/latest_activities/seeu2018.png" alt="上海牌手表 款式">
                        </div>
                    <?php } ?>
                    <!-- PC端 -->
                    <?php if (!$res) { ?>
                        <!-- 产品展示栏 -->
                        <div id="magnifier">
                            <div class="magnifier-container">
                                <!-- 实时展示的产品图 -->
                                <div class="images-cover">
                                    <img src="images/3068/order/by.jpg"
                                         alt="">
                                </div>
                                <!-- 跟随鼠标移动的盒子 -->
                                <div class="move-view"></div>
                            </div>
                            <div class="magnifier-view"></div>
                        </div>

                        <!-- 颜色选择栏 -->
                        <div class="colorsArea">
                            <ul class="colors">
                                <li price="1280" class="selected">皎亮玉石白</li>
                                <li price="1280">碧玉翡翠绿</li>
<!--                                <li price="1280">金面棕带/男</li>-->
<!--                                <li price="1280">白面黑带/男</li>-->
<!--                                <li price="1280">间金金面/女</li>-->
<!--                                <li price="1280">白钢白面/女</li>-->
<!--                                <li price="2560">间金金面/情侣</li>-->
<!--                                <li price="2560">白钢白面/情侣</li>-->
                            </ul>
                        </div>

                        <script>
                            // 实现 PC 端放大镜特效的脚本
                            $(function () {
                                $('.colorsArea .colors li').on('click', function () {
                                    var color = $(this).text();
                                    imgName = '';
                                    switch (color) {
                                        case '皎亮玉石白':
                                            imgName = 'by';
                                            break;
                                        case '碧玉翡翠绿':
                                            imgName = 'fc';
                                            break;
                                        default:
                                            break;
                                    }
                                    $('.images-cover img').attr('src', 'images/3068/order/' + imgName + '.jpg');
                                });

                                $('#magnifier').on('mouseenter', function (e) {
                                    var imgName = $('.images-cover img').attr('src');
                                    $(this).find('.move-view').show();
                                    $(this).find('.magnifier-view').show();
                                    $(this).find('.magnifier-view').html('<img src="' + imgName + '" style="position: absolute; left: 0; top: 0; z-index: 1000;">');
                                }).on('mousemove', function (e) {
                                    var offsetX = e.pageX - $(this).offset().left;
                                    var offsetY = e.pageY - $(this).offset().top;
                                    var width = $('#magnifier').width();
                                    var height = $('#magnifier').height();
                                    var moveX = 0;
                                    var moveY = 0;

                                    // 添加限制（放大镜）
                                    moveX = offsetX <= 100 ? 100 : (offsetX >= width - 100 ? width - 100 : offsetX);
                                    moveY = offsetY <= 100 ? 100 : (offsetY >= height - 100 ? height - 100 : offsetY);

                                    // 添加限制（显示屏）
                                    viewX = (moveX - 100) * 2;
                                    viewY = (moveY - 100) * 2;

                                    // 同步展示
                                    $('.magnifier-view img').css({
                                        width: '8rem',
                                        height: '8rem',
                                        maxWidth: 'none',
                                        top: -viewY,
                                        left: -viewX
                                    });

                                    $(this).find('.move-view').css({
                                        top: moveY - 100,
                                        left: moveX - 100
                                    });
                                }).on('mouseleave', function (e) {
                                    $(this).find('.move-view').hide();
                                    $(this).find('.magnifier-view').hide();
                                });
                            });
                        </script>
                    <?php } ?>

                    <!-- 移动端 -->
                    <?php if ($res) { ?>
                        <!-- 产品展示栏 -->
                        <div id="thumbs">
                            <ul class="clearfix">
                                <li><img src="images/3068/order/by.jpg" alt="" data-thumb="0"></li>
                                <li><img src="images/3068/order/fc.jpg" alt="" data-thumb="1"></li>
                            </ul>
                            <img src="images/icons/fangdajing.png" alt="" class="fangdajing">
                        </div>

                        <!-- 颜色选择栏 -->
                        <div class="colorsArea">
                            <ul class="colors">
                                <li price="1280" class="selected">皎亮玉石白</li>
                                <li price="1280">碧玉翡翠绿</li>
                            </ul>
                        </div>

                        <div class="productsViewerWrap"
                             style="display: none; width: 100%; overflow: hidden;">
                            <div class="swiper-container swiper-container-horizontal" id="swiper02">
                                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-5400px, 0px, 0px);">
                                    <div class="swiper-slide">
                                        <div class="imgWrap">
                                            <img src="images/3068/order/by.jpg"
                                                alt="上海牌手表SH3068 63周年纪念款 皎亮玉石白">
                                        </div>
                                        <div class="titleWrap">上海牌手表SH3068
                                            63周年纪念款 皎亮玉石白
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="imgWrap">
                                            <img
                                                src="images/3068/order/bgbm_nan.jpg"
                                                alt="上海牌手表SH3068 63周年纪念款 碧玉翡翠绿">
                                        </div>
                                        <div class="titleWrap">上海牌手表SH3068
                                            63周年纪念款 碧玉翡翠绿
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="imgWrap">
                                            <img
                                                src="images/3021/order/jmzd_nan.jpg"
                                                alt="上海牌手表SH3021 63周年纪念款 金面棕带/男">
                                        </div>
                                        <div class="titleWrap">上海牌手表SH3021
                                            63周年纪念款 金面棕带/男
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="imgWrap">
                                            <img
                                                src="images/3021/order/bmhd_nan.jpg"
                                                alt="上海牌手表SH3021 63周年纪念款 白面黑带/男">
                                        </div>
                                        <div class="titleWrap">上海牌手表SH3021
                                            63周年纪念款 白面黑带/男
                                        </div>
                                    </div>
<!--                                    <div class="swiper-slide">-->
<!--                                        <div class="imgWrap">-->
<!--                                            <img-->
<!--                                                src="images/3021/order/jjjm_nv.jpg"-->
<!--                                                alt="上海牌手表SH3021 63周年纪念款 间金金面/女</p>-->
<!--									</div>">-->
<!--                                        </div>-->
<!--                                        <div class="titleWrap">上海牌手表SH3021-->
<!--                                            63周年纪念款 间金金面/女-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="swiper-slide">-->
<!--                                        <div class="imgWrap">-->
<!--                                            <img-->
<!--                                                src="images/3021/order/bgbm_nv.jpg"-->
<!--                                                alt="上海牌手表SH3021 63周年纪念款 白钢白面/女">-->
<!--                                        </div>-->
<!--                                        <div class="titleWrap">上海牌手表SH3021-->
<!--                                            63周年纪念款 白钢白面/女-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="swiper-slide">-->
<!--                                        <div class="imgWrap">-->
<!--                                            <img-->
<!--                                                src="images/3021/order/jjjm_ql.jpg"-->
<!--                                                alt="上海牌手表SH3021 63周年纪念款 间金金面/情侣">-->
<!--                                        </div>-->
<!--                                        <div class="titleWrap">上海牌手表SH3021-->
<!--                                            63周年纪念款 间金金面/情侣-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="swiper-slide">-->
<!--                                        <div class="imgWrap">-->
<!--                                            <img-->
<!--                                                src="images/3021/order/bgbm_ql.jpg"-->
<!--                                                alt="上海牌手表SH3021 63周年纪念款 白钢白面/情侣">-->
<!--                                        </div>-->
<!--                                        <div class="titleWrap">上海牌手表SH3021-->
<!--                                            63周年纪念款 白钢白面/情侣-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <script>
                            $('#thumbs img').on('click', function (e) {
                                var index = $(this).data('thumb');
                                $('.productsViewerWrap').fadeIn();
                                new Swiper('#swiper02', {
                                    pagination: {
                                        clickable: true,
                                        dynamicBullets: true,
                                    },
                                    initialSlide: parseInt(index)
                                });
                                $('.productsViewerWrap').on('click', function () {
                                    $(this).fadeOut();
                                });
                            });
                        </script>
                    <?php } ?>

                    <div class="discountTip clearfix">
                        <div class="officalprice">官方售价：
                            <del>1780 元</del>
                        </div>
                        <div class="discount"><img
                                src="images/icons/seeyou2018.png"
                                alt="上海牌手表 优惠">限时立减 420 元！
                        </div>
                    </div>

                    <!-- 数量选择栏 -->
                    <div class="count-sum">
                        <!-- 如果是 PC 端，在这里显示 -->
                        <?php if (!$res) { ?>
                            <!-- 文字提示 -->
                            <div class="tip"
                                 style="width: 100%; padding: 0; display: none; font-size: 14px; text-align: left; background-color: transparent; margin-left: .3rem;">
                                每人最多只能买5件
                            </div>
                            <!-- <div class="outofquantity_tip" style="width: 100%; padding: 0; display: none; font-size: 14px; text-align: left; background-color: transparent; margin-left: .3rem;">该产品已售罄</div> -->
                        <?php } ?>

                        <!-- 如果是移动端，在这里显示 -->
                        <?php if ($res) { ?>
                            <!-- 文字提示 -->
                            <div class="tip"
                                 style="position: absolute; top: -1.3rem; display:none; font-size: 14px; text-align: left;background-color: transparent;">
                                每人最多只能买5件
                            </div>
                            <!-- <div class="outofquantity_tip" style="display:none; font-size: 14px; text-align: left;background-color: transparent;">该产品已售罄</div> -->
                        <?php } ?>

                        <div class="amount">
                            <div class="label">数量:</div>
                            <div
                                class="amountCtrl change-goods-num J_changeGoodsNum">
                                <a href="javascript:void(0);"
                                   class="J_minus"><img
                                        src="images/icons/void.png"
                                        alt="上海牌手表 订购"></a>
                                <input type="text" readonly="readonly" value="1"
                                       id="goods-num" class="goods-num grey">
                                <a href="javascript:void(0);"
                                   class="J_plus"><img
                                        src="images/icons/plus.png"
                                        alt="上海牌手表 订购"></a>
                            </div>
                        </div>
                        <div class="sum">
                            <label class="label">总价: </label><span
                                style="color:#DF3433">￥</span><span id="total"
                                                                    class="total">1280 </span><span
                                class="label">元</span>
                        </div>
                    </div>
                </div>

                <!-- 移动端 -->
                <?php if ($res) { ?>
                    <!-- 标题二 -->
                    <div class="formTitle formTitle03">
                        <h2></h2>
                    </div>
                <?php } ?>

                <!-- 用户信息栏 -->
                <div class="userInfo">
                    <?php if (!$res) { ?>
                        <div class="banner" style="margin-bottom: .4rem;">
                            <img src="images/latest_activities/seeu2018.png"
                                 alt="上海牌手表 2018年终大促">
                        </div>
                    <?php } ?>
                    <ul>
                        <li>
                            <div class="label">
                                <img src="images/icons/user.png">
                                <label>姓名 :</label>
                            </div>
                            <input type="text" id="realname" name="realname"
                                   placeholder="姓名" value=""/>
                        </li>
                        <li>
                            <div class="label">
                                <img src="images/icons/phone.png">
                                <label>电话 :</label>
                            </div>
                            <input type="text" name="phone" id="phone"
                                   placeholder="电话" value=""/>
                        </li>
                        <li class="area">
                            <div class="label">
                                <img src="images/icons/location.png">
                                <label>地区 :</label>
                            </div>
                            <!-- 移动 -->
                            <?php if ($res) { ?>
                                <div class="content"></div>
                            <?php } else { ?>
                                <!-- PC -->
                                <div class="areaChoices">
                                    <script type="text/javascript">
                                        var area = new AreaCtrl("省份:", "城市:", "地区:");
                                        area.write();
                                        area.loadData();
                                        var selects = document.querySelectorAll("select");
                                        for (var i = 0; i < selects.length; i++) {
                                            selects[i].index = i;
                                            selects[i].addEventListener("change", function () {
                                                var index = this.index;
                                                if (selects[index].value == "省份" || selects[index].value == "城市" || selects[index].value == "地区") {
                                                    selects[index].style.color = "#949494";
                                                } else {
                                                    selects[index].style.color = "#000000";
                                                }
                                            });
                                        }
                                    </script>
                                </div>
                            <?php } ?>
                        </li>
                        <!-- 移动 -->
                        <?php if ($res) { ?>
                            <li class="areaChoices">
                                <script type="text/javascript">
                                    var area = new AreaCtrl("省份:", "城市:", "地区:");
                                    area.write();
                                    area.loadData();
                                    var selects = document.querySelectorAll("select");
                                    for (var i = 0; i < selects.length; i++) {
                                        selects[i].index = i;
                                        selects[i].addEventListener("change", function () {
                                            var index = this.index;
                                            if (selects[index].value == "省份" || selects[index].value == "城市" || selects[index].value == "地区") {
                                                selects[index].style.color = "#949494";
                                            } else {
                                                selects[index].style.color = "#000000";
                                            }
                                        });
                                    }
                                </script>
                            </li>
                        <?php } ?>
                        <li>
                            <div class="label">
                                <img src="images/icons/address.png">
                                <label>地址 :</label>
                            </div>
                            <div class="taWrap">
                                <div id="address"
                                     class="input-area address ta01 needsclick"
                                     name="address"
                                     contenteditable="true"></div>
                                <div class="placeholder01">路名或街道地址，门牌号</div>
                            </div>
                        </li>
                        <li class="beizhu">
                            <div class="label">
                                <img src="images/icons/message.png">
                                <label>备注 :<!-- （情侣款若想购买不同颜色请备注说明） --></label>
                            </div>
                            <div class="taWrap">
                                <div id="skin_problem" name="skin_problem"
                                     class="input-area address ta02 needsclick"
                                     contenteditable="true"></div>
                                <div class="placeholder02">备注</div>
                            </div>
                        </li>
                        <li style="display: block; border: none;"
                        <div class="fapiao"
                             style="display: inline-block; width: .32rem; height: .32rem; padding: .02rem; padding-left: 0; box-sizing: border-box;">
                            <img src="images/icons/xuanze_02.png"
                                 style="width: .3rem; height: .3rem; margin: 0; margin-right: .05rem;">
                        </div>
                        <p style="display: inline-block;">需要开具发票</p>
                        </li>
                        </li>
                        <li class="zhifu">
                            <div class="content">
                                <img src="images/icons/m1.jpg">
                                <img src="images/icons/m2.jpg">
                                <img src="images/icons/m3.jpg">
                            </div>
                        </li>
                    </ul>
                    <!-- 提交按钮 -->
                    <div class="cent" id="cent" style="position: relative;">
                        <input type="button" class="sub" id="sub" value="提交预订"/>
                        <div class="subCover"
                             style="position: absolute; top: 0; left: 0; width: 100%; background-color: transparent; cursor: pointer;"></div>
                    </div>
                </div>
                <!-- PC 端 -->
                <?php if (!$res) { ?>
                <!-- 包裹 -->
            </div>
        <?php } ?>
        </form>
    </div>

    <!-- 页面底部开始 -->
    <footer>
        <div style="border-bottom: 1px dashed #ccc;margin: 10px 0 10px;"></div>
        <p style="width: 100%; text-align: center;" class="banquan">
            沪ICP备06025203号-1 | 上海表业 版权所有 ©2018 ShangHai Watch Co.,Ltd All Rights
            Reserved</p>
    </footer>
    <!-- 页面底部结束 -->
</div>

<!-- javascript -->
<script>
    // 显示自定义弹框（移动）
    function show_alertBox_mo() {
        $('.alertBG').fadeIn();
        $('.alertBtn').on('click', function () {
            $('.alertBG').fadeOut();
            location.reload();
        });
    }

    // 显示自定义弹框（PC）
    function show_alertBox_pc() {
        $('.alertBG').fadeIn();
        $('html, body').css({
            overflow: 'hidden'
        }); // 浮层出现时窗口不能滚动

        $('.alertBtn').on('click', function () {
            $('.alertBG').fadeOut();
            $('html, body').css({
                overflow: 'auto'
            }); // 浮层关闭时窗口滚动恢复设置
            location.reload();
        });
    }

    $(function () {
        const TELREG = /^(0|86|17951)?(13[0-9]|15[012356789]|16[6]|17[012345678]|18[0-9]|14[5679]|19[891])[0-9]{8}$/;
        var price = Number($('#price').val());
        var num_input, num, total;
        $(document).on('click', '#sub', function (event) {
            event.preventDefault();
            var url = '/E_api.php';
            var realname = $('#realname').val();
            var phone = $('#phone').val();
            var prov = $('#prov option:checked').html();
            var city = $('#city option:checked').html();
            var area = $('#area option:checked').html() == '地区' ? '' : $('#area option:checked').html();
            var address = $('#address').text();
            var skin_problem = $('#skin_problem').text();
            var customid = 0;
            var goodsnum = $('#goods-num').val();
            var price = parseInt($('#total').html());
            var fapiao = $('.fapiao img').attr('src') == 'images/icons/xuanze_02.png' ? false : true;
            if (fapiao) skin_problem = '请开具发票。' + skin_problem;
            var telReg = !!phone.match(TELREG);//手机号码验证
            var item_code = '';
            var color = $('.colors .selected').html();
            // 售罄商品处理代码
            /*	            if (color == '间金金面/女' || color == '间金金面/情侣款') {
             alert('不好意思~该产品已售罄了');
             return;
             }*/
            if (!realname) {
                alert('还没填写姓名哦');
                return false;
            } else if (realname.length > 32) {
                alert('您输入的姓名有点长了');
                return false;
            } else if (!phone) {
                alert('还没填写电话');
                return false;
            } else if (isNaN(phone) || phone.length > 12) {
                alert('电话只能是数字且长度小于12位。');
                return false;
            } else if (telReg == false) {
                alert('不是手机号码');
                return false;
            } else if (!prov || prov == "省份") {
                alert('还没选择省份');
                return false;
            } else if (!city || city == "城市") {
                alert('还没选择城市');
                return false;
            } else if (!address) {
                alert("只差详细地址没填写了");
                return false;
            } else if (address.length > 100) {
                alert("您的详细地址过长了");
                return false;
            }
            _hmt.push(['_trackEvent', '用户填写信息成功', '点击下单', '下单转化']);
            $("#sub").val("信息提交中...");
            $("#sub").attr("disabled", true);
            switch (color) {
                case '间金金面/男':
                    item_code = 'SH3021G1S';
                    break;
                case '白钢白面/男':
                    item_code = 'SH3021N1S';
                    break;
                case '金面棕带/男':
                    item_code = 'SH3021G2S';
                    break;
                case '白面黑带/男':
                    item_code = 'SH3021N2S';
                    break;
                case '间金金面/女':
                    item_code = 'SH3021LGS';
                    break;
                case '白钢白面/女':
                    item_code = 'SH3021LNS';
                    break;
                case '间金金面/情侣':
                    item_code = 'SH3021G1S/SH3021LGS';
                    break;
                case '白钢白面/情侣':
                    item_code = 'SH3021N1S/SH3021LNS';
                    break;
            }
            var url_for_E = location.href;
            url_for_E = url_for_E.replace(/[?].*$/, '');

            var data = {
                realname: realname,
                phone: phone,
                prov: prov,
                city: city,
                area: area,
                address: address,
                customid: customid,
                skin_problem: skin_problem,
                goods: '正品上海表',
                item_code: item_code,
                goodsnum: goodsnum,
                singleprice: Number($('#price').val()),
                price: price,
                paytype: '1',
                activitytype: '1',
                channel: '渠道号：' + '<?php echo $_GET["id"] == '' ? $channel0 : $_GET['id']; ?>',
                weixinnum: '',
                templateid: $('#templateid').val(),
                link: url_for_E
            };
            var data02 = {
                username: realname,
                tel: phone,
                address: prov + city + area + address,
                comments: skin_problem,
                product: $('#productId').val(),
                size: $('#content .colors li.selected').html(),
                quantity: goodsnum,
                singlePrice: Number($('#price').val()) + ' 元',
                totalPrice: (parseInt(goodsnum) * Number($('#price').val())) + ' 元',
                link: location.href,
                channel: "<?php echo $_GET['id']; ?>",
                success: null
            };
            $.post(url, data, function (data) {
                data = JSON.parse(data);
                if (data.success == true) {
                    <?php if ($res) { ?>
                    // 展示自定义弹框（移动）
                    show_alertBox_mo();
                    <?php } else { ?>
                    // 展示自定义弹框（PC）
                    show_alertBox_pc();
                    <?php } ?>
                    data02.success = true;
                } else {
                    alert(data.errorDesc);
                    $("#sub").attr("disabled", false);
                    $("#sub").val("提交预订");
                    data02.success = false;
                }
                $.post('/datarecorder_for_Tyson.php', data02);
            });
        });
        var img = document.getElementById('img'),
            con = document.getElementById('content'),
            t,
            url = location.href,
            buyNow = document.getElementById('buyNow');
        $('#content .colors li').click(function () {
            $(this).addClass('selected').siblings().removeClass('selected');
            // 售罄商品处理代码
            /*	            if ($(this).html() == '间金金面/女' || $(this).html() == '间金金面/情侣款') {
             $(this).attr('class', 'selected outofquantity');
             $('.outofquantity_tip').fadeIn();
             } else {
             $('.outofquantity_tip').hide();
             }*/

            var btn = $(this).html();
            if (btn == '间金金面/情侣' || btn == '白钢白面/情侣') {
                $('.officalprice del').text('4320 元');
                $('.discount').text('限时立减 1760 元！');
            } else {
                $('.officalprice del').text('2160 元');
                $('.discount').text('限时立减 880 元！');
            }

            var $this = $(this);
            price = $this.attr('price');
            var num = $('#goods-num').val();
            var total = price * num;
            $('#price').val(price);
            $('#total').html(total + " ");
            $('#priceValue strong').html(total);
            $('#thumbs ul').css('transform', 'translateX(' + (-12.5) * ($this.index()) + '%)');
        });
        $(document).on('click', '.J_plus', function () {
            num_input = $(this).prev();
            num = Number(num_input.val());
            $(".J_minus").children().attr("src", "images/icons/reduce.png");
            if (num < 5) {
                num++;
            } else {
                $('.tip').fadeIn();
                setTimeout(function () {
                    $('.tip').fadeOut();
                }, 2000);
            }
            if (num == 5) {
                $(this).children().attr("src", "images/icons/void.png");
            }
            num_input.val(num);
            total = num * price;
            $('#total').html(total + " ");
        });
        $(document).on('click', '.J_minus', function () {
            num_input = $(this).next();
            num = Number(num_input.val());
            if (num == 2) {
                $(this).children().attr("src", "images/icons/void.png");
            }
            if (num > 1) {
                num--;
                $(".J_plus").children().attr("src", "images/icons/plus.png");
                num_input.val(num);
                total = num * price;
                $('#total').html(total + " ");
            }
        });
        $(document).on('click', '.all_comm', function () {
            $('.all_comm_hide').show();
            $(this).hide();
        });
        // 处理自定义的 文本域输入框
        var ta01 = $(".taWrap .ta01");
        var ta02 = $(".taWrap .ta02");
        var tip01 = $(".taWrap .placeholder01");
        var tip02 = $(".taWrap .placeholder02");
        var ta01Content = ta01.text();
        var ta02Content = ta02.text();
        $(".taWrap .ta01").on("input", function () {
            ta01Content = ta01.text();
            if (ta01Content) {
                tip01.css({
                    display: "none"
                });
            } else {
                tip01.css({
                    display: "block"
                });
            }
        });
        $(".taWrap .ta02").on("input", function () {
            ta02Content = ta02.text();
            if (ta02Content) {
                tip02.css({
                    display: "none"
                });
            } else {
                tip02.css({
                    display: "block"
                });
            }
        });

        // 控制“选择开具发票”的开关脚本
        var flag_fapiao = 2;
        $(document).on('click', '.fapiao', function (e) {
            if (flag_fapiao != 1) {
                flag_fapiao = 1;
            } else {
                flag_fapiao = 2;
            }
            $('.fapiao img').attr('src', 'images/icons/xuanze_0' + flag_fapiao + '.png');
        });


        /** subCover 功能脚本 **/

        $('.subCover').on('click', function (e) {
            e.stopPropagation();
            console.log('.subCover')
            var realname = $('#realname').val();
            var phone = $('#phone').val();
            var prov = $('#prov option:checked').html();
            var city = $('#city option:checked').html();
            var address = $('#address').text();
            var telReg = !!phone.match(TELREG);//手机号码验证
            // 售罄商品处理代码
            /*	            if (color == '间金金面/女' || color == '间金金面/情侣款') {
             alert('不好意思~该产品已售罄了');
             return;
             }*/
            if (!realname) {
                alert('还没填写姓名哦');
                return false;
            } else if (realname.length > 32) {
                alert('您输入的姓名有点长了');
                return false;
            } else if (!phone) {
                alert('还没填写电话');
                return false;
            } else if (isNaN(phone) || phone.length > 12) {
                alert('电话只能是数字且长度小于12位。');
                return false;
            } else if (telReg == false) {
                alert('不是手机号码');
                return false;
            } else if (!prov || prov == "省份") {
                alert('还没选择省份');
                return false;
            } else if (!city || city == "城市") {
                alert('还没选择城市');
                return false;
            } else if (!address) {
                alert("只差详细地址没填写了");
                return false;
            } else if (address.length > 100) {
                alert("您的详细地址过长了");
                return false;
            }
        });


        /** 百度统计特殊处理 **/

        $('#realname').on('input', function () {
            var c_name = $(this).val();
            var c_phone = $('#phone').val();
            var c_city = $('#city').find('option:checked').text();
            var c_address = $('#address').text();
            var telReg = !!c_phone.match(TELREG);//手机号码验证

            if (c_name && c_name.length <= 32 && !isNaN(c_phone) && c_phone.length < 12 && telReg && c_city && (c_city != '城市') && c_address && c_address.length <= 100) {
                $('.subCover').hide();
            } else {
                $('.subCover').show();
            }
        }); // 姓名框

        $('#phone').on('input', function () {
            var c_name = $('#realname').val();
            var c_phone = $(this).val();
            var c_city = $('#city').find('option:checked').text();
            var c_address = $('#address').text();
            var telReg = !!c_phone.match(TELREG);//手机号码验证

            if (c_name && c_name.length <= 32 && !isNaN(c_phone) && c_phone.length < 12 && telReg && c_city && (c_city != '城市') && c_address && c_address.length <= 100) {
                $('.subCover').hide();
            } else {
                $('.subCover').show();
            }
        }); // 电话框

        $('#city').on('change', function () {
            var c_name = $('#realname').val();
            var c_phone = $('#phone').val();
            var c_city = $(this).find('option:checked').text();
            var c_address = $('#address').text();
            var telReg = !!c_phone.match(TELREG);//手机号码验证

            if (c_name && c_name.length <= 32 && !isNaN(c_phone) && c_phone.length < 12 && telReg && c_city && (c_city != '城市') && c_address && c_address.length <= 100) {
                $('.subCover').hide();
            } else {
                $('.subCover').show();
            }
        }); // 城市框

        $('#address').on('input', function () {
            var c_name = $('#realname').val();
            var c_phone = $('#phone').val();
            var c_city = $('#city').find('option:checked').text();
            var c_address = $(this).text();
            var telReg = !!c_phone.match(TELREG);//手机号码验证

            if (c_name && c_name.length <= 32 && !isNaN(c_phone) && c_phone.length < 12 && telReg && c_city && (c_city != '城市') && c_address && c_address.length <= 100) {
                $('.subCover').hide();
            } else {
                $('.subCover').show();
            }
        }); // 地址框

    });
</script>
</body>
</html>