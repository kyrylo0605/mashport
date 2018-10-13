<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" media="all" href="years/css/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="years/css/stylesheet.css">
    <link rel="stylesheet" id="contact-form-7-css" href="years/css/styles.css" type="text/css" media="all">

    <script type="text/javascript" async="" src="years/js/ga.js"></script>
    <script src="years/js/jquery.min.js"></script>
    <script type="text/javascript" src="years/js/smoothscroll.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#boxau').hide();
            $('#boxnz').hide();
            $('#boxworld').hide();
            $("#thechoices").change(function () {
                {
                    $("#" + this.value).show().siblings().hide();
                }
            });

            $("#thechoices").change();
        });
    </script>
    <script type="text/javascript" src="years/js/BackToTop.jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // simple BackToTop plugin called
            BackToTop();
            // more complex BackToTop plugin called
            BackToTop({
                text: '',
                autoShow: true,
                timeEffect: 750,
                appearMethod: 'fade'
            });
        });
    </script>
    <script type="text/javascript">
        $(function () {

            function contentSwitcher(settings) {
                var settings = {
                    contentClass: '.timeline-content',
                    navigationId: '#dates'
                };

                //Hide all of the content except the first one on the nav
                $(settings.contentClass).not(':first').hide();
                $(settings.navigationId).find('li:first').addClass('active');

                //onClick set the active state,
                //hide the content panels and show the correct one
                $(settings.navigationId).find('a').click(function (e) {
                    var contentToShow = $(this).attr('href');
                    contentToShow = $(contentToShow).fadeTo("slow", 1);

                    //dissable normal link behaviour
                    e.preventDefault();

                    //set the proper active class for active state css
                    $(settings.navigationId).find('li').removeClass('active');
                    $(this).parent('li').addClass('active');

                    //hide the old content and show the new
                    $(settings.contentClass).hide();
                    contentToShow.show();
                });
            }

            contentSwitcher();
        });
    </script>


    <!-- This site is optimized with the Yoast SEO plugin v2.3.5 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Masport Limited | Celebrating Over 100 Years of Masport</title>
    <meta name="description"
          content="From manufacturing World War II grenades to creating New Zealand&#39;s first refrigerator &amp; lawnmower, 2010 saw Masport enter it&#39;s 100th year...">
    <link rel="canonical" href="http://www.masport100years.com/">
    <link rel="publisher" href="https://plus.google.com/105518310406652853555">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Masport Limited | Celebrating Over 100 Years of Masport">
    <meta property="og:description"
          content="From manufacturing World War II grenades to creating New Zealand&#39;s first refrigerator &amp; lawnmower, 2010 saw Masport enter it&#39;s 100th year...">
    <meta property="og:url" content="http://www.masport100years.com">
    <meta property="og:site_name" content="Masport: 100 Years in the Making">
    <meta property="og:image" content="http://www.masport100years.com/wp-content/uploads/2013/03/fb.jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description"
          content="From manufacturing World War II grenades to creating New Zealand&#39;s first refrigerator &amp; lawnmower, 2010 saw Masport enter it&#39;s 100th year...">
    <meta name="twitter:title" content="Masport Limited | Celebrating Over 100 Years of Masport">
    <meta name="twitter:site" content="@Masport_">
    <meta name="twitter:domain" content="Masport: 100 Years in the Making">
    <meta name="twitter:image" content="http://www.masport100years.com/wp-content/uploads/2013/03/fb.jpg">
    <script type="application/ld+json">
        {"@context":"http:\/\/schema.org","@type":"WebSite","url":"http:\/\/www.masport100years.com\/","name":"Masport: 100 Years in the Making","potentialAction":{"@type":"SearchAction","target":"http:\/\/www.masport100years.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}

    </script>
    <!-- / Yoast SEO plugin. -->

    <link rel="dns-prefetch" href="http://s0.wp.com/">
    <link rel="dns-prefetch" href="http://s.gravatar.com/">
    <link rel="dns-prefetch" href="http://netdna.bootstrapcdn.com/">
    <link rel="dns-prefetch" href="http://s.w.org/">
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "http:\/\/www.masport100years.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.11"}
        };
        !function (a, b, c) {
            function d(a) {
                var b, c, d, e, f = String.fromCharCode;
                if (!k || !k.fillText)return !1;
                switch (k.clearRect(0, 0, j.width, j.height), k.textBaseline = "top", k.font = "600 32px Arial", a) {
                    case"flag":
                        return k.fillText(f(55356, 56826, 55356, 56819), 0, 0), !(j.toDataURL().length < 3e3) && (k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57331, 65039, 8205, 55356, 57096), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57331, 55356, 57096), 0, 0), c = j.toDataURL(), b !== c);
                    case"emoji4":
                        return k.fillText(f(55357, 56425, 55356, 57341, 8205, 55357, 56507), 0, 0), d = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55357, 56425, 55356, 57341, 55357, 56507), 0, 0), e = j.toDataURL(), d !== e
                }
                return !1
            }

            function e(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }

            var f, g, h, i, j = b.createElement("canvas"), k = j.getContext && j.getContext("2d");
            for (i = Array("flag", "emoji4"), c.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, h = 0; h < i.length; h++)c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
                c.DOMReady = !0
            }, c.supports.everything || (g = function () {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () {
                "complete" === b.readyState && c.readyCallback()
            })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <script src="years/js/wp-emoji-release.min.js" type="text/javascript" defer=""></script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css" href="years/css/styles(1).css" type="text/css" media="all">
    <link rel="stylesheet" id="prettyphoto-css" href="years/css/prettyPhoto.css" type="text/css" media="all">
    <link rel="stylesheet" id="fancybox-css" href="years/css/jquery.fancybox.css" type="text/css" media="all">
    <link rel="stylesheet" id="fancybox-buttons-css" href="years/css/jquery.fancybox-buttons.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="fancybox-thumbs-css" href="years/css/jquery.fancybox-thumbs.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="mejs-css" href="years/css/mediaelementplayer.css" type="text/css" media="all">
    <link rel="stylesheet" id="mejs-skins-css" href="years/css/mejs-skins.css" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-css" href="years/css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" id="radykal-fancy-gallery-css" href="years/css/jquery.fancygallery.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="jetpack_css-css" href="years/css/jetpack.css" type="text/css" media="all">
    <!-- This site uses the Google Analytics by Yoast plugin v5.4.6 - Universal disabled - https://yoast.com/wordpress/plugins/google-analytics/ -->
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-39988949-1']);
        _gaq.push(['_gat._forceSSL']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <!-- / Google Analytics by Yoast -->
    <script type="text/javascript" src="years/js/jquery.js"></script>
    <script type="text/javascript" src="years/js/jquery-migrate.min.js"></script>
    <link rel="https://api.w.org/" href="http://www.masport100years.com/wp-json/">

    <style type="text/css" media="screen">
        #catapult-cookie-bar {
            display: none;
            direction: ltr;
            color: #dddddd;
            min-height: 30px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            z-index: 99999;
            padding: 6px 20px 4px;
            background-color: #464646;
            text-align: left;
        }

        #catapult-cookie-bar a {
            color: #dddddd;
        }

        button#catapultCookie {
            margin: 0 20px;
            line-height: 20px;
            background: #45AE52;
            border: none;
            color: #dddddd;
            padding: 4px 12px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 13px;
            font-weight: bold;
        }
    </style>
    <link rel="dns-prefetch" href="http://i0.wp.com/">
    <link rel="dns-prefetch" href="http://i1.wp.com/">
    <link rel="dns-prefetch" href="http://i2.wp.com/">
    <link rel="stylesheet" type="text/css" id="gravatar-card-css" href="years/css/hovercard.min.css">
    <link rel="stylesheet" type="text/css" id="gravatar-card-services-css" href="years/css/services.min.css">
