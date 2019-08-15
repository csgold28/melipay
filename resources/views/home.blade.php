
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/palette.css">
        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/bootstrap-datetimepicker.min.css"> 
        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/sweet-alert.css">
        <!--<link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/demo.css">-->
        <link rel="stylesheet" type="text/css" href="https://dashboard.bebasbayar.com/assets/css/demo.css">
        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/select2/select2.css">
        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/bootstrap-select.css">
        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/jquery.nouislider.min.css">
        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/app.min.1.css">
        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/app.min.2.css">
        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/bootstrap-slider.min.css">
        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/introjs.css">
        <link rel="stylesheet" type="text/css" href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/sweetalert2.min.css">
        
                <link id="bb_link_shortcut" rel="SHORTCUT ICON" href="" />

        <script>
            function load_css(src, iscustomcss) {
                if (Object.prototype.toString.call(src) === '[object Array]') {
                    for (var x in src) {
                        load_css(src[x], iscustomcss);
                    }
                } else {
                    var l = document.createElement('link');
                    l.rel = 'stylesheet';
                    l.type = 'text/css';
                    l.href = src;
//                    l.href = src.replace("http://", "").replace("https://", "");

                    var refNode = document.getElementById("bb_link_shortcut");
                    if (iscustomcss) {
                        refNode.parentNode.insertBefore(l, refNode.nextSibling);
                    } else {
                        refNode.parentNode.insertBefore(l, refNode);
                    }
                }
            }
            function load_css_inline(src) {
                if (Object.prototype.toString.call(src) === '[object Array]') {
                    for (var x in src) {
                        load_css_inline(src[x]);
                    }
                } else {
                    var s = document.createElement('style');
                    s.type = 'text/css';
                    s.innerHTML = src;

                    var h = document.getElementsByTagName('head')[0];
                    h.appendChild(s);
                }
            }
            function print_this() {
                $(".panel-heading").attr('aria-expanded', 'true');
                $(".panel-heading").removeClass('collapsed');
                $('.panel-collapse').attr('aria-expanded', 'true');
                $('.panel-collapse').addClass('in');
                $('.panel-collapse').css('height', 'auto');
//                $('.padded-form').css('text-align', 'left');
//                $('.padded-form').css('padding-left', '50px');
                window.print();
            }

            // PIWIK //
            var _paq = _paq || [];
//               tracker methods like "setCustomDimension" should be called before "trackPageView"
            _paq.push(['setCustomVariable', '1', 'type', 'login']);
            _paq.push([function () {
                    var customVariable = this.getCustomVariable(1);
                }]);
            _paq.push(['setUserId', '1233657']);
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function () {
                var u = "//analytics.scash.bz/";
                _paq.push(['setTrackerUrl', u + 'piwik.php']);
                _paq.push(['setSiteId', 'dashboard.bebasbayar.com']);
                var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
                g.type = 'text/javascript';
                g.async = true;
                g.defer = true;
                g.src = u + 'piwik.js';
                s.parentNode.insertBefore(g, s);
            })();
            // END PIWIK //
        </script>        
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/plugins/jQuery/jQuery-2.1.3.min.js"></script>
        <!-- FB -->
        <script type="text/javascript">
            !function (f, b, e, v, n, t, s) {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '227964930888743');
            fbq('track', "PageView");
        </script>
        <noscript>
        <img height="1" width="1" style="display: none"
                src="https://www.facebook.com/tr?id=227964930888743&ev=PageView&noscript=1" />
        </noscript>
        <!-- END FB -->
    </head>
    <body data-ma-header="gradient">
        <!-- Page Loader
        <div class="page-loader palette-Blue-Gradient bg">
            <img src="https://dashboard.bebasbayar.com/assets/img/bebasbayar.png" style="display: block;margin: 0 auto;max-width: 15em; margin-top: 12%;">
            <div class="preloader pl-xl pls-white">
                
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20"/>
                </svg>
            </div>
        </div> 
        -->
        <header id="header" class="media" style="margin-top: 0;">
    <div class="pull-left h-logo">
        <a href="https://dashboard.bebasbayar.com/" class="hidden-xs hidden-sm">
            <!--Material   -->
            <img src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/bebasbayar.png" style="height: 60px;position: absolute;margin: -15px -5px;">
            <!---<small>admin extended</small>--->
        </a>

        <div class="menu-collapse" data-ma-action="sidebar-open" data-ma-target="main-menu">
            <div class="mc-wrap">
                <div class="mcw-line top palette-White bg"></div>
                <div class="mcw-line center palette-White bg"></div>
                <div class="mcw-line bottom palette-White bg"></div>
            </div>
        </div>
    </div>
    
    <ul class="pull-right h-menu">  
        <li class="hm-search-trigger">
            <a href="#" data-ma-action="search-open">
                <i class="hm-icon zmdi zmdi-search"></i>
            </a>
        </li>
        
        <li class="dropdown">
            <a href="" id="ldab" data-toggle="dropdown" data-toggle="tooltip" data-placement="bottom" title="Unduh Aplikasi">
                <i class="hm-icon zmdi zmdi-download"></i>
            </a>
            <ul class="dropdown-menu pull-right dm-icon">
                <li>
                    <a href="https://play.google.com/store/apps/details?id=com.bm.sc.bebasbayar&" target="_blank">
                        <i class="zmdi zmdi-android"></i> Google Store</a>
                </li>
                <li>
                    <a href="https://geo.itunes.apple.com/id/app/bebasbayar/id1067827875?mt=8" target="_blank">
                        <i class="zmdi zmdi-apple"></i> App Store
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="for_livechat">
            <a href="javascript:void(0);" onclick="phplive_launch_chat_0(0)" style="color:white" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Kami siap melayani Anda." title="" data-original-title="Butuh Bantuan?">
            <!--<img class="img-livechat" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/livechat-offline.png" data-toggle="tooltip" data-placement="bottom" />-->
            <i class="hm-icon zmdi zmdi-comments"></i>
        </a>
        </li>
        
        <li class="" style="position: relative;" data-user-alert="list-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts" >
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Kotak pesan" ><i class="hm-icon zmdi zmdi-email"></i></a>
            <label class="label" style="color:white;position: absolute;right: 0;top:0;font-weight: bolder;" id="unread-messages"></label>
        </li>
        <li class="" style="position: relative;" data-user-alert="list-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Notifikasi" ><i class="hm-icon zmdi zmdi-notifications"></i></a>
            <label class="label" style="color:white;position: absolute;right: 0;top:0;font-weight: bolder;" id="unread-notifications"></label>
        </li>
        <li class="">
            <a href="javascript:void(0);" class="reload_data" data-toggle="tooltip" data-placement="bottom" title="Perbarui data" onclick="reload_data(this);">
                <i class="hm-icon zmdi zmdi-refresh-alt"></i>
            </a>
        </li>
<!--        <li class="">
            <a href="lock" class="lock" data-toggle="tooltip" data-placement="bottom" title="Kunci akun" >
                <i class="hm-icon zmdi zmdi-lock-outline"></i>
            </a>
        </li>-->
<!--        <li class="">
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Kunci akun" ><i class="hm-icon zmdi zmdi-lock-outline"></i></a>
        </li>-->
        
<!--        <li class="dropdown hidden-xs">
            <a data-toggle="dropdown" href="#"><i class="hm-icon zmdi zmdi-more-vert"></i></a>
            <ul class="dropdown-menu dm-icon pull-right">
                <li class="hidden-xs">
                    <a data-action="fullscreen" href="#"><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                </li>
                <li>
                    <a data-action="clear-localstorage" href="#"><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                </li>
                <li>
                    <a href="#"><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                </li>
                <li>
                    <a href="#"><i class="zmdi zmdi-settings"></i> Other Settings</a>
                </li>
            </ul>
        </li>-->
        <li class="dropdown hm-profile">
            <a data-toggle="dropdown" href="#">
                                    <img src="https://dashboard.bebasbayar.com/assets/img/avatar/M-adult.png" alt="">
                
            </a>

            <ul class="dropdown-menu pull-right dm-icon">
                <li>
                    <a href="lock"><i class="zmdi zmdi-lock-outline"></i> Kunci Akun</a>
                </li>
                <li>
                    <a href="https://dashboard.bebasbayar.com/account/detail"><i class="zmdi zmdi-account"></i> View Profile</a>
                </li>
                <li>
                    <a href="https://dashboard.bebasbayar.com/account/devices?to__active=tab-sosmed"><i class="zmdi zmdi-accounts"></i> Tautkan Media Sosial</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="testimoni"><i class="zmdi zmdi-comment-outline"></i> Testimoni</a>
                </li>
                <li>
                    <a href="logout"><i class="zmdi zmdi-time-restore"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
<div class="media-body h-search">
    <form class="p-relative">
        <input type="text" class="hs-input" id="header-search" autocomplete="off" placeholder="Cari layanan yang Anda inginkan ...">
        <i class="zmdi zmdi-search hs-reset" data-ma-action="search-clear"></i>
    </form>
