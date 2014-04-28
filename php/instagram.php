<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
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
        function loadSerie(div2play, tot, prog, progfb){

            var album=[], L=tot, tem, url;
			div2play.style.cursor='progress';

            for(var i=0; i < data.length; i++){
                tem= new Image;
                url= data[i];
                tem.onload= function(){
                    prog.value += 1;
					progfb.width = (i/tot)*100+"%";
                    album.push(this.src);
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
                }
            }

            div2play.tryAlbum = setInterval(function(){
                if(L==album.length){
                    clearInterval(div2play.tryAlbum);
                    div2play.tryAlbum = null;
					div2play.style.cursor = 'pointer';
					window.isPreloading = false;
                    return playTimelapse(div2play, tot);
                }
            },
            100);
        }

        function playTimelapse(div2play, tot){

			var prog = document.getElementById("drinkalltheminibar-prog");
			var progfb   = document.getElementById("drinkalltheminibar-progfb");
			prog.style.bottom = "-7px";
			progfb.style.bottom = "-7px";

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
				}, 150);
			}

        }

        function preloadAll(){
			if(window.isPreloading == false){
				var div2play = document.getElementById("drinkalltheminibar");
				var tot = data.length;
				var prog = document.getElementById("drinkalltheminibar-prog");
				var progfb = document.getElementById("drinkalltheminibar-progfb");
				prog.style.bottom = "0";
				progfb.style.bottom = "0";
				window.isPreloading = true;
	            loadSerie(div2play, tot, prog, progfb);
			}
        }

        var isPreloading = false;
        preloadAll();
