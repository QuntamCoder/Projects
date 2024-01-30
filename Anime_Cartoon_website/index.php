
<?php
session_start();

// Assuming you have a way to check if the user is logged in, adjust the condition accordingly
$isUserLoggedIn = isset($_SESSION['username']);

if (!$isUserLoggedIn) {
    // If the user is not logged in, show the popup after 20 seconds
    echo '<script>
            setTimeout(function() {
                // Code to show your login popup
                var modal = document.getElementById("myModal");
                modal.style.display = "block";

                // Show the modal after 20 seconds
                setTimeout(function() {
                    // Redirect to login.php
                    window.location.href = "login.php";
                }, 8000);

                // Function to close the modal
                function closeModal() {
                    modal.style.display = "none";
                }
            }, 8000);
          </script>';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lastale</title><meta name="description" content="Educational websites can include websites that have games, videos or topic related resources that act as tools to enhance learning and supplement classroom teaching. These websites help make the process of learning entertaining and attractive to the student, especially in today's age.">
    <meta name="keywords" content="HTML, CSS, JavaScript, Educatinal Website,Front-end">
    <meta name="author" content=" Aditya Tachtode">
    <link rel="icon" href="./images for isssential things/logo/Lastale-logos_black.png" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./phone.css" />
    <link rel="stylesheet" href="../exe/xammppp/htdocs/signup/signuppage.html"/>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
      <!-- rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    /> -->
  </head>
  <body>
    <header class="header">
      <a href="./index.html" class="logo">
        <!-- <img src="index.html" /> -->
        <span class="logoname">Lastale</span></a>
      <nav class="navbar">
        <ul class="nav-list">
          <li><a href="./index.php" class="nav-link home-link">Home</a></li>
          <li><a href="./Trending.html" class="nav-link home-link">Trending</a></li>
          <li><a href="./movies.html" class="nav-link portfolio-link">Movies</a></li>
          <li><a href="./maincaterogies.html" class="nav-link about-link">Categories</a></li>
          <li><a href="./aboutus100.html" class="nav-link about-link">About</a></li>
          <li><a href="./contactus.html" class="nav-link contact-link">Contact</a></li>
          
        </ul>
      </nav>

      <div class="icons" style="color: var(--white)">
      <a href="./logout.php"><img src="./images for isssential things/LOGIN1-modified.png"width=50px></a>
      </div>

      
    </header>
    <!-- home section  -->
    <section class="home-section" id="home-section">
      <div class="container grid grid-two-col">
        <div class="home-data">
          <h1>THE LAST TALE</h1>
          <h3>
            World-class Manga And Anime And Movies We Provide here
          </h2>
          <p href="#"> <h1>Now You Are In My Genjutsu </h1></p></h3>
          <a href="./Trending.html"><button class="get-started-btn">Treding Manga</button></a>
        </div>
        <div class="home-img">
          <img src="./images for isssential things/sharingan.png" class="spin"width=525px  alt="" class="home-pic" />
          <div class="img-bg"></div>
          <div class="img-bg-1"></div>
        </div>
      </div>
    </section>

   
    <!-- top rated learning tutorials -->
    <section class="top-rated section" id="top-rated">
      <h1 class="primary-heading">Top Rated Trainding</h1>
      <div class="container">
          <div class="top-btn">
            <a href="./Trending.html">  <div class="btn t-btn"data-btn-num="0">all</div></a>
            <a href="#" ><div class="btn t-btn" data-btn-num="1">Adventure</div></a>
            <a href="#"> <div class="btn t-btn" data-btn-num="2">Fantasy</div></a>
            <a href="#"> <div class="btn t-btn" data-btn-num="3">True Story</div></a>
            <a href="#"></a> <div class="btn t-btn" data-btn-num="4">lifestyle</div></a>
             <a href="#"></a><div class="btn t-btn" data-btn-num="5">Slice Of Life</div></a>
             <a href="./#"></a><div class="btn t-btn" data-btn-num="6">Horror</div></a>
             <a href="#"></a><div class="btn t-btn" data-btn-num="7">TIme Travelling</div></a>
             <a href="#"> <div class="btn t-btn" data-btn-num="8">More</div></a>
           </div>
        <div class="tutorials grid grid-four-col">
          <!-- start -->
          <div class="course t-btn--0 t-btn--1">
            <div class="cou-img">
              <a href="./onepiecepage1.html"><img src="./images for isssential things/onepiece.jpeg" width=290px alt="" /></a>
            </div>
            <div class="cou-data">
              <div class="cou-top">
                <a href="./onepiecepage1.html">One Piece</a>
                
              </div>
              <p href="#" class="top-heading">
                <img src="#" width="200px" alt="">
              </p>
              <div class="instructor " >
                <img src="./images/profile - 1.jpg" alt="" />
                <p class="center"></p>
              </div>
              <div class="review">
                <div class="user">
                  <ion-icon name="person-outline"></ion-icon>
                  <p>99+</p>
                </div>
                <div class="user">
                  <ion-icon name="book-outline"></ion-icon>
                  <p>9+</p>
                </div>
                <div class="stars">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star-half "></ion-icon>
                </div>
              </div>
            </div>
          </div>
          <!-- end -->
          <!-- start -->
          <div class="course t-btn--0 t-btn--2">
            <div class="cou-img">
              <a href="./dragonball.html"><img src="./images for isssential things/dragonball.jpeg"width=290px alt="" /></a>
            </div>
            <div class="cou-data">
              <div class="cou-top">
                <a href="./dragonball.html">Dragon Ball</a>
                
              </div>
              <p href="#" class="top-heading"></p>
              <div class="instructor">
                <img src="./images/profile - 2.jpeg" alt="" />
                <p class="center"></p>
              </div>
              <div class="review">
                <div class="user">
                  <ion-icon name="person-outline"></ion-icon>
                  <p>22</p>
                </div>
                <div class="user">
                  <ion-icon name="book-outline"></ion-icon>
                  <p>20</p>
                </div>
                <div class="stars">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <!-- <ion-icon name="star-half"></ion-icon> -->
                </div>
              </div>
            </div>
          </div>
          <!-- end -->
          <!-- start -->
          <div class="course t-btn--0 t-btn--3">
            <div class="cou-img">
              <a href="./narutoshi.html"><img src="./images for isssential things/naruto.jpeg"width=290px alt="" /></a>
            </div>
            <div class="cou-data">
              <div class="cou-top">
                <a href="./narutoshi.html">Naruto Shippeden</a>
                
              </div>
              <p href="#" class="top-heading">
              </p>
              <div class="instructor">
                <img src="./images/profile - 3.jpg" alt="" />
                <p></p>
              </div>
              <div class="review">
                <div class="user">
                  <ion-icon name="person-outline"></ion-icon>
                  <p>52</p>
                </div>
                <div class="user">
                  <ion-icon name="book-outline"></ion-icon>
                  <p>60</p>
                </div>
                <div class="stars">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <!-- <ion-icon name="star"></ion-icon> -->
                  <ion-icon name="star-half"></ion-icon>
                </div>
              </div>
            </div>
          </div>
          <!-- end -->
          <!-- start -->
          <div class="course t-btn--0 t-btn--4">
            <div class="cou-img">
              <a href="./demon slayer1.html"><img src="./images for isssential things/demonslayer.jpeg"width=290px alt="" /></a>
            </div>
            <div class="cou-data">
              <div class="cou-top">
                <a href="./demon slayer1.html">Demon Slayer</a>
              </div>
              <p href="#" class="top-heading">
              </p>
              <div class="instructor">
                <img src="./images/profile - 2.jpeg" alt="" />
                <p></p>
              </div>
              <div class="review">
                <div class="user">
                  <ion-icon name="person-outline"></ion-icon>
                  <p>29</p>
                </div>
                <div class="user">
                  <ion-icon name="book-outline"></ion-icon>
                  <p>56</p>
                </div>
                <div class="stars">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <!-- <ion-icon name="star-half"></ion-icon> -->
                </div>
              </div>
            </div>
          </div>
          <!-- end -->
          <!-- start -->
          <div class="course t-btn--0 t-btn--4">
            <div class="cou-img">
              <a href="./jjk.html"><img src="./images for isssential things/jjk.jpeg"width=290px alt="" /></a>
            </div>
            <div class="cou-data">
              <div class="cou-top">
                <a href="./jjk.html">Jujutsu Kiason</a>
              </div>
              <div class="instructor">
                <img src="./images/profile - 2.jpeg" alt="" />
                <p></p>
              </div>
              <div class="review">
                <div class="user">
                  <ion-icon name="person-outline"></ion-icon>
                  <p>10</p>
                </div>
                <div class="user">
                  <ion-icon name="book-outline"></ion-icon>
                  <p>56</p>
                </div>
                <div class="stars">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <!-- <ion-icon name="star-half"></ion-icon> -->
                </div>
              </div>
            </div>
          </div>
          <!-- end -->
          <!-- start -->
          <div class="course t-btn--0 t-btn--4">
            <div class="cou-img">
              <a href="./ts.html"><img src="./images for isssential things/takagisan.jpeg"width=290px alt="" /></a>
            </div>
            <div class="cou-data">
              <div class="cou-top">
                <a href="./ts.html">Takagi-San</a>
                
              </div>
              <p href="#" class="top-heading">
                
              </p>
              <div class="instructor">
                <img src="./images/profile - 3.jpg" alt="" />
                <p></p>
              </div>
              <div class="review">
                <div class="user">
                  <ion-icon name="person-outline"></ion-icon>
                  <p>29</p>
                </div>
                <div class="user">
                  <ion-icon name="book-outline"></ion-icon>
                  <p>56</p>
                </div>
                <div class="stars">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <!-- <ion-icon name="star-half"></ion-icon> -->
                </div>
              </div>
            </div>
          </div>
          <!-- end -->
          <!-- start -->
          <div class="course t-btn--0 t-btn--1">
            <div class="cou-img">
             <a href="./dn.html"> <img src="./images for isssential things/dn.jpeg"width=290px alt="" /></a>
            </div>
            <div class="cou-data">
              <div class="cou-top">
                <a href="./dn.html">Death note</a>
              </div>
              <p href="#" class="top-heading"></p>
              <div class="instructor">
                <img src="./images/profile - 1.jpg" alt="" />
                <p></p>
              </div>
              <div class="review">
                <div class="user">
                  <ion-icon name="person-outline"></ion-icon>
                  <p>19</p>
                </div>
                <div class="user">
                  <ion-icon name="book-outline"></ion-icon>
                  <p>26</p>
                </div>
                <div class="stars">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <!-- <ion-icon name="star-half"></ion-icon> -->
                </div>
              </div>
            </div>
          </div>
          <!-- end -->
          <!-- start -->
          <div class="course t-btn--0 t-btn--2">
            <div class="cou-img">
              <a href="./bleach.html"><img src="./images for isssential things/bleach.jpeg"width=290px alt="" /></a>
            </div>
            <div class="cou-data">
              <div class="cou-top">
                <a href="./bleach.html">Bleach</a>
              </div>
              <p href="#" class="top-heading"></p>
              <div class="instructor">
                <img src="./images/profile - 3.jpg" alt="" />
                <p></p>
              </div>
              <div class="review">
                <div class="user">
                  <ion-icon name="person-outline"></ion-icon>
                  <p>12</p>
                </div>
                <div class="user">
                  <ion-icon name="book-outline"></ion-icon>
                  <p>26</p>
                </div>
                <div class="stars">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <!-- <ion-icon name="star-half"></ion-icon> -->
                </div>
              </div>
            </div>
          </div>
          <!-- end -->
        </div>
      </div>
    </section>
    <!-- Category -->
    <section class="cat-section section" id="cat-section">
      <h1 class="primary-heading">
       
          
            <div class="top-btn"><a href="#"><h1>Categories</h1></div></a>
      <div class="container grid grid-four-col">
        <a href="./war.html"><div class="category">
         <img src="./images for isssential things/aot.jpeg"  alt="" />
          <h3>War</h3>
        </div></a>
       <a href="./categoriesaction.html" ><div class="category">
          <img src="./images for isssential things/onepiece.jpeg" alt="" />
          <h3>Adventure</h3>
        </div></a>
        <div class="category">
          <a href="4.html" ></a><img src="./images for isssential things/baki.jpg" alt="" /></a>
          <h3>Raw Power</h3>
        </div><br>
        <a href="3.html"><div class="category">
          <img src="./images for isssential things/apoclaypes.jpg" alt="" />
          <h3>Apocalypse</h3>
        </div></a>
        <a href="2.html"><div class="category">
          <img src="./images for isssential things/darlingintheffranxx.jpeg" alt="" />
          <h3>SciFi</h3>
        </div></a>
        <div class="category">
          <a href=""> <a href="#"> <img src="./images for isssential things/frommetoyou.jpeg" alt="" /></a>
          <h3>Funny</h3>
        </div><br>
        <a href="#"><div class="category">
          <img src="./images for isssential things/7seeds.jpeg" alt="" />
          <h3>Futurestic</h3>
        </div></a>
        <a href="#" > <div class="category">
          <img src="./images for isssential things/sakura.jpeg" alt="" />
          <h3>love</h3>
        </div></a>
        <a href="#" ><div class="category">
          <img src="./images for isssential things/blackclover.jpeg" alt="" />
          <h3>Gods & Devils</h3>
        </div></a>
      </div>
    </section>


    <!-- blog -->
    <section class="blog section" id="blog"> 
      <h1 class="primary-heading">ALL TIME FAVORTE MOVIES</h1>
      <div class="container grid grid-three-col">
          <div class="news">
            <a href="./movieshtml/iwanttoratyour.html"><img src="./images for isssential things/sakura.jpeg" height="613" alt="" /></a>
            <div class="news-data">
              <div class="user-name">
                <div class="user">
                  <ion-icon name="person-outline"></ion-icon>
                  <a href="file:///C:/Users/adity/Desktop/project%20collage/movieshtml/iwanttoratyour.html"><p>I WANT TO EAT YOUR PANCREAS</p></a>
                </div>
                <div class="user">
                
                </div>
              </div>
              
              <p>
                'I want to eat your pancreas' is about a young girl named Sakura who was diagnosed with a pancreatic illness, and told she had only a little time left to live. 
              </p>
            </div>
          </div>
        <div class="news">
          <a href="./movieshtml/moviesofyourname.html"><img src="./images for isssential things/TAKI.jpg" height="613" alt="" /></a>
          <div class="news-data">
            <div class="user-name">
              <div class="user">
                <ion-icon name="person-outline"></ion-icon>
                <a href="file:///C:/Users/adity/Desktop/project%20collage/movieshtml/iwanttoratyour.html"><p>I WANT TO EAT YOUR PANCREAS</p></a>
              </div>
              <div class="user">
              
              </div>
            </div>
            
            <p>
              'I want to eat your pancreas' is about a young girl named Sakura who was diagnosed with a pancreatic illness, and told she had only a little time left to live. 
            </p>
          </div>
        </div>
        <div class="news">
          <a href="movieshtml/asilentvoice.html"><img src="./images for isssential things/SILEN.jpeg" height="613"alt="" /></a>
          <div class="news-data">
            <div class="user-name">
              <div class="user">
                <ion-icon name="person-outline"></ion-icon>
                <a href="file:///C:/Users/adity/Desktop/project%20collage/movieshtml/asilentvoice.html"><p>A SILENT VOICE</p></a>
              </div>
              <div class="user">
                
                
              </div>
            </div>
            <p>
              A Silent<br> Voice. When it comes to contemporary anime <br>there is likely none more <br>emotional than <br>A Silent Voice
            </p>
          </div>
        </div>
      </div>

    <div class="container ads grid grid-two-col ">
          <div class="ad-img">
    </section>
    
    <!-- Details -->
    <section class="det-section section" id="det-section">
      <h1 class="primary-heading">
        YOU ARE ON A WRITE PLACE YEP YOU ARE
      </h1>
      <div class="container det grid grid-three-col">
        <div class="details">
          <img src="./images for isssential things/zoro.jpeg" alt="" />
          <h2>1>RORONOA ZORO<BR>THE KING OF THE HELL</h2>
          <p>
            Scars on the back are a swordsman's shame
          </p>
        </div>
        <div class="details">
          <img src="./images for isssential things/luffy.webp"width=230 alt="" />
          <h2>2>MONKEY.D.LUFFY<BR>THE KING OF THE PIRETS</h2>
          <p>
            I don't have to be a boss or a great pirate, do I?
          </p>
        </div>
        <div class="details">
          <img src="./images for isssential things/madra.webp"width=275 alt="" />
          <h2>3>UCHIHA MADARA<BR>THE GHOST OF THE UCHIHA</h2>
          <p>
            The concept of hope is nothing more than giving up.
          </p>
        </div>
      </div>
    </section>

   
    </section>
    <!-- contact  -->
    <section class="contact-section section" id="contact-section">
        <h1 class="primary-heading">Get Support from our Team</h1>
        <div class="container boxes grid grid-three-col ">
            <div class="contact-box">
                <ion-icon name="call-outline"></ion-icon>
                <h2>Telephone</h2>
                <p>+919970912220</p>
                <p></p>
            </div>
            <div class="contact-box">
                <ion-icon name="mail-outline"></ion-icon>
                <h2>Our Mail</h2>
                <p>OSHIMATARU@REDIFFMAIL.COM</p>
                <p>OSHIMATARU@GMAIL.COM</p>
            </div>
            <div class="contact-box">
                <ion-icon name="location-outline"></ion-icon>
                <h2>Location</h2>
                <p>Chakan,kanchi encleve L-303</p>
                <p>Maharashtra, India</p>
            </div>
        </div>
            </form>
        </div>
       
    </section>


    <!-- footer -->
    <Footer class="section footer">
        <div class="container grid grid-four-col">
            <div class="f-about">
                <a href="#" class="logo"><span>Lastale</span></a>
                <p>we Provide What You Want</p><br>
                <div class="f-social-links">
                    <a href="#" target="_blank"><ion-icon class="icon" name="logo-instagram"></ion-icon></a>
                    <a href="#" target="_blank"><ion-icon class="icon" name="logo-facebook"></ion-icon></a>
                    <a href="#" target="_blank"><ion-icon class="icon" name="logo-discord"></ion-icon></a>
                </div>
            </div>

            <div class="f-links">
                <h3>LETS PASS THE TIME</h3>
                <ul>
                    <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">Home</a></li>
                    <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">Trendings</a></li>
                    <!-- <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">Movies</a></li> -->
                    <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">Categories</a></li>
                    <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="f-service">
                <h3>UseFul Links</h3>
                <ul>
                    <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">Home</a></li>
                    <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">Manga</a></li>
                    <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">categories</a></li>
                    <!-- <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">movies</a></li> -->
                    <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">Login & Signgup</a></li>
                </ul>
            </div>

            <div class="f-address"> 
                <h3>Have a Questions?</h3>
                <address>
                  <div>
                    <p><span><ion-icon name="location-outline"></ion-icon></span><br><a href="#">Maharashtra, India</a> </p>
                  </div>    
                  <div>
                    <p><span><ion-icon name="call-outline"></ion-icon></span><br><a href="#">9970712220</a></p>
                  </div>
                  <div>
                    <p><span><ion-icon name="mail-outline"></ion-icon></span><br><a href="#">oshimataru@rediffmail.com </a> </p>
                  </div>
                </address>
              </div>

        </div>
        <div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div id="loginContent"></div>
    </div>
</div>



            <div class="credits"> © Copyright 2023 Aaditya Tachtode All rights reserved.</div>
           
            </div>
    </Footer>
    <script src="script1.js"></script>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="./script.js"></script>
  </body>
</html>