</head>

<body><a id="BackToTop"
         href="http://www.masport100years.com/?_ga=2.132602318.1792881717.1535362192-781157663.1532521282#body"
         style="display: none;"><span></span></a><a id="BackToTop"
                                                    href="http://www.masport100years.com/?_ga=2.132602318.1792881717.1535362192-781157663.1532521282#body"><span>Back to top</span></a>
<div id="header">
    <div id="headerspan">

        <div id="access" role="navigation">

            <div class="menu-header">
                <ul id="menu-menu">
                    <li>
                        <a href="http://www.masport100years.com/?_ga=2.132602318.1792881717.1535362192-781157663.1532521282#home"
                           class="smoothScroll">Home</a></li>
                    <li>
                        <a href="http://www.masport100years.com/?_ga=2.132602318.1792881717.1535362192-781157663.1532521282#history"
                           class="smoothScroll">History</a></li>
                    <li>
                        <a href="http://www.masport100years.com/?_ga=2.132602318.1792881717.1535362192-781157663.1532521282#gallery"
                           class="smoothScroll">Gallery</a></li>
                    <li>
                        <a href="http://www.masport100years.com/?_ga=2.132602318.1792881717.1535362192-781157663.1532521282#book"
                           class="smoothScroll">The Book</a></li>
                    <li>
                        <a href="http://www.masport100years.com/?_ga=2.132602318.1792881717.1535362192-781157663.1532521282#contact"
                           class="smoothScroll">Contact</a></li>
                </ul>
            </div>
        </div><!-- #access -->

    </div><!-- #headerspan -->
</div>
<div class="layout home" id="home">
    <div class="logo">
        <img src="years/images/logo.png" width="100%;" id="fade-out">
    </div>
    <div class="masport">
        <a href="http://www.masport.com/" target="_blank"><img src="years/images/masport.png" width="150"></a>
    </div>
    <br clear="all">
</div><!-- .layout -->


