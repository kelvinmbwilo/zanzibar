<!--A Design by XpertDigitalAgency
Author: Kelvin Mbwilo
Author URL: http://xpertdigitalagency.com
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Zanzibar Wonders Resort</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{ asset('demo.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('jquery.magnetize.css') }}" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
    {{HTML::script("jquery-1.9.1.min.js")}}
    {{HTML::script("bootstrap/js/bootstrap.js")}}
    {{HTML::script("Slider/source/jquery.slides.js")}}
    {{HTML::script("jquery.easing.1.3.js")}}
    {{HTML::script("jquery.magnetize.js")}}
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $('.main-3d').magnetize({layout: 0});
        });
    </script>
    {{HTML::script("demo.js")}}

</head>
<body>

        <div class="main-3d">
        </div>
        <div class="top-line act">
            <a class="logo1" href="{{ url('/') }}" style="color: white"><h1>Zanzibar Wonders - Gallery</h1> </a>
            <nav>
                <ul class="panel-but">Pages
                    <li class="act"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/') }}">About Us</a></li>
                    <li><a href="{{ url('/') }}">Tours</a></li>
                    <li><a href="{{ url('contacts') }}">Contacts</a></li>
                </ul>

                <select class="mob-panel-but" onchange="location = this.options[this.selectedIndex].value;">
                    <option value="" selected>Slideshow height</option>
                    <option class="act" value="index.html">Full-screen</option>
                    <option value="full-width.html">Full-width</option>
                    <option value="fixed.html">Fixed</option>
                </select>
                <select class="mob-panel-but" onchange="location = this.options[this.selectedIndex].value;">
                    <option value="" selected>Responsive mode</option>
                    <option value="easy-reposition.html">Easy reposition</option>
                    <option value="total-reposition.html">Total reposition</option>
                </select>
            </nav>

            <span></span>
        </div>
        <div id="level1" class="plane">
            <img src="{{ asset('pic/level1/3d10.jpg') }}" alt="3d10" />
            <div>Dolor  adipiscing leo vel suscipit placerat.</div>

            <img src="{{ asset('pic/level1/3d11.jpg') }}" />
            <div><a target="_blank" href="http://themeforest.net/user/Dream-Theme/portfolio/">Massa congue facilisis morbi</a></div>

            <img src="{{ asset('pic/level1/3d12.jpg') }}" alt="3d12" />
            <div>Nulla leo mollis leoto euismod lacus</div>

            <img src="{{ asset('pic/level1/3d13.jpg') }}" alt="3d13" />
            <div>Leo mollis lorem alido macus purus</div>

            <img src="{{ asset('pic/level1/3d14.jpg') }}" alt="3d14" />
            <img src="{{ asset('pic/level1/3d15.jpg') }}" alt="3d15" />

            <img src="{{ asset('pic/level1/3d17.jpg') }}" alt="3d17" />
            <div><a target="_blank" href="http://themeforest.net/user/Dream-Theme/portfolio/">Massa congue facilisis morbi</a></div>

            <img src="{{ asset('pic/level1/3d18.jpg') }}" alt="3d18" />
            <img src="{{ asset('pic/level1/3d19.jpg') }}" alt="3d19" />
            <img src="{{ asset('pic/level1/3d2.jpg') }}" alt="3d2" />
            <span>Glavrida commodo purus vehicula massa congue facilisis morbi in nibh massa.</span>
        </div>
        <div id="level2" class="plane">
            <img src="{{ asset('pic/level2/3d23.jpg') }}" alt="3d23" />
            <div><a target="_blank" href="http://themeforest.net/user/Dream-Theme/portfolio/">Massa congue facilisis morbi</a></div>

            <img src="{{ asset('pic/level2/3d24.jpg') }}" alt="3d24" />
            <span>Glavrida commodo purus vehicula massa congue facilisis morbi in nibh massa.</span>

            <img src="{{ asset('pic/level2/3d26.jpg') }}" alt="3d26" />
            <div>Nulla leo mollis leoto euismod lacus</div>

            <img src="{{ asset('pic/level2/3d27.jpg') }}" alt="3d27" />
            <div><p>Corando dipiscing leo vel suscipit nulla. Leo mollis lorem a leoto euismod lacus purus.</p></div>

            <img src="{{ asset('pic/level2/3d28.jpg') }}" />
            <img src="{{ asset('pic/level2/3d29.jpg') }}" alt="3d29" />
            <img src="{{ asset('pic/level2/3d3.jpg') }}" alt="3d3" />

            <img src="{{ asset('pic/level2/3d20.jpg') }}" alt="3d20" />
            <span>Glavrida commodo purus vehicula massa congue facilisis morbi in nibh massa.</span>

            <img src="{{ asset('pic/level2/3d9.jpg') }}" alt="3d9" />
            <img src="{{ asset('pic/level2/3d64.jpg') }}" alt="3d64" />
        </div>
        <div id="level3" class="plane">

    </div>

</body>
</html>



