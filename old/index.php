<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
        <meta name="keywords" content="the consultants, punk rock">
		<meta name="author" content="Davide Trevisan | azote.it">

		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/fonts.css">

		<link rel="shortcut icon" href="./img/favicons/favicon.ico">
        <link rel="apple-touch-icon" href="./img/favicons/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="57x57" href="./img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="72x72" href="./img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="./img/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="144x144" href="./img/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="57x57" href="./img/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="./img/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="114x114" href="./img/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="144x144" href="./img/favicons/apple-touch-icon-152x152.png">

		<script src="js/vendor/modernizr-2.6.2.min.js"></script>

		<style type="text/css">
html {
	height:100%;
}
body {
	height:100%;
    /*
    background-image: -webkit-gradient(
	linear,
	left top,
	left top,
	color-stop(0, #1313F2),
	color-stop(1, #30C8FF)
);
background-image: -o-linear-gradient(left top, #1313F2 0%, #30C8FF 100%);
background-image: -moz-linear-gradient(left top, #1313F2 0%, #30C8FF 100%);
background-image: -webkit-linear-gradient(left top, #1313F2 0%, #30C8FF 100%);
background-image: -ms-linear-gradient(left top, #1313F2 0%, #30C8FF 100%);
background-image: linear-gradient(to left top, #1313F2 0%, #30C8FF 100%);
*/
}
section {
	display:inline-block;
	width:100%;
	height:100%;
	padding: 0;
	margin: 0;
	max-width: 100%;
}
nav {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
  font-size: 28px;
  line-height: 35px;
  width:49px;
  vertical-align:middle;
  text-align:center;
  outline:none;
}
nav button {
    position:relative;
	padding: 0;
	margin: 0;
    top:0;
    left:0;
    width:49px;
    height:49px;
    background:transparent;
    border:0;
}
nav ul {
	display: none;
	position:relative;
    left:0;
	padding:0;
	margin:0;
    width:49px;
    overflow:hidden;
}
nav ul li {
	padding: 7px;
}
nav button, nav a {
    color:#FFF;
    text-decoration:none;
}
.bigtext{
    font-family:Arial;
}
.theme.bigtext{
    font-family:Arial;
}
.table_centered {
    display:table;
    text-align:center;
}
.cell_centered {
    display:table-cell;
    vertical-align:middle;
}
#navalt-img {
    width: 77%;
    padding-left:25px;
}
#navalt {
    background-image: none;
    position:fixed;
    z-index:1020;
}
#watch {
	/*
    background-color:#ed1c24;
    background-image: -webkit-gradient(
	linear,
	left top,
	left top,
	color-stop(0, #000000),
	color-stop(1px, transparent)
);
background-image: -o-linear-gradient(left top, #000000 0px, transparent 1px);
background-image: -moz-linear-gradient(left top, #000000 0px, transparent 1px);
background-image: -webkit-linear-gradient(left top, #000000 0px, transparent 1px);
background-image: -ms-linear-gradient(left top, #000000 0px, transparent 1px);
background-image: linear-gradient(to left top, #000000 0px, transparent 1px);
	*/
    background-repeat: repeat;
    background-image: url('./img/back.gif');
}
#listen {
    background-color:#f15623;
}
#sing {
    background-color:#fbdd00;
}
#live {
    background-color:#74c044;
}
#drinkalltheminibar {
    background-color:#00a9ea;
    background-position: 50% 0;
}
#pimp {
    background-color:#1d439b;
}
#contact {
    background-color:#c82790;
}
@-webkit-keyframes strobo {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
@-moz-keyframes strobo {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
@-o-keyframes strobo {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
@keyframes strobo {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
#navalt-img {
  -webkit-animation: strobo 100ms infinite; /* Safari 4+ */
  -moz-animation:    strobo 100ms infinite; /* Fx 5+ */
  -o-animation:      strobo 100ms infinite; /* Opera 12+ */
  animation:         strobo 100ms infinite; /* IE 10+ */
}
#datm-logo {
    width: 35%;
    border-radius: 50%;
    background-color: #009cc8;
    background-image: url('./img/wave.svg');
    background-repeat:repeat-x;
}

/* invia con progress bar */
.progress-button {
    position: relative;
    display: inline-block;
    padding: 0 35px;
    outline: none;
    border: 1px solid #a52278;
    text-transform: uppercase;
	font-weight:bold;
    font-size: 1em;
    line-height: 4;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
    background-color:#c7288c;
    -moz-transition: background-color 0.2s ease-in 0s;
    -webkit-transition: background-color  0.2s ease-in; /*safari and chrome */
    -o-transition: background-color  0.2s ease-in; /* opera */
}
.progress-button:hover {
    background-color: #a52278;
    background-color: 1px solid #55143e;
}
.progress-button[disabled],
.progress-button[disabled].state-loading {
    cursor: default;
} 
.progress-button .content {
    position: relative;
    display: block;
} 
.progress-button .content::before,
.progress-button .content::after  {
    position: absolute;
    right: 14px;
    color: #55143e;
    font-family: "untitled-font-1";
    opacity: 0;
    transition: opacity 0.3s 0.3s;
} 
.progress-button .content::before {
    content: "H"; /* Checkmark for success */
	color:#090;
} 
.progress-button .content::after {
    content: "E"; /* Cross for error */
	color:#C00;
} 
.progress-button.state-success .content::before,
.progress-button.state-error .content::after {
    opacity: 1;
} 
.notransition {
    transition: none !important;
} 
.progress-button .progress {
    background: #a52278;

}              
.progress-button .progress-inner {
    position: absolute;
    left: 0;
    background: #c82790;
} 
.progress-button[data-horizontal] .progress-inner {
    top: 0;
    width: 0;
    height: 100%;
    transition: width 0.3s, opacity 0.3s;
} 
.progress-button[data-vertical] .progress-inner {
    bottom: 0;
    width: 100%;
    height: 0;
    transition: height 0.3s, opacity 0.3s;
}
/* Individual styles */
/* Choose the effect(s) you want, delete the rest */
/* Fill horizontal */
/* ====================== */
.progress-button[data-style="fill"][data-horizontal] {
	overflow: hidden;
}
.progress-button[data-style="fill"][data-horizontal] .content {
	z-index: 10;
	-webkit-transition: -webkit-transform 0.3s;
	transition: transform 0.3s;
}
.progress-button[data-style="fill"][data-horizontal] .content::before,
.progress-button[data-style="fill"][data-horizontal] .content::after {
	top: 100%;
	right: auto;
	left: 50%;
	-webkit-transition: opacity 0.3s;
	transition: opacity 0.3s;
	-webkit-transform: translateX(-50%);
	transform: translateX(-50%);
}
.progress-button[data-style="fill"][data-horizontal].state-success .content,
.progress-button[data-style="fill"][data-horizontal].state-error .content {
	-webkit-transform: translateY(-100%);
	transform: translateY(-100%);
}
/* fine invia con progress bar */
#mailForm {
    display: inline-block;
    width: 84%;
    margin: 14% 0;
}
#message {
        outline:none;
        margin: 0 0 70px 0;
        padding: 0;
        border: 0;
/*        font-family: 'Marck Script', cursive;*/
        font-size: 21px;
        line-height: 35px;
        resize: none;
        width: 100%;
        height: 420px;
        color: #55143e;
        background: linear-gradient(
          to bottom,
          #c82790,
          #c82790 34px,
          #a52278 34px,
          #a52278
        );
        background-size: 100% 35px;
}
#message:focus, #message:hover, #message:active {
        border: 0;
}
#message::-webkit-input-placeholder {
   color: #a52278;
}