</div>
</header>        <div class="loading" style="display: none; z-index: 9999;">
            <!--<div class="entypo-cog"></div><div class="entypo-cog"></div>-->
            <img src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/indicator.gif" style="display: block;margin: 5px auto;">
            Sedang Memproses Data
        </div>
        <section id="main">
            <div class="side-chat" style="display:none;">
                <span id="phplive_btn_1438671160" onclick="phplive_launch_chat_0(0)" style="color: #0000FF; text-decoration: underline; cursor: pointer;"></span>
            </div>
            <style>
    /*    .saldo_div{
        display: block;
        text-align: center;
        color: #FFF;
        font-size: 16px;
        margin: 15px;
    }*/

    .saldo_div {
        display: block;
        color: #FFF;
        font-size: 14px;
        margin: 0 35px;
        line-height: 2;
        text-align: center;
    }
</style>
<aside id="s-user-alerts" class="sidebar">
    <ul class="tab-nav tn-justified tn-icon m-t-10" data-tab-color="teal">
        <li><a class="list-messages" href="#list-messages" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
        <li><a class="list-notifications" href="#list-notifications" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>
        <!--<li><a class="sua-tasks" href="#sua-tasks" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a></li>-->
    </ul>

    <div class="tab-content">
        <div class="tab-pane fade" id="list-messages">

        </div>
        <div class="tab-pane fade" id="list-notifications">

        </div>

    </div>
