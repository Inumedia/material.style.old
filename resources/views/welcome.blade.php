<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="/bootstrap-material-design/dist/css/material-fullpalette.min.css" rel="stylesheet" title="Default Style">
        <link href="/bootstrap-material-design/dist/css/ripples.min.css" rel="stylesheet" title="Default Style">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href="/bootstrap-material-design/dist/css/material.min.css" rel="stylesheet" title="Default Style">
        <link href="/css/style.css" rel="stylesheet" title="Default Style">
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="/skrollr/dist/skrollr.min.js"></script>
    </head>
    <body>
        <div class="header-panel shadow-z-1 well-material-cyan-500" data-0="height:400px;" data-100="height:80px;">
            <div class="headerCell"><div class="headerContent">
            <h1 class="title" data-0="font-size:48px;" data-100="font-size:36px">Material Style</h1>
            <h2 class="tagline" data-0="opacity:1;" data-75="opacity:0;">The art of designing with the physical world in mind.</h2>
            </div></div>
        </div>
        <div class="container-fluid main col-xs-12 col-sm-12 col-md-10 col-lg-8 center-block" id="skrollr-body">
            <div class="panel page active shadow-z-1" style="height:400px;">
            <div class="col-xs-6 description"><p>Hello world! Soon there will be a lot of content here, be ready!</p></div>
            <div class="col-xs-6 previewImage" style="background:url('/images/Google-material.png');background-size: cover;"></div>
            </div>
            <div class="panel page active" style="height: 1920px;">
            Hello,<br>Here is a little week end exploration of how Google could look like with the material design. I will add the animations next week. Just a concept. Btw, It's not a fixed footer, the footer is at the bottom of all the results of the page, (I just included it so you can see it).<br>
I love comments, feedbacks, discussions.<br>PS: I also included a random variation.<br><br>PS2: FEATURED on TheVerge: http://www.theverge.com/2014/12/4/7331767/google-com-material-design-concept <br>And FastCompanies: http://www.fastcodesign.com/3039220/what-googlecom-would-look-like-with-a-material-design-revamp<br>
<br>Have an outstanding day
            </div>
            <a href="#" class="well-link">
            <div class="panel page active shadow-z-1">
                Load more
            </div>
            </a>
        </div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
        <script src="/bootstrap-material-design/dist/js/material.min.js"></script>
        <script src="/bootstrap-material-design/dist/js/ripples.min.js"></script>
        <script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
        <script>
            $("#dropdown-menu select").dropdown();

            function makeAbsolute(selector){
                var jqElem = $(selector);
                var jqElemPos = jqElem.position();
                jqElem.css({
                    top: jqElemPos.top + "px",
                    left: (jqElemPos.left) + "px",
                    position: "absolute"
                });
            }

            makeAbsolute(".tagline");
            makeAbsolute(".title");
            setTimeout(function(){
                $(".title, .tagline, .header-panel").addClass("headerAbsolute");
                setTimeout(function(){
                    $("body").css("overflow", "auto");
                    $(".header-panel").css({
                        "transition": "none",
                        "-webkit-transition": "none"
                    });
                    var skroll = skrollr.init();
                }, 2000);
            }, 250);


            $(function(){
                var bodyElement = $("html");

                
                $(".panel").css({
                    "position": "relative",
                    "top": bodyElement.height() + "px",
                    "opacity": "0.25",
                    "-webkit-animation": "slide 1s forwards",
                    "-webkit-animation-delay": "1s",
                    "animation": "slide 1s forwards",
                    "animation-delay": "1s",
                    "display": "block"
                });
            });
        </script>
    </body>
</html>
