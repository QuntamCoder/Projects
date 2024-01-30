<!doctype html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="$baseUrl/../Images/icbs_logo.png" type="image/x-icon">
    
    <!-- css style goes here -->

      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
      
    <style>
      .footer-top p{
    color: #999;
    line-height: 25px; 
}
.footer-top  h2,h3{
    color: #fff;
}
.footer-top h2{
    font-size: 18px;
}
.footer-top{
    background: #111;
    padding: 80px 0;
}
.segment-one h3{
    font-family: courgette;
    color: #fff;
    letter-spacing: 3px;
    margin: 10px 0;
}
.segment-two h2{
    font-family: courgette;
    color: #fff;
    font-family: poppins;
    text-transform: uppercase;
}
.segment-two h2:before{
    content: '|';
    color: #c65039;
    padding-right: 10px;
}
.segment-two ul{
    margin: 0;
    padding: 0;
    list-style: none;
}
.segment-two ul li{
    border-bottom: 1px solid rgba(255,255,255,0.3);
    line-height: 40px;
}
.segment-two ul li a{
    color: #999;
    text-decoration: none  ;
}
.segment-three h2{
    color: #fff;
    font-family: poppins;
    text-transform: uppercase;
}
.segment-three h2:before{
    content: '|';
    color: #c65039;
    padding-right: 10px;
}
.segment-three a{
    background: #494848;
    width: 40px;
    height: 40px;
    display: inline-block;
    border-radius: 50%;
}
.segment-three a li{
        font-size: 25px !important;
        color: #fff;
        padding: 8px 10px;
}   
.footer-bottom-text{
    text-align: center;
    background: #000;
    line-height: 75px;
    color: #999;
}

/* Responsive css */

@media only screen and (min-width: 768px) and (max-width: 991px){
    .md-mb-30{
        margin-bottom: 30px;
    }
}
@media only screen and (max-width: 767px){
    .sm-mb-30{
        margin-bottom: 30px;
    }
    .footer-top{
        padding: 50px 0;
    }
}
      /* heading font size goes here */
	h1{
		font-size: 35px;
    font-weight: 600;
	}
  h2{
    font-weight: 600;
		font-size: 30px;
	}
	h3{
    font-size: 25px;
    font-weight: 600;
	}
	h4{
    font-weight: 600;
		font-size: 22px;
	}
/* end heading style here */

/* header area goes here */

	.header-back{
		background: black;	
	}

	.header-navbar-fonts{
		font-family: Arial, Helvetica, sans-serif;
	}

	.header-navbar-fonts h3{
		font-size: 35px;
	}

	.active a:active{
		transform: translateY(-1);
	}

	.header-navbar-fonts ul li a{

		font-size: 22px;
	}

	.active:hover{
		border-bottom: 4px solid white;
		transition: all .2s;
		color: white;
	}

/* header area go to end here */

/* sidebar area goes here */

	.sidebar {
		padding: 0;
		margin-top: 1px;
		height: 100%;
		box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
		background-color: #fff;
	}

	.sidebar-header{
		background: #2c3e50;
		font-size: 22px !important;
	}

	.sidebar ul{
		background-color: #ffffff;
	}

	.sidebar ul li{
		border-bottom: 1px solid rgb(192, 190, 190);
	}

	.sidebar ul li a{
		font-size: 16px !important;
		color: black;
	}

	.sidebar ul li a:hover{
		background: #3e5770;
		padding-left: 15px;
		font-size: 14px;
		color: #ffffff;
	}

	/* sidebar hide and show toggle buttons */

	.close-btn {
		background-color: transparent;
		color: white;
		border: none;
	}

	.show-btn {
		margin-top: 5px;
		margin-bottom: 5px;
		background-color: rgb(214, 209, 209);
		width: 60px !important;
		color: rgb(121, 117, 117);
		border-radius: 5px;
		border: 1px solid rgb(11, 132, 148);
	}

	.show-btn:hover{
		background-color: #2c3e50;
		color: white;
		transition: all 1s;
		border: 1px solid white;
	}
	
	.show-btn i{
		font-size: 25px !important;
		width: 30px !important;
	}

	.show-sidebar{
		transition: all .3s;
		transform: translate(0) !important;
	}
	

	/* sidebar hide and show toggle buttons */

/* sidebar area go to end here */

/* all page style goes here */

	.home-div{
		background-image: url(../Images/imperial-banner.png);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: fixed;
		width: 100%;
		height: 450px; 
	}

	.in-ad-ap{
		z-index: 10 !important;
		height: 120px !important;
		background-color: rgb(4, 76, 88); 
	}

	.in-ad-ap h3{
		margin-top: 25px;
		padding-top: 2%;
		border-style: solid;
		height: 80%;
	}

	.paragraph{
		height: 250px;
		padding: 70px;
		font-size: 25px;
		background: rgb(196, 196, 196);
	}

	.faculty{
		width:100%;
		padding-right:15px;
		padding-left:15px;
		margin-right:auto;
		margin-left:auto;
	}

	.academic-area-headings{
		width: 100%;
		background-color: #dad4d4ab;
	}

	.academic-area-headings h4{
		font-family: sans-serif;
		color: rgb(73, 71, 71);
		font-size: 35px;
		margin-left: 110px;
	}

	.dean-message-heading{
		color: #5e0209;
		font-size: 30px;
	}

	.admin-dashboard{
		margin-top: 1px !important;
		background: #2c3e50 !important;
		border-radius: 3px;
	}

