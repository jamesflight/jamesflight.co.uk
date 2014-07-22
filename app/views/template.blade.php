<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href="/assets/public/app.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

            <div class="padding-large text-align-center black-background">
               <h1 class="alpha title-anchor white-links wide-letters"><a href="/">JAMES FLIGHT</a></h1>
               <h4 class="medium-grey-text wide-letters no-margin-bottom">Full Stack Web Developer</h4>
            </div>
                <div class="light-grey-background">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="padded-links menu-padding text-align-center">
                                <a class="" href="/">Blog</a>
                                <a class="" href="/about">About</a>
                                <a class="" onClick="_gaq.push(['_trackEvent', 'Clicks', 'Contact link clicked']);" href="mailto:jamesflight2006@gmail.com">Contact</a>
                                <a class="" onClick="_gaq.push(['_trackEvent', 'Clicks', 'Github link clicked']);" target="_blank" href="https://github.com/jamesflight"><i class="fa fa-github"></i></a>
                                <a class="" onClick="_gaq.push(['_trackEvent', 'Clicks', 'Linkedin link clicked']);" target="_blank" href="https://www.linkedin.com/pub/james-flight/44/726/41"><i class="fa fa-linkedin"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    </div>
                   
                </div>
                 <div class="triangles">
                        
                    </div>
                
            


            

        @yield('content')
        <div class="container">
            <div class="row">
            
                <div class="col-md-8 col-md-offset-2">
                    <div class="padding-medium text-align-center">
                        <p>© James Flight {{ date('Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="http://yandex.st/highlightjs/8.0/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>

        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-49964838-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
    </body>
</html>