<div class="layout history" id="history">
    <div class="content">
        <h1>Історія</h1>
        <div id="timeline">
            <div id="dates">
                <ul>
                    <li class="active"><a
                            href="#1910">1910</a>
                    </li>
                    <li class=""><a
                            href="#1920">1920</a>
                    </li>
                    <li>
                        <a href="#1930">1930</a>
                    </li>
                    <li class=""><a
                            href="#1940">1940</a>
                    </li>
                    <li class=""><a
                            href="#1950">1950</a>
                    </li>
                    <li class=""><a
                            href="#1960">1960</a>
                    </li>
                    <li class=""><a
                            href="#1970">1970</a>
                    </li>
                    <li class=""><a
                            href="#1980">1980</a>
                    </li>
                    <li class=""><a
                            href="#1990">1990</a>
                    </li>
                    <li class=""><a
                            href="#2000">2000</a>
                    </li>
                    <li class=""><a
                            href="#2010">2010</a>
                    </li>
                </ul>
            </div>
            <br clear="all">

            <div id="1910" class="timeline-content" style="display: block; opacity: 1;">
                <div style="float:left; text-align:center; width:300px; padding-right:30px;">
                    <img src="years/images/staff.jpg" width="220px"><br>
                    <i>The Staff (1911)</i>
                </div>
                <h1>1910</h1>
                <table width="450" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr valign="top">
                        <td width="100"><b>1 грудня 1910:</b></td>
                        <td>Рубен Портер, Гарольд Мейсон та Едвін Джонс відкривають компанію «City Engineering Ltd» в Окленді на Клів-Авеню
                            <br><br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>Березень 1912:</b></td>
                        <td>«City Engineering Ltd» переїжджає у нове приміщення на Вогель-Лейн<br><br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>Жовтень 1915:</b></td>
                        <td>«City Engineering Ltd» змінює назву на «Mason and Porter Ltd»<br><br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>Квітень 1917:</b></td>
                        <td>Народження Фреда Портера<br><br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>Червень 1917:</b></td>
                        <td>Компанія переїжджає з Вогель-Лейн на Клівленд роуд, Парнел</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div id="1920" class="timeline-content" style="display: none; opacity: 1;">
                <div style="float:left; text-align:center; width:300px; padding-right:30px;">
                    <img src="years/images/missmasport.jpg" width="220px"><br>
                    <i>Miss Masport New Zealand Powerboat</i>
                </div>
                <h1>1920</h1>
                <table width="450" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr valign="top">
                        <td width="100"><b>1922:</b></td>
                        <td>'Miss Masport' built to race in N.Z. Power Boating Championship. It wins in its first
                            attempt.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1925:</b></td>
                        <td>The Porters meet Fred Cave and Enid Porter joins the firm because Harold Mason has to take
                            time off for illness.<br><br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1929:</b></td>
                        <td>Prototype Masport 'Rapid' lawn mower is manufactured secretly in the house next door<br>
                            <br></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div id="1930" class="timeline-content" style="display: none;">
                <div style="float:left; text-align:center; width:300px; padding-right:30px;">
                    <img src="years/images/rapid.jpg" width="220px"><br>
                    <i>Illustration from an advertisement, advertising<br>the new series Masport 'Rapid' which was<br>introduced
                        to the market in 1932</i>
                </div>
                <h1>1930</h1>
                <table width="450" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr valign="top">
                        <td width="100"><strong>1930-31</strong><strong>:</strong></td>
                        <td>Production and marketing of Masport “Rapid” begins
                            <br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1933:</b></td>
                        <td>Mason and Porter manufacture Refrigerators<br>
                            <br>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td><b>1937:</b></td>
                        <td>Harold Mason resigns as Chairman and is replaced by Fred Cave. Enid Porter becomes a
                            Director.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>1938:</strong></td>
                        <td>“G” Force i.e. women are employed in the factory to carry out light assembly work and
                            painting.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1939:</b></td>
                        <td>Fred Porter becomes a Director aged 22.</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div id="1940" class="timeline-content" style="display: none; opacity: 1;">
                <div style="float:left; text-align:center; width:300px; padding-right:30px;">
                    <img src="years/images/lunchroom.jpg" width="220px"><br>
                    <i>The sparkling new lunch room.</i>
                </div>
                <h1>1940</h1>
                <table width="450" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr valign="top">
                        <td width="100"><strong>1940-42:</strong><strong></strong></td>
                        <td>Mt Wellington Plant including new Foundry is completed and the Company goes onto a full war
                            footing.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1943:</b></td>
                        <td>Russell Jenkins appointed a Manager of the Company.<br>
                            <br>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td><b>1945:</b></td>
                        <td>Harold Mason resigns from the Company and Russell Jenkins becomes a Director. By the end of
                            the year full time production has resumed.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>1946:</strong></td>
                        <td>Enid Porter dies suddenly.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1947:</b></td>
                        <td>Harold Mason dies aged 64.</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div id="1950" class="timeline-content" style="display: none; opacity: 1;">
                <div style="float:left; text-align:center; width:300px; padding-right:30px;">
                    <img src="years/images/rotahoe.jpg" width="220px"><br>
                    <i>The Masport 'Rotahoe' first introduced to the market in 1958.</i>
                </div>
                <h1>1950</h1>
                <table width="450" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr valign="top">
                        <td width="100"><strong>1952-53:</strong><strong></strong></td>
                        <td>“LawnSprite”, Lawn Prince and Lawn Chief range of motor mowers produced.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1953:</b></td>
                        <td>Gordon Boswell is employed by Mason and Porter.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1955-56:</b></td>
                        <td>First “Rotacut” horizontal blade lawn mowers manufactured.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1958:</b></td>
                        <td>Masport “Rotahoe” introduced to the market.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>1959:</strong></td>
                        <td>Doug Benefield joins Mason and Porter and sales exceed $1,000,000 for the first time.<br>
                            <br></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div id="1960" class="timeline-content" style="display: none; opacity: 1;">
                <div style="float:left; text-align:center; width:300px; padding-right:30px;">
                    <img src="years/images/plant.jpg" width="220px"><br>
                    <i>Aerial view of Parnell Plant which closed in 1962.</i>
                </div>
                <h1>1960</h1>
                <table width="450" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr valign="top">
                        <td width="100"><strong>1960:</strong><strong></strong></td>
                        <td>Mason and Porter celebrate 50 years <br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1961:</b></td>
                        <td> David Porter joins the Company as an apprentice fitter and turner.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1962:</b></td>
                        <td>Parnell Plant closes.
                            <br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1963:</b></td>
                        <td>Terry Porter also joins Mason and Porter as an apprentice fitter and turner.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>1964:</strong></td>
                        <td>Reuben Porter dies aged 78. Fred Porter and Russell Jenkins become Joint Managing Directors.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>1966:</strong></td>
                        <td>Sales exceed $2,000,000 for&nbsp; the first time and Marketing Department opened.<br>
                            <br></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div id="1970" class="timeline-content" style="display: none; opacity: 1;">
                <div style="float:left; text-align:center; width:300px; padding-right:30px;">
                    <img src="years/images/bod.jpg" width="220px"><br>
                    <i>Board of Directors - Masport Holdings Ltd (1977-78).</i>
                </div>
                <h1>1970</h1>
                <table width="450" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr valign="top">
                        <td width="100"><b>1971:</b></td>
                        <td>Doug Benefield and David Porter become Directors.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1972:</b></td>
                        <td>"Movac" and "President" lawnmowers produced.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1973:</b></td>
                        <td>Russell Jenkins retires as Managing Director (Admin). Doug Benefield replaces him.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>1975:</strong></td>
                        <td>Masport Australia increase sales by 73% and breaks the $A1million mark.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>1978:</strong></td>
                        <td>Total external&nbsp; sales exceed $30 million. Pittsburgh Pot Belly Stoves are released to
                            the market and 4,000 sold in the first year.<br>
                            <br></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div id="1980" class="timeline-content" style="display: none; opacity: 1;">
                <div style="float:left; text-align:center; width:300px; padding-right:30px;">
                    <img src="years/images/morrison.jpg" width="220px"><br>
                    <i>Morrison Industries is purchased by Masport in 1986, with the Cycle division being sold in
                        1987.</i>
                </div>
                <h1>1980</h1>
                <table width="450" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr valign="top">
                        <td width="100"><b><strong>1984 </strong>:</b></td>
                        <td>Masport Ltd formed and listed on the Stock Exchange. Fred Porter appointed President and
                            Doug Benefield becomes Managing Director.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1985:</b></td>
                        <td>Porter family leave Masport during the year and Doug Benefield becomes Chief Executive
                            Officer.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1986:</b></td>
                        <td>Masport purchases Morrison Industries.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>1987:</strong></td>
                        <td>Sir Earl Richardson steps down as Chairman. Divisionalisation introduced. Morrison
                            Industries Cycle division sold.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>1988:</strong></td>
                        <td>Doug Benefield retires as CEO but remains a Director. Nick Bessey becomes CEO and unifies
                            divisions. Masport is placed under Cable Price Downer banner.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>1989:</strong></td>
                        <td>Nick Bessey resigns as CEO and is replaced by Laurie Margain.</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div id="1990" class="timeline-content" style="display: none; opacity: 1;">
                <div style="float:left; text-align:center; width:300px; padding-right:30px;">
                    <img src="years/images/mulch.jpg" width="220px"><br>
                    <i>'Product of the Year' award winning Mulching Lawnmower.</i>
                </div>
                <h1>1990</h1>
                <table width="450" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr valign="top">
                        <td width="100"><strong>1991</strong><strong></strong></td>
                        <td>Bicycle business sold to Hope Gibbons<br>
                            <br>
                            Vaccuum pumps transferred to Skellerup Engineering
                            <br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1994:</b></td>
                        <td>Mulching lawnmower wins 'Product of the Year' award.<br>
                            <br>
                            Masport starts munfacturing Gas Flame Effect Fires<br><br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>1998:</b></td>
                        <td>Masport introduces the Multi-Feature and Genius range of mowers. Utopia Cast Iron fires
                            introduced.
                            <br><br></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div id="2000" class="timeline-content" style="display: none; opacity: 1;">
                <div style="float:left; text-align:center; width:300px; padding-right:30px;">
                    <img src="years/images/4n1.jpg" width="220px"><br>
                    <i>Masport MSV Genius 4n1 Lawnmower.</i>
                </div>
                <h1>2000</h1>
                <table width="450" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr valign="top">
                        <td width="100"><strong>2003</strong><strong></strong></td>
                        <td>CEO John Lawson resigns and is replace by Mark von Batenburg.<br> <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>2004:</b></td>
                        <td>MSV series mower introduced. Launched as THE BEAST.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>2005:</b></td>
                        <td>Mark con Batenburg resigns and is replace by Peter Batcheler as General Manager.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>2006:</b></td>
                        <td>Peter Batcheler resigns as General Manager.<br>
                            <br></td>
                    </tr>
                    <tr valign="top">
                        <td><b>2007:</b></td>
                        <td>Steve Hughes appointed General Manager of Masport Ltd. <br>
                            <br>
                            Clive Baker retires after 29 years.<br>
                            <br></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div id="2010" class="timeline-content" style="display: none; opacity: 1;">
                <div style="float:left; text-align:center; width:300px; padding-right:30px;">
                    <img src="years/images/cake.jpg" width="220px">
                </div>
                <h1>2010</h1>
                <table width="450" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr valign="top">
                        <td width="100"><strong>2010</strong><strong></strong></td>
                        <td>Mike Carvill retires in July after 32 years.<br>
                            <br>
                            Masport celebrates it's 100th Birthday on 1st December.<br>
                            <br></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- .content -->
    <br clear="all">