/* all page style go to end here */

/* login page style goes here */

	.login-background{
		background-image: url('../images/login-background.jpeg');
		background-size: cover;
		width: 100%;
		background-position: center;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}

	.overlay{
		background-color: #000000ab;
		width: 100%;
		background-attachment: fixed;
		height: 100%;
		top: 0;
		left: 0;
		z-index: 1;
	}

	.login-div{
		background: #5e020ade;
		width: 400px;
		margin: 0 auto;
		margin-top: 25px !important;
		border-radius: 100px 5px !important;
		padding-bottom: 10px;
		align-content: center;
	}
	
	
	.login-padding{
		padding-top: 15px;
		padding-left: 30px;
		padding-right: 30px;
		padding-bottom: 20px;
	}
	
	.logo-div{
		padding-top: 15px;
		padding-bottom: 10px;
		border-bottom: 1px solid rgba(182, 178, 178, 0.363);
	}
	.login-padding h2{
		margin-top: 5px;
		margin-bottom: 30px;
	}
	.login-padding label{
		color: white;
	}
	.btn-white{ 
		margin-top: 5px;
		border: 1px solid white;
		color: white;
	}
	.btn-white:hover{
		background: rgba(218, 11, 166, 0.253);
		color: white;
	}

/* login page style go to end here */

/* table style goes here */

	.table-elements tr, td, th{
		font-size: 13px;
		border: 1px solid rgb(194, 193, 193);
		padding-left: 10px !important;
	}

	.table-one{
		background: black;
	}

	.table-one-tr tr:hover{
		background: black;
		color: white;
	}
	.table-two{
		background: #51b5e4;
	}
	.table-two-tr tr:hover{
		background: #51b5e4;
		color: white;
	}
	.table-three{
		background: #2c3e50 !important;
	}
	.table-three-tr tr:hover{
		background: #3e5770;
		color: white;
	}
	.table-four{
		background: #e70db8b6;
	}
	.table-four-tr tr:hover{
		background: #e238bdb6;
		color: white;
	}
	.table-five{
		background: #3e9225fd;
	}
	.table-five-tr tr:hover{
		background: #3e9225e1;
		color: white;
	}
	.table-six{
		background: #5e020af5;
	}
	.table-six-tr tr:hover{
		background: #5e020ae0;
		color: white;
	}
	.table-tr-head{
		height: 45px !important;
		padding: 10px !important;
		margin-top: 5px !important;
	}

	.tr-height{
		padding: 100px !important;
	}

	.table-font-for-transcript td, th{
		font-size: 16px !important;
	}

/* table style goes here */

/* media query goes here */

	@media (min-width: 768px){
		.button-show {
			display: none;
		}
	}

	@media (max-width: 768px){
		.sidebar{
			transform: translate(-100%);
			transition: all .3s;
		}

		.show-sidebar{
			position: sticky !important;
		}

		.page-content-index{
			transition: .3s;
		}
	}

	@media only screen and (max-width: 600px) {
		.paragraph{
			padding: 25px !important;
			text-align: justify;
			height: 150px !important;
			font-size: 18px !important;
		}
		.in-ad-ap{
			height: 280px !important;
		}
		.card-margin{
			margin-bottom: 15px !important;
		}
	}

	@media only screen and (max-width: 660px) {
		.paragraph{
			padding: 25px !important;
			text-align: justify;
			height: 150px !important;
			font-size: 18px !important;
		}
		.in-ad-ap {
			font-size: 10px !important;
			height: 285px !important;
		}
		.card-margin{
			margin-bottom: 15px !important;
		}
	}

	@media only screen and (max-width: 805px) {
		.paragraph{
			padding: 25px !important;
			text-align: justify;
			height: 150px !important;
			font-size: 18px !important;
		}
		.in-ad-ap {
			font-size: 10px !important;
			height: 285px !important;
		}
		.card-margin{
			margin-bottom: 15px !important;
		}
	}

	@media only screen and (max-width: 992px) {
		.paragraph{
			padding: 25px !important;
			text-align: justify;
			height: 150px !important;
			font-size: 18px !important;
		}
		.in-ad-ap {
			height: 110px !important;
		}
		.in-ad-ap h3{
			padding-top: 10px;
			font-size: 22px !important;
		}
		.card-margin{
			margin-bottom: 15px !important;
		}
	}

	@media only screen and (max-width: 768px) {
		.paragraph{
			padding: 25px !important;
			text-align: justify;
			height: 150px !important;
			font-size: 18px !important;
		}
		.in-ad-ap {
			height: 250px !important;
		}
		.in-ad-ap h3{
			padding-top: 10px;
			font-size: 22px !important;
		}
		.card-margin{
			margin-bottom: 15px !important;
		}
	}
	
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark header-back sticky-top header-navbar-fonts">
      <a class="navbar-brand d-flex align-items-center" href="../index.php">
             <h1 class="text-light text-uppercase ml-2">EduGate</h1>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../academics.php">Academics<span class="sr-only">(current)</span></a>
          </li>
          <!-- <li class="nav-item active">
            <a class="nav-link" href="../admission.php">Admission<span class="sr-only">(current)</span></a>
          </li> -->
          <li class="nav-item active">
            <a class="nav-link" href="../login/logout.php">Logout<i class="fa fa-sign-out text-white fa-lg" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>