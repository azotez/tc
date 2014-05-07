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
#datm-logo {
    width: 35%;
    padding: 1%;
    border-radius: 50%;
    background-color: rgba(255,255,255,0);
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
    /*background-color:#ed1c24;
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
background-image: linear-gradient(to left top, #000000 0px, transparent 1px);*/
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
@-webkit-keyframes borderfade {
  0% { background-color: rgba(255,255,255,0.1); }
  50%   { background-color: rgba(255,255,255,0.4); }
  100% { background-color: rgba(255,255,255,0.1); }
}
@-moz-keyframes borderfade {
  0% { background-color: rgba(255,255,255,0.1); }
  50%   { background-color: rgba(255,255,255,0.4); }
  100% { background-color: rgba(255,255,255,0.1); }
}
@-o-keyframes borderfade {
  0% { background-color: rgba(255,255,255,0.1); }
  50%   { background-color: rgba(255,255,255,0.4); }
  100% { background-color: rgba(255,255,255,0.1); }
}
@keyframes borderfade {
  0% { background-color: rgba(255,255,255,0.1); }
  50%   { background-color: rgba(255,255,255,0.4); }
  100% { background-color: rgba(255,255,255,0.1); }
}
.borderfadeloop {
  -webkit-animation: borderfade 0.5s infinite; /* Safari 4+ */
  -moz-animation:    borderfade 0.5s infinite; /* Fx 5+ */
  -o-animation:      borderfade 0.5s infinite; /* Opera 12+ */
  animation:         borderfade 0.5s infinite; /* IE 10+ */
}
@-webkit-keyframes borderfadeout {
  from { background-color: rgba(255,255,255,0.4); }
  to   { background-color: rgba(255,255,255,0); }
}
@-moz-keyframes borderfadeout {
  from { background-color: rgba(255,255,255,0.4); }
  to   { background-color: rgba(255,255,255,0); }
}
@-o-keyframes borderfadeout {
  from { background-color: rgba(255,255,255,0.4); }
  to   { background-color: rgba(255,255,255,0); }
}
@keyframes borderfadeout {
  from { background-color: rgba(255,255,255,0.4); }
  to   { background-color: rgba(255,255,255,0); }
}
.borderfadeloopout {
  -webkit-animation: borderfadeout 2s; /* Safari 4+ */
  -moz-animation:    borderfadeout 2s; /* Fx 5+ */
  -o-animation:      borderfadeout 2s; /* Opera 12+ */
  animation:         borderfadeout 2s; /* IE 10+ */
  animation:         borderfadeout 2s; /* IE 10+ */
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
        <section id="watch">Watch</section>
        <section id="listen">Listen</section>
        <section id="sing">Sing</section>
        <section id="drinkalltheminibar" class="table_centered" data-current="0" data-play="0">
            <div class="cell_centered"><img src="./img/datm.svg" alt="drinkalltheminibar" id="datm-logo" class="borderfadeloop" /></div>
        </section>
        <section id="live">Live</section>
        <section id="pimp">Pimp</section>
        <section id="contact">Contact</section>
        <footer>Footer</footer>

        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/vendor/jquery.appear.js"></script>
        <script src="js/vendor/jquery.tubular.1.0.js"></script>

        <script>

        $(function() {
        //INIZIO DOC READY

            $("#navalt").fadeToggle();

            $("nav button").click(function() {
              $("nav ul").slideToggle(150);
            });

            // slide on page e testi gallery
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
            
            
            $('#watch').tubular({videoId: 'sV-2tIB9G5w', mute: false, wrapperZIndex: 3});
            
        });//FINE DOC READY

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

        </script>
    </body>
</html>
