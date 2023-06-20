<!doctype html>
<html>
    <head>
    <title>
        Menu
        </title>  
        <link rel="stylesheet" href="style.css"> 
    </head> 
        <body>
            <header>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li class="mobile"><a href="locations.html">Locations</a></li>
                        <li class="mobile"><a href="contact.html">Contact</a></li>
                        <li class="desktop"><a href="locations.html">Locations</a></li> 
                        <li class="logo"><a href="index.html">Artisan Bakery Logo</a></li>
                        <li class="desktop"><a href="contact.html">Contact</a></li>
                        <li class="logIn"><a href="logIn.html">LogIn</a></li>
                        <li class="register"><a href="register.html">Register</a></li>
                        </li>
                      
                    </ul>
                </nav>
             </header>
            <section> 
         
              <!-- Container for the image gallery -->
<div class="container">
    <link rel="stylesheet" href="menuStyle.css">

    <!-- Full-width images with number text -->
    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
        <img src="img1.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
        <img src="rugova-7.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
        <img src="img3.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
        <img src="viaFerata.jpg" style="width: 100%; height: 1100px;">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">5 / 6</div>
        <img src="rugova8.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">6 / 6</div>
        <img src="bora.jpg" style="width:100%">
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
    <!-- Image text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>
  
    <!-- Thumbnail images -->
    <div class="row">
      <div class="column">
        <img class="demo cursor" src="img1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Lake Leqinat or  is a mountain lake found on the Mount Leqinat in the western Kosovo. This lake is well known throughout Kosovo and is visited by people going to the Rugova Canyon or by people climbing nearby peaks such as Liqenat at 2,341 m (7,680 ft) and Guri i kuq at 2,522 m (8,274 ft). Lake Liqenat is at an elevation of 1,970 m (6,463 ft). Lake Liqenat is just above the village of Kuqishte.">
      </div>
      <div class="column">
        <img class="demo cursor" src="rugova-7.jpg" style="width:100%" onclick="currentSlide(2)" alt="Rugova is a mountain region located to the north-west of the city of Peja, in Kosovo region. According to notes of Rugova it has been inhabited since before the 12th century. In 2013, it was designated a national park by the Parliament of Kosovo.

        Rugova is an ethnographically diverse region, with great importance for the literary branches of lexicology, etymology and onomastics. Rugova is a suitable region for hiking, skiing, mountaineering, paragliding, and picnics.
        
        It was ranked as the fourth most important center for winter sports by the International Ski Federation (ISF). Furthermore, in April 2013, Peć won the ''Tourism for Tomorrow'' award for the project,Peaks of the Balkans
        ">
      </div>
      <div class="column">
        <img class="demo cursor" src="img3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Rugova has a wet, continental climate that is influenced by the mountains, short and hot summers, and long and harsh winters. Spring is late, and the seasons change quickly. The high level of precipitation is a result of clashes between the tropical and continental climates. Maximum precipitation is in December, 372.6 millimetres (14.67 in), and minimum in July, 0.3 millimetres (0.012 in). The annual minimum and maximum are 540.6 millimetres (21.28 in) and 1,336 millimetres (52.6 in), respectively.

        Snow is present on the peaks until August, with a depth ranging from 30 centimetres (12 in) to 2 metres (6.6 ft).
        
        The average temperatures in the region are: 4.4 °C (39.9 °F) to 7.5 °C (45.5 °F) in the spring; 10.6 °C (51.1 °F) to 17.2 °C (63.0 °F) in the summer; 5.2 °C (41.4 °F) in the fall; and −10 °C (14 °F) to −15 °C (5 °F) in the winter">
      </div>
      <div class="column">
        <img class="demo cursor" src="viaFerata.jpg" style="width:100%" onclick="currentSlide(4)" alt="Via Ferrata is a perfect attraction if you visit Kosovo you should go to Via Ferrata, because it is for everyone, regardless of age, everyone can do, it is very safe, but even more fun at the same time.">
      </div>
      <div class="column">
        <img class="demo cursor" src="rugova8.jpg" style="width:100%" onclick="currentSlide(5)" alt="Rugova includes a variety of habitats, suitable for an abundance of living organisms.

        Domestic animals, such as sheep, horses, donkeys, and mules, are also of great importance in Rugova .">
      </div>
      <div class="column">
        <img class="demo cursor" src="bora.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Rugova">
      </div>
    </div>
  </div>
  <script>
      var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

  </script>
            </section>
            <section>Kontakt 24/7 </section>
            <footer> Turizmi </footer>

            </body>