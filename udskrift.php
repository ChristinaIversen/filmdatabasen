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
                
                <h2>Listen over film</h2>
                <!-- UDSKRIFT FRA DATABASEN -->
                <section id="filmliste">                    
                    <?php while ($r = mysqli_fetch_array($resultat)) { //En while-løkke der lægger hver række i $r
                            echo '<section class="filmbox">';
                                echo '<h3>' . $r['titel'] . ' <span class="filmaar">(' . $r['aarstal'] . ')</span></h3>';
                                echo '<p><span class="filmbox-span">Stjerner på IMDB:</span> ' . $r['imdbrank'] . '</p>';
                                echo '<p><span class="filmbox-span">Sprog:</span> ' . $r['sprog'] . '</p>';
                                echo '<p><span class="filmbox-span">Genre:</span> ' . $r['genre'] . '</p>';
                                echo '<p><span class="filmbox-span">Varighed:</span> ' . $r['spilletid'] . ' min.</p>';
                                echo '<p><span class="filmbox-span">Instruktør:</span> ' . $r['instruktor'] . '</p>';
                                echo '<p><span class="filmbox-span">Beskrivelse:</span> ' . $r['beskrivelse'] . '</p>';
                                echo '<p><span class="filmbox-span">Budget:</span> ' . $r['budget'] . '</p>';
                                echo '<p><span class="filmbox-span">Indtjent:</span> ' . $r['indtjening'] . '</p>';
                            echo '</section><hr>';
                        } 
                    ?>
                </section>
            </div>
            
            <!-- FOOTER -->
            <footer>
                <p>&copy; Kevin, Thea, Emilie & Christina 2018</p>
            </footer>
        </div>
        
        <!-- LINK TIL JAVASCRIPTFILER -->
        <!-- <script src="js/validering.js"></script> --> 
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