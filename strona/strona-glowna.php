<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     //<link rel="stylesheet" href="nawigacja.css">
      <link rel="stylesheet" href="dropdown.css">
     <link rel="stylesheet" href="kategoria.css">
     <title>strona glowna</title>
</head>

<body class="body">

     <div class="grid-container">
          <nav>
               <div class="navigation">
                    
                   <img src="logo1.png" alt="logo">
                   <input type="text" name="" id="" placeholder="wyszukaj">
                   <button class="glowna-button" onclick="przenies('strona-glowna.php')">strona głowna</button>
                    <button class="sklep-button" onclick="przenies('sklep.php')">sklep</button>
                    <button class="regulamin-button" onclick="przenies('regulamin.php')">regulamin</button>
                    <button class="kontakt-button" onclick="przenies('kontakt.php')">kontakt</button>


               </div>
               <div class="shop-navigation">
                    <div class="dropdown" id="bron-button">
                         <button onclick="dropdown('myDropdown')" class="dropbtn">Broń ⬇</button>
                         <div id="myDropdown" class="dropdown-content">
                           <a href="sklep.php?zmienna=BronKrotka">Broń Krótka</a>
                           <a href="sklep.php?zmienna=BronDluga">Broń Długa</a>
                           <a href="sklep.php?zmienna=BronBiala">Broń Biała</a>
                         </div>
                       </div>

                       <div class="dropdown" id="amunicja-button">
                         <button onclick="dropdown('myDropdown1')" class="dropbtn">Amunicja ⬇</button>
                         <div id="myDropdown1" class="dropdown-content">
                           <a href="sklep.php?zmienna=AmmoDoPistoletow">Do pistoletow i rewolwerów</a>
                           <a href="sklep.php?zmienna=AmmoDoKarabinow">Do karabinów</a>
                           <a href="sklep.php?zmienna=AmmoDoStrzelby">Do strzelby</a>
                           <a href="sklep.php?zmienna=AmmoInna">Inna</a>
                         </div>
                       </div>

                       <div class="dropdown" id="optyka-button">
                         <button onclick="dropdown('myDropdown2')" class="dropbtn">Optyka ⬇</button>
                         <div id="myDropdown2" class="dropdown-content">
                           <a href="sklep.php?zmienna=CelownikiKolimetrowe">Celowniki kolimetrowe</a>
                           <a href="sklep.php?zmienna=Lunety">Lunety</a>
                           <a href="sklep.php?zmienna=Lornetki">Lornetki</a>
                         </div>
                       </div>

                       <div class="dropdown" id="akcesoria-button">
                         <button onclick="dropdown('myDropdown3')" class="dropbtn">Akcesoria ⬇</button>
                         <div id="myDropdown3" class="dropdown-content">
                           <a href="sklep.php?zmienna=DoBroni">Do broni</a>
                           <a href="sklep.php?zmienna=Inne">Inne</a>
                         </div>
                       </div> 
                    <button class="cart_button"><img src="cart.png" alt="" class="cart-img"></button>   
               </div>
     
          </nav>

          <div class="kategoria">
              <h1><bold>Sklep z bronia i amunicja</bold></h1>
              <div class="line-1"></div>
              <div class="kategoria-opcje">
                <div class="button-left">
                  <button id="btn-left" onclick='przesun("left")'><</button>
                </div>
                <div class="kategorie-produktow" id="kategoria-one">
                    <div class="kategoria-btn">
                      <h2 id="h21">Bron Krotka</h2>
                      <h3 id="h31">Pistolety i rewolwery</h3>
                      <img src="DEAGLE.jfif" alt="" id="image1"><br>
                      <button class="kategoria-zobacz"><a href="sklep.php?zmienna=BronKrotka" id="a1">Zobacz</a></button>
                    </div>
                </div>
                <div class="kategorie-produktow">
                    <div class="kategoria-btn" id="kategoria-two">
                      <h2 id="h22">Bron Dluga</h2>
                      <h3 id="h32">Karabiny i sztucery</h3>
                      <img src="SCAR.jfif" alt="" id="image2"><br>
                      <button class="kategoria-zobacz"><a href="sklep.php?zmienna=BronDluga" id="a2">Zobacz</a></button>
                    </div>
                </div>
                <div class="kategorie-produktow">
                    <div class="kategoria-btn" id="kategoria-three">
                      <h2 id="h23">Amunicja</h2>
                      <h3 id="h33">Amunicja do broni</h3>
                      <img src="amunicja.jfif" alt="" id="image3"><br>
                      <button class="kategoria-zobacz"><a href="sklep.php?zmienna=Amunicja" id="a3">Zobacz</a></button>
                    </div>
                </div>
                <div class="button-right">
                  <button id="btn-right" onclick='przesun("right")'>></button>
                </div>
                
              </div>
            
          </div>
          <div class="promocje">
                <h1>Promocje</h1>
                <div class="line-2"></div>
                <div class="promocje-opcje">
                  <div class="prodoktPromocja" id="produkt1">
                    <div class="promocja-metka"><div class="promocja-metka-dziura"></div><p>-50%</p></div>
                        <img src="DEAGLE.jfif" alt="" id="image1"><br>
                        <h2 id="h21">Dessert Deagle</h2>
                        <p>800zł 400zł</p>
                  </div>
                  <div class="prodoktPromocja" id="produkt1">
                        <div class="promocja-metka"><div class="promocja-metka-dziura"></div><p>-50%</p></div>
                        <img src="DEAGLE.jfif" alt="" id="image1"><br>
                        <h2 id="h21">Dessert Deagle</h2>
                        <p>800zł 400zł</p>
                      
                  </div>
                  <div class="prodoktPromocja" id="produkt1">
                        <div class="promocja-metka"><div class="promocja-metka-dziura"></div><p>-50%</p></div>
                        <img src="DEAGLE.jfif" alt="" id="image1"><br>
                        <h2 id="h21">Dessert Deagle</h2>
                        <p>800zł 400zł</p>
                     
                  </div>
                  <div class="prodoktPromocja" id="produkt1">
                        <div class="promocja-metka"><div class="promocja-metka-dziura"></div><p>-50%</p></div>
                        <img src="DEAGLE.jfif" alt="" id="image1"><br>
                        <h2 id="h21">Dessert Deagle</h2>
                        <p>800zł 400zł</p>
                    
                  </div>
                  <div class="prodoktPromocja" id="produkt1">
                        <div class="promocja-metka"><div class="promocja-metka-dziura"></div><p>-50%</p></div>
                        <img src="DEAGLE.jfif" alt="" id="image1"><br>
                        <h2 id="h21">Dessert Deagle</h2>
                        <p>800zł 400zł</p>
                  
                  </div>
              </div>
          </div>


          

     </div>

     <script src="dropdown.js"></script>
     <script src="slide-category.js"></script>
     <?php
     
     
     ?>
     
</body>

</html>