</aside>
<aside id="s-main-menu" class="sidebar">
    <div class="smm-header">
        <i class="zmdi zmdi-long-arrow-left" data-ma-action="sidebar-close"></i>
    </div>
    
    <div class="saldo_div">
        <span style="text-transform:capitalize;">Candra Syahputra..</span> &nbsp; 
                    <i class="zmdi zmdi-star  palette-Red text"></i>
            <i class="zmdi zmdi-star  palette-Lime text"></i>
        <br>
        <!-- <div class="saldo_sidebar_div" data-step="5" data-intro="Informasi saldo Anda." style="padding: 5px 5px;background: rgba(255, 255, 255, 0.92);color: #0A74D6;font-size: 16px;font-weight: bold;"> -->
        <div class="saldo_sidebar_div" style="padding: 5px 5px;background: rgba(255, 255, 255, 0.92);color: #0A74D6;font-size: 16px;font-weight: bold;">
            <!--<b>Saldo Speedcash:</b>--> 
            <div style="text-align: center;padding-left: 15px;padding-right: 15px;">
                <img src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/speedcash.png" class="img-responsive" style="height: 45px;">
            </div>
            Rp. <span class="head-balance-line">5.666,00</span>
        </div>

    </div>
    <!--    <ul class="smm-alerts">
            <li class="active" data-user-alert="list-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts" data-toggle="tooltip" data-placement="bottom" title="Kotak pesan">
                <i class="zmdi zmdi-email"></i>
            </li>
            <li data-user-alert="list-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts" data-toggle="tooltip" data-placement="bottom" title="Notifikasi">
                <i class="zmdi zmdi-notifications"></i>
            </li>
            <li data-user-alert="sua-tasks" data-ma-action="sidebar-open" data-ma-target="user-alerts" data-toggle="tooltip" data-placement="bottom" title="Akun">
                <i class="zmdi zmdi-view-list-alt"></i>
            </li>
        </ul>-->

    <ul class="main-menu" style="  margin-top: 20px;">
        <li id="home" class="">
            <!--<a href="/"><img class="img-sidebar" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/sidebar/all/Home.png"/> Beranda</a>-->
            <a href="/"><img class="icon-bb-sidebar-home img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=">Beranda</a>
        </li>
        <li id="favorit" class="">
            <!--<a href="favorit"><img class="img-sidebar" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/sidebar/all/Menu-Favorit.png"/> Menu Favorit</a>-->
            <a href="favorit"><img class="icon-bb-sidebar-menu-favorit img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="> Menu Favorit</a>
        </li>
        
        

        <!--<li id="Deposit-Top-Up-Saldo"><a class='' href="pages/deposit"><img class="img-sidebar" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/sidebar/all/Deposti-TOP-UP-saldo.png"/>Deposit/Top Up Saldo</a></li>-->
        <li id="Deposit-Top-Up-Saldo"><a class='' href="pages/deposit"><img class="icon-bb-sidebar-deposti-top-up-saldo img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=">Deposit/Top Up Saldo</a></li>
                    <li id="Belanja">
    <!--                <a class='' href="penjualan/supplier">
                    <img class="img-sidebar" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/sidebar/all/Pembelian.png"/>Belanja                    <span class="zmdi zmdi-star palette-Orange text"></span>
                </a>-->
                <a class='' href="penjualan/supplier">
                    <img class="icon-bb-sidebar-pembelian img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=">Belanja                    <span class="zmdi zmdi-star palette-Orange text"></span>
                </a>
            </li>
        
                    <li class="sub-menu">
                <!--                <a href="#" data-ma-action="submenu-toggle">
                                    <img class="img-sidebar" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/sidebar/all/Edukasi.png"/>Edukasi                                    <span class="zmdi zmdi-star palette-Orange text"></span>
                                </a>-->
                <a href="#" data-ma-action="submenu-toggle">
                    <img class="icon-bb-sidebar-edukasi img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=">Edukasi                    <span class="zmdi zmdi-star palette-Orange text"></span>
                </a>

                <ul id="Edukasi">
                    
                        <li id="Pembelian-Buku" class=''>
                            <a href="pages/penjualan_buku">
                                <img class="img-sidebar-child icon-bb-sidebar-pembelian-buku" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                                Pembelian Buku                            </a>
                        </li>
                    
                        <li id="Pembelian-Seminar" class=''>
                            <a href="/pages/penjualan_seminar">
                                <img class="img-sidebar-child icon-bb-sidebar-pembelian-seminar" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                                Pembelian Seminar                            </a>
                        </li>
                      
                </ul>
            </li>
                <li class="sub-menu">
            <!--            <a href="#" data-ma-action="submenu-toggle">
                            <img class="img-sidebar" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/sidebar/all/Pembayaran-Tagihan.png"/>
            Pembayaran Tagihan                            <span class="zmdi zmdi-star palette-Orange text"></span>
                        </a>-->
            <a href="#" data-ma-action="submenu-toggle">
                <img class="icon-bb-sidebar-pembayaran-tagihan img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=">
                Pembayaran Tagihan                <span class="zmdi zmdi-star palette-Orange text"></span>
            </a>

            <ul id="Pembayaran-Tagihan">
                
                    <li id="Pulsa-dan-Paket-Data" class=''>
                        <a href="pages/pulsa">
                            <img class="img-sidebar-child icon-bb-sidebar-pulsa" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII"/>
                            Pulsa dan Paket Data                        </a>
                    </li>
                
                    <li id="Listrik" class=''>
                        <a href="pages/electric">
                            <img class="img-sidebar-child icon-bb-sidebar-listrik" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Listrik                        </a>
                    </li>
                
                    <li id="Voucher-Game" class=''>
                        <a href="pages/vouchergame">
                            <img class="img-sidebar-child icon-bb-sidebar-voucher-game" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Voucher Game                        </a>
                    </li>
                
                    <li id="Air" class=''>
                        <a href="pages/water">
                            <img class="img-sidebar-child icon-bb-sidebar-pdam" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Air                        </a>
                    </li>
                
                    <li id="BPJS-KS" class=''>
                        <a href="pages/insurance#BPJS-KS">
                            <img class="img-sidebar-child icon-bb-sidebar-bpjs" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            BPJS KS                        </a>
                    </li>
                
                    <li id="TV-Berlangganan" class=''>
                        <a href="pages/tvcable">
                            <img class="img-sidebar-child icon-bb-sidebar-tv-kabelo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            TV Berlangganan                        </a>
                    </li>
                
                    <li id="Speedy" class=''>
                        <a href="pages/speedy">
                            <img class="img-sidebar-child icon-bb-sidebar-speedy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Speedy                        </a>
                    </li>
                
                    <li id="Kartu-Kredit" class=''>
                        <a href="pages/creditcard">
                            <img class="img-sidebar-child icon-bb-sidebar-kartu-kredit" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Kartu Kredit                        </a>
                    </li>
                
                    <li id="Telepon-Flexi" class=''>
                        <a href="pages/phone">
                            <img class="img-sidebar-child icon-bb-sidebar-telephone" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Telepon/Flexi                        </a>
                    </li>
                
                    <li id="Asuransi" class=''>
                        <a href="pages/insurance">
                            <img class="img-sidebar-child icon-bb-sidebar-asuransi" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Asuransi                        </a>
                    </li>
                
                    <li id="Hp-Pasca-Bayar" class=''>
                        <a href="pages/pulsapasca">
                            <img class="img-sidebar-child icon-bb-sidebar-hp-pasca-bayar" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Hp Pasca Bayar                        </a>
                    </li>
                
                    <li id="Cicilan" class=''>
                        <a href="pages/multifinance">
                            <img class="img-sidebar-child icon-bb-sidebar-cicilan" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Cicilan                        </a>
                    </li>
                
                    <li id="Bayar-Pajak" class=''>
                        <a href="pages/pajak">
                            <img class="img-sidebar-child icon-bb-sidebar-pkb" src="data:image/png;base64,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"/>
                            Bayar Pajak                        </a>
                    </li>
                
                    <li id="Zakat" class=''>
                        <a href="pages/zakat">
                            <img class="img-sidebar-child icon-bb-sidebar-zakat" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Zakat                        </a>
                    </li>
                  
            </ul>
        </li>
        <li class="sub-menu">
            <!--            <a href="#" data-ma-action="submenu-toggle">
                            <img class="img-sidebar" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/sidebar/all/Ticket-&-Reservasi.png"/>Tiket dan Reservasi                            <span class="zmdi zmdi-star palette-Orange text"></span>
                        </a>-->
            <a href="#" data-ma-action="submenu-toggle">
                <img class="icon-bb-sidebar-ticket-reservasi img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=">Tiket dan Reservasi                <span class="zmdi zmdi-star palette-Orange text"></span>
            </a>

            <ul id="Tiket-dan-Reservasi">
                
                    <li id="Pesawat-Terbang" class=''>
                        <a href="pages/airplane">
                            <img class="img-sidebar-child icon-bb-sidebar-pesawat" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Pesawat Terbang                        </a>
                    </li>
                
                    <li id="Kereta-Api" class=''>
                        <a href="pages/train">
                            <img class="img-sidebar-child icon-bb-sidebar-kereta-api" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Kereta Api                        </a>
                    </li>
                
                    <li id="Cek-Kode-Booking-Pesawat" class=''>
                        <a href="pages/book">
                            <img class="img-sidebar-child icon-bb-sidebar-kode-booking-pesawat" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Cek Kode Booking Pesawat                        </a>
                    </li>
                
                    <li id="Cek-Status-Refund" class=''>
                        <a href="pages/list_refund">
                            <img class="img-sidebar-child icon-bb-sidebar-cek-status-refund" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Cek Status Refund                        </a>
                    </li>
                  
            </ul>
        </li>
        <li class="sub-menu">
            <!--            <a href="#" data-ma-action="submenu-toggle">
                            <img class="img-sidebar" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/sidebar/all/Transaksi-Keuangan.png"/>Transaksi Keuangan                            <span class="zmdi zmdi-star palette-Orange text"></span>
                        </a>-->
            <a href="#" data-ma-action="submenu-toggle">
                <img class="icon-bb-sidebar-transaksi-keuangan img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=">
                Transaksi Keuangan                <span class="zmdi zmdi-star palette-Orange text"></span>
            </a>

            <ul id="Transaksi-Keuangan">
                
                    <li id="Transfer-Antar-ID-BebasBayar" class="">
                        <a href="pages/scti">
                            <img class="img-sidebar-child icon-bb-sidebar-transfer-id-bb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Transfer Antar ID BebasBayar                        </a>
                    </li>
                
                    <li id="Transfer-Saldo-Ke-Bank" class="">
                        <a href="pages/cashout_bank">
                            <img class="img-sidebar-child icon-bb-sidebar-transfer-saldo-ke-bank" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Transfer Saldo Ke Bank                        </a>
                    </li>
                
                    <li id="Keuangan-Lain-Lain" class="menu-disabled">
                        <a href="pages/cashout_misc">
                            <img class="img-sidebar-child icon-bb-sidebar-keuangan-lain-lain" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Keuangan Lain Lain                        </a>
                    </li>
                
                    <li id="Tarik-Saldo-via-Outlet" class="menu-disabled">
                        <a href="pages/cashout_outlet">
                            <img class="img-sidebar-child icon-bb-sidebar-keuangan-lain-lain" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Tarik Saldo via Outlet                        </a>
                    </li>
                
                    <li id="Penarikan-Saldo" class="menu-disabled">
                        <a href="pages/cashout_funds">
                            <img class="img-sidebar-child icon-bb-sidebar-keuangan-lain-lain" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Penarikan Saldo                        </a>
                    </li>
                  
            </ul>
        </li>
                    <li id="Pembayaran-Otomatis" class=''>
    <!--                <a class='' href="pages/calendar">
                    <img class="img-sidebar" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/sidebar/all/Pembayaran-Otomtis.png"/>Pembayaran Otomatis                </a>-->
                <a class='' href="pages/calendar">
                    <img class="icon-bb-sidebar-pembayaran-otomtis img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=">Pembayaran Otomatis                </a>
            </li>

        
        <li class="sub-menu">
            <!--            <a href="#" data-ma-action="submenu-toggle">
                            <img class="img-sidebar" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/sidebar/all/Laporan.png"/>Laporan                        </a>-->
            <a href="#" data-ma-action="submenu-toggle">
                <img class="icon-bb-sidebar-laporan img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=">
                Laporan            </a>

            <ul id="Laporan">
                
                    <li id="Laporan-Transaksi" class=''>
                        <a href="pages/report/payment">
                            <img class="img-sidebar-child icon-bb-sidebar-laporan-transaksi" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Laporan Transaksi                        </a>
                    </li>
                
                    <li id="Mutasi-Saldo" class=''>
                        <a href="pages/report/mutation">
                            <img class="img-sidebar-child icon-bb-sidebar-mutasi-saldo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Mutasi Saldo                        </a>
                    </li>
                
                    <li id="Cashback-Transaksi" class=''>
                        <a href="pages/report/bonus_komisi_trx">
                            <img class="img-sidebar-child icon-bb-sidebar-cashback-transaksi" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Cashback Transaksi                        </a>
                    </li>
                
                    <li id="Open-Payment" class=''>
                        <a href="pages/report/open_payment">
                            <img class="img-sidebar-child icon-bb-sidebar-pembayaran-otomtis" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Open Payment                        </a>
                    </li>
                  
            </ul>
        </li>
        <li class="sub-menu">
            <!--            <a href="#" data-ma-action="submenu-toggle">
                            <img class="img-sidebar" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/sidebar/all/Akun-Saya.png"/>Akun Saya
                        </a>-->
            <a href="#" data-ma-action="submenu-toggle">
                <img class="icon-bb-sidebar-akun-saya img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=">Akun Saya
            </a>

            <ul id="Administrasi">
                
                    <li id="Detail-Akun" class=''>
                        <a href="account/detail">
                            <img class="img-sidebar-child icon-bb-sidebar-detail-akun" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Detail Akun                        </a>
                    </li>
                
                    <li id="Ganti-PIN" class=''>
                        <a href="account/pin">
                            <img class="img-sidebar-child icon-bb-sidebar-ganti-pin" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Ganti PIN                        </a>
                    </li>
                
                    <li id="Ringkasan-Akun" class=''>
                        <a href="account/summary">
                            <img class="img-sidebar-child icon-bb-sidebar-ringkasan-akun" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Ringkasan Akun                        </a>
                    </li>
                
                    <li id="Perangkat-Saya" class=''>
                        <a href="account/devices">
                            <img class="img-sidebar-child icon-bb-sidebar-devices-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDQ3MCA0NzAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDQ3MCA0NzAiIHdpZHRoPSI2NHB4IiBoZWlnaHQ9IjY0cHgiPgogIDxnPgogICAgPHBhdGggZD0iTTI1My41LDMwNi40NDRjNC4xNDMsMCw3LjUtMy4zNTgsNy41LTcuNXMtMy4zNTctNy41LTcuNS03LjVIMTYuMTEzYy0wLjU5MywwLTEuMTEzLTAuNTIxLTEuMTEzLTEuMTE0VjE2LjExNCAgIEMxNSwxNS41MjEsMTUuNTIxLDE1LDE2LjExMywxNWgzNjEuNzczYzAuNTkzLDAsMS4xMTMsMC41MjEsMS4xMTMsMS4xMTR2MTMyLjAwMWMwLDQuMTQyLDMuMzU3LDcuNSw3LjUsNy41czcuNS0zLjM1OCw3LjUtNy41ICAgVjE2LjExNEMzOTQsNy4yMjksMzg2Ljc3MSwwLDM3Ny44ODcsMEgxNi4xMTNDNy4yMjksMCwwLDcuMjI5LDAsMTYuMTE0VjI5MC4zM2MwLDguODg1LDcuMjI5LDE2LjExNCwxNi4xMTMsMTYuMTE0aDEzNS4xOTN2NDUuMjk1ICAgaC01Ny42N2MtNC4xNDMsMC03LjUsMy4zNTgtNy41LDcuNXMzLjM1Nyw3LjUsNy41LDcuNUgyNTMuNWM0LjE0MywwLDcuNS0zLjM1OCw3LjUtNy41cy0zLjM1Ny03LjUtNy41LTcuNWgtMTAuODA3di00NS4yOTVIMjUzLjV6ICAgIE0yMjcuNjkzLDM1MS43MzloLTYxLjM4N3YtNDUuMjk1aDYxLjM4N1YzNTEuNzM5eiIgZmlsbD0iIzI3ODBlMyIvPgogICAgPHBhdGggZD0ibTI1My41LDI0MC42MTRoLTIxNmMtNC4xNDMsMC03LjUsMy4zNTgtNy41LDcuNXMzLjM1Nyw3LjUgNy41LDcuNWgyMTZjNC4xNDMsMCA3LjUtMy4zNTggNy41LTcuNXMtMy4zNTctNy41LTcuNS03LjV6IiBmaWxsPSIjMjc4MGUzIi8+CiAgICA8cGF0aCBkPSJtNDUzLjg4NywxNzAuNjE0aC0xNjEuNzc0Yy04Ljg4NSwwLTE2LjExMyw3LjIyOS0xNi4xMTMsMTYuMTE0djI2Ny4xNTljMCw4Ljg4NSA3LjIyOSwxNi4xMTQgMTYuMTEzLDE2LjExNGgxNjEuNzczYzguODg1LDAgMTYuMTEzLTcuMjI5IDE2LjExMy0xNi4xMTR2LTI2Ny4xNTljMC4wMDEtOC44ODYtNy4yMjgtMTYuMTE0LTE2LjExMi0xNi4xMTR6bS0xNjIuODg3LDQ1aDE2NHYxNzkuMzg2aC0xNjR2LTE3OS4zODZ6bTEuMTEzLTMwaDE2MS43NzNjMC41OTMsMCAxLjExMywwLjUyMSAxLjExMywxLjExNHYxMy44ODZoLTE2My45OTl2LTEzLjg4NmMwLTAuNTk0IDAuNTIxLTEuMTE0IDEuMTEzLTEuMTE0em0xNjEuNzc0LDI2OS4zODZoLTE2MS43NzRjLTAuNTkzLDAtMS4xMTMtMC41MjEtMS4xMTMtMS4xMTR2LTQzLjg4NmgxNjR2NDMuODg2YzAsMC41OTMtMC41MjEsMS4xMTQtMS4xMTMsMS4xMTR6IiBmaWxsPSIjMjc4MGUzIi8+CiAgICA8cGF0aCBkPSJtMzg4LDQyNWgtMzBjLTQuMTQzLDAtNy41LDMuMzU4LTcuNSw3LjVzMy4zNTcsNy41IDcuNSw3LjVoMzBjNC4xNDMsMCA3LjUtMy4zNTggNy41LTcuNXMtMy4zNTctNy41LTcuNS03LjV6IiBmaWxsPSIjMjc4MGUzIi8+CiAgPC9nPgo8L3N2Zz4K"/>
                            Perangkat Saya                        </a>
                    </li>
                
                    <li id="QR-Code" class=''>
                        <a href="account/my_qrcode">
                            <img class="img-sidebar-child icon-bb-sidebar-devices-icon" src="data:image/png;base64,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"/>
                            QR Code                        </a>
                    </li>
                
                    <li id="Poin" class=''>
                        <a href="account/reward_point">
                            <img class="img-sidebar-child icon-bb-sidebar-points-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABAAQMAAACQp+OdAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA9JREFUeNpjYBgFo4B8AAACQAAB4E0dRAAAAABJRU5ErkJggg=="/>
                            Poin                        </a>
                    </li>
                
                    <li id="Tukarkan-Voucher" class=''>
                        <a href="account/voucher">
                            <img class="img-sidebar-child icon-bb-sidebar-tukarkan-voucher" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Tukarkan Voucher                        </a>
                    </li>
                
                    <li id="Riwayat-Pembelian" class=''>
                        <a href="/pages/riwayat_pembelian">
                            <img class="img-sidebar-child icon-bb-sidebar-riwayat-pembelian" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                            Riwayat Pembelian                        </a>
                    </li>
                  
            </ul>
        </li>
                    <li class="sub-menu">
                <a href="#" data-ma-action="submenu-toggle">
                    <img class="icon-bb-sidebar-pesan-kotak-masuk img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=">
                    Pesan/Kotak Masuk                </a>

                <ul id="Pesan-Kotak-Masuk">
                    
                        <li id="Komplain" class=''>
                            <a href="/mailbox/komplain">
                                <img class="img-sidebar-child icon-bb-sidebar-komplain" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                                Komplain                            </a>
                        </li>
                    
                        <li id="Pesan-Antar-Member" class=''>
                            <a href="/mailbox">
                                <img class="img-sidebar-child icon-bb-sidebar-pesan-antar-pesan" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                                Pesan Antar Member                            </a>
                        </li>
                      
                </ul>
            </li>
                            <li class="sub-menu">
                <!--                <a href="#" data-ma-action="submenu-toggle">
                                    <img class="img-sidebar" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/sidebar/all/Info-Layanan.png"/>
                Info Layanan                                </a>-->
                <a href="#" data-ma-action="submenu-toggle">
                    <img class="icon-bb-sidebar-info-layanan img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=">
                    Info Layanan                </a>

                <ul id="Info-Layanan">
                    
                        <li id="Info-Cashback-Transaksi" class=''>
                            <a href="/pages/cashback_transaksi">
                                <img class="img-sidebar-child icon-bb-sidebar-info-cashback-transaksi" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                                Info Cashback Transaksi                            </a>
                        </li>
                    
                        <li id="Info-Transaksi-via-Text" class=''>
                            <a href="/pages/list_produk">
                                <img class="img-sidebar-child icon-bb-sidebar-info-transaksi-via-text" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                                Info Transaksi via Text                            </a>
                        </li>
                    
                        <li id="Info-Harga-Pulsa-Game" class=''>
                            <a href="/pages/harga_pulsa_game">
                                <img class="img-sidebar-child icon-bb-sidebar-info-harga-pulsa-via-game" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                                Info Harga Pulsa Game                            </a>
                        </li>
                    
                        <li id="Info-Perolehan-Poin" class=''>
                            <a href="/pages/perolehan_poin">
                                <img class="img-sidebar-child icon-bb-sidebar-info-cashback-transaksi" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII="/>
                                Info Perolehan Poin                            </a>
                        </li>
                      
                </ul>
            </li>
        

        <li id="Kontak-Kami" class=''>
