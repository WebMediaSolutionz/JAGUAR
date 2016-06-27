<!DOCTYPE html>
<html lang="en" class="js flexbox flexboxlegacy canvas canvastext webgl touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
    <head>
        <style scope="hy-footer">
            .hy-footer.hy-footer {
                font-family: "telusweb", "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-weight: 400;
                font-stretch: normal;
                font-variant: normal;
                -webkit-font-smoothing: antialiased;
                -webkit-text-size-adjust: none;
            }

            footer.hy-footer {
                background-color: #f5f6f7;
                padding: 30px 0;
            }

            h3.hy-footer {
                color: #49166d;
                margin: 0 0 10px 0;
                padding: 0;
                font-size: 21px;
                line-height: 1.143;
            }

            .footer__section.hy-footer {
                border-top: 1px solid #e2e2e2;
                border-right: 1px solid #e2e2e2;
                margin: 20px 0 40px;
                width: 50%;
                float: left;
            }

            .footer__section.hy-footer:nth-of-type(2n) {
                border-right: 0;
            }

            @media screen and (min-width: 768px) {
                .footer__section.hy-footer:nth-of-type(2n) {
                    padding-left: 0;
                    border-right: 1px solid #e2e2e2;
                }
            }

            .footer__section.hy-footer:nth-child(3),
            .footer__section.hy-footer:nth-child(4) {
                padding-top: 20px;
            }

            @media screen and (min-width: 768px) {
                .footer__section.hy-footer:nth-child(3),
                .footer__section.hy-footer:nth-child(4) {
                    padding-top: 0;
                }

                .footer__section.hy-footer:nth-child(4) {
                    border-width: 0;
                }
            }

            .footer__section.hy-footer:first-child,
            .footer__section.hy-footer:nth-child(2) {
                border-top: 0;
                padding-top: 0;
            }

            @media screen and (min-width: 768px) {
                .footer__section.hy-footer {
                    width: 22.9%;
                    float: left;
                    margin-right: 2.02429%;
                    border-top: 0;
                    padding-left: 0;
                }

                .footer__section.hy-footer:last-child {
                    float: right;
                    margin-right: 0;
                    border-right: 0;
                    margin-right: 0;
                }
            }

            .footer__section.hy-footer ul.hy-footer {
                width: 99%;
            }

            .footer__section.hy-footer ul.hy-footer li.hy-footer {
                font-size: 14px;
                margin-bottom: 3px;
            }

            @media screen and (min-width: 1099px) {
                .footer__section.hy-footer ul.hy-footer li.hy-footer {
                    float: left;
                    width: 40%;
                    margin-right: 10%;
                }
            }

            .footer__section-column.hy-footer a.hy-footer {
                text-decoration: none;
                color: #333;
                font-size: 14px;
            }

            .footer__section-column.hy-footer a.hy-footer:hover, .footer__section-column.hy-footer a.hy-footer:focus {
                text-decoration: underline;
            }

            @media screen and (max-width: 767px) {
                .footer__section.hy-footer:nth-child(2n) ul.hy-footer {
                    margin-left: 20px;
                }
            }

            body {
                transition: opacity ease-in 0.2s; 
            }

            body[unresolved] {
                opacity: 0; display: block; overflow: hidden; position: relative; 
            }
        </style>

          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

          <meta http-equiv="content-type" content="text/html; charset=UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="format-detection" content="telephone=no">

          <meta name="application-name" content="TELUS.com">
          <meta name="msapplication-TileColor" content="#FFFFFF">
          <meta name="msapplication-TileImage" content="/common/images/header/TELUS-logo-pin.png">

          <meta name="description" content="Learn about our roaming rates and travel passes.">
          <meta name="keywords" content="">
          <!-- <meta name="google-site-verification" content="-Dc5Vz5GV13XtKBS-cQduAld5ktjiD4xQCQnZmOW6Dc" /> -->  

          <!-- Open Graph data -->
          <meta property="og:url" content="http://www.telus.com/en/support/article/roaming-rates-travel-passes">
          <meta property="og:type" content="website">
          <meta property="og:locale" content="en_CA">
          <meta property="og:site_name" content="TELUS">
          <meta property="og:image" content="http://www.telus.com/assets/images/og-image-ladybug.jpg">
          <meta property="og:title" content="Roaming rates and travel passes | Support | TELUS.com">
          <meta property="og:description" content="Learn about our roaming rates and travel passes."> 

          <!-- Twitter Card data -->
          <meta name="twitter:card" content="summary_large_image">
          <meta name="twitter:site" content="@TELUS">
          <meta name="twitter:image" content="http://www.telus.com/assets/images/og-image-ladybug.jpg">
          <meta name="twitter:title" content="Roaming rates and travel passes | Support | TELUS.com">
          <meta name="twitter:description" content="Learn about our roaming rates and travel passes.">
          
          <link rel="favicon" href="http://www.telus.com/favicon.ico">
          <link rel="favicon" sizes="32x32" href="http://www.telus.com/common/images/favicon/TELUS-favicon-32.png">
          <link rel="favicon" sizes="128x128" href="http://www.telus.com/common/images/favicon/TELUS-favicon-128.png">
          
          <link rel="apple-touch-icon" href="http://www.telus.com/apple-touch-icon.png">
          <link rel="apple-touch-icon" sizes="72x72" href="http://www.telus.com/common/images/favicon/TELUS-apple-touch-icon-72.png">
          <link rel="apple-touch-icon" sizes="114x114" href="http://www.telus.com/common/images/favicon/TELUS-apple-touch-icon-114.png">
          <link rel="apple-touch-icon" sizes="144x144" href="http://www.telus.com/common/images/favicon/TELUS-apple-touch-icon-144.png">
          
          <link rel="canonical" href="http://www.telus.com/en/support/article/roaming-rates-travel-passes">

            <link rel="stylesheet" type="text/css" href="../css/telus-base.css">
          <link rel="stylesheet" type="text/css" href="../css/telus-get-help.css">
          
          <title>Roaming rates and travel passes | Support | TELUS.com</title>

          <script src="article-one_files/nr-885.js"></script>
          <script type="text/javascript" src="../scripts/javascript_lib.js"></script>
            
          <script type="text/javascript" src="article-one_files/modernizr.js"></script>
          <script type="text/javascript" src="article-one_files/Bootstrap.js"></script>

              <!-- * BEGIN FOOTER WEB COMPONENT INCLUDES * -->
            <script src="article-one_files/webcomponents-lite.js"></script>
            <style>

          * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
          }

          /* FONT FACE SETUP */
          @font-face {
          font-family: "telusweb";
          /* HelveticaNeue W01-35 Thin */
          src:url('http://static.telus.com/common/fonts/56be84de-9d60-4089-8df0-0ea6ec786b84.eot?#iefix');
          src:url('http://static.telus.com/common/fonts/56be84de-9d60-4089-8df0-0ea6ec786b84.eot?#iefix') format("eot"),
          url('http://static.telus.com/common/fonts/50d35bbc-dfd4-48f1-af16-cf058f69421d.woff') format("woff"),
          url('http://static.telus.com/common/fonts/278bef59-6be1-4800-b5ac-1f769ab47430.ttf') format("truetype"),
          url('http://static.telus.com/common/fonts/2e309b1b-08b8-477f-bc9e-7067cf0af0b3.svg#2e309b1b-08b8-477f-bc9e-7067cf0af0b3') format("svg");
          font-weight: 200;
          font-style: normal;
        }

          @font-face {
            font-family: "telusweb";
            /* HelveticaNeue W01-45 Light */
            src:url('http://static.telus.com/common/fonts/ae1656aa-5f8f-4905-aed0-93e667bd6e4a.eot?#iefix');
            src:url('http://static.telus.com/common/fonts/ae1656aa-5f8f-4905-aed0-93e667bd6e4a.eot?#iefix') format("eot"),
            url('http://static.telus.com/common/fonts/530dee22-e3c1-4e9f-bf62-c31d510d9656.woff') format("woff"),
            url('http://static.telus.com/common/fonts/688ab72b-4deb-4e15-a088-89166978d469.ttf') format("truetype"),
            url('http://static.telus.com/common/fonts/7816f72f-f47e-4715-8cd7-960e3723846a.svg#7816f72f-f47e-4715-8cd7-960e3723846a') format("svg");
            font-weight: 400;
            font-style: normal;
          }

          ul {
            list-style: none;
            padding-left: 0;
          }

        /* ---- */
        /* Grid */
        /* ---- */
          .hy-grid {
            padding-left: 20px;
            padding-right: 20px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            /*background-color: cyan;*/
          }

          .hy-grid__row {
            max-width: 1160px;
            margin-left: auto;
            margin-right: auto;
            display: block;
          }

          .hy-grid__row::after {
            clear: both;
            content: "";
            display: table;
          }

        </style>

        <link rel="import" href="http://static.telus.com/common/web-components/footer/footer.html?v=1.0.1">
            <!-- * END FOOTER WEB COMPONENT INCLUDES * -->
          
        <style type="text/css">.chat__loading__spinner__container{width:100%;height:100%;transform:translate(48%,60%)}.hands{height:10px;width:2px;background:#f2f2f2;position:absolute;animation:tick_tock_animation 1s infinite ease}.hands:nth-child(1){transform:rotate(30deg);transform-origin:50% -50%;animation-delay:.25s}.hands:nth-child(2){transform:rotate(60deg);transform-origin:50% -50%;animation-delay:.5s}.hands:nth-child(3){transform:rotate(90deg);transform-origin:50% -50%;animation-delay:.75s}.hands:nth-child(4){transform:rotate(120deg);transform-origin:50% -50%;animation-delay:1s}.hands:nth-child(5){transform:rotate(150deg);transform-origin:50% -50%;animation-delay:1.25s}.hands:nth-child(6){transform:rotate(180deg);transform-origin:50% -50%;animation-delay:1.5s}.hands:nth-child(7){transform:rotate(210deg);transform-origin:50% -50%;animation-delay:1.75s}.hands:nth-child(8){transform:rotate(240deg);transform-origin:50% -50%;animation-delay:2s}.hands:nth-child(9){transform:rotate(270deg);transform-origin:50% -50%;animation-delay:2.25s}.hands:nth-child(10){transform:rotate(300deg);transform-origin:50% -50%;animation-delay:2.5s}.hands:nth-child(11){transform:rotate(330deg);transform-origin:50% -50%;animation-delay:2.75s}.hands:nth-child(12){transform:rotate(1turn);transform-origin:50% -50%;animation-delay:3s}@keyframes tick_tock_animation{0%{opacity:0}0%,to{background:#fff}to{opacity:1}}.visually-hidden{position:absolute!important;height:1px;width:1px;overflow:hidden;clip:rect(1px 1px 1px 1px);clip:rect(1px,1px,1px,1px)}#telus__chat__app{position:relative;margin:0;padding:0;height:100%;height:100vh;background-color:#f5f6f7;color:#333}#telus__chat__app:focus{outline:1px solid #8c68a6}#telus__chat__app a{text-decoration:none;color:#49166d;border-bottom:1px dotted #49166d}.prechat__privacy-msg{margin-bottom:20px}.prechat__customer-name{margin-bottom:20px!important}.prechat__optional-field{margin-bottom:20px}.prechat__submit-btn{font-size:21px;background-image:none;background-color:none}.prechat__submit-btn.state-disabled{pointer-events:none;background-color:#f5f6f7;color:#666;border:1px dotted #666;padding:10px 20px}.prechat__submit-btn.color-green{padding:10px 20px 14px}.chat__button__container{position:relative}#engageChat{position:fixed;bottom:-1px;right:30px;cursor:pointer;z-index:888888;transition:all 1s ease}#engageChat:hover{text-decoration:none}#engageChat .chat__widget__inner-container{position:relative}#engageChat .chat__status__icon{display:block;width:26px;height:26px;background-color:#8c68a6;z-index:2;border:1px solid #fff;border-radius:50%;padding:4px;position:absolute;right:10px;top:3px}#engageChat .chat__avatar__container{background-color:#49166d;width:55px;height:55px;margin:0 auto;position:relative;bottom:-13px;border:1px solid #49166d;border-radius:50%;padding:1px;text-align:center}#engageChat .chat__avatar__img{background-color:#fff;padding:1px;max-height:100%;border-radius:50%}#engageChat .chat__text__container{margin:0 auto;display:flex;flex-direction:column;justify-content:center;min-width:85px;height:45px;padding:0 9px;text-align:center;color:#f5f6f7;background-color:#49166d;border:1px solid #f5f6f7;border-top-left-radius:3px;border-top-right-radius:3px}#engageChat .chat__text__container .chat__text{font-family:tromanregular,Helvetica Neue,Helvetica,Arial,sans-serif;font-weight:600;font-size:17px;padding-bottom:0}#engageChat.agentsOffline{transition:all 1s ease}#engageChat.agentsOffline div.chat__avatar__container{background-color:#fff;border:1px solid #fff}#engageChat.agentsOffline img.chat__avatar__img{padding:0}#engageChat.agentsOffline div.chat__text__container{background-color:#c7c7c7}#engageChat.agentsOffline p.chat__text{color:#333}#engageChat .agents__offline__msg{display:flex;align-items:center;justify-content:center;height:100%}#engageChat .agents__offline__msg>p{text-align:center;margin:0 10%}#engageChat.hide{position:absolute;right:-90px;opacity:0}.chat__container{position:fixed;bottom:0;right:0;width:320px;height:100%;transition:all .3s ease;-webkit-transition:all 1;opacity:1;z-index:999999;border:1px solid #c7c7c7}.chat__container .header{border:1px solid grey;height:200px}.chat__container .iframe,.chat__container iframe{padding:10px;margin:0;border:0}.chat__container.fold,.chat__container.hide{right:-320px;display:none}.chat__options{height:244px;transition:all .5s ease;color:#49166d;padding:20px;font-size:21px;background:#fff;position:relative;border:1px solid #c7c7c7;box-shadow:0 2px 1px #c7c7c7}.chat__options h3{margin-bottom:40px}.chat__options a,.chat__options a:hover{text-decoration:none}.chat__options .chat__options__close{position:absolute;top:20px;right:10px;font-size:17px;padding-bottom:0}.chat__options .chat__options__close:hover{border-bottom:1px dotted #49166d}.chat__options p{font-family:tromanregular,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:21px}.chat__iframe__container{width:100%;text-align:left;padding:0;display:flex;flex-direction:column;justify-content:space-between;height:98%;height:98vh;color:#333}.chat__iframe__container .error{background:#e0cdf4;color:#49166d;padding:17px 14px;margin-bottom:20px}.chat__iframe__container form.chat__send__message{padding:15px 10px}.chat__iframe__container form.chat__send__message input[type=text]{font-size:17px;text-align:left;border:1px solid #c7c7c7;border-radius:2px;margin-bottom:0;width:76%}.chat__iframe__container form{margin:0;padding:15px 0;font-size:17px;text-align:center}.chat__iframe__container form select{border:1px solid #ccc;background:#fff;color:#666;font-size:17px;line-height:19px;text-align:left;width:100%;-webkit-appearance:none;-moz-appearance:none;text-indent:1px;text-overflow:''}.chat__iframe__container form select::-ms-expand{display:none}.chat__iframe__container form optgroup{font-style:normal}.chat__iframe__container form input{font-size:17px;text-align:left;border:1px solid #ccc;border-radius:2px}.chat__iframe__container form p{text-align:left}.chat__iframe__container form .chat__select__wrapper{position:relative;margin-bottom:20px}.chat__iframe__container form .chat__select__wrapper:after{content:"\E099";font-family:telusdings;position:absolute;top:13px;right:10px;font-weight:400;font-style:normal;text-decoration:none;text-rendering:optimizeLegibility;color:inherit;font-size:21px;pointer-events:none}.chat__iframe__container label{font-size:17px;text-align:left;display:block}.chat__iframe__container label span{text-align:left;display:inline-block;margin:0 0 5px 5px}.chat__iframe__container label span.optional{font-size:17px}#telus__chat__frame{border:0;height:100%;margin:0;padding:0;height:94.5%;height:calc(100% - 50px);color:#fff}.chat__prechat{margin:15px;color:#333}.chat__prechat p.business{margin-bottom:20px}.chat__prechat p{font-family:tlightregular,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:17px;line-height:22px;padding-bottom:5px}.chat__prechat ul{list-style:disc;margin:0 0 5px 18px}.chat__prechat ul li{font-size:17px;line-height:22px}#transcript{overflow:auto;text-align:left;position:relative;max-height:100vh;padding:0 15px}#transcript h2{font-size:14px;color:#49166d;margin:20px 0 0}.chat__header{height:55px;background-color:#fff;clear:both}.chat__header .frg-icon{font-size:24px}.chat__header .frg-icon.icon-minus{position:relative;bottom:-6px}.chat__header a{text-decoration:none}.prechat__header{position:relative}.prechat__header img{width:125px;margin:15px 10px 10px}.prechat__header .chat__close{position:absolute;top:13px;right:16px}.optional{font-size:17px;color:#979797}.chat__header__left{float:left;margin:15px 0 0 20px}.chat__header__right{float:right;margin:14px 20px 0 0}.chat__header__right .chat__minimize{margin-right:20px}.chat__header__right .frg-icon{margin-left:10px}.chat__person{display:block;font-family:tromanregular,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:14px;color:#909090;margin:20px 0 0;padding-bottom:0}.chat__person strong{color:#49166d}.chatTextArea{width:77%;max-width:229px;margin:0 0 0 10px;padding:10px;border:1px solid #c7c7c7;font-family:tromanregular,Helvetica Neue,Helvetica,Arial,sans-serif}.chat__send__message{clear:both;border-top:1px solid #c7c7c7;padding:15px;display:flex;justify-content:space-between}.chat__send__message textarea{width:77%;margin:0 0 0 10px;padding:10px;border:1px solid #c7c7c7;line-height:20px}.chat__send__message input[type=submit]{width:auto;max-height:94px;margin:0;border:none;color:#49166d;background:transparent}.chat__place__container,.chat__send__message input[type=submit]{font-family:tromanregular,Helvetica Neue,Helvetica,Arial,sans-serif}.chat__place__container{padding:20px 0;border-bottom:1px solid #979797;color:#333;font-size:17px}.chat__place__container p{font-family:tromanregular,Helvetica Neue,Helvetica,Arial,sans-serif;line-height:21px}.chat__place__container strong{font-weight:700}.chat__transcript__status{color:#666;text-align:left;font-size:14px;margin:0;height:40px;padding:12px 15px}.chat__transcript__footer{position:relative;background-color:#f5f6f7;padding:0}.chat__message{margin:10px 0 0 21px;word-break:break-word;padding-bottom:0}.chat__message .chat__message__body{display:block;font-family:tromanregular,Helvetica Neue,Helvetica,Arial,sans-serif;background-color:#fff;padding:10px 32px 10px 21px;font-size:17px;width:100%;line-height:21px;word-break:break-word;word-wrap:break-word;white-space:pre-wrap;overflow-x:hidden;color:#666}.chat__message.agent{margin:10px 20px 0 0}.chat__message.agent .chat__message__body{background-color:#8c68a6;color:#fff}.chat__close__dialogue{padding:43px;background-color:#fff;height:100vh;width:100%;display:flex;align-items:center;flex-direction:column;justify-content:center}.chat__close__dialogue h3{font-size:21px;color:#49166d;margin-bottom:20px}.chat__close__dialogue .frg-button{margin-bottom:20px}.chat__close__dialogue .frg-button.color-white{background-color:#fff}.new-msg-ribbon{font-family:tromanregular,Helvetica Neue,Helvetica,Arial,sans-serif;background-color:#333;border:1px solid #333;padding:4px 15px;position:absolute;width:100%;z-index:100;height:40px;display:flex;align-items:center}.new-msg-ribbon__text{color:#f5f6f7;font-size:17px}.new-msg-ribbon__view-button{background-color:#333;border:1px solid #333;color:#fff;position:relative;right:-47px;height:100%;font-size:17px}.new-msg-ribbon__view-button__dotted{border-bottom:1px dotted #fff}@media screen and (-webkit-min-device-pixel-ratio:0){input,select,textarea{font-size:16px}}@media (min-width:1920px){#engageChat{right:12%}}</style><script src="article-one_files/common.js" data-requiremodule="sandboxes/common" data-requirecontext="_" async="" charset="utf-8" type="text/javascript"></script><style class="firebugResetStyles" type="text/css" charset="utf-8">/* See license.txt for terms of usage */
        /** reset styling **/
        .firebugResetStyles {
            z-index: 2147483646 !important;
            top: 0 !important;
            left: 0 !important;
            display: block !important;
            border: 0 none !important;
            margin: 0 !important;
            padding: 0 !important;
            outline: 0 !important;
            min-width: 0 !important;
            max-width: none !important;
            min-height: 0 !important;
            max-height: none !important;
            position: fixed !important;
            transform: rotate(0deg) !important;
            transform-origin: 50% 50% !important;
            border-radius: 0 !important;
            box-shadow: none !important;
            background: transparent none !important;
            pointer-events: none !important;
            white-space: normal !important;
        }
        style.firebugResetStyles {
            display: none !important;
        }

        .firebugBlockBackgroundColor {
            background-color: transparent !important;
        }

        .firebugResetStyles:before, .firebugResetStyles:after {
            content: "" !important;
        }
        /**actual styling to be modified by firebug theme**/
        .firebugCanvas {
            display: none !important;
        }

        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
        .firebugLayoutBox {
            width: auto !important;
            position: static !important;
        }

        .firebugLayoutBoxOffset {
            opacity: 0.8 !important;
            position: fixed !important;
        }

        .firebugLayoutLine {
            opacity: 0.4 !important;
            background-color: #000000 !important;
        }

        .firebugLayoutLineLeft, .firebugLayoutLineRight {
            width: 1px !important;
            height: 100% !important;
        }

        .firebugLayoutLineTop, .firebugLayoutLineBottom {
            width: 100% !important;
            height: 1px !important;
        }

        .firebugLayoutLineTop {
            margin-top: -1px !important;
            border-top: 1px solid #999999 !important;
        }

        .firebugLayoutLineRight {
            border-right: 1px solid #999999 !important;
        }

        .firebugLayoutLineBottom {
            border-bottom: 1px solid #999999 !important;
        }

        .firebugLayoutLineLeft {
            margin-left: -1px !important;
            border-left: 1px solid #999999 !important;
        }

        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
        .firebugLayoutBoxParent {
            border-top: 0 none !important;
            border-right: 1px dashed #E00 !important;
            border-bottom: 1px dashed #E00 !important;
            border-left: 0 none !important;
            position: fixed !important;
            width: auto !important;
        }

        .firebugRuler{
            position: absolute !important;
        }

        .firebugRulerH {
            top: -15px !important;
            left: 0 !important;
            width: 100% !important;
            height: 14px !important;
            background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%13%88%00%00%00%0E%08%02%00%00%00L%25a%0A%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%04%F8IDATx%DA%EC%DD%D1n%E2%3A%00E%D1%80%F8%FF%EF%E2%AF2%95%D0D4%0E%C1%14%B0%8Fa-%E9%3E%CC%9C%87n%B9%81%A6W0%1C%A6i%9A%E7y%0As8%1CT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AATE9%FE%FCw%3E%9F%AF%2B%2F%BA%97%FDT%1D~K(%5C%9D%D5%EA%1B%5C%86%B5%A9%BDU%B5y%80%ED%AB*%03%FAV9%AB%E1%CEj%E7%82%EF%FB%18%BC%AEJ8%AB%FA'%D2%BEU9%D7U%ECc0%E1%A2r%5DynwVi%CFW%7F%BB%17%7Dy%EACU%CD%0E%F0%FA%3BX%FEbV%FEM%9B%2B%AD%BE%AA%E5%95v%AB%AA%E3E5%DCu%15rV9%07%B5%7F%B5w%FCm%BA%BE%AA%FBY%3D%14%F0%EE%C7%60%0EU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5JU%88%D3%F5%1F%AE%DF%3B%1B%F2%3E%DAUCNa%F92%D02%AC%7Dm%F9%3A%D4%F2%8B6%AE*%BF%5C%C2Ym~9g5%D0Y%95%17%7C%C8c%B0%7C%18%26%9CU%CD%13i%F7%AA%90%B3Z%7D%95%B4%C7%60%E6E%B5%BC%05%B4%FBY%95U%9E%DB%FD%1C%FC%E0%9F%83%7F%BE%17%7DkjMU%E3%03%AC%7CWj%DF%83%9An%BCG%AE%F1%95%96yQ%0Dq%5Dy%00%3Et%B5'%FC6%5DS%95pV%95%01%81%FF'%07%00%00%00%00%00%00%00%00%00%F8x%C7%F0%BE%9COp%5D%C9%7C%AD%E7%E6%EBV%FB%1E%E0(%07%E5%AC%C6%3A%ABi%9C%8F%C6%0E9%AB%C0'%D2%8E%9F%F99%D0E%B5%99%14%F5%0D%CD%7F%24%C6%DEH%B8%E9rV%DFs%DB%D0%F7%00k%FE%1D%84%84%83J%B8%E3%BA%FB%EF%20%84%1C%D7%AD%B0%8E%D7U%C8Y%05%1E%D4t%EF%AD%95Q%BF8w%BF%E9%0A%BF%EB%03%00%00%00%00%00%00%00%00%00%B8vJ%8E%BB%F5%B1u%8Cx%80%E1o%5E%CA9%AB%CB%CB%8E%03%DF%1D%B7T%25%9C%D5(%EFJM8%AB%CC'%D2%B2*%A4s%E7c6%FB%3E%FA%A2%1E%80~%0E%3E%DA%10x%5D%95Uig%15u%15%ED%7C%14%B6%87%A1%3B%FCo8%A8%D8o%D3%ADO%01%EDx%83%1A~%1B%9FpP%A3%DC%C6'%9C%95gK%00%00%00%00%00%00%00%00%00%20%D9%C9%11%D0%C0%40%AF%3F%EE%EE%92%94%D6%16X%B5%BCMH%15%2F%BF%D4%A7%C87%F1%8E%F2%81%AE%AAvzr%DA2%ABV%17%7C%E63%83%E7I%DC%C6%0Bs%1B%EF6%1E%00%00%00%00%00%00%00%00%00%80cr%9CW%FF%7F%C6%01%0E%F1%CE%A5%84%B3%CA%BC%E0%CB%AA%84%CE%F9%BF)%EC%13%08WU%AE%AB%B1%AE%2BO%EC%8E%CBYe%FE%8CN%ABr%5Dy%60~%CFA%0D%F4%AE%D4%BE%C75%CA%EDVB%EA(%B7%F1%09g%E5%D9%12%00%00%00%00%00%00%00%00%00H%F6%EB%13S%E7y%5E%5E%FB%98%F0%22%D1%B2'%A7%F0%92%B1%BC%24z3%AC%7Dm%60%D5%92%B4%7CEUO%5E%F0%AA*%3BU%B9%AE%3E%A0j%94%07%A0%C7%A0%AB%FD%B5%3F%A0%F7%03T%3Dy%D7%F7%D6%D4%C0%AAU%D2%E6%DFt%3F%A8%CC%AA%F2%86%B9%D7%F5%1F%18%E6%01%F8%CC%D5%9E%F0%F3z%88%AA%90%EF%20%00%00%00%00%00%00%00%00%00%C0%A6%D3%EA%CFi%AFb%2C%7BB%0A%2B%C3%1A%D7%06V%D5%07%A8r%5D%3D%D9%A6%CAu%F5%25%CF%A2%99%97zNX%60%95%AB%5DUZ%D5%FBR%03%AB%1C%D4k%9F%3F%BB%5C%FF%81a%AE%AB'%7F%F3%EA%FE%F3z%94%AA%D8%DF%5B%01%00%00%00%00%00%00%00%00%00%8E%FB%F3%F2%B1%1B%8DWU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*UiU%C7%BBe%E7%F3%B9%CB%AAJ%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5*%AAj%FD%C6%D4%5Eo%90%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5%86%AF%1B%9F%98%DA%EBm%BBV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%AD%D6%E4%F58%01%00%00%00%00%00%00%00%00%00%00%00%00%00%40%85%7F%02%0C%008%C2%D0H%16j%8FX%00%00%00%00IEND%AEB%60%82") repeat-x !important;
            border-top: 1px solid #BBBBBB !important;
            border-right: 1px dashed #BBBBBB !important;
            border-bottom: 1px solid #000000 !important;
        }

        .firebugRulerV {
            top: 0 !important;
            left: -15px !important;
            width: 14px !important;
            height: 100% !important;
            background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%0E%00%00%13%88%08%02%00%00%00%0E%F5%CB%10%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%06~IDATx%DA%EC%DD%D1v%A20%14%40Qt%F1%FF%FF%E4%97%D9%07%3BT%19%92%DC%40(%90%EEy%9A5%CB%B6%E8%F6%9Ac%A4%CC0%84%FF%DC%9E%CF%E7%E3%F1%88%DE4%F8%5D%C7%9F%2F%BA%DD%5E%7FI%7D%F18%DDn%BA%C5%FB%DF%97%BFk%F2%10%FF%FD%B4%F2M%A7%FB%FD%FD%B3%22%07p%8F%3F%AE%E3%F4S%8A%8F%40%EEq%9D%BE8D%F0%0EY%A1Uq%B7%EA%1F%81%88V%E8X%3F%B4%CEy%B7h%D1%A2E%EBohU%FC%D9%AF2fO%8BBeD%BE%F7X%0C%97%A4%D6b7%2Ck%A5%12%E3%9B%60v%B7r%C7%1AI%8C%BD%2B%23r%00c0%B2v%9B%AD%CA%26%0C%1Ek%05A%FD%93%D0%2B%A1u%8B%16-%95q%5Ce%DCSO%8E%E4M%23%8B%F7%C2%FE%40%BB%BD%8C%FC%8A%B5V%EBu%40%F9%3B%A72%FA%AE%8C%D4%01%CC%B5%DA%13%9CB%AB%E2I%18%24%B0n%A9%0CZ*Ce%9C%A22%8E%D8NJ%1E%EB%FF%8F%AE%CAP%19*%C3%BAEKe%AC%D1%AAX%8C*%DEH%8F%C5W%A1e%AD%D4%B7%5C%5B%19%C5%DB%0D%EF%9F%19%1D%7B%5E%86%BD%0C%95%A12%AC%5B*%83%96%CAP%19%F62T%86%CAP%19*%83%96%CA%B8Xe%BC%FE)T%19%A1%17xg%7F%DA%CBP%19*%C3%BA%A52T%86%CAP%19%F62T%86%CA%B0n%A9%0CZ%1DV%C6%3D%F3%FCH%DE%B4%B8~%7F%5CZc%F1%D6%1F%AF%84%F9%0F6%E6%EBVt9%0E~%BEr%AF%23%B0%97%A12T%86%CAP%19%B4T%86%CA%B8Re%D8%CBP%19*%C3%BA%A52huX%19%AE%CA%E5%BC%0C%7B%19*CeX%B7h%A9%0C%95%E1%BC%0C%7B%19*CeX%B7T%06%AD%CB%5E%95%2B%BF.%8F%C5%97%D5%E4%7B%EE%82%D6%FB%CF-%9C%FD%B9%CF%3By%7B%19%F62T%86%CA%B0n%D1R%19*%A3%D3%CA%B0%97%A12T%86uKe%D0%EA%B02*%3F1%99%5DB%2B%A4%B5%F8%3A%7C%BA%2B%8Co%7D%5C%EDe%A8%0C%95a%DDR%19%B4T%C66%82fA%B2%ED%DA%9FC%FC%17GZ%06%C9%E1%B3%E5%2C%1A%9FoiB%EB%96%CA%A0%D5qe4%7B%7D%FD%85%F7%5B%ED_%E0s%07%F0k%951%ECr%0D%B5C%D7-g%D1%A8%0C%EB%96%CA%A0%A52T%C6)*%C3%5E%86%CAP%19%D6-%95A%EB*%95q%F8%BB%E3%F9%AB%F6%E21%ACZ%B7%22%B7%9B%3F%02%85%CB%A2%5B%B7%BA%5E%B7%9C%97%E1%BC%0C%EB%16-%95%A12z%AC%0C%BFc%A22T%86uKe%D0%EA%B02V%DD%AD%8A%2B%8CWhe%5E%AF%CF%F5%3B%26%CE%CBh%5C%19%CE%CB%B0%F3%A4%095%A1%CAP%19*Ce%A8%0C%3BO*Ce%A8%0C%95%A12%3A%AD%8C%0A%82%7B%F0v%1F%2FD%A9%5B%9F%EE%EA%26%AF%03%CA%DF9%7B%19*Ce%A8%0C%95%A12T%86%CA%B8Ze%D8%CBP%19*Ce%A8%0C%95%D1ae%EC%F7%89I%E1%B4%D7M%D7P%8BjU%5C%BB%3E%F2%20%D8%CBP%19*Ce%A8%0C%95%A12T%C6%D5*%C3%5E%86%CAP%19*Ce%B4O%07%7B%F0W%7Bw%1C%7C%1A%8C%B3%3B%D1%EE%AA%5C%D6-%EBV%83%80%5E%D0%CA%10%5CU%2BD%E07YU%86%CAP%19*%E3%9A%95%91%D9%A0%C8%AD%5B%EDv%9E%82%FFKOee%E4%8FUe%A8%0C%95%A12T%C6%1F%A9%8C%C8%3D%5B%A5%15%FD%14%22r%E7B%9F%17l%F8%BF%ED%EAf%2B%7F%CF%ECe%D8%CBP%19*Ce%A8%0C%95%E1%93~%7B%19%F62T%86%CAP%19*Ce%A8%0C%E7%13%DA%CBP%19*Ce%A8%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4%AE%A4%F5%25%C0%00%DE%BF%5C'%0F%DA%B8q%00%00%00%00IEND%AEB%60%82") repeat-y !important;
            border-left: 1px solid #BBBBBB !important;
            border-right: 1px solid #000000 !important;
            border-bottom: 1px dashed #BBBBBB !important;
        }

        .overflowRulerX > .firebugRulerV {
            left: 0 !important;
        }

        .overflowRulerY > .firebugRulerH {
            top: 0 !important;
        }

        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
        .fbProxyElement {
            position: fixed !important;
            pointer-events: auto !important;
        }
        </style>
    </head>

    <body id="" class="" watch-window-resize="" watch-window-scroll="" watch-document-key-down="" watch-document-click="">
        <div class="container">   
            <div style="display: none;" class="site-settings">
                <div class="grid">
                    <a href="#" class="close-button has-icon" title="Close settings menu">
                        <span class="frg-icon icon-x-circled" aria-hidden="true"></span>
                    </a>

                    <div>
                        <section class="language-select">
                            <div class="display-list">
                                <h4>
                                Language
                                </h4>
                                <ul class="languages">
                                    <li>
                                        English
                                    </li>
                                    <li>
                                        <a href="http://www.telus.com/actions/preferences/change-locale.do?lang=fr&amp;rd=http%3A%2F%2Fwww.telus.com%2Fsupport%2Farticle%2Froaming-rates-travel-passes" title="Visualisez notre site Web en français" class="frenchButton">
                                            Français
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="display-form-element">
                                <form id="language-select-form" action="/actions/preferences/change-locale.do" method="get">
                                    <input name="rd" value="http://www.telus.com/support/article/roaming-rates-travel-passes" type="hidden">

                                    <div class="select-container-and-label">
                                        <label for="language-select-dropdown">
                                        Language
                                        </label>
                                        <div class="frg-select-container">
                                            <select id="language-select-dropdown" name="lang">
                                                <option value="en" selected="selected">
                                                    English
                                                </option>
                                                <option value="fr">
                                                    Français
                                                </option>
                                            </select>

                                            <noscript>
                                                <input type="submit" value="Go" />
                                            </noscript>
                                        </div>
                                    </div>
                                </form>          
                            </div>
                        </section>

                        <section class="region-select">
                            <div class="display-list">
                                <h4>
                                    <span class="frg-icon icon-map-marker pad-right" aria-hidden="true"></span>Region
                                </h4>

                                <ul class="regions">
                                    <li>
                                        <a href="http://www.telus.com/actions/preferences/change-locale.do?region=AB&amp;lang=en&amp;rd=http%3A%2F%2Fwww.telus.com%2Fsupport%2Farticle%2Froaming-rates-travel-passes" title="View TELUS products and services available in Alberta">
                                            Alberta
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.telus.com/actions/preferences/change-locale.do?region=BC&amp;lang=en&amp;rd=http%3A%2F%2Fwww.telus.com%2Fsupport%2Farticle%2Froaming-rates-travel-passes" title="View TELUS products and services available in British Columbia">
                                            British Columbia
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.telus.com/actions/preferences/change-locale.do?region=MB&amp;rd=http%3A%2F%2Fwww.telus.com%2Fsupport%2Farticle%2Froaming-rates-travel-passes" title="View TELUS products and services available in Manitoba">
                                            Manitoba
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.telus.com/actions/preferences/change-locale.do?region=NB&amp;rd=http%3A%2F%2Fwww.telus.com%2Fsupport%2Farticle%2Froaming-rates-travel-passes" title="View TELUS products and services available in New Brunswick">
                                            New Brunswick
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.telus.com/actions/preferences/change-locale.do?region=NL&amp;rd=http%3A%2F%2Fwww.telus.com%2Fsupport%2Farticle%2Froaming-rates-travel-passes" title="View TELUS products and services available in Newfoundland">
                                            Newfoundland
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.telus.com/actions/preferences/change-locale.do?region=NT&amp;rd=http%3A%2F%2Fwww.telus.com%2Fsupport%2Farticle%2Froaming-rates-travel-passes" title="View TELUS products and services available in Northwest Territories">
                                            Northwest Territories
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.telus.com/actions/preferences/change-locale.do?region=NS&amp;rd=http%3A%2F%2Fwww.telus.com%2Fsupport%2Farticle%2Froaming-rates-travel-passes" title="View TELUS products and services available in Nova Scotia">
                                            Nova Scotia
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.telus.com/actions/preferences/change-locale.do?region=NU&amp;rd=http%3A%2F%2Fwww.telus.com%2Fsupport%2Farticle%2Froaming-rates-travel-passes" title="View TELUS products and services available in Nunavut">
                                            Nunavut
                                        </a>
                                    </li>
                                    <li>
                                        Ontario
                                    </li>
                                    <li>
                                        <a href="http://www.telus.com/actions/preferences/change-locale.do?region=PE&amp;rd=http%3A%2F%2Fwww.telus.com%2Fsupport%2Farticle%2Froaming-rates-travel-passes" title="View TELUS products and services available in Prince Edward Island">
                                            Prince Edward Island
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.telus.com/actions/preferences/change-locale.do?region=QC&amp;rd=http%3A%2F%2Fwww.telus.com%2Fsupport%2Farticle%2Froaming-rates-travel-passes" title="View TELUS products and services available in Quebec">
                                            Quebec
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.telus.com/actions/preferences/change-locale.do?region=SK&amp;rd=http%3A%2F%2Fwww.telus.com%2Fsupport%2Farticle%2Froaming-rates-travel-passes" title="View TELUS products and services available in Saskatchewan">
                                            Saskatchewan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.telus.com/actions/preferences/change-locale.do?region=YT&amp;rd=http%3A%2F%2Fwww.telus.com%2Fsupport%2Farticle%2Froaming-rates-travel-passes" title="View TELUS products and services available in Yukon">
                                            Yukon
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="display-form-element">
                                <form id="region-select-form" action="/actions/preferences/change-locale.do" method="get">
                                    <input name="rd" value="http://www.telus.com/support/article/roaming-rates-travel-passes" type="hidden">
                                    <input name="lang" value="en" type="hidden">
                                    <div class="select-container-and-label">
                                        <label for="region-select-dropdown">Region</label>

                                        <div class="frg-select-container">
                                            <select id="region-select-dropdown" name="region">
                                                <option disabled="disabled">Select</option>
                                                <option value="ab">Alberta</option>
                                                <option value="bc">British Columbia</option>
                                                <option value="mb">Manitoba</option>
                                                <option value="nb">New Brunswick</option>
                                                <option value="nl">Newfoundland</option>
                                                <option value="nt">Northwest Territories</option>
                                                <option value="ns">Nova Scotia</option>
                                                <option value="nu">Nunavut</option>
                                                <option value="on" selected="selected">Ontario</option>
                                                <option value="pe">Prince Edward Island</option>
                                                <option value="qc">Quebec</option>
                                                <option value="sk">Saskatchewan</option>
                                                <option value="yt">Yukon</option>
                                            </select>

                                            <noscript>
                                                <input type="submit" value="Go" />
                                            </noscript>
                                        </div>
                                    </div>     
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                var ussLogThreshold = false;
            </script>

            <header class="site-header ">
                <section class="telus-global-nav__more-sites">
                    <div class="grid">
                        <ul class="telus-global-nav__site-list">
                            <li class="telus-global-nav__list-item">
                                <a href="http://about.telus.com/community/english/?INTCMP=092015_Consum_Global_TopNav1_AboutTEL_EN" id="at_au">About us</a>
                            </li>
                            <li class="telus-global-nav__list-item">
                                <a href="http://community.telus.com/?INTCMP=092015_Consum_Global_TopNav1_WeGive_EN" id="at_wgwwl">We Give Where We Live</a>
                            </li>
                            <li class="telus-global-nav__list-item">
                                <a href="http://www.telushealth.co/?INTCMP=092015_Consum_Global_TopNav1_Health_EN" id="at_th">TELUS Health</a>
                            </li>
                            <li class="telus-global-nav__list-item">
                                <a href="http://www.telusinternational.com/?INTCMP=092015_Consum_Global_TopNav1_InterNat" id="at_ti">TELUS International</a>
                            </li>
                        </ul>

                        <a href="#" id="closeMoreSites">
                            <span class="frg-icon icon-x-circled"></span>
                        </a>
                    </div>
                </section>
            </header>

            <div class="search-bar" role="search">
                <div class="grid">
                    <form action="//www.telus.com/search/execute.do" method="GET">
                        <span class="frg-icon icon-magnify-glass color-gray" aria-hidden="true"></span>
                        <input aria-label="Search" name="query" placeholder="What are you looking for?" type="search">
                    </form>
                </div>
            </div>

            <div id="content" class="content">

                <!-- Article -->
                <section class="article">

                    <!-- Article Header -->
                    <header class="article-header">
                        <div class="article-header__inner">
                            <div class="article-breadcrumb">
                                <nav class="article-breadcrumb__nav">
                                    <ul>
                                        <li><a href="#" class="frg-link decoration-default">Support</a></li>
                                        <li><a href="#" class="frg-link decoration-default">Project Jaguar Roles</a></li>
                                    </ul>
                                </nav>
                            </div>

                            <h1>Buy Devices and Plans</h1>
                        </div>
                    </header>
                    <!-- / End Article Header -->

                    <!-- Start of Article Content -->
                    <div class="article-content article-content--troubleshooting">
                        <div class="article-content__inner">
                            <p>
                                You can purchase devices with a plan or without a plan. Select "Devices". 
                            </p>

                            <img src="../images/article23a.jpg">

                            <p>
                                First select your device from the Devices page1. On the Devices page, select the category you want to view or choose “All”. A page of devices appears for your selection.
                            </p>

                            <p>
                                Choose a device by clicking Select. You will have the option to select a device with or without a plan on the next page – the individual device page.
                            </p>

                            <img src="../images/article23b.jpg">

                            <p>
                                <strong>To buy a device with a plan</strong>
                            </p>

                            <p>
                                Step 1 - Select the colour desired and the quantity of devices.<br />
                                Step 2 - Select the type of plan you want (e.g. Voice & Data).<br />
                                Step 3 - Select your device price with a plan (e.g. 3-year term)<br />
                                Step 4 - Select the account number or BAN that is to be linked to this order. Select your SIM card option. Apple device pages will have an Apple DEP Enrolment section. If you’re interested in the Apple DEP Enrolment, select “dep20101 - $20/subscriber”. If you don’t want to enrol, click on “Do not enrol”.
                            </p>

                            <p>When you have completed Steps 1 – 4 on the device page, click "Add to cart". </p>

                            <img src="../images/article23c.jpg">

                            <p>Next you will select a rate plan. Click "Save &amp; Continue".</p>

                            <img src="../images/article23d.jpg">

                            <p>
                              <strong>To buy a device without a plan</strong>
                            </p>

                            <p>
                                Step 1 - Select the colour desired and the quantity of devices.<br />
                                Step 2 – Select the device price that says "Device only (no plan)".<br />
                                Step 4 – Select the account number or BAN
                            </p>

                            <p>
                                When you have completed Steps 1 – 4 on the device page, click "Add to cart".
                            </p>

                            <p>
                                Choose accessories if required.
                            </p>

                            <img src="../images/article23e.jpg">

                            <p>
                                <strong>To complete your order</strong>
                            </p>

                            <img src="../images/article23f.jpg">

                            <p>
                                Enter each subscriber’s name.
                                In the "Port" column, indicate whether or not the subscriber is porting his/her existing mobile device number.
                            </p>

                            <p>
                                If "Yes":
                            </p>

                            <p>
                                Type in the Existing Mobile Number and Old Service Provider Account Number, and indicate Voicemail language.
                            </p>

                            <p>
                                If "No":
                            </p>

                            <p>
                                Type in the Calling City and Area Code, and Voicemail language.
                            </p>

                            <p>
                                Click "Save &amp; Continue".
                            </p>

                            <img src="../images/article23g.jpg">

                            <p>
                                View items in your cart and click "Checkout" to proceed with your order.
                            </p>

                            <img src="../images/article23h.jpg">

                            <p>
                                Complete the required information on the form including first and last name of the person receiving the shipment, your company, the shipping address and the contact number of the recipient. Click "Save &amp; Continue".
                            </p>

                            <p>
                                Confirm Order Details -> Save &amp; Continue -> Select an account for payment -> Place Order -> Receive an Order Confirmation Number. 
                            </p>

                            <p>
                                The devices displayed are the mobile devices that TELUS offers all corporate customers – but with special negotiated pricing as per your contract. For more details, please refer to your corporate clients agreement (CCA) and/or speak with your TELUS Sales Account Manager. 
                            </p>
                        </div>
                    </div>
                    <!-- End of Article Content -->
                </section>
                <!-- / End Article -->

                <script type="text/javascript">
                    sPageName = "support/mobility services/roaming-rates-travel-passes";
                    sProp5 = 'support';
                    sProp6 = "support/mobility services";
                    sProp7 = "support/mobility services/roaming-rates-travel-passes";
                    sProp14 = sEVar75 = "mobility services";
                    sProp15 = sEVar76 = "get set up";
                    sChannel = 'support';
                </script>

            </div>
            <hy-footer region="on" lang="en"></hy-footer>

            <footer class="content beta-footer">
                <div>
                    <div class="footer-group color-dark"></div>
                    <div class="placeholder"></div>
                </div>
            </footer>
        </div>

        <script type="text/javascript" src="article-one_files/require.js"></script>
        <script type="text/javascript" src="article-one_files/require_002.js"></script>
        <script type="text/javascript" src="article-one_files/article.js"></script>
        <script type="text/javascript" src="article-one_files/chat_widget_component.js"></script>
        <script type="text/javascript">
            window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"e18d5781f1","applicationID":"7069898","transactionName":"YVRXZkdUWhBVUExdV1gedkdGQVsOG0BNREhZQ0EdXFtQBkwdSFxIGw9UQEFcVw9RGxE=","queueTime":0,"applicationTime":53,"atts":"TRNUEA9OSR4=","errorBeacon":"bam.nr-data.net","agent":""}
        </script>
    </body>
</html>