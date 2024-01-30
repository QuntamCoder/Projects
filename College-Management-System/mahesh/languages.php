<html>
    <head>
        <style>
            
            nav ul{background-color: black; color:white; width: 100%;
                display: flex;
                flex-direction: row;
            height: 5vh;
        }
        nav li{
                list-style: none;
                padding: 1.5vh 0vh 0vh 10vh;
            }
            *{margin: 0;padding: 0;}
        marquee{padding: 1.5vh 0vh 0vh 10vh; 
        color: aqua; }
        h1{
            font-size: 6vh;
        }
        b{font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;}
        .container{
       background-color: white;
       height: 125vh;
       width: 74vw;
       margin-left: 13.5vw;
    
    }
    div[class="1line"]{
        display: flex;
        flex-direction: row;
    }
    button[class="1row"]{
            background-color: rgb(200, 192, 192);
            color: ;
            width: 22vh;
            height: 3vw;
            font-size: 2.5vh;
            border: none;
            border-radius: 1.5vh;
            margin: 7vh 0vh 0vh 7vh;
            
        }
    div[class="2line"]{
        display: flex;
        flex-direction: row;
    }
    button[class="2row"]{
            background-color: rgb(200, 192, 192);
            width: 22vh;
            height: 3vw;
            font-size: 2.5vh;
            border: none;
            border-radius: 1.5vh;
            margin: 1vh 0vh 0vh 7vh;
    
        }
    div[class="3line"]{
        display: flex;
        flex-direction: row;
    }
    button[class="3row"]{
            background-color: rgb(200, 192, 192);
            color: ;
            width: 22vh;
            height: 3vw;
            border: none;
            border-radius: 1.5vh;
            font-size: 2.5vh;
            margin: 1vh 0vh 0vh 7vh;
        
        }
    button[class="5row"]{
            background-color: rgb(200, 192, 192); 
            width: 80vh;
            border: none;
            border-radius: 1.5vh;
            height: 3vw;
            font-size: 2.5vh;
            margin: 1vh 0vh 0vh 36vh;
        }
        a{
            color: rgb(7, 96, 179);
            text-decoration: none;
        }
        button[id]:hover {
            background-color: rgb(38, 121, 209);;
            color: white;}

        button[id="a"]:hover a{
            background-color: blue;
            color: white;
        display: none;}

        button[id="a"]:hover:before {
            content: "Welcome";}
            
            button[id="b"]:hover a{
            display: none;}
            button[id="b"]:hover:before {
            content: "स्वागत";}

            button[id="c"]:hover a{
            display: none;}
            button[id="c"]:hover:before {
            content: "स्वागत";}

            button[id="d"]:hover a{
            display: none;}
            button[id="d"]:hover:before {
            content: "స్వాగతం";}  /*Tamil */

            button[id="e"]:hover a{
            display: none;}
            button[id="e"]:hover:before {
            content: "ಸ್ವಾಗತ";}  /*kannad */
            
            button[id="f"]:hover a{
            display: none;}
            button[id="f"]:hover:before {
            content: "خوش آمدید";}   /*Urdu */
            
            button[id="g"]:hover a{
            display: none;}
            button[id="g"]:hover:before {
            content: "Добро пожаловать";}  /*Russian */
            
            button[id="h"]:hover a{
            display: none;}
            button[id="h"]:hover:before {
            content: "સ્વાગત છે";} 

            button[id="i"]:hover a{
            display: none;}
            button[id="i"]:hover:before {
            content: "Bienvenue";}  /*french*/
            
            button[id="j"]:hover a{
            display: none;}
            button[id="j"]:hover:before {
            content: "benvenuta";}  /*italian */
            
            button[id="k"]:hover a{
            display: none;}
            button[id="k"]:hover:before {
            content: "ڀلي ڪري آيا";} /*sindhi */
         
            button[id="l"]:hover a{
            display: none;}
            button[id="l"]:hover:before {
            content: "歡迎";} /*chinese*/
            
            button[id="m"]:hover a{
            display: none;}
            button[id="m"]:hover:before {
            content: "स्वागत छ";} /*Nepali*/
            
            button[id="n"]:hover a{
            display: none;}
            button[id="n"]:hover:before {
            content: "いらっしゃいませ";} /*Japanese*/
            
            button[id="o"]:hover a{
            display: none;}
            button[id="o"]:hover:before {
            content: "Willkommen";} /*Germen*/
            
            button[id="p"]:hover a{
            display: none;}
            button[id="p"]:hover:before {
            content: "स्वागतम्‌";} /*Sanskrut*/
            body{background-color: grey;}
            img{margin: -5vh 0vh 0vh 15vh;}
            /* animation-name: rotate-image;
            animation-duration: 1s;
            animation-iteration-count: infinite;
            animation-timing-function: linear; */
            .rotate{
    animation: rotate-image 9s infinite linear;
    background-color: white;
    
    margin: -5vh 0vh 0vh 0vh;
            }
@keyframes rotate-image {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
span{
    background-image: url('p13.png');
    background-repeat: no-repeat;
    background-size: contain;
    width: 3.5vw;}
            </style>
    </head>
    <body>
        <nav>
            <ul>
                <li>Contact	</li>   
            <li>About</li>
        <marquee direction="left"><b>Select your Preferred Language to Enter the Website</b></marquee>
        <span><a href="languagenext.php"><pre>        <br>      <pre></a></span>
</ul>
    </nav>
        <div class="container">
            <img src="p6.png" align="center">
            <img class="rotate" src="p12.png" height="160vh" width="auto">
        <h1 align="center"><b>Select Language</b></h1>
        <main>
             <div class="1line">
             <button class="1row" id="a"><a href="">English</a></button>
             <button class="1row" id="b"><a href="">मराठी</a></button>
             <button class="1row" id="c"><a href="">हिंदी</a></button>
             <button class="1row" id="d"><a href="">తెలుగు</a></button>
             <button class="1row" id="e"><a href="">ಕನ್ನಡ</a></button>
             </div><br>
             <div class="2line">
             <button class="2row" id="f"><a href="">اردو</a></button>
             <button class="2row" id="g"><a href="">Русский</a></button>
             <button class="2row" id="h"><a href="">ગુજરાતી</a></button>
             <button class="2row" id="i"><a href="">française</a></button>
             <button class="2row" id="j"><a href="">italiana</a></button>
            </div><br>
             <div class="3line">
             <button class="3row" id="k"><a href="">سنڌي</a></button>
             <button class="3row" id="l"><a href="">中國人</a></button>
             <button class="3row" id="m"><a href="">नेपाली</a></button>
             <button class="3row" id="n"><a href="">日本</a></button>
             <button class="3row" id="o"><a href="">deutsch</a></button>
            </div> <br>
             <button class="5row" id="p"><a href="">संस्कृत</a></button></div>
            </div>
        </main>
    </body>
</html>