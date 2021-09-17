<center>
    <h2> Como deseas Seguir nuestra Transmision ??...</h2>

    <br><br>
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="width: 22.8%;margin-left: 15em;">
        <div class="blogposttwo">
            <figure>
                <a href="radio_en_vivo.php" target="new_">
                    <img src="style/images/online.jpg" class="img-responsive hovereffect" style="height: 11em;">

                </a>
            </figure>
            <div class="text">
                <a href="radio_en_vivo.php" class="btn btn-primary btn-xs backcolor">Por Radio Online</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>


    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="width: 22.8%;">
        <div class="blogposttwo">
            <figure>
                <a href="">
                    <img src="style/images/youtube.jpg" class="img-responsive hovereffect" style="height: 13em;">

                </a>
            </figure>
            <div class="text">
                <a href="" class="btn btn-primary btn-xs backcolor">Por Youtube</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>




    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="width: 22.8%;">
        <div class="blogposttwo">
            <figure>
                <a href="https://www.facebook.com/fidesbermejo">
                    <img src="style/images/facebook.jpg" class="img-responsive hovereffect" style="height: 11em;">

                </a>
            </figure>
            <div class="text">
                <a href="https://www.facebook.com/fidesbermejo" class="btn btn-primary btn-xs backcolor">Por Facebook</a>
            </div>
        </div>
        <div class="clearfix"></div>
        <br><br><br>
    </div>






    <!--div class="sections">
                        <h2 class="heading">Brotcast </h2>
                        <div class="clearfix"></div>
                        <div class="soundcloud">
                            <iframe height="450" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/29006454&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
                        </div>
                    </div-->


    <!--div class="navbar section" id="navbar">
    </div>
    

    <div class="margin">
        <div id="player">

            <audio autoplay="true" controls="" id="audio" max="1" oncontextmenu="return false" ondragstart="return
false" onselectstart="return false" preload="auto" tabindex="0" type="audio/mpeg">
                <source src="https://docs.google.com/uc?export=download&amp;id=0B_iYLIn2GEFSdGxvWkluWndrWVU" type="audio/mp3">
                </source>
                <input id="mislider" max="1" min="0" step="0.1" type="range" value="0.5" />
                <span id="valor"></span>


                Hola, tu navegador no está actualizado y no puede mostrar este contenido.
            </audio>
        </div>


        <!?php
$ver = Brotcast::getAll();
if (count($ver) > 0) {
?>
        <ul id="playlist" oncontextmenu="return false" ondragstart="return false" onselectstart="return false">

        <div class="box-body">
			<table id="example1" class="table table-bordered table-striped">

            <thead>
					<tr>
						<th>Titulo</th>
                        <th>Audio</th>

					</tr>
				</thead>
                <!?php foreach ($ver as $c) : ?>
					<tr>
						<td><!?= $c->id; ?></td>
                        <td>
                            <!-a href="https://docs.google.com/uc?export=download&amp;id=0B_iYLIn2GEFSZHNFVURCc1FXb00"-->
    <!--a href="servidor/style/brotcast/<!?= $c->audio ; ?>">
                        <!?= $c->titulo;?> 
                        </a></td>


                    </tr>

                    <!?php endforeach; ?>

            </table>
        </div>


        <!-?php
} else {
	echo "<h5><br>Lo siento No Existe - Datos Registrado  <b>:(</b></h5>";
?>
<!?php
}
?>
        </ul>







    </div>
    <script>
        //<![CDATA[
        var audio;
        var playlist;
        var tracks;
        var current;

        init();

        function init() {
            current = 0;
            audio = $('audio');
            playlist = $('#playlist');
            tracks = playlist.find('li a');
            len = tracks.length - 1;
            audio[0].volume = 1;
            playlist.find('a').click(function(e) {
                e.preventDefault();
                link = $(this);
                current = link.parent().index();
                run(link, audio[0]);
            });
            audio[0].addEventListener('ended', function(e) {
                current++;
                if (current > len) {
                    current = 0;
                    link = playlist.find('a')[0];
                } else {
                    link = playlist.find('a')[current];
                }
                run($(link), audio[0]);
            });
        }

        function run(link, player) {
            player.src = link.attr('href');
            par = link.parent();
            par.addClass('active').siblings().removeClass('active');
            audio[0].load();
            audio[0].play();
        }
        //]]>
    </script>
    <style>
        .margin {
            width: 400px;
            margin: 0px;
            text-align: left;
            padding: 0;
        }

        #playlist,
        #player {
            width: 400px;
            padding: 20px;
            margin: 0 auto;
            display: block;
            text-align: center;
        }

        #playlist {
            margin: 0 auto 20px auto;
            display: block;
            text-align: center;
            font-size: 12px;
            font-family: 'Trebuchet MS', Trebuchet, Verdana, sans-serif;
            font-weight: normal;
        }

        #player {
            padding: 10px 20px;
            background: url(../../../lh3.googleusercontent.com/-9dx_GmP6Yeg/U06qBO9M4EI/AAAAAAAAFEY/FXrhlltF7xc/s300/bg.png);
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        audio {
            /*volume:0;*/
            width: 300px;
            margin: 0 auto;
            display: inline-block
        }

        #playlist {
            background: #424242;
            border-top: 5px solid #9F111B;
            text-align: left;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        #playlist li,
        #playlist ul li {
            background-image: none;
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #playlist li a {
            color: #CCC;
            background: #222;
            padding: 7px 5px;
            display: block;
            padding-left: 10px;
            text-decoration: none;
        }

        #playlist li a:hover {
            background: #9F111B;
            text-decoration: none;
        }

        #playlist .active a {
            color: #B11623;
            font-style: italic;
            text-decoration: none;
        }

        #playlist .active a:before {
            content: "\25B6";
            color: #CCC;
            font-style: normal;
            padding-right: 8px;
        }

        #playlist .active a:hover {
            color: #222;
        }
    </style>


</center-->