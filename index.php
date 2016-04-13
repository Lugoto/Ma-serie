<?php include("./html/header.html");?>
    <body>
        <nav>
            <div class="grey darken-4 nav-wrapper">
                <a href="#!" class="brand-logo">MA-SERIE.COM</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="red darken-2 btn-large hvr-buzz commencer">Commencer le test</a></li>
                    <li><a class="red darken-2 btn-large commencer2 disabled">Le test a commencé</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a class="commencer">Commencer le test</a></li>
                </ul>
            </div>
        </nav>
        <video id="daredevil" autoplay poster="img/img_daredevil.jpg" id="bgvid" loop>
            <source src="video/daredevil.mp4" type="video/mp4">
        </video>
        <div id="mute-btn" class="video-controls btn-floating btn-large red  darken-2 animated fadeInRight"><i class="material-icons">volume_up</i></div>
        <div id="unmute-btn" class="video-controls btn-floating btn-large red  darken-2 animated fadeInRight"><i class="material-icons">volume_off</i></div>
        <div id="test" class="animated fadeInUp">
            <div class="titre">Trouve la série qui te correspond !</div>
            <div class="fixed-action-btn horizontal" style="top: 20px; right: 20px;">
                <a class="btn-floating btn-large grey darken-4 quit">X</a>
            </div>

            <form action="php/request.php" method="post">
                <div class="input-field col s6 marge">
                    <select name="select">
                        <option value="0" disabled selected>Choisis ton genre</option>
                        <option value="28">Action</option>
                        <option value="12">Adventure</option>
                        <option value="16">Animation</option>
                        <option value="35">Comedy</option>
                        <option value="80">Crime</option>
                        <option value="99">Documentary</option>
                        <option value="18">Drama</option>
                        <option value="10751">Family</option>
                        <option value="14">Fantasy</option>
                        <option value="10769">Foreign</option>
                        <option value="36">History</option>
                        <option value="27">Horror</option>
                        <option value="10402">Music</option>
                        <option value="9648">Mystery</option>
                        <option value="10749">Romance</option>
                        <option value="878">Science Fiction</option>
                        <option value="10770">TV Movie</option>
                        <option value="53">Thriller</option>
                        <option value="10752">War</option>
                        <option value="37">Western</option>
                    </select>
                    <label>Quels thèmes préfère tu ?</label>

                    <button class="btn waves-effect waves-light red" id="submitButton" type="submit" name="action" value="submit">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>

        </div>
        </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

        <script>
            $(document).ready(function () {
                $(".button-collapse").sideNav();
            })
            $(document).ready(function () {
                $('select').material_select();
            });
        </script>
    </body>
</html>