<!--            <a class='' href="help/contact">
                <img class="img-sidebar" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/sidebar/all/Kontak-Kami.png"/>Kontak Kami            </a>-->
            <a class='' href="help/contact">
                <img class="icon-bb-sidebar-kontak-kami img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=">Kontak Kami            </a>
        </li>
        <li id="Pusat-Bantuan" class=''>
<!--            <a class='' target="_blank" href="http://panduan.bebasbayar.com/">
                <img class="img-sidebar" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/sidebar/all/Pusat-Bantuan.png"/>Pusat Bantuan            </a>-->
            <a class='' target="_blank" href="http://panduan.bebasbayar.com/">
                <img class="icon-bb-sidebar-pusat-bantuan img-sidebar" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=">Pusat Bantuan            </a>
        </li>

        

    </ul>
</aside>
            <section id="content">
                <script src="https://dashboard.bebasbayar.com/assets/css/select2/select2.min.js"></script>
                
<style>
    .small-box > .inner {
        width: 100%;
        display: table; 
        vertical-align: middle;
        text-align: center;
    }

    .small-box > .inner > .sub-inner {
        height: 75px; 
        vertical-align: middle;
        display: table-cell;
    }

    .small-box > .inner > .sub-inner > img {
        max-width: 100%;
        max-height: 100%;
        opacity: 1;
    }

    .small-box-footer {
        /*white-space: nowrap;*/
        text-overflow: ellipsis;
        overflow: hidden;
        font-size: 14px;
        color: #000;
        padding-top: 6px;
        display: block;
        height: 44px;
    }



    .bg-white {
        background: white;
        /*border: 1px solid rgba(0, 67, 208, 0.3);*/
        border: solid 1px #DEDEDE;
    }

    .bg-white > .small-box-footer {
        background: transparent;
        color: #1f1f1f;
    }

    .bg-white:hover,
    .bg-white:hover > .small-box-footer{
        background: rgba(0, 208, 80, 0.1) !important;
        font-weight: bold;
        color: #1f1f1f;
    }

    .bg-white.inactive,
    .bg-white.inactive > .small-box-footer{
        pointer-events: none;
    }

    .bg-white.inactive{
        background: rgba(230, 230, 230, 0.2) !important;
        border: 1px solid rgba(230, 230, 230, 0.7);
    }

    .bg-white.inactive > .small-box-footer{
        background: lightgray !important;
    }

    .bg-white.inactive img {
        opacity: 0.3;
    }
    .gradient-green-yellow{
        background: -webkit-linear-gradient(greenyellow, green);
        background: -o-linear-gradient(greenyellow, green);
        background: -moz-linear-gradient(greenyellow, green);
        background: linear-gradient(greenyellow, green);
        color: whitesmoke;
        font-weight: bold;
    }
    .grid_yolo{
        padding: 10px;
        border: solid 1px #DEDEDE;
        text-align: center;
        line-height: 20px;
        cursor: pointer;

    }
    .grid_yolo i{
        font-size: 20px;
        margin-right: 10px;
        position: relative;
        top: 3px;

    }
    .grid_home_menu{
        border: solid 1px #DEDEDE;
    }
    .grid_yolo:hover, .grid_home_menu:hover{
        box-shadow: 0 2px 5px rgba(0,0,0,.16),0 2px 10px rgba(0,0,0,.12);
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }
    .grid_yolo img{
        /*font-size: 20px;*/
        margin-right: 10px;
        position: relative;
        width: 32px;
        /*top: 3px;*/
    }
    .grid_yolo label{
        font-size: 14px;
    }

    .white {
        color: #FFF;
    }
    .c-pointer {
        cursor: pointer;
    }
    .pd-3 {
        padding: 3px;
    }
    .mb-5{
        margin-bottom: 5px;
    }
    .pdb-17 {
        padding-bottom: 17px;
    }
    .mb-20{
        margin-bottom: 20px;
    }
    .bb-supplier {
        width: 25% !important;
        padding-right: 0;
        padding-top: 15px;
    }
    #list-belanja .shop-content {
        overflow-x: hidden;
        white-space: normal !important;
        width: 100%;
    }

    .forward{
        float: right;
        font-size: 19.5px;
        font-weight: bold;
        line-height: 1;
        color: #000000;
        text-shadow: 0 1px 0 #ffffff;
        opacity: 0.2;
        filter: alpha(opacity=20);

        position: relative;
        top: -2px;
        right: -21px;
        color: inherit;

        padding: 0;
        cursor: pointer;
        background: transparent;
        border: 0;
        -webkit-appearance: none;
    }
