<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="nawigacja.css">
     <link rel="stylesheet" href="dropdown.css">
     <title>strona glowna</title>
</head>

<body class="body">

     <div class="grid-container">
          <nav>
               <div class="navigation">
                    
                   <img src="logoTymczasowe.png" alt="logo">
                   <input type="text" name="" id="" placeholder="wyszukaj">
                   <button class="glowna-button" onclick="przenies('strona-glowna.php')">strona głowna</button>
                    <button class="sklep-button" onclick="przenies('sklep.php')">sklep</button>
                    <button class="regulamin-button" onclick="przenies('regulamin.php')">regulamin</button>
                    <button class="kontakt-button" onclick="przenies('kontakt.php')">kontakt</button>


               </div>
               <div class="shop-navigation">
                    <div class="dropdown" id="bron-button">
                         <button onclick="dropdown('myDropdown')" class="dropbtn">Broń</button>
                         <div id="myDropdown" class="dropdown-content">
                           <a href="sklep.php?zmienna=BronKrotka">Broń Krótka</a>
                           <a href="sklep.php?zmienna=BronDluga">Broń Długa</a>
                           <a href="sklep.php?zmienna=BronBiala">Broń Biała</a>
                         </div>
                       </div>

                       <div class="dropdown" id="amunicja-button">
                         <button onclick="dropdown('myDropdown1')" class="dropbtn">Amunicja</button>
                         <div id="myDropdown1" class="dropdown-content">
                           <a href="sklep.php?zmienna=AmmoDoPistoletow">Do pistoletow i rewolwerów</a>
                           <a href="sklep.php?zmienna=AmmoDoKarabinow">Do karabinów</a>
                           <a href="sklep.php?zmienna=AmmoDoStrzelby">Do strzelby</a>
                           <a href="sklep.php?zmienna=AmmoInna">Inna</a>
                         </div>
                       </div>

                       <div class="dropdown" id="optyka-button">
                         <button onclick="dropdown('myDropdown2')" class="dropbtn">Optyka</button>
                         <div id="myDropdown2" class="dropdown-content">
                           <a href="sklep.php?zmienna=CelownikiKolimetrowe">Celowniki kolimetrowe</a>
                           <a href="sklep.php?zmienna=Lunety">Lunety</a>
                           <a href="sklep.php?zmienna=Lornetki">Lornetki</a>
                         </div>
                       </div>

                       <div class="dropdown" id="akcesoria-button">
                         <button onclick="dropdown('myDropdown3')" class="dropbtn">Akcesoria</button>
                         <div id="myDropdown3" class="dropdown-content">
                           <a href="sklep.php?zmienna=DoBroni">Do broni</a>
                           <a href="sklep.php?zmienna=Inne">Inne</a>
                         </div>
                       </div> 
                    <button class="cart_button"><img src="cart.png" alt="" class="cart-img"></button>   
               </div>
     
          </nav>

     </div>


     <script src="dropdown.js"></script>
     <?php
     
     
     ?>
     
</body>

</html>