</div><!-- .layout -->

<div class="layout gallery" id="gallery">
    <div class="content">
        <h1>Gallery</h1>
        <p>&nbsp;</p>
        <ul class="fg-thumbHolder radykal-clearfix">
            <li class="fg-listItem" style="width: 158px; height: 158px; margin-bottom: 35px; margin-right: 35px;">
                <div
                    style="overflow: hidden; background-color: rgb(245, 245, 245); border-color: rgb(189, 195, 199); padding: 3px;">
                    <div class="fg-thumbnail-container" style="height: 152px; overflow: hidden;"><a
                            href="http://www.masport100years.com/gallery/staff-reunion/"><img class="fg-thumb"
                                                                                              src="years/images/timthumb.jpg"
                                                                                              alt="" width="152"
                                                                                              height="152"
                                                                                              style="width: 152px; height: 152px; display: block; opacity: 1;"></a>
                    </div>
                </div>
                <div class="fg-title fg-title-outside" style="border:none; width: 100%; color:#000; text-align:center;">
                    Staff Reunion
                </div>
            </li>
            <li class="fg-listItem" style="width: 158px; height: 158px; margin-bottom: 35px; margin-right: 35px;">
                <div
                    style="overflow: hidden; background-color: rgb(245, 245, 245); border-color: rgb(189, 195, 199); padding: 3px;">
                    <div class="fg-thumbnail-container" style="height: 152px; overflow: hidden;"><a
                            href="http://www.masport100years.com/gallery/dinner/" title="" class="fg-image"
                            style="background-color: rgb(245, 245, 245);  width: 152px; height: 152px;"><img
                                class="fg-thumb" src="years/images/timthumb(1).jpg" alt="" width="152" height="152"
                                style="width: 152px; height: 152px; display: block; opacity: 1;"></a></div>
                </div>
                <div class="fg-title fg-title-outside" style="border:none; width: 100%; color:#000; text-align:center;">
                    Centenary Dinner
                </div>
            </li>
            <li class="fg-listItem" style="width: 158px; height: 158px; margin-bottom: 35px; margin-right: 35px;">
                <div
                    style="overflow: hidden; background-color: rgb(245, 245, 245); border-color: rgb(189, 195, 199); padding: 3px;">
                    <div class="fg-thumbnail-container" style="height: 152px; overflow: hidden;"><a
                            href="http://www.masport100years.com/gallery/1910" title="" class="fg-image"
                            style="background-color: rgb(245, 245, 245);  width: 152px; height: 152px;"><img
                                class="fg-thumb" src="years/images/timthumb(2).jpg" alt="" width="152" height="152"
                                style="width: 152px; height: 152px; display: block; opacity: 1;"></a></div>
                </div>
                <div class="fg-title fg-title-outside" style="border:none; width: 100%; color:#000; text-align:center;">
                    1910
                </div>
            </li>
            <li class="fg-listItem" style="width: 158px; height: 158px; margin-bottom: 35px; margin-right: 35px;">
                <div
                    style="overflow: hidden; background-color: rgb(245, 245, 245); border-color: rgb(189, 195, 199); padding: 3px;">
                    <div class="fg-thumbnail-container" style="height: 152px; overflow: hidden;"><a
                            href="http://www.masport100years.com/gallery/1920" title="" class="fg-image"
                            style="background-color: rgb(245, 245, 245);  width: 152px; height: 152px;"><img
                                class="fg-thumb" src="years/images/timthumb(3).jpg" alt="" width="152" height="152"
                                style="width: 152px; height: 152px; display: block; opacity: 1;"></a></div>
                </div>
                <div class="fg-title fg-title-outside" style="border:none; width: 100%; color:#000; text-align:center;">
                    1920
                </div>
            </li>
            <li class="fg-listItem" style="width: 158px; height: 158px; display: list-item;">
                <div
                    style="overflow: hidden; background-color: rgb(245, 245, 245); border-color: rgb(189, 195, 199); padding: 3px;">
                    <div class="fg-thumbnail-container" style="height: 152px; overflow: hidden;"><a
                            href="http://www.masport100years.com/gallery/1930" title="" class="fg-image"
                            style="background-color: rgb(245, 245, 245);  width: 152px; height: 152px;"><img
                                class="fg-thumb" src="years/images/timthumb(4).jpg" alt="" width="152" height="152"
                                style="width: 152px; height: 152px; display: block; opacity: 1;"></a></div>
                </div>
                <div class="fg-title fg-title-outside" style="border:none; width: 100%; color:#000; text-align:center;">
                    1930
                </div>
            </li>
            <li class="fg-listItem" style="width: 158px; height: 158px; margin-bottom: 35px; margin-right: 35px;">
                <div
                    style="overflow: hidden; background-color: rgb(245, 245, 245); border-color: rgb(189, 195, 199); padding: 3px;">
                    <div class="fg-thumbnail-container" style="height: 152px; overflow: hidden;"><a
                            href="http://www.masport100years.com/gallery/1940" title="" class="fg-image"
                            style="background-color: rgb(245, 245, 245);  width: 152px; height: 152px;"><img
                                class="fg-thumb" src="years/images/timthumb(5).jpg" alt="" width="152" height="152"
                                style="width: 152px; height: 152px; display: block; opacity: 1;"></a></div>
                </div>
                <div class="fg-title fg-title-outside" style="border:none; width: 100%; color:#000; text-align:center;">
                    1940
                </div>
            </li>
            <li class="fg-listItem" style="width: 158px; height: 158px; margin-bottom: 35px; margin-right: 35px;">
                <div
                    style="overflow: hidden; background-color: rgb(245, 245, 245); border-color: rgb(189, 195, 199); padding: 3px;">
                    <div class="fg-thumbnail-container" style="height: 152px; overflow: hidden;"><a
                            href="http://www.masport100years.com/gallery/1950" title="" class="fg-image"
                            style="background-color: rgb(245, 245, 245);  width: 152px; height: 152px;"><img
                                class="fg-thumb" src="years/images/timthumb(6).jpg" alt="" width="152" height="152"
                                style="width: 152px; height: 152px; display: block; opacity: 1;"></a></div>
                </div>
                <div class="fg-title fg-title-outside" style="border:none; width: 100%; color:#000; text-align:center;">
                    1950
                </div>
            </li>
            <li class="fg-listItem" style="width: 158px; height: 158px; margin-bottom: 35px; margin-right: 35px;">
                <div
                    style="overflow: hidden; background-color: rgb(245, 245, 245); border-color: rgb(189, 195, 199); padding: 3px;">
                    <div class="fg-thumbnail-container" style="height: 152px; overflow: hidden;"><a
                            href="http://www.masport100years.com/gallery/1960" title="" class="fg-image"
                            style="background-color: rgb(245, 245, 245);  width: 152px; height: 152px;"><img
                                class="fg-thumb" src="years/images/timthumb(7).jpg" alt="" width="152" height="152"
                                style="width: 152px; height: 152px; display: block; opacity: 1;"></a></div>
                </div>
                <div class="fg-title fg-title-outside" style="border:none; width: 100%; color:#000; text-align:center;">
                    1960
                </div>
            </li>
            <li class="fg-listItem" style="width: 158px; height: 158px; margin-bottom: 35px; margin-right: 35px;">
                <div
                    style="overflow: hidden; background-color: rgb(245, 245, 245); border-color: rgb(189, 195, 199); padding: 3px;">
                    <div class="fg-thumbnail-container" style="height: 152px; overflow: hidden;"><a
                            href="http://www.masport100years.com/gallery/1970" title="" class="fg-image"
                            style="background-color: rgb(245, 245, 245);  width: 152px; height: 152px;"><img
                                class="fg-thumb" src="years/images/timthumb(8).jpg" alt="" width="152" height="152"
                                style="width: 152px; height: 152px; display: block; opacity: 1;"></a></div>
                </div>
                <div class="fg-title fg-title-outside" style="border:none; width: 100%; color:#000; text-align:center;">
                    1970
                </div>
            </li>
            <li class="fg-listItem" style="width: 158px; height: 158px; margin-bottom: 35px;">
                <div
                    style="overflow: hidden; background-color: rgb(245, 245, 245); border-color: rgb(189, 195, 199); padding: 3px;">
                    <div class="fg-thumbnail-container" style="height: 152px; overflow: hidden;">
                        <a href="http://www.masport100years.com/gallery/1980" title="" class="fg-image"
                           style="background-color: rgb(245, 245, 245);  width: 152px; height: 152px;"><img
                                class="fg-thumb" src="years/images/timthumb(9).jpg" alt="" width="152" height="152"
                                style="width: 152px; height: 152px; display: block; opacity: 1;"></a></div>
                </div>
                <div class="fg-title fg-title-outside" style="border:none; width: 100%; color:#000; text-align:center;">
                    1980
                </div>
            </li>
            <li class="fg-listItem" style="width: 158px; height: 158px; margin-bottom: 35px; margin-right: 35px;">
                <div
                    style="overflow: hidden; background-color: rgb(245, 245, 245); border-color: rgb(189, 195, 199); padding: 3px;">
                    <div class="fg-thumbnail-container" style="height: 152px; overflow: hidden;"><a
                            href="http://www.masport100years.com/gallery/1990" title="" class="fg-image"
                            style="background-color: rgb(245, 245, 245);  width: 152px; height: 152px;"><img
                                class="fg-thumb" src="years/images/timthumb(10).jpg" alt="" width="152" height="152"
                                style="width: 152px; height: 152px; display: block; opacity: 1;"></a></div>
                </div>
                <div class="fg-title fg-title-outside" style="border:none; width: 100%; color:#000; text-align:center;">
                    1990
                </div>
            </li>
            <li class="fg-listItem" style="width: 158px; height: 158px; margin-bottom: 35px; margin-right: 35px;">
                <div
                    style="overflow: hidden; background-color: rgb(245, 245, 245); border-color: rgb(189, 195, 199); padding: 3px;">
                    <div class="fg-thumbnail-container" style="height: 152px; overflow: hidden;"><a
                            href="http://www.masport100years.com/gallery/2000" title="" class="fg-image"
                            style="background-color: rgb(245, 245, 245);  width: 152px; height: 152px;"><img
                                class="fg-thumb" src="years/images/timthumb(11).jpg" alt="" width="152" height="152"
                                style="width: 152px; height: 152px; display: block; opacity: 1;"></a></div>
                </div>
                <div class="fg-title fg-title-outside" style="border:none; width: 100%; color:#000; text-align:center;">
                    2000
                </div>
            </li>
        </ul>
    </div><!-- .content -->
    <br clear="all">