</style>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header clearfix palette-Blue-400 bg">
                    <h2 class="white">Selamat Datang
                    </h2>
                    <ol class="breadcrumb">
                        <li class="active"> {{ Auth::user()->name }}</li>
                        <li class="active"> {{ Auth::user()->nohp }}</li>
                    </ol>
                    

                    <ul class="actions">
                        <li>
                            <a href="javascript:void(0);" onclick="javascript:introJs().setOption('showBullets', false).start();" >
                                <i class="zmdi zmdi-help-outline"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="card-body card-padding" >
                    <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Saldo Anda</h5>
                              <p class="card-text">Rp. </p>
                              <a href="#" class="btn btn-primary">TOPUP</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Bonus Anda</h5>
                              <p class="card-text">Rp. </p>
                              <a href="#" class="btn btn-primary">CAIRKAN</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="row m-t-25" id="bb-tips"></div>
                    <div class="row" id="list-belanja"></div>
                    <!-- <div class="row m-t-25" data-step="1" data-intro="Manfaatkan jalan pintas untuk menuju layanan yang Anda inginkan." data-position="right"> -->
                    <div class="row m-t-25">
                        <!--                        <div class="col-md-6 m-b-15" style="padding: 3px;">
                                                    <div class="grid_yolo" onclick="window.location.href = 'pages/airplane'">
                                                        <i class="zmdi zmdi-airplane"></i>
                                                        <img src="assets/img/aeroplane.png">
                                                        <label>Beli Tiket Pesawat</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 m-b-15" style="padding: 3px;" onclick="window.location.href = 'pages/train'">
                                                    <div class="grid_yolo">
                                                        <i class="zmdi zmdi-railway"></i>
                                                        <img src="assets/img/train-outline.png">
                                                        <label>Beli Tiket Kereta Api</label>
                                                    </div>
                                                </div>-->
                        <div class="col-xs-3 box-favorit-defined c-pointer pd-3">
                            <div class="small-box bs-item grid_home_menu mb-5"
                                 data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PENGAMBILAN TIKET DEPOSIT">
                                <div class="inner">
                                    <div class="text-center sub-inner" onclick="location.href = 'pages/deposit?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=deposit&utm_campaign=mudah dari suggestion'">
                                        <!--<img src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/home/deposit.png" onclick="location.href = 'pages/deposit'"/>-->
                                        <img class="img-home-deposit" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/deposit'">
                                    </div>
                                </div>
                                <a href="pages/deposit?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=deposit&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                    Tambah Saldo
                                </a>
                            </div>
                        </div>

                                                        <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBELIAN PAKET DATA SEMUA OPERATOR">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/pulsa?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Paket Data Internet&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-paket-data" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/pulsa'"/>
                                            </div>
                                        </div>
                                        <a href="pages/pulsa?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Paket Data Internet&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Paket Data Internet                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBELIAN PULSA REGULER SEMUA OPERATOR">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/pulsa?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Pulsa Reguler&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-pulsa" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/pulsa'"/>
                                            </div>
                                        </div>
                                        <a href="pages/pulsa?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Pulsa Reguler&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Pulsa Reguler                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBAYARAN TAGIHAN RUTIN BULANAN">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/electric?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Listrik&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-pln" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/electric'"/>
                                            </div>
                                        </div>
                                        <a href="pages/electric?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Listrik&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Listrik                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBELIAN TIKET PESAWAT TERBANG">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/airplane?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Pesawat&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-tiket-pesawat" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/airplane'"/>
                                            </div>
                                        </div>
                                        <a href="pages/airplane?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Pesawat&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Pesawat                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBELIAN TIKET KERETA API">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/train?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Kereta Api&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-kereta-api" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/train'"/>
                                            </div>
                                        </div>
                                        <a href="pages/train?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Kereta Api&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Kereta Api                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBELIAN VOUCHER GAME ONLINE">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/vouchergame?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Voucher Game&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-game" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/vouchergame'"/>
                                            </div>
                                        </div>
                                        <a href="pages/vouchergame?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Voucher Game&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Voucher Game                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBAYARAN TAGIHAN AIR (PDAM)">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/water?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Air&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-pdam" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/water'"/>
                                            </div>
                                        </div>
                                        <a href="pages/water?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Air&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Air                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBAYARAN BPJS KESEHATAN">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/insurance#BPJS-KS?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=BPJS KS&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-bpjs" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/insurance#BPJS-KS'"/>
                                            </div>
                                        </div>
                                        <a href="pages/insurance#BPJS-KS?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=BPJS KS&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        BPJS KS                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBAYARAN TAGIHAN TV BERLANGGANAN">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/tvcable?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=TV Kabel&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-tv-kabel" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/tvcable'"/>
                                            </div>
                                        </div>
                                        <a href="pages/tvcable?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=TV Kabel&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        TV Kabel                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="BELANJA">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'penjualan/supplier?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Belanja&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-pembelian" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'penjualan/supplier'"/>
                                            </div>
                                        </div>
                                        <a href="penjualan/supplier?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Belanja&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Belanja                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="EDUKASI">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/penjualan_buku?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Pembelian Buku&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-edukasi" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/penjualan_buku'"/>
                                            </div>
                                        </div>
                                        <a href="pages/penjualan_buku?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Pembelian Buku&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Edukasi                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBAYARAN TAGIHAN SPEEDY">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/speedy?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Speedy&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-speeady" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/speedy'"/>
                                            </div>
                                        </div>
                                        <a href="pages/speedy?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Speedy&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Speedy                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBAYARAN TAGIHAN KARTU KREDIT">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/creditcard?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Kartu Kredit&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-kartu-kredit" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/creditcard'"/>
                                            </div>
                                        </div>
                                        <a href="pages/creditcard?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Kartu Kredit&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Kartu Kredit                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBAYARAN TAGIHAN TELEPON BERLANGGANAN">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/phone?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Telepon/Flexi&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-telkom" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/phone'"/>
                                            </div>
                                        </div>
                                        <a href="pages/phone?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Telepon/Flexi&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Telepon/Flexi                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBELIAN PRODUK ASURANSI">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/insurance?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Asuransi&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-asuransi" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/insurance'"/>
                                            </div>
                                        </div>
                                        <a href="pages/insurance?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Asuransi&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Asuransi                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="TRANSFER SALDO ANTAR PENGGUNA BEBASBAYAR">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/scti?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Transfer&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-transfer-saldo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/scti'"/>
                                            </div>
                                        </div>
                                        <a href="pages/scti?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Transfer&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Transfer                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="TARIK SALDO KE REKENING BANK">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/cashout_bank?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Transfer ke Rekening Bank&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-tarik-tunai" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/cashout_bank'"/>
                                            </div>
                                        </div>
                                        <a href="pages/cashout_bank?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Transfer ke Rekening Bank&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Transfer ke Rekening Bank                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PENGATURAN PEMBAYARAN OTOMATIS">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/calendar?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Bayar Otomatis&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-autobayar" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/calendar'"/>
                                            </div>
                                        </div>
                                        <a href="pages/calendar?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Bayar Otomatis&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Bayar Otomatis                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBAYARAN TAGIHAN HP BERLANGGANAN">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/pulsapasca?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Pascabayar&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-pascabayar" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/pulsapasca'"/>
                                            </div>
                                        </div>
                                        <a href="pages/pulsapasca?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Pascabayar&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Pascabayar                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBAYARAN CICILAN BULANAN">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/multifinance?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Cicilan&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-cicilan" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/multifinance'"/>
                                            </div>
                                        </div>
                                        <a href="pages/multifinance?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Cicilan&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Cicilan                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="KOTAK PESAN ANTAR PENGGGUNA BEBASBAYAR">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = '/mailbox?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Pesan Antar Member&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-inbox" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = '/mailbox'"/>
                                            </div>
                                        </div>
                                        <a href="/mailbox?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Pesan Antar Member&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Pesan Antar Member                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBAYARAN PAJAK">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/pajak?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Bayar Pajak&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-pkb" src="data:image/png;base64,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" onclick="location.href = 'pages/pajak'"/>
                                            </div>
                                        </div>
                                        <a href="pages/pajak?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Bayar Pajak&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Bayar Pajak                                        </a>
                                    </div>
                                </div>
                                                                <div class="col-xs-3 box-favorit-defined c-pointer pd-3"  >
                                                                        <div class="small-box bs-item grid_home_menu mb-5 "
                                         data-trigger="hover focus" data-toggle="tooltip" data-placement="bottom" title="PEMBAYARAN ZAKAT">
                                        <div class="inner">
                                            <div class="text-center sub-inner" onclick="location.href = 'pages/zakat?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Zakat&utm_campaign=mudah dari suggestion'">
                                                <img class="img-home-zakat" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQMAAABoEv5EAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAA4NcAEsAAAcw7WmwAAAAASUVORK5CYII=" onclick="location.href = 'pages/zakat'"/>
                                            </div>
                                        </div>
                                        <a href="pages/zakat?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=Zakat&utm_campaign=mudah dari suggestion" class="small-box-footer border-radius-bottom-5" >
                                                                                        Zakat                                        </a>
                                    </div>
                                </div>
                                                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
    <!-- <div class="card" data-step="2" data-intro="Pantau dan nikmati promo spesial dari BebasBayar."> -->
    
    
    <!-- <div class="card" data-step="3" data-intro="Ingin beli pulsa? kini Anda dengan sangat mudah dan cepat untuk melakukan transaksi pulsa."> -->
