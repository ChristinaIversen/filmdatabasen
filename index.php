<!-- PHP/DATABASE TING -->
<?php
include("opendb.php");
$sql = 'SELECT titel, instruktor, spilletid, aarstal, beskrivelse, genre, sprog, imdbrank, budget, indtjening FROM filmdatabase';
//echo "sql: " . $sql; //udkommenteres når vi har tjekket at det virker
$resultat = mysqli_query($conn, $sql); //hent værdier og læg dem i $resultat, så kan vi bruge dem senere
?>
<!-- HER STARTER HTML -->
<!DOCTYPE html>
<html lang="da">
    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- TITLE -->
        <title>Filmdatabasen</title>  

        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="css/meyerreset.css"> 
        <link rel="stylesheet" href="css/style.css">  

        <!-- GOOGLEFONT -->
        <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Roboto" rel="stylesheet">
    </head>
    <body>
        <!-- WRAPPER TIL SIDEN -->
        <div id="pagewrap">
            <!-- HEADER -->
            <header>
                <h1>Filmdatabasen</h1>
                <p>- film du skal se!</p>
            </header>

            <!-- MENU -->
            <?php include('incl/menu.php') ?>

            <!-- WRAPPER TIL INDHOLDET -->
            <div id="contentwrap">
                <!-- DIV TIL FEJLTEKST -->
                <div id="fejlfelt" class="fejlfelt">
                    <span class="fejltekst" id="fejltekst">Der er ingen fejl!</span>
                </div>     

                <!-- DIV TIL SUCCESTEKST -->
                <div id="succesfelt" class="succesfelt">
                    <span class="succestekst" id="succestekst">Tak for din tilmelding...</span>
                </div>

                <!-- DIV TIL ADVARSELSTEKST -->
                <div id="advarselfelt" class="advarselfelt">
                    <span class="advarseltekst" id="advarseltekst">Der er ingen fejl!</span>
                </div>

                <h2>Opret ny film</h2>
                <!-- FORM -->
                <form name="film_form" method="post" onsubmit="return validering()" action="behandl_film.php">        
                    <!-- FILMTITEL -->
                    <label>Filmtitel:</label><br>
                    <input type="text" class="txtbox" id="titel" name="titel" /><br>
                    <br>
                    <!-- INSTRUKTØR -->
                    <label>Intruktør:</label><br>
                    <input type="text" class="txtbox" id="instruktor" name="instruktor" /><br>
                    <br>
                    <!-- SPILLETID -->
                    <label>Spilletid i minutter:</label><br>
                    <input type="text" class="txtbox" id="spilletid" name="spilletid" /><br>
                    <br>
                    <!-- ÅRSTAL -->
                    <label>Udgivelsesår:</label><br>
                    <input type="text" class="txtbox" id="aarstal" name="aarstal" /><br>
                    <br>
                    <!-- BESKRIVELSE -->
                    <label>Resumé:</label><br>
                    <textarea id="beskrivelse" class="txtarea" name="beskrivelse"></textarea><br>
                    <br>
                    <!-- GENRE -->
                    <label>Genre:</label><br>
                    <select id="genre" class="ddl" name="genre" >
                        <option value="Action">Action</option>
                        <option value="Drama">Drama</option>
                        <option value="Thriller">Thriller</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Fantasy">Fantasy</option>
                        <option value="Scifi">Sci-Fi</option>
                        <option value="Horror">Horror</option>
                        <option value="Splatter">Splatter</option>
                        <option value="Western">Western</option>
                        <option value="Noir">Film noir</option>
                        <option value="Krig">Krigsfilm</option>
                        <option value="Dokumentar">Dokumentar</option>
                        <option value="Katastrofe">Katastrofe</option>
                        <option value="Romance">Romance</option>
                        <option value="Adventure">Adventure</option>
                        <option value="Familie">Familiefilm</option>
                        <option value="Borne">Børnefilm</option>
                        <option value="Ungdoms">Ungdomsfilm</option>
                        <option value="Andet">Andet</option>
                    </select>
                    <br>
                    <br>
                    <!-- SPROG -->
                    <label>Sprog:</label><br>
                    <input type="text" class="txtbox" id="sprog" name="sprog" /><br>
                    <br>
                    <!-- IMDB RANK -->
                    <label>IMDB rank:</label><br>
                    <input type="text" class="txtbox" id="imdbrank" name="imdbrank" /><br>
                    <!-- BUDGET -->
                    <br><label>Budget:</label><br>
                    <input type="text" class="txtbox" id="budget" name="budget" /><br>
                    <!-- INDTJENING -->
                    <br><label>Indtjening:</label><br>
                    <input type="text" id="indtjening" class="txtbox" name="indtjening" /><br>
                    <br>
                    <!-- GEM KNAP -->
                    <button id="mybtn" type="submit" value="submit">Gem film</button>
                </form>
            </div>

            <!-- FOOTER -->
            <footer>
                <p>&copy; Kevin, Thea, Emilie & Christina 2018</p>
            </footer>
        </div>

        <!-- LINK TIL JAVASCRIPTFILER -->
        <script src="js/validering.js"></script>
        <!-- <script src="js/cookie.js"></script> -->
        <script type="text/javascript" id="cookieinfo"
                src="//cookieinfoscript.com/js/cookieinfo.min.js"
                data-bg="#e6b91e"
                data-fg="#fff"
                data-link="#000"
                data-linkmsg="Mere info"
                data-message="Vores website bruger cookies (UDEN MÆLK!) til at huske dine indstillinger. Ved fortsat brug af websiden godkender du cookiepolitikken."
                data-cookie="CookieInfoScript"
                data-text-align="left"
                data-close-text="OK!">
        </script>
    </body>    
</html>