</div><!-- .layout -->

<div class="layout book" id="book">
    <div class="content">
        <h1>The Book</h1>
        <p>&nbsp;</p>
        <div style="width:350px; height:300px; float:left;">
            <img src="years/images/book.png" alt="" title="Masport: 100 Years in the Making" width="246" height="300">
        </div>
        <div style="width:500px; height:250px; margin-top:50px; float:left;">
            <h3>Masport: </h3>
            <h4> 100 Years in the Making</h4>
            <p>With pages full of rich history, the Masport Commemorative Centenary Book tells the story of the iconic
                New Zealand company Masport over the last 100 years. </p>
            <p>This hard covered book is 310 pages, which are full of stories &amp; pictures. </p>
            <p>To purchase the Masport Commemorative Centenary Book, please select your region:</p>
            <p>&nbsp;</p>
            <p><select id="thechoices">
                    <option value="boxnone">Select Your Region</option>
                    <option value="boxau">Australia</option>
                    <option value="boxnz">New Zealand</option>
                    <option value="boxworld">Rest of World</option>
                </select></p>
        </div>
        <p><br clear="all"></p>
        <div id="boxes">
            <div id="boxnone"></div>
            <div id="boxau" style="display: none;">
                <h3>Australia</h3>
                <p></p>
                <h4>AU$59.95 (incl. GST)</h4>
                <p><em>Price includes postage &amp; packaging (within Australia).</em></p>
                <p>To purchase use the form below. After submitting the form, a member of the Masport customer services
                    team will make contact with you within one to two working days to confirm your order and finalise
                    your payment details.<br>
                    Both direct credit and credit card options are available.<br>
                    <br>
                </p>
                <div role="form" class="wpcf7" id="wpcf7-f61-o1" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form
                        action="http://www.masport100years.com/?_ga=2.132602318.1792881717.1535362192-781157663.1532521282#wpcf7-f61-o1"
                        method="post" class="wpcf7-form" novalidate="novalidate">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="61">
                            <input type="hidden" name="_wpcf7_version" value="4.3">
                            <input type="hidden" name="_wpcf7_locale" value="">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f61-o1">
                            <input type="hidden" name="_wpnonce" value="a769634aa5">
                        </div>
                        <p><span class="wpcf7-form-control-wrap Name"><input type="text" name="Name" value="" size="40"
                                                                             class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                             aria-required="true" aria-invalid="false"
                                                                             placeholder="Name"></span><br><br>
                            <span class="wpcf7-form-control-wrap Email"><input type="email" name="Email" value=""
                                                                               size="40"
                                                                               class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                               aria-required="true" aria-invalid="false"
                                                                               placeholder="Email"></span><br><br>
                            <span class="wpcf7-form-control-wrap billingaddress"><textarea name="billingaddress"
                                                                                           cols="40" rows="10"
                                                                                           class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                                           aria-required="true"
                                                                                           aria-invalid="false"
                                                                                           placeholder="Billing Address"></textarea></span><br><br>
                            <span class="wpcf7-form-control-wrap delivery"><textarea name="delivery" cols="40" rows="10"
                                                                                     class="wpcf7-form-control wpcf7-textarea"
                                                                                     aria-invalid="false"
                                                                                     placeholder="Delivery Address (if different from above)"></textarea></span><br><br>
                            <span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value=""
                                                                               size="40"
                                                                               class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                               aria-required="true" aria-invalid="false"
                                                                               placeholder="Best Daytime Contact Phone Number"></span><br><br>
                            <span class="wpcf7-form-control-wrap phonealt"><input type="text" name="phonealt" value=""
                                                                                  size="40"
                                                                                  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                  aria-required="true"
                                                                                  aria-invalid="false"
                                                                                  placeholder="Alternative Contact Phone Number"></span><br><br>
                            <span class="wpcf7-form-control-wrap copies"><input type="text" name="copies" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                                placeholder="Number of Copies"></span><br>
                        </p>
                        <fieldset>
                            <legend>
                                <h3>Captcha</h3>
                            </legend>
                            <p><input type="hidden" name="_wpcf7_captcha_challenge_captcha" value="2237985351"><img
                                    class="wpcf7-form-control wpcf7-captchac wpcf7-captcha-captcha" alt="captcha"
                                    src="years/images/2237985351.png" width="84" height="28"><br>
                                Please type the characters above:<br>
                                <span class="wpcf7-form-control-wrap captcha"><input type="text" name="captcha" value=""
                                                                                     size="40"
                                                                                     class="wpcf7-form-control wpcf7-captchar"
                                                                                     aria-invalid="false"></span>
                            </p></fieldset>
                        <p><br><br><br>
                            <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit"><img
                                class="ajax-loader" src="years/images/ajax-loader.gif" alt="Sending ..."
                                style="visibility: hidden;"></p>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
            </div>
            <div id="boxnz" style="display: none;">
                <h3>New Zealand</h3>
                <p></p>
                <h4>NZ$79.95 (incl. GST)</h4>
                <p><em>Price includes postage &amp; packaging (within New Zealand).</em></p>
                <p>To purchase use the form below. After submitting the form, a member of the Masport customer services
                    team will make contact with you within one to two working days to confirm your order and finalise
                    your payment details.<br>
                    Both direct credit and credit card options are available.<br>
                    <br>
                </p>
                <div role="form" class="wpcf7" id="wpcf7-f61-o2" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form
                        action="http://www.masport100years.com/?_ga=2.132602318.1792881717.1535362192-781157663.1532521282#wpcf7-f61-o2"
                        method="post" class="wpcf7-form" novalidate="novalidate">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="61">
                            <input type="hidden" name="_wpcf7_version" value="4.3">
                            <input type="hidden" name="_wpcf7_locale" value="">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f61-o2">
                            <input type="hidden" name="_wpnonce" value="a769634aa5">
                        </div>
                        <p><span class="wpcf7-form-control-wrap Name"><input type="text" name="Name" value="" size="40"
                                                                             class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                             aria-required="true" aria-invalid="false"
                                                                             placeholder="Name"></span><br><br>
                            <span class="wpcf7-form-control-wrap Email"><input type="email" name="Email" value=""
                                                                               size="40"
                                                                               class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                               aria-required="true" aria-invalid="false"
                                                                               placeholder="Email"></span><br><br>
                            <span class="wpcf7-form-control-wrap billingaddress"><textarea name="billingaddress"
                                                                                           cols="40" rows="10"
                                                                                           class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                                           aria-required="true"
                                                                                           aria-invalid="false"
                                                                                           placeholder="Billing Address"></textarea></span><br><br>
                            <span class="wpcf7-form-control-wrap delivery"><textarea name="delivery" cols="40" rows="10"
                                                                                     class="wpcf7-form-control wpcf7-textarea"
                                                                                     aria-invalid="false"
                                                                                     placeholder="Delivery Address (if different from above)"></textarea></span><br><br>
                            <span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value=""
                                                                               size="40"
                                                                               class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                               aria-required="true" aria-invalid="false"
                                                                               placeholder="Best Daytime Contact Phone Number"></span><br><br>
                            <span class="wpcf7-form-control-wrap phonealt"><input type="text" name="phonealt" value=""
                                                                                  size="40"
                                                                                  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                  aria-required="true"
                                                                                  aria-invalid="false"
                                                                                  placeholder="Alternative Contact Phone Number"></span><br><br>
                            <span class="wpcf7-form-control-wrap copies"><input type="text" name="copies" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                                placeholder="Number of Copies"></span><br>
                        </p>
                        <fieldset>
                            <legend>
                                <h3>Captcha</h3>
                            </legend>
                            <p><input type="hidden" name="_wpcf7_captcha_challenge_captcha" value="1297574786"><img
                                    class="wpcf7-form-control wpcf7-captchac wpcf7-captcha-captcha" alt="captcha"
                                    src="years/images/1297574786.png" width="84" height="28"><br>
                                Please type the characters above:<br>
                                <span class="wpcf7-form-control-wrap captcha"><input type="text" name="captcha" value=""
                                                                                     size="40"
                                                                                     class="wpcf7-form-control wpcf7-captchar"
                                                                                     aria-invalid="false"></span>
                            </p></fieldset>
                        <p><br><br><br>
                            <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit"><img
                                class="ajax-loader" src="years/images/ajax-loader.gif" alt="Sending ..."
                                style="visibility: hidden;"></p>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
            </div>
            <div id="boxworld" style="display: none;">
                <h3>Rest of World</h3>
                <p></p>
                <h4>NZ$79.95 (incl. GST)</h4>
                <p>Note: International orders may incur additional costs – these will be communicated before you confirm
                    your order.</p>
                <p>To purchase use the form below. After submitting the form, a member of the Masport customer services
                    team will make contact with you within one to two working days to confirm your order and finalise
                    your payment details.<br>
                    Both direct credit and credit card options are available.<br>
                    <br>
                </p>
                <div role="form" class="wpcf7" id="wpcf7-f61-o3" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form
                        action="http://www.masport100years.com/?_ga=2.132602318.1792881717.1535362192-781157663.1532521282#wpcf7-f61-o3"
                        method="post" class="wpcf7-form" novalidate="novalidate">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="61">
                            <input type="hidden" name="_wpcf7_version" value="4.3">
                            <input type="hidden" name="_wpcf7_locale" value="">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f61-o3">
                            <input type="hidden" name="_wpnonce" value="a769634aa5">
                        </div>
                        <p><span class="wpcf7-form-control-wrap Name"><input type="text" name="Name" value="" size="40"
                                                                             class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                             aria-required="true" aria-invalid="false"
                                                                             placeholder="Name"></span><br><br>
                            <span class="wpcf7-form-control-wrap Email"><input type="email" name="Email" value=""
                                                                               size="40"
                                                                               class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                               aria-required="true" aria-invalid="false"
                                                                               placeholder="Email"></span><br><br>
                            <span class="wpcf7-form-control-wrap billingaddress"><textarea name="billingaddress"
                                                                                           cols="40" rows="10"
                                                                                           class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                                           aria-required="true"
                                                                                           aria-invalid="false"
                                                                                           placeholder="Billing Address"></textarea></span><br><br>
                            <span class="wpcf7-form-control-wrap delivery"><textarea name="delivery" cols="40" rows="10"
                                                                                     class="wpcf7-form-control wpcf7-textarea"
                                                                                     aria-invalid="false"
                                                                                     placeholder="Delivery Address (if different from above)"></textarea></span><br><br>
                            <span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value=""
                                                                               size="40"
                                                                               class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                               aria-required="true" aria-invalid="false"
                                                                               placeholder="Best Daytime Contact Phone Number"></span><br><br>
                            <span class="wpcf7-form-control-wrap phonealt"><input type="text" name="phonealt" value=""
                                                                                  size="40"
                                                                                  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                  aria-required="true"
                                                                                  aria-invalid="false"
                                                                                  placeholder="Alternative Contact Phone Number"></span><br><br>
                            <span class="wpcf7-form-control-wrap copies"><input type="text" name="copies" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                                placeholder="Number of Copies"></span><br>
                        </p>
                        <fieldset>
                            <legend>
                                <h3>Captcha</h3>
                            </legend>
                            <p><input type="hidden" name="_wpcf7_captcha_challenge_captcha" value="3859925262"><img
                                    class="wpcf7-form-control wpcf7-captchac wpcf7-captcha-captcha" alt="captcha"
                                    src="years/images/3859925262.png" width="84" height="28"><br>
                                Please type the characters above:<br>
                                <span class="wpcf7-form-control-wrap captcha"><input type="text" name="captcha" value=""
                                                                                     size="40"
                                                                                     class="wpcf7-form-control wpcf7-captchar"
                                                                                     aria-invalid="false"></span>
                            </p></fieldset>
                        <p><br><br><br>
                            <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit"><img
                                class="ajax-loader" src="years/images/ajax-loader.gif" alt="Sending ..."
                                style="visibility: hidden;"></p>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- .content -->
    <br clear="all">