<script>
    $(document).ready(function() {
        //transaksi pulsa
        $("#beli_pulsa").on("click", function() {
            var notelp = $("#no_telp_pulsa").val();
            if(notelp[0] == "6" && notelp[1] == "2")
                notelp = "0"+notelp.slice(2);
            window.open("pages/pulsa/?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=pulsa&utm_campaign=mudah dari suggestion#" + notelp, '_blank');
            return false;
        });

    });
</script>    <link href="https://dashboard.bebasbayar.com/assets/css/bootstrap-tokenfield.min.css" rel="stylesheet" type="text/css" />
<link href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<!-- <div class="card" data-step="4" data-intro="BebasBayar ingin memanjakan Anda dalam kemudahan bertransaksi. Ingin beli atau membayar tagihan listrik cukup isikan nomor pelanggan di sini." data-position="left"> -->
            <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-3">
                <form role="form" method="POST" id="plnnon-form" autocomplete="off">
<!--                                <input type="hidden" id="mode_non" name="mode_non" value="INQ">
                    <input type="hidden" id="reff_id_non" name="reff_id_non" value="">
                    <input type="hidden" id="amount_non" name="amount_non" value=""/>
                    <input type="hidden" id="kode_produk_non" name="kode_produk_non" value="PLNNON">-->
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/bootstrap-tokenfield.min.js"></script>
<script type="text/javascript" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/jquery.formatCurrency.js"></script>

<script>
    $(document).ready(function() {

        $("#src_nominal").selectpicker();
        //transaksi listrik
        $(function() {
            initiate_first("#comp_nomor_pelanggan_pasc", "#nomor_pelanggan_pasc", "PLNPASC", "1", "numeric");
            initiate_first("#comp_nomor_pelanggan_non", "#nomor_pelanggan_non", "PLNNON", "1", "numeric");
            initiate_first("#comp_nomor_pelanggan_pra", "#nomor_pelanggan_pra", "PLNPRA", "1", "numeric");
        });

        $("#beli_pasc").on("click", function() {
            var no = $("#nomor_pelanggan_pasc").val();
            if ($.trim(no) == "") {
                bb_alert("Mohon isikan nomer pelanggan PLN Pascabayar terlebih dahulu", "warning");
            } else {
                window.open("pages/electric/?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=listrik-pascabayar&utm_campaign=mudah dari suggestion#PASC#" + no, '_blank');
                reset_pln('pasc');
            }

            return false;
        });
        $("#beli_pra").on("click", function() {
            var no = $("#nomor_pelanggan_pra").val();
            var nominal = $("#src_nominal").val();
            
            if ($.trim(no) == "") {
                bb_alert("Mohon isikan nomer pelanggan PLN Prabayar terlebih dahulu", "warning");
            } else {
                window.open("pages/electric/?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=listrik-prabayar-token&utm_campaign=mudah dari suggestion#PRA#" + no + '#' + nominal, '_blank');
                reset_pln('pra');
            }
            
            return false;
        });
        $("#beli_non").on("click", function() {
            var no = $("#nomor_pelanggan_non").val();
            
            if ($.trim(no) == "") {
                bb_alert("Mohon isikan nomer pelanggan PLN Non Tagihan terlebih dahulu", "warning");
            } else {
                window.open("pages/electric/?utm_source=bblanding_sugestion&utm_medium=suggest&utm_content=listrik-non-tagihan&utm_campaign=mudah dari suggestion#NON#" + no, '_blank');
                reset_pln('non');
            }
            
            return false;
        });
    });
</script>

<script type="text/javascript" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/ubp.js"></script>
<script type="text/javascript" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/bootstrap-tokenfield.min.js"></script>    <div class="card">
    </div>

</div>
<script type="text/javascript">
    window.addEventListener('DOMContentLoaded', function () {
        $(function () {
            $.getJSON('/routine/promo', function (r) {
                if (!r.error) {
                    $(r.result).each(function (id, v) {
                        var d = $('<div>', {class: 'item'}).bind('click', function () {
                            window.open('pages/promo', '_blank');
                        }),
                                i = $('<img>', {src: v.url_image});
                        if (id == 0)
                            d.addClass('active');
                        $('#list-promo').append(d.append(i));
                    });
                }
            });

            $.getJSON('/routine/news', function (r) {
//            if (!r.error) {
                $(r.result).each(function (id, v) {
                    var a = $('<a>', {
                        href: 'javascript:void(0);',
                        class: 'list-group-item media',
                        'data-content': v.message.replace("'", '')
                    }).bind('click', function () {
                        show_modals(v.url_image, v.description, this);
                    }),
                            i = $('<div>', {class: 'pull-left'}).append($('<img>', {src: v.url_image}).css('width', '50px')),
                            b = $('<div>', {class: 'media-body'})
                            .append($('<div>', {class: 'lgi-heading'}).html(v.description))
                            .append($('<small>', {class: 'lgi-text'}).html($("<div/>").html(v.message).text().substr(0, 100)));
                    $('#list-news').prepend(a.append(i).append(b));
                });
//            }
            });
        });

    });
</script>

    </div>
</div>
<div id="bb-broadcast-news-modal" class="modal fade in" aria-hidden="false">
    <!--<div class="modal-backdrop fade in" style="height: 426px;"></div>-->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                    <i class="fa fa-times-circle-o"></i>
                </button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button data-dismiss="modal" aria-label="Close" class="btn btn-warning pull-left">
                    <i class="fa fa-times-circle-o"></i>&nbsp;Tutup
                </button>
            </div>
        </div>
    </div>
</div>
<div id="bb-broadcast-news-modal-1" class="modal fade in" aria-hidden="false">
    <!--<div class="modal-backdrop fade in" style="height: 426px;"></div>-->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                    <i class="fa fa-times-circle-o"></i>
                </button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button data-dismiss="modal" aria-label="Close" class="btn btn-warning pull-left">
                    <i class="fa fa-times-circle-o"></i>&nbsp;Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<div id="bb-broadcast-news-modal-2" class="modal fade in" aria-hidden="false">
    <!--<div class="modal-backdrop fade in" style="height: 426px;"></div>-->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                    <i class="fa fa-times-circle-o"></i>
                </button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button data-dismiss="modal" aria-label="Close" class="btn btn-warning pull-left">
                    <i class="fa fa-times-circle-o"></i>&nbsp;Tutup
                </button>
            </div>
        </div>
    </div>
