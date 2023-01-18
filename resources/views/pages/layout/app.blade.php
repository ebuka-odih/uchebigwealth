
<!DOCTYPE html>
<html data-wf-page="6181b0b1a9ba75ecc9f1b598" data-wf-site="6181b0b1a9ba753863f1b595">

<head>


    <meta charset="utf-8">
    <title>TheBigwealth Clan | Straight Business</title>
    <meta content="TheBigwealth Clan | Straight Business" name="description">

    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/cobratate-v3.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/menu-style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({ google: { families: ["Cardo:regular", "Spartan:200,regular,600,800"] } });</script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
    <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.png" rel="apple-touch-icon">
    <script id="jetboost-script" type="text/javascript"> window.JETBOOST_SITE_ID = "ckbm229ki5wyj0715ohjstzl7"; (function () { d = document; s = d.createElement("script"); s.src = "https://jetboost.netlify.com/jetboost.js"; s.async = 1; d.getElementsByTagName("head")[0].appendChild(s); })(); </script>
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://drive.google.com/uc?export=view&amp;id=1zL1A_3CYV17JRN70OkRpgyjsHRCnHwrf"></script>
    <style>
        .w-webflow-badge {
            display: none !important;
        }
    </style>

    <script>
        if (document.getElementsByClassName) {
            // Safari 3+ and Firefox 3+
            var itms = document.getElementsByClassName('w-webflow-badge');
            for (var i = 0; i < itms.length; i++) {
                var it = itms[i];
                if (it.tagName == "DIV") {
                    it.parentNode.removeChild(it);
                    i = i - 1; //It actually gets removed from the array, so we need to drop our count
                }
            }
        } else {
            // All other browsers
            var itms = document.getElementsByTagName('div');
            for (var i = 0; i < itms.length; i++) {
                var it = itms[i];
                // Test that className contains your class
                if (/w-webflow-badge/.test(it.className)) it.parentNode.removeChild(it);
            }
        }
    </script>
</head>
<body class="body">


<div class="menu-container">
    <div class="menu">
        <ul>
            <li class='menu-logo desktop'><a href="{{ route('index') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Tate logo" />
                </a></li>
            <li class='mobile'><a href="{{ route('index') }}">HOME</a></li>
        </ul>
    </div>
</div>

@yield('content')


<div class="footer wf-section">
    <div class="container footer">
        <div class="footer-3-left-column">
            <div class="footer-contact-methods">
                <div>
                    <h5>Social Links</h5>
                    <div class="div-block-12">
                        <a href="https://www.instagram.com/uchebigwealth/" class="" target="_blank">
                            <img style="margin-bottom: 5px" height="60" width="60" src="{{ asset('img/ig.png') }}" alt="">Instagram
                        </a>
                    </div>
                    <div class="div-block-12">
                        <a style=" padding-right: 20px" href="mailto:uchebigwealth@gmail.com" target="_blank" class="">
                            <img style="margin-bottom: 5px; margin-right: 20px;" height="80" width="80" src="{{ asset('img/email.png') }}" alt="">Email
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6181b0b1a9ba753863f1b595" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('js/cobratate-v3.js') }}" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

<script>
    // Check if user has seen the popup already
    var showPopup = false;
    if (localStorage.getItem("seenPopup") === null) {
        showPopup = true;

        setTimeout(function () {
            localStorage.setItem("seenPopup", true);
            document.getElementById("Popup").style.display = "Flex";
        }, 2000);
    }
</script>

<script>
    // We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/lnixqwsm'
    (function () { var w = window; var ic = w.Intercom; if (typeof ic === "function") { ic('reattach_activator'); ic('update', w.intercomSettings); } else { var d = document; var i = function () { i.c(arguments); }; i.q = []; i.c = function (args) { i.q.push(args); }; w.Intercom = i; var l = function () { var s = d.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://widget.intercom.io/widget/lnixqwsm'; var x = d.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); }; if (document.readyState === 'complete') { l(); } else if (w.attachEvent) { w.attachEvent('onload', l); } else { w.addEventListener('load', l, false); } } })();

    console.log(showPopup);
    if (!showPopup) {
        setTimeout(function () {
            Intercom('showNewMessage');
        }, 10000);
    }

</script>
<script>
    $( document ).ready(function() {
        if (showPopup) {
            $( "#popup_close_btn" ).bind( "click", function() {
                setTimeout(function () {
                    Intercom('showNewMessage');
                }, 10000);
            });
        }
    });
</script>
<script src="{{ asset('js/megamenu.js') }}"></script>
{{--<script src="js/newsletter.js"></script>--}}
</body>

<!-- Mirrored from cobratate.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jan 2023 16:41:42 GMT -->
</html>