</div><!-- .layout -->

<div class="layout contact" id="contact">
    <div class="content">
        <h1>Contact</h1>
        <p></p>
        <p>Need more information, have a query or something to contribute? Fill out the form below and we’ll be happy to
            help with your request.<br>
            <br>
            Alternatively visit <a href="http://www.masport.com/"
                                   onclick="_gaq.push([&#39;_trackEvent&#39;, &#39;outbound-article&#39;, &#39;http://www.masport.com&#39;, &#39;www.masport.com&#39;]);"
                                   title="www.masport.com" target="_blank">www.masport.com</a> for additional
            information on Masport and it’s products.<br>
            <br>
        </p>
        <div role="form" class="wpcf7" id="wpcf7-f22-o4" dir="ltr">
            <div class="screen-reader-response"></div>
            <form
                action="http://www.masport100years.com/?_ga=2.132602318.1792881717.1535362192-781157663.1532521282#wpcf7-f22-o4"
                method="post" class="wpcf7-form" novalidate="novalidate">
                <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="22">
                    <input type="hidden" name="_wpcf7_version" value="4.3">
                    <input type="hidden" name="_wpcf7_locale" value="">
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f22-o4">
                    <input type="hidden" name="_wpnonce" value="926f73c5fd">
                </div>
                <p><span class="wpcf7-form-control-wrap Name"><input type="text" name="Name" value="" size="40"
                                                                     class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                     aria-required="true" aria-invalid="false"
                                                                     placeholder="Name"></span><br><br>
                    <span class="wpcf7-form-control-wrap Email"><input type="email" name="Email" value="" size="40"
                                                                       class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                       aria-required="true" aria-invalid="false"
                                                                       placeholder="Email"></span><br><br>
                    <span class="wpcf7-form-control-wrap Country"><input type="text" name="Country" value="" size="40"
                                                                         class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                         aria-required="true" aria-invalid="false"
                                                                         placeholder="Country"></span><br><br>
                    <span class="wpcf7-form-control-wrap Subject"><input type="text" name="Subject" value="" size="40"
                                                                         class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                         aria-required="true" aria-invalid="false"
                                                                         placeholder="Subject"></span><br><br>
                    <span class="wpcf7-form-control-wrap Message"><textarea name="Message" cols="40" rows="10"
                                                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                            aria-required="true" aria-invalid="false"
                                                                            placeholder="Message"></textarea></span><br>
                </p>
                <fieldset>
                    <legend>
                        <h3>Captcha</h3>
                    </legend>
                    <p><input type="hidden" name="_wpcf7_captcha_challenge_captcha" value="3207959111"><img
                            class="wpcf7-form-control wpcf7-captchac wpcf7-captcha-captcha" alt="captcha"
                            src="years/images/3207959111.png" width="84" height="28"><br>
                        Please type the characters above:<br>
                        <span class="wpcf7-form-control-wrap captcha"><input type="text" name="captcha" value=""
                                                                             size="40"
                                                                             class="wpcf7-form-control wpcf7-captchar"
                                                                             aria-invalid="false"></span>
                    </p></fieldset>
                <p><br><br></p>
                <p><input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit"><img class="ajax-loader"
                                                                                                    src="years/images/ajax-loader.gif"
                                                                                                    alt="Sending ..."
                                                                                                    style="visibility: hidden;">
                </p>
                <div class="wpcf7-response-output wpcf7-display-none"></div>
            </form>
        </div>
        <p></p>
    </div><!-- .content -->
    <br clear="all">
</div><!-- .layout -->

<div id="footer" role="contentinfo">
    <div id="footer-space">
        <div style="width: 400px; float: left; font-size:10px; color:#fff">
            © Copyright 2010 Masport Limited.<br>
            All rights reserved.<br>
        </div>

        <div style="width: 400px; float: right; font-size:10px; text-align:right; margin-top:4px;">
            <a href="http://www.facebook.com/Masport" target="_blank"><img src="years/images/fb.png"
                                                                           style="padding-right:10px;"></a>
            <a href="http://www.twitter.com/Masport_" target="_blank"><img src="years/images/tw.png"></a>
        </div>

    </div>
</div><!-- #footer -->

<!-- .wrap -->
<script type="text/javascript">
    jQuery(document).ready(function () {
        if (!catapultReadCookie("catAccCookies")) {//If the cookie has not been set
            jQuery("#catapult-cookie-bar").show();
        }
    });
</script>
<div style="display:none">
</div>
<script type="text/javascript" src="years/js/photon.js"></script>
<script type="text/javascript" src="years/js/jquery.form.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var _wpcf7 = {
        "loaderUrl": "http:\/\/www.masport100years.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif",
        "sending": "Sending ...",
        "cached": "1"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="years/js/scripts.js"></script>
<script type="text/javascript" src="years/js/uk-cookie-consent-js.js"></script>
<script type="text/javascript" src="years/js/devicepx-jetpack.js"></script>
<script type="text/javascript" src="years/js/gprofiles.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var WPGroHo = {"my_hash": ""};
    /* ]]> */
</script>
<script type="text/javascript" src="years/js/wpgroho.js"></script>
<script type="text/javascript" src="years/js/wp-embed.min.js"></script>
<script type="text/javascript" src="years/js/e-201838.js" async="" defer=""></script>
<script type="text/javascript">
    _stq = window._stq || [];
    _stq.push(['view', {
        v: 'ext',
        j: '1:3.7.2',
        blog: '56257913',
        post: '0',
        tz: '12',
        srv: 'www.masport100years.com'
    }]);
    _stq.push(['clickTrackerInit', '56257913', '0']);
</script>
<div id="catapult-cookie-bar">This Website Uses Cookies
    <button id="catapultCookie" tabindex="1" onclick="catapultAcceptCookies();">No Problem</button>
    <a tabindex="1" href="http://www.masport100years.com/cookie-policy">More Information</a></div>
<img src="years/images/g.gif" alt=":)" width="6" height="5" id="wpstats"></body>
</html>