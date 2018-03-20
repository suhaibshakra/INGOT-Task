
<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
    <title>INGOT Task</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   
    <script type="application/x-javascript">
        addEventListener("load", function() {
            @if( old('name'))
       console.log("==================================================");
       $(".send-button.wthree.agileits").click();
       @endif
        }, false);

        @yield('css')
    </script>
    <!-- //Meta-Tags -->

    <!-- Custom-Style-Sheet -->
    <link href="{{config('view.public')}}/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="{{config('view.public')}}/css/style.css" type="text/css" media="all">
    <!-- //Custom-Style-Sheet -->

    <link rel="stylesheet" href="{{config('view.public')}}/css/font-awesome.css">
    <!-- Font-Awesome-Icons-CSS -->

    <!-- Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css" media="all">
    <!-- //Fonts -->
</head>
<!-- //Head -->

<!-- Body -->

<body>
@yield('content')
    

    <script type="text/javascript" src="{{config('view.public')}}/js/jquery-2.1.4.min.js"></script>

    <!-- pop-up-box-js-file -->
    <script src="{{config('view.public')}}/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!--//pop-up-box-js-file -->
    <script>
        $(document).ready(function() {
            $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
 
     

    </script>

</body>
<!-- //Body -->

</html>