<?php
if($_POST["Message"]) {
mail("john@johndoe.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: jane@janedoe.com");
}
?>
<!DOCTYPE html>
<html class="animated fadeIn">

<head>
    <title>Murray Masks</title>
    <meta property="og:url" content="https://murraymasks.com" />
    <meta property="og:title" content="Murray Masks" />
    <meta property="og:description" content="Translating for Humanity: On-Demand Translators for Refugees" />
    <meta property="og:image" content="https://tarjim.ly/images/SocialShare/homePreview.jpg" />
    <meta property="og:image:secure_url" content="https://tarjim.ly/images/SocialShare/SocialShare/homePreview.jpg" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="fb:app_id" content="1602801866685131">
    <meta property="og:type" content="website">
    <meta charset="UTF-8">

    <!-- <link rel="shortcut icon" href="/images/favicon.ico" /> -->
    <link rel="shortcut icon" href="https://www.customfacemasks.com/custom-facemasks/favicon.ico" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css"
        crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.2/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.2/motion-ui.css">
    <link rel="stylesheet" href="css/testimonials.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/thorne_styles.css">

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '116509022235902');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=116509022235902&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body>

    <!--  Navbar-->
    <header class="header scrolled transparent animated fadeIn delay-1s">
        <div class="inner-header">
            <div id="left-header">
                <a href="index.html"><a href="index.html" id="top-logo" class="nav-logo-scroll"></a></a>
            </div>

            <nav id="center-header" class="dropdown menu horizontal" data-dropdown-menu>
                <li>
                    <a class="nav-button nav-secondary" href="customfacemasks.html">Custom Face Masks</a>
                    <!-- <ul class="dropdown-content">
                        <li><a class="bottom-border" href="orthotics.html">CUSTOM ORTHOTICS</a></li>
                        <li><a class="bottom-border" href="customfacemasks.html">CUSTOM FACE MASKS</a></li>
                     </ul> -->
                </li>

                <li>
                    <a class="nav-button nav-secondary" href="about_us.html">About Us</a>
                    <!-- <ul class="dropdown-content">
                        <li><a class="bottom-border" href="/staff">Staff</a></li>
                        <li><a class="bottom-border" href="/faq">FAQ</a></li>
                    </ul> -->
                </li>


                <li>
                    <a class="nav-button nav-secondary" href="contact.html">Contact</a>
                    <!-- <ul class="dropdown-content">
                        <li><a class="bottom-border" href="/stories">Stories</a></li>
                    </ul> -->
                </li>

            </nav>

            <div class="custom-toggler" data-responsive-toggle="center-header" data-hide-for="medium">
                <button class="menu-icon" type="button" data-toggle="center-header"></button>
            </div>
        </div>
    </header>

    <script src="/pixels/googleAnalytics.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        var faded = true;
        var ontop = true;
        var open = false;
        $('#top-logo').removeClass('nav-logo-scroll');
        $('#top-logo').addClass('nav-logo');
        $("#mobile-logo").attr("src", "/images/tarjimlyLogos/SmileLogoWhiteWideWordmark.png");

        $(window).scroll(function () {
            if ($(this).scrollTop() > 60) {
                faded = false;
                ontop = false;
                $('.header').removeClass('transparent');
                $('.navbar').removeClass('transparent');
                $('#top-logo').removeClass('nav-logo');
                $('#top-logo').addClass('nav-logo-scroll');
                $('.header').addClass('divider');
                $('.navbar').addClass('divider');
                $("#mobile-logo").attr("src", "/images/tarjimlyLogos/SmileLogoWideWordmark.png");
            } else if (!open) {
                faded = true;
                ontop = true;
                $('.header').addClass('transparent');
                $('.navbar').addClass('transparent');
                $('#top-logo').addClass('nav-logo');
                $('#top-logo').removeClass('nav-logo-scroll');
                $('.header').removeClass('divider');
                $('.navbar').removeClass('divider');
                $("#mobile-logo").attr("src", "/images/tarjimlyLogos/SmileLogoWhiteWideWordmark.png");
            } else {
                faded = false;
                ontop = true;
                $('.header').removeClass('transparent');
                $('.navbar').removeClass('transparent');
                $('#top-logo').removeClass('nav-logo');
                $('#top-logo').addClass('nav-logo-scroll');
                $('.header').addClass('divider');
                $('.navbar').addClass('divider');
                $("#mobile-logo").attr("src", "/images/tarjimlyLogos/SmileLogoWhiteWideWordmark.png");
            }
        });

        $("#cbutton").click(() => {
            open = !open;
            if (ontop && faded) {
                faded = false;
                $('.navbar').removeClass('transparent');
            } else if (ontop && !faded) {
                faded = true;
                $('.navbar').addClass('transparent');
            }
        })

    </script>
    <!--end of Navigation Bar-->

    <!--    Main Landing -->
    <section style="background-color: rgba(0, 0, 0, 1); padding-bottom: 80px;">
        <div class="container" style="margin: 80px 0 0 0;">
            <div class="row align-items-center">
                <div class="col-lg-8 order-lg-0 ml-6">
                    <br><br>
                    <h2 class="section-header-5" id="professional_testimonials" style="text-align:left; color: white;">
                        Get in touch</h2>
                    <!-- <br><br><br> -->
                    <!-- <p class="lead" style="color: white;">We are experts in the field of custom orthotics</p> -->

                </div>
            </div>
        </div>
    </section>


    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LeWUf8kAAAAAHmvgIEuMK6km9zcGkgDJdC7K94o"></script>
    <script>
        grecaptcha.enterprise.ready(function() {
            grecaptcha.enterprise.execute('6LeWUf8kAAAAAHmvgIEuMK6km9zcGkgDJdC7K94o', {action: 'login'}).then(function(token) {
            });
        });
        </script>
    <!--About Us Section-->
    <section class="pd-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 p-4">
                    <img class="img-fluid rounded center-block" src="pics/jeremy_1.png" alt="">
                </div>
                <div class="col-lg-6 order-lg-1 p-4" style="background-color: #f6f6f6; text-align: center;">
                    <h2 class="section-header-5">Get in touch</h2><br>
                    <!-- <h4 class="section-header-1">&#8212 How It Works</h4> -->
                    <!-- <h2 class="section-header-2">Have Your Own Custom Mask</h2> -->





                    <form method="post" action="subscriberform.php">
                    <textarea name="message"></textarea>
                    <input type="submit">
                    </form>



                </div>


            </div>
        </div>
    </section>



    <!--   Footer -->
    <footer>
        <div class="container">
            <div class="row" style="border-bottom:1px solid #6f6f70; padding-bottom: 5px;">

                <!--Contact Information-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <ul class="fa-ul">
                        <li>
                            <i class="fa-li fa fa-map-marker fa-lg" aria-hidden="true"></i>
                            Hellner and Associates <br>2233 Euler Rd <br>Brighton, MI 48114
                        </li>
                        <li class="middle"><i class="fa-li fa fa-phone fa-lg" aria-hidden="true"></i><a
                                href="tel:+17326075579">+1-586-243-5175</a></li>
                        <li><i class="fa-li fa fa-envelope" aria-hidden="true"></i><a
                                href="mailto:jmurray.mhsrc@gmail.com">jmurray.mhsrc@gmail.com</a></li>
                    </ul>
                </div>
                <!-- about us quick links -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <ul class="no-bullet">
                        <li><a href="about_us.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>


            </div>

            <!--Footer Bottom & Copyrights-->
            <div class="row" style="position: relative; top: 20px;">
                <div class="col-sm-6">
                    <p style="color:#a8d5ff; font-size:16px;">@ Copyright 2023 Murray Masks &#8212 All
                        Right's Reserved</p>
                </div>
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js"
        crossorigin="anonymous"></script>
    <script>
        $(document).foundation();
    </script>
    <!--end of Footer Script-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.2/dist/bootstrap-table.min.js"></script>
    <script src="javascript/langAvailable.js"></script>
</body>

</html>