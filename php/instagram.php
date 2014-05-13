<?php
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);
*/
function callInstagram($url){
    $ch = curl_init();
    curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => 2
    ));

    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

$tag = 'punk';
$client_id = "860f0e5d8ebf42ec8acc9ded7d51f02d";

$url = 'https://api.instagram.com/v1/tags/'.$tag.'/media/recent?client_id='.$client_id;

$inst_stream = callInstagram($url);
$results = json_decode($inst_stream, true);

//Now parse through the $results array to display your results...
echo "var data = new Array();
";
foreach($results['data'] as $item){
    echo "data.push('".$item['images']['low_resolution']['url']."');
";
}
?>
        var bg_x = 0;
        var bg_y = 0;

        function updateBgPos (prog){
            bg_x+=10;
            prog.style.backgroundPosition = bg_x+'px '+bg_y+'px';
        }
    
        function loadSerie(div2play, tot, prog){

            var album=[], L=tot, tem, url, step_height, j;
			div2play.style.cursor='progress';
            step_height = Math.round(prog.offsetHeight/tot);
            
            div2play.preloader = setInterval(function(){
                updateBgPos(prog);
            }, 30);

            for(var i=0; i<tot; i++){
                tem = new Image;                
                url = data[i];

                tem.onload= function(){
                    album.push(this.src);
                    bg_y+=step_height;
                }
                tem.onerror= function(){
                    if(typeof er== 'function') album.push(er(this.src));
                    else album.push('');
                }
                tem.src= url;

                // attend to images in cache (may not fire an onload in some browsers):
                if(tem.complete && tem.width> 0){
                    album.push(tem.src);
                    tem.onload= '';
                    bg_y+=step_height;
                }
            }

            div2play.tryAlbum = setInterval(function(){
                if(L==album.length){
                    clearInterval(div2play.tryAlbum);
                    clearInterval(div2play.preloader);
                    div2play.tryAlbum = null;
					window.isPreloading = false;
                    div2play.style.cursor='default';
                    return playTimelapse(div2play, tot);
                }
            }, 200);
        }

        function playTimelapse(div2play, tot){

			if(div2play.getAttribute("data-play") == 1){
				clearInterval(div2play.loop);
				div2play.setAttribute("data-play", 0);
			}
			else {
				var c = div2play.getAttribute("data-current");
				div2play.setAttribute("data-play", 1);
				div2play.loop = setInterval(function() {
					div2play.style.backgroundImage="url("+data[c]+")";
					div2play.setAttribute("data-current", c);
					c++;
					if(c>tot){
						c=0;
					}
				}, 200);
			}

        }

        function preloadAll(){
			if(window.isPreloading == false){
				var div2play = document.getElementById("drinkalltheminibar");
                var prog = document.getElementById("datm-logo");
				var tot = data.length-1;
				window.isPreloading = true;
	            loadSerie(div2play, tot, prog);
			}
        }

        var isPreloading = false;