</div>
<div id="bb-broadcast-news-modal-3" class="modal fade in" aria-hidden="false">
    <!--<div class="modal-backdrop fade in" style="height: 426px;"></div>-->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                    <i class="fa fa-times-circle-o"></i>
                </button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button data-dismiss="modal" aria-label="Close" class="btn btn-warning pull-left">
                    <i class="fa fa-times-circle-o"></i>&nbsp;Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.addEventListener('DOMContentLoaded', function () {
        function showModal(title, content) {
            $('#preview-modal .modal-title').empty();
            $('#preview-modal .modal-title').append("<strong>" + title + "</strong>");
            $('#preview-modal .modal-body').empty();
            $('#preview-modal .modal-body').removeClass("text-center");
            $('#preview-modal .modal-body').append("<span class='pre-white'>" + content + "</span>");
            $('#preview-modal').modal('show');
        }
        $("#home").addClass("active");
        function show_modals(img, title, elm) {
            var isi = $(elm).data("content");
//        var encodedUrl = decodeURI(isi);
//        console.log(encodedUrl);
            $("#bb-broadcast-news-modal h4.modal-title").html('');
            $("#bb-broadcast-news-modal div.modal-body").empty();
//        $("#bb-broadcast-news-modal div.modal-body").append(
//                $("<div>").css({"word-break": "break-word", "word-wrap": "break-word"}));
            var content = '<img src="' + img + '" class="img-responsive" style="width:100%"><h4>' + title + '</h4><p class="asu">' + isi + '</p>';
            $("#bb-broadcast-news-modal div.modal-body").html(content);
            $("#bb-broadcast-news-modal").modal("show");
        }

        function show_deposit(konten) {
            $("#bb-broadcast-news-modal div.modal-content").css({"width": "50%", "margin": "0 auto"});
            $("#bb-broadcast-news-modal h4.modal-title").html('');
            $("#bb-broadcast-news-modal div.modal-body").empty();
            $("#bb-broadcast-news-modal .modal-footer").html('');
            $("#bb-broadcast-news-modal div.modal-body").html(konten);
            $("#bb-broadcast-news-modal").modal("show");

        }

        function show_popup_news(data) {
            // console.log(data);
            var content = '';
            var i = 1;
            $.each(data.result, function (key, val) {
                content = '<a href="' + val.url_link + '" target="_blank"><img src="' + val.url_image + '" class="img-responsive" style="width:100%"></a>';
                $("#bb-broadcast-news-modal-" + i + " h4.modal-title").html('');
                $("#bb-broadcast-news-modal-" + i + " div.modal-body").empty();
                $("#bb-broadcast-news-modal-" + i + " div.modal-body").html(content);
                $("#bb-broadcast-news-modal-" + i + " .modal-footer").html('');
                $("#bb-broadcast-news-modal-" + i).modal("show");
                i = i + 1;
            });
        }

        $(function () {
            $.getJSON("/edukasi/get_supplier_tag", {tag: "belanja"}, function (r) {
                if (!r.error) {
                    var w = $("#list-belanja");
                    var id = 'shop-' + r.data[0].nama.replace(/\W+/g, '-'), g = '/penjualan/tipe/' + r.data[0].id + '-' + r.data[0].nama.replace(/\W+/g, '-') + "?utm_source=bb_shop&utm_medium=tipe&utm_campaign=produk " + r.data[0].nama;
                    $('<div>', {class: 'bb-shop'})
//                            .append($('<h4>', {class: 'shop-ttl',style:'margin-left:4px;font-weight: bold;'}).text('Belanja Barang'))
                            .append($('<h4>', {class: 'shop-title', style: 'margin-left:4px;font-weight: bold;'}).text('Belanja Barang')
                                    .append($('<a>', {href: g, class: 'shop-more pull-right', title: 'Lihat semua barang di ' + r.data[0].nama}).html('Selengkapnya'))
                                    )
                            .append($('<div>', {class: 'shop-content', id: id, 'data-type': r.data[0].id, 'data-view': r.data[0].view_type}))
                            .append($('<hr>', {style: 'margin-top: 19px;border-top: solid 3px #DEDEDE;clear: both;'}))
                            .appendTo(w);
                }
            }).done(function () {
                $('.bb-shop .shop-content').getBelanja({page: 1, tipe: $('.bb-shop .shop-content').data('type'), limit: 8});
                $.when.apply(null, ab).done(function (e) {
                    console.log('done');
                });
            });

            $.getJSON('/routine/news/1', function (data) {
                if (data.result != null) {
                    var cookie = getCookie("popupNews");
                    if (cookie != 1) {
                        show_popup_news(data);
                        document.cookie = "popupNews=1";
                    }
                }
            });

            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }

            $.getJSON('/routine/tips', function (r) {
                if (!r.error) {
                    $('#bb-tips').append(r.result);
                }
            });
            sync_contact_mautic();
        });

        $.getJSON('account/suggestion', {
        }, function (data) {
            if (data.error === false) {
                for (var i = 0; i < data.data.length; i++) {
                    var suggestion = '';
                    for (var key in data.data[i]) {
                        if (data.data[i].hasOwnProperty(key)) {
                            suggestion = data.data[i][key][0].suggestion
                        }
                    }
                    if (suggestion != '') {
                        var div_alert = '<div class="alert alert-warning alert-dismissible" role="alert" style="background-color:#FFF0B2; color: #000;position: relative;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><img src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/img/home/deposit.png" class="img-responsive" style="width: 20px;float: left;"><p style="font-size: 14px;margin-left: 40px;">' + suggestion + '</p></div>';
                        $('#bb-tips').append(div_alert);
                    }
                }
            }
        });
    });
</script>
<script type="text/javascript" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/ubp.js" defer></script>
<script type="text/javascript" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/jquery-ui.min.js" ></script>
<script type="text/javascript" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/bootstrap-tokenfield.min.js" ></script>

<!--<script type="text/javascript" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/jquery.formatCurrency.js" defer></script>-->
<!--<script type="text/javascript" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/jquery-ui.min.js" defer></script>-->
<!--<script type="text/javascript" src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/jquery.mCustomScrollbar.concat.min.js" defer></script>-->
<script type="text/javascript" src="https://dashboard.bebasbayar.com/assets/js/penjualan_barang.js"></script>
<noscript id="deferred-styles">
<!--<link href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css" />-->
<link href="https://dashboard.bebasbayar.com/assets/css/edukasi.css" rel="stylesheet" type="text/css" />
<!--<link href="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/jquery.mCustomScrollbar.min.css" rel="stylesheet" type="text/css" />-->
</noscript>
<script>
    var loadDeferredStyles = function () {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
    };
    var raf = requestAnimationFrame || mozRequestAnimationFrame ||
            webkitRequestAnimationFrame || msRequestAnimationFrame;
    if (raf)
        raf(function () {
            window.setTimeout(loadDeferredStyles, 0);
        });
    else
        window.addEventListener('load', loadDeferredStyles);