#message:-moz-placeholder { /* Firefox 18- */
   color: #a52278;  
}

#message::-moz-placeholder {  /* Firefox 19+ */
   color: #a52278;  
}

#message:-ms-input-placeholder {  
   color: #a52278;  
}      
#message:placeholder {  
   color: #a52278;  
}
#home {
	background-image: -webkit-gradient(
	linear,
	left top,
	right bottom,
	color-stop(0, #C70AAB),
	color-stop(1, #EDF028)
);
background-image: -o-linear-gradient(right bottom, #C70AAB 0%, #EDF028 100%);
background-image: -moz-linear-gradient(right bottom, #C70AAB 0%, #EDF028 100%);
background-image: -webkit-linear-gradient(right bottom, #C70AAB 0%, #EDF028 100%);
background-image: -ms-linear-gradient(right bottom, #C70AAB 0%, #EDF028 100%);
background-image: linear-gradient(to right bottom, #C70AAB 0%, #EDF028 100%);
}

#tc-logo {
    width: 77%;
	max-height: 90%;
}

</style>

    </head>

	<body>
        <nav>
            <button type="button" data-icon="l"></button>
            <ul>
                <li><a href="#watch" data-icon="U" data-image="watch.svg" title="Watch" data-color="#ed1c24"></a></li>
                <li><a href="#listen" data-icon="f" title="Listen" data-image="listen.svg" data-color="#f15623"></a></li>
                <li><a href="#sing" data-icon="q" title="Sing" data-image="sing.svg" data-color="#fbdd00"></a></li>
                <li><a href="#live" data-icon="j" title="Live" data-image="live.svg" data-color="#74c044"></a></li>
                <li><a href="#drinkalltheminibar" data-icon="C" title="#drinkalltheminibar" data-image="drink.svg" data-color="#00a9ea"></a></li>
                <li><a href="#pimp" data-icon="W" title="Pimp" data-image="pimp.svg" data-color="#1d439b"></a></li>
                <li><a href="#contact" data-icon="N" title="Contact" data-image="contact.svg" data-color="#c82790"></a></li>
            </ul>
        </nav>
        <section id="navalt" class="table_centered"><div class="cell_centered"><img id="navalt-img" alt="" /></div></section>
        <section id="home" class="table_centered" data-current="0" data-play="0">
            <div class="cell_centered"><img src="./img/tclogo.svg" alt="The Consultants" title="The Consultants" id="tc-logo" /></div>
        </section>        
        <section id="watch"><?php require('./php/youtube.php'); ?></section>
        <section id="listen"><p id="video-controls" class="black-65">
<a href="#" class="tubular-play">Play</a>|<a href="#" class="tubular-pause">Pause</a>|<a href="#" class="tubular-volume-up">Volume Up</a>|<a href="#" class="tubular-volume-down">Volume Down</a>|<a href="#" class="tubular-mute">Mute</a>
</p><?php /*require('./php/music.php');*/ ?></section>
        <section id="sing">Sing</section>
        <section id="drinkalltheminibar" class="table_centered" data-current="0" data-play="0">
            <div class="cell_centered"><img src="./img/datm.svg" alt="drinkalltheminibar" id="datm-logo" /></div>
        </section>
        <section id="live">Live</section>
        <section id="pimp">Pimp</section>
        <section id="contact" class="table_centered">
            <form id="mailForm" action="sendmail.php" method="get" enctype="multipart/form-data" class="cell_centered">
                <textarea name="message" id="message" title="message" placeholder="Type here your message.."></textarea><br><br>
                <button type="submit" class="progress-button" data-style="fill" data-horizontal>Send</button>
            </form>
        </section>
        <footer>Footer</footer>

        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/vendor/jquery.appear.js"></script>
        <script src="js/vendor/jquery.tubular.1.0.js"></script>
        <script src="js/vendor/classie.js"></script>
        <script src="js/vendor/progressButton.js"></script>
		
        <script>
        
        //INIZIO DOC READY
        $(function() {

            $("#navalt").fadeToggle();

            $("nav button").click(function() {
              $("nav ul").slideToggle(150);
            });

            // SCROLL TO PAGE E HOVER BACKGOUNDS
            $("a[href^='#']").click(function() {
                $('html, body').animate({ scrollTop: $(this.hash).offset().top }, 500);
                $("#navalt").css("background", "none");
                e.preventDefault();
            });

            /*
            // apri link in blank
            $("a").click(function() {
                if(window.location.href.indexOf('theconsultants.it')<1){
                    window.open(this.href);
                    return false;
                }
            });
            */

            $("nav a").hover(function() {
              $("#navalt").css("background-color", $(this).attr('data-color'));
              $("#navalt-img").attr("src", './img/'+$(this).attr('data-image'));
              $("#navalt").fadeToggle(150);
            }, function(){
              // out function
              $("#navalt").fadeToggle(150);
            });         
            
			
        });//FINE DOC READY

            // #WATCH
			$('#watch').appear();
            $(document.body).on('appear', '#watch', function(e, $affected) {
				$('#watch').tubular({videoId:'sV-2tIB9G5w', mute:false, wrapperZIndex:3});                
            });
			/*
            $(document.body).on('disappear', '#watch', function(e, $affected) {
				// metti video in pausa
               // window.player.pauseVideo(); 
            });
			*/
            // FINE #WATCH

            // #DRINKALLTHEMINIBAR
            <?php require('./php/instagram.php'); ?>

            // da qui serve plugin jquery.appear
            var div2play = document.getElementById("drinkalltheminibar");
            $('#drinkalltheminibar').appear();
            $(document.body).on('appear', '#drinkalltheminibar', function(e, $affected) {
                if(div2play.getAttribute("data-play") == 0){
                    preloadAll();
                }
            });
            $(document.body).on('disappear', '#drinkalltheminibar', function(e, $affected) {
                if(div2play.getAttribute("data-play") == 1){
                    clearInterval(div2play.loop);
                    div2play.setAttribute("data-play", 0);
                }
            });
            // FINE #DRINKALLTHEMINIBAR
            
            
            // #CONTACT
            function jqxhr(instance, interval) {
			var getVars = $("#mailForm").serialize();

			$.get( "sendmail.php", getVars, function( data ){})
			.done(function( data ) {
				if(data == '1'){
					instance._stop(0);
					clearInterval( interval );
				}
				else {
                        instance._stop(-1);
                        clearInterval( interval );
                    }
                })
                .fail(function() {
                    instance._stop(-1);
                    clearInterval( interval );
                });
                return false;
            }

            [].slice.call( document.querySelectorAll( 'button.progress-button' ) ).forEach( function( bttn ) {
                new ProgressButton( bttn, {
                    callback : function( instance ) {
                        var progress = 0,
                            interval = setInterval( function() {
                                progress = Math.min( progress + Math.random() * 0.1, 1 );
                                instance._setProgress( progress );
                                    if( progress === 1 ) {
                                    instance._stop(-1);
                                    clearInterval( interval );
                                }
                            }, 200 );
                            jqxhr(instance, interval);
                    }
                } );
            } );
            // FINE #CONTACT

        </script>
    </body>
</html>