</script>
                <div class="bb-growl-wrapper"></div>
            </section>
        </section>




        <footer id="footer">
            <span class='bb-brand'><span class='span-first'>Bebas</span><span class='span-second'>Bayar</span></span> &copy; 2014-2019, PT. Bimasakti Multi Sinergi
            <br>
            <span class='bb-brand'>Powered By: <span class='span-first'>Speed</span><span class='span-second'>Cash</span></span>
        </footer>

        <div class="modal fade" id="bb-general-modal" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class='fa fa-times-circle-o'></i>
                        </button>
                        <h4 class="modal-title">Judul</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer"></div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div class="modal fade" id="bb-news-modal" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class='fa fa-times-circle-o'></i>
                        </button>
                        <h4 class="modal-title" id="bb-news-modal-title">Judul</h4>
                    </div>
                    <div class="modal-body">
                        <div id="bb-news-modal-loading" class="text-center">
                            <i class="fa fa-4x fa-spinner fa-pulse"></i>
                        </div>
                        <div id="bb-news-modal-content"></div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <div id="preview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times-circle-o"></i>
                        </button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body text-center"></div>
                </div>
            </div>
        </div>
        <div id="cancel-book-modal" class="modal modal-warning">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Pembatalan Booking</h4>
                    </div>
                    <div class="modal-body">
                        <p>Silahkan isi alasan pembatalan pada form berikut:</p>
                        <textarea name="reason" placeholder="Alasan" class="form-control" maxlength="255" rows="7" style="resize: none;"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn pull-left waves-effect pallete-White btn-default wafev-effect" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-warning btn-cancel waves-effect">Batalkan</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <div id="bb-downtime" class="wrapper" style="display: none;">
            <div style="background: lightblue; padding: 12px; color: red; text-align: center; font-weight: bold; font-size: 13px">
                Untuk lebih meningkatkan kualitas layanan, akan dilakukan maintenance pada semua layanan BebasBayar dan SpeedCash.<br>
                Hari/Tanggal : Senin, 7 Desember 2015<br>
                Pukul : 22.00 – 00.30<br>
                Layanan Pelanggan tetap tersedia di 0274-4580333 atau 082226657999.
            </div>
        </div>

                <div class="modal fade" data-backdrop="static" data-keyboard="false" id="modal_verifikasi_pin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="javascript:location.href='https://dashboard.bebasbayar.com/'">×</button>
                        <h4 class="modal-title">Info</h4>
                    </div>
                    <div class="modal-body">
                        <form  role="form" method="POST" action="" id="form-verifikasi-pin" autocomplete="off" class="submit-form m-t-25">

                            <div class="row">
                                <div class="col-md-4">
                                    <img src="https://dashboard.bebasbayar.com/assets/img/error/cling.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-8">
                                    <div class="alert alert-info bg-light-blue fs-black">
                                        <p>Sebelum Anda dapat bertransaksi di BebasBayar, silakan masukkan PIN BebasBayar Anda.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group fg-float">
                                                <div class="fg-line">
                                                    <input type="password" class="form-control fg-input input-credential numericIt" name="pin-verifikasi" id="pin-verifikasi" data-toggle='tooltip' data-placement='top' title='Isikan PIN Anda, lalu tekan tombol Verifikasi' autocomplete="off" maxlength="6" required pattern="[0-9]{6}">
                                                    <label class="fg-label">PIN</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <button class="btn btn-success btn-block waves-effect" type="submit" data-toggle='tooltip' data-placement='top' title='Kilk untuk melakukan verifikasi PIN Anda'><i class="fa fa fa-dot-circle-o"></i> Verifikasi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <div style="text-align: left; font-size: 11px;">
                            Lupa PIN? Silahkan kirim SMS dengan ketik <b>"RESET"</b> kirim ke nomor SMS Center kami <b>082244823999</b>, <b>087759011112</b> atau <b>085606527999</b> (kirim dengan menggunakan Nomor HP yang terdaftar)
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .search-result { list-style-type: none;background: white;padding: 8px;position: absolute;z-index: 2;display: none; border-radius: 2px; box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5); border: 1px solid rgba(0, 0, 0, 0.1); }
            .search-result li a { cursor: pointer; }
            .search-result li { padding: 4px; }
            .search-result li.active { background: #eaeaea; }
            .search-result li:not(:last-of-type) { border-bottom: 1px solid gray; padding-bottom: 6px; }
            .search-result li:not(:first-of-type) { margin-top: 7px; }
            .search-result li a img { width: 20px; margin-right: 8px; }
        </style>
        <ul class="search-result" style="">
            <li>
            </li>
        </ul>

        <!--<script src="https://dashboard.bebasbayar.com/assets/js/jquery.min.js" type="text/javascript"></script>-->
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/bootstrap-growl.min.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/css/select2/select2.min.js"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/bootbox.min.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/waves.min.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/salvattore.min.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/bootstrap-growl.min.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/autosize.min.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/functions.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/actions.js" type="text/javascript"></script>

        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/bootstrap-select.js"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/jquery.ba-throttle-debounce.min.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/bootstrap-slider.min.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/dist/js/app.min.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/mobile_check.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/sweetalert2.min.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/intro.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/app.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/show_walkthrough.js" type="text/javascript"></script>
        <script src="https://static-gc2.bebasbayar.com/bbdashboard2/assets/js/show_dynamic_content.js" type="text/javascript"></script>
        <style type="text/css">
            .remove-pre{
                background-color:white !important;
                border:0px !important;
                font-family: 'Source Sans Pro',sans-serif !important;
                color:black !important;
                white-space: pre-wrap;
                word-break: normal;
            }
            .ui-front {
                z-index: 999;
            }

        </style>

        <style>
            .white {
                color: #FFF;
            }
            .bg-light-blue {
                background: #CEE5F7;
            }
            .fs-black {
                color: black;
            }
            .pd-6-50 {
                padding: 6px 50px;
            }
            .mb-0 {
                margin-bottom: 0px;
            }
            .text-right {
                text-align: right;
            }
            .text-left {
                text-align: left;
            }
            .fw-bold {
                font-weight: bold;
            }
            .mt-10 {
                margin-top: 10px; 
            }
            .w-80p {
                width: 80%;
            }
            .bg-red {
                background-color: #eee;
            }
            .fs-black {
                color: #000;
            }
            .mt-20 {
                margin-top: 20px;
            }
        </style>

        <script type="text/javascript">



            $(document).ready(function () {

                get_notification();
                setInterval(function () {
                    get_notification();
                    get_access_privileges();


                }, 180000);

                setInterval(function () {
                    livechatStatus();
                }, 5000);
//                setTimeout(function(){
//                    $('input[type=password],input[type=text]').val("");
//                }, 200);

                try {
                    var bbtf = document.registerElement('bb-text-format', {
                        prototype: Object.create(HTMLElement.prototype)
                    });
                } catch (e) {
                }

                var news_title = '';
                var news_content = null;

                if (news_title != "") {
                    show_modal(news_title, news_content);
                }

                $("#bb-news-modal .close").on("click", function () {
                    $.post("clear_news");
                    var news_link = '';
                    var need_complete = '0';
                    setTimeout(function () {
                        if (news_link != "") {
                            location.href = news_link;
                        }
                    }, 1000);
                });

//                $('#side-chat').affix({
//                    offset: {
//                        top: 0,
//                        bottom: function() {
//                            return (this.bottom = $('.footer').outerHeight(true))
//                        }
//                    }
//                });
                setTimeout(function () {
                    livechatStatus();
                }, 5000);

                $('#ldab').mouseenter(function () {
                    $(this).tooltip();
                }).click(function () {
                    $(this).tooltip("destroy");
                    return true;
                });
            });

            (function () {
                var phplive_e_1438671160 = document.createElement("script");
                phplive_e_1438671160.type = "text/javascript";
                phplive_e_1438671160.async = true;
                phplive_e_1438671160.src = "https://support.bebasbayar.com:4430/phplive/js/phplive_v2.js.php?v=0|1438671160|0|";
                document.getElementById("phplive_btn_1438671160").appendChild(phplive_e_1438671160);

            })();

            function livechatStatus() {
                var img = $("#phplive_btn_1438671160 img");
                var src = img.attr("src");
                var chat_domain = 'https://support.bebasbayar.com:4430/phplive/';

                if (typeof src != "undefined") {
                    if (src == chat_domain + 'pics/icons/icon_offline.gif') {
                        $(".for_livechat > a").attr("data-original-title", "Butuh Bantuan? ( Offline )");
                    } else {
                        $(".for_livechat > a").attr("data-original-title", "Butuh Bantuan? ( Online )");
                    }
                } else {
                    $(".for_livechat > a").attr("data-original-title", "Butuh Bantuan? ( Offline )");
                    $(".for_livechat").removeClass("active");
                }
            }

            function show_modal(title, content) {
                $("#bb-news-modal").modal('show');
                $("#bb-news-modal-loading").show();
                $("#bb-news-modal-title").html(title);
                $("#bb-news-modal-content").empty();

                if ($('#bb-news-modal-content').is(':empty')) {
                    $("#bb-news-modal-content").append('<pre class="remove-pre">' + content + '</pre>');
                }
                $("#bb-news-modal-loading").hide();
            }
            function show_modal2(title, content) {
                $("#bb-news-modal").modal('show');
                $("#bb-news-modal-loading").show();
                $("#bb-news-modal-title").html(title);
                $("#bb-news-modal-content").empty();

                if ($('#bb-news-modal-content').is(':empty')) {
                    $("#bb-news-modal-content").html(content);
                }
                $("#bb-news-modal-loading").hide();
            }

            try {
                BebasBayar.send_login("1");
            } catch (e) {
            }



            var ign_url = /routine|block|secure|mailbox|ticket|money|get_events|edukasi|search-page|ubp_list|poin/g;
            var force = /money|ticket\/([a-zA-Z]+\/)?(do_book|do_change_seat|do_pay|do_send_sms|transferinternal_submit)/g;
            $(document).ajaxSend(function (event, jqxhr, settings) {
                var url = settings.url;
                if (url.match(ign_url) == null || url.match(force) != null) {
                    $(".loading").show();
                }
            });
            $(document).ajaxComplete(function () {
                $(".loading").hide();
            });


            $("#form-verifikasi-pin").on("submit", function (e) {
                var unm = $("#pin-verifikasi").val();
                if (unm.length < 6) {
                    bb_alert("PIN tidak valid. Isikan minimal 6 digit");
                    return false;
                }

                e.preventDefault();
                var that = this;
                var arr = $(this).serializeArray();
                $(that).find("#form-verifikasi-pin .btn").button("loading");
                $("#form-verifikasi-pin a,button,input").addClass("unclickable");

                $.ajax("submit/verify_pin", {
                    type: 'POST',
                    dataType: 'json',
                    timeout: 60000,
                    data: {pin: unm}
                }).done(function (response) {
                    if (response.error) {
                        bb_growl(response.result, "danger");
                    } else {
                        bb_growl(response.result, "success");
                        location.href = location.href;
                    }
                }).error(function () {
                    bb_growl("Gagal tersambung ke server", "danger");
                }).always(function () {
                    $(that).find(".btn").button("reset");
                    $("#pin-verifikasi").val("");
                    $("#form-verifikasi-pin a,button,input").removeClass("unclickable");
                });
                return false;
            });

        </script>

                <script async="async">
            $(document).ready(function () {
                (function (w, i, d, g, e, t, s) {
                    w[d] = w[d] || [];
                    t = i.createElement(g);
                    t.async = 1;
                    t.src = e;
                    s = i.getElementsByTagName(g)[0];
                    s.parentNode.insertBefore(t, s);
                })(window, document, '_gscq', 'script', '//widgets.getsitecontrol.com/67844/script.js');
                /*    (function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
                 w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
                 m=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
                 })(window,document,'script','https://news.bebasbayar.com/mtc.js','mt');
                 
                 mt('send', 'pageview',{
                 email: "candra.sy90@gmail.com", 
                 firstname: "Candra Syahputra",
                 phone: "6283164306373",
                 mobile: "6283164306373",
                 level: "Premium",
                 address2: "Jl Penegak LK 1 Kel Tanah Merah",
                 idmember: "1233657",
                 isdashboard : "1",
                 saldo : "5.666,00"
                 });*/
            });

        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-62117787-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-62117787-3');
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 939128132;
            var google_custom_params = window.google_tag_params;
            var google_remarketing_only = true;
            /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
        <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/939128132/?guid=ON&amp;script=0"/>
        </div>
        </noscript>
    </body>
</html>
