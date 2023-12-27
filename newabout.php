<html>
<head>
	<title> Herb 'n Kitchen </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<style>
    body{
		background-color: #000;
	}

	*{
	margin:auto;
	padding:auto;
}
.top{
	width:100%;
	background-color:#090c0e !important;
	border-bottom:2px solid #e5c10b;
}
.top div{
	width:1200px;
	color:#dacaca;
	background-color:#090c0e !important;
	font-family:calibri;
	padding:10px;
	text-align:right;
}

.logo{
	width:100%;
	background-color:#430202;
	border-bottom:2px solid #f0f0f0;
}
.logo div{
	width:1500px;
	background-color:;
	font-family:calibri;
	padding:10px;
	text-align:left;
}
.logo div table a{
	padding:10px;
	text-decoration:none;
	color:gray;
}
.logo div table a:hover{
		color:#e5c10b;
		border-bottom:2px solid rgb(32, 17, 17);
	}

    .middle{
		width:100%;
		background-color:#000;
		border-bottom:2px solid #000;
		background-repeat: no-repeat;
}
.middle div{
	width:12px;
	height:400px;
	font-family:calibri;
}
.middle div p{
		width:5000px;
		font-weight:bold;
		height:300px;
		color:#140505;
		opacity:0.2;
		font-size:50px;
		background-color:#000;
}


.bottom{
	width:100%;
	background-color:;
	border-bottom:2px solid #f0f0f0;
}
.bottom div{
		width:1200px;
		color:#000;
		background-color:transparent;
		font-family:calibri;
		text-align:right;
	}
    
.bottom div table{
	padding-top:30px;
	width:1100px;
	text-align:justify;
	color:gray;
	font-size:20px;
}

.bottom_up{
	width:100%;
	background-color:#000;
	border-bottom:2px solid #000;
}
.bottom_up div{
	padding-top:20px;
	width:1200px;
	text-align:center;
	background-color:;
	font-family:forte;
	font-size:30px;
	padding-bottom:20px;
}
.bottom_up div table{
	padding-top:30px;
	font-size:30px;
	width:1100px;
	text-align:center;
	background-color:;
	font-family:calibri;
	
}

input[type="text"]{
	padding:12px;
	width:250px;
}
select{
	padding:12px;
	width:250px;
}
textarea{
	padding:50px;
	width:550px;
}
button{
	width:550px;
	padding:10px;
	color:#fff;
	font-size:20px;
	background-color:#e5c10b !important;
}

header{
      position: fixed;
      z-index: 1;

    }

.nav_down{
		width:100%;
		background-color:#090c0e  !important;
		border-bottom:2px solid #0e0d0d;
}
.nav_down div{
		width:1200px;
		color:#e5c10b;
		background-color:#000;
		font-family:calibri;
		padding:10px;
		text-align:left;
		text-align:center;
	}
.but{
    width: 80px;
    height: 40px;
    border-radius: 10px;
    color: #000;
    float: right;
    text-align: center; 
    background-color:#e5c10b  !important; 
    font-size:20px;
	top:20px;
}

/*background image*/
.bg {
        /* The image used */
        background-image: url("27.jpg");
      
        /* Full height */
        height: 90%; 
      
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      /*background image over*/
	#img1{
		width: 655px;
		height: 550px;
		margin-top: 250px;
		margin-right: 50px;
	}

	#d1{
		padding-top: 400px;
		padding-left: 10px;
		font-family: 'Amarante';
	}

      /*button and text*/
      .hero-text {
        text-align: center;
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #eeeec0;
      }
      
      .hero-text button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 10px 25px;
        color: black;
        background-color: #b82e2e;
        text-align: center;
        cursor: pointer;
      }
      
      .hero-text button:hover {
        background-color: #e3dada;
        color: rgb(117, 14, 14);
      }
      /*button and text over*/	



    

.container {
    height:200px;
    weight:200px;
  border: 2px solid #ccc;
  background-color:  #F0E68C;
  border-radius: 5px;
  padding: 16px;
  margin: 50px 250
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.container span {
  font-size: 20px;
  margin-right: 5px;
}

@media (max-width: 500px) {
  .container {
      text-align: center;
  }
  .container img {
      margin: auto;
      float: none;
      display: block;
  }
}

.checked {
  color: orange;
}




	</style>	
</head>
<body>
<header class="header">
	<div class="top">
		<div>
        Contact Us +94 47 2237748 / 01 | Herb_Kitchen.com  
		</div>
	</div>
	
	<div class="logo">
		<div>
			<table>
				<tr>
                <td width="600px" style="font-size:50px;font-family:forte;"> <font color="#e5c10b"> Herb 'n   </font><font color="#e5c10b"> Kitchen</font> </td>
					<td> <br> <br>
                    <font size="4px" style="font-family:forte;"> 
							<a href="Home.php">HOME</a> 
							<a href="newabout.php">ABOUT US</a>  
							<a href="menu.php">MENU</a>
							<a href="contact.php">CONTACT</a>
							<a href="newcart.php">CART</a>  
							<a href="sing_up.php"><button class="but" style="color:#000;">Logout</button></a> 
						</font>
					</td>
				</tr>
				
			</table>
		</div>
	</div>
</header><br><br><br><br><br><br>



    <!--text on the image-->
    <div class="bg">
        <!--butoon and text-->
        <div class="hero-text">
            <h1 style="font-size:50px; color:black;">About Us</h1><br>
            <p style="font-size:40px; color:black;">WE WELCOME ANY QUESTION YOU MAY HAVE</p>
            
                    <!--butoon and text over-->
          </div>

          <br><br><br><br><br><br><br><br><br><br>
	
	<div class="bottom">
		<div>
			<table border="0">
				<tr>
                <td id="d1">
                    <hr style="height:3px; width:100%;color:gray;background-color:gray"><br>
                    <h1 style="color:#e5c10b; font-family:forte; "><center>Welcome to Herb 'n Kitchen</center></h1><br>
                    <hr style="height:3px; width:100%;color:gray;background-color:gray"><br>


					
						

					<font color="red" size="6px"> </font> 

					<p>"Welcome to Herb 'n Kitchen – where Culinary Excellence Meets Comfort! Dive into a world where flavors dance and ingredients shine. Our passion for exceptional dining is evident in every dish, crafted with locally-sourced flavors. Whether you're a seasoned food enthusiast or on a culinary adventure, Herb 'n Kitchen promises a memorable experience.

						<br><br>Explore our diverse menu of traditional and innovative dishes, each crafted with precision and love. From breakfast to dinner, we satisfy your palate, leaving you craving more.
						
						<br><br>Navigate our website to discover dish stories, meet talented chefs, and explore our inspiring philosophy. Join us in celebrating the joy of food, where every meal is an occasion and every bite tells a story.
						
						<br><br>Thanks for choosing Herb 'n Kitchen – where passion, flavor, and warmth come together. We look forward to serving you, making your dining experience truly exceptional."</p>

 <br><br>
    </td>
    <td style="padding-left:80px;"> <img id="img1" src="19.webp" width="500px" height="250px" ></td>
				</tr>
			</table>
		</div>
	</div>

    <div class="bottom">
		<div>
			<table border="0">
				<tr>
					<td width="700px">
						<font color="#000">Address </font> <br> <br>

					<font color="#000" size="6px"> Herb 'n Kitchen</font> <br> <br>

						23/128,Palliyawaththa,<br>
						Piliwaana Road <br> 
						Tissamaharama. <br> 
						Contact No - +94 47 2237748  <br> 
						Herb_Kitchen.com 
					

					    <!--to make Feedback form-->
    <div class="bottom_up">
        <div>
                <font color="white">Make a Feedback Form</font>
                
                <table>
                                        
                    <tr>
                        <td width="500px"> </td>
                        <td>	<input type="text" placeholder="First Name">
                        <td> 	<input type="text" placeholder="Last Name">
                    </tr>
                    <tr height="30px">
                        
                    </tr>
                    <tr>
                        <td width="500px"> </td>
                        <td>	<input type="text" placeholder="Email Id">
                        <td> 	<input type="text" placeholder="Mobile No">
                    </tr>
                    
                    <tr height="30px">
                        
                    </tr>
                    <tr>
                        <td width="500px"> </td>
                        <td>	<select> <option> -- Sex -- </option> <option> Male </option> <option> Female </option> </select>
                        <td> 	<input type="text" placeholder="Address">
                    </tr>
                    
                        <tr height="30px">
                        
                    </tr>
                    <tr>
                        <td width="500px"> </td>
                        <td colspan="2">	<textarea placeholder="enter feedback"> </textarea>
                    </tr>
                    
                        <tr height="30px">
                        
                    </tr>
                    <tr>
                        <td width="500px"> </td>
                        <td colspan="2">	
                            <button> SUBMIT </button>
                    </tr>
                </table>
        </div>
    </div>
<br>
					<td style="padding-left:20px;"> </td>
				</tr>	
			</table>
		</div>
	</div><br>
	
    <hr style="height:3px; width:50%;color:gray;background-color:gray"><br>
    <h1 style="color:#e5c10b; font-family:forte; "><center>Customer Review</center></h1><br>
    <hr style="height:3px; width:50%;color:gray;background-color:gray">


    <div class="container">
  <img src="https://www.lankabusinessnews.com/wp-content/uploads/2023/07/Chamikara-Herath-Head-Pharmacist-1-LBN.jpg" alt="Avatar" style="width:90px">
  <p><span>Samantha Silva</span></p><br>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span><br><br><br><br>
  <p style="font-size:18px;">Good product and excellent support service!.</p>
</div>

<div class="container">
  <img src="https://www.georgetown.edu/wp-content/uploads/2022/02/Jkramerheadshot-scaled-e1645036825432-1050x1050-c-default.jpg" alt="Avatar" style="width:90px">
  <p><span>G K M Perera</span></p><br>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span><br><br><br><br>
  <p style="font-size:18px;">Amazing customer service, very prompt, friendly and professional! Thank you so much for your hard work!</p>
</div>

<div class="container">
  <img src="https://images.pexels.com/photos/1065084/pexels-photo-1065084.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Avatar" style="width:100px">
  <p><span>D H P C Menike</span></p><br>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span><br><br>
  <p style="font-size:18px;">This guys are extremely helpful, I would highly recommend their business, in a heartbeat would recommend them.
Thank You for all of your help!</p>
</div>

<div class="container">
  <img src="https://www.pngitem.com/pimgs/m/106-1068071_black-person-png-black-man-business-png-transparent.png" alt="Avatar" style="width:90px">
  <p><span>K R R I D Rajamanthri</span></p><br>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span><br><br><br><br><br>
  <p style="font-size:18px;">Great and fast service! Love the simplicity of this company!!</p>
</div>


<hr style="height:3px; width:50%;color:gray;background-color:gray"><br>
<h1 style="color:#e5c10b; font-family:forte; "><center>About Heathly Foods</center></h1><br>
<hr style="height:3px; width:50%;color:gray;background-color:gray"><br><br>

<center><iframe width="420" height="345" src="https://www.youtube.com/embed/LMLSISU0GFc?si=3IUSvU1Uc1fu3Hui" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>">
</iframe></center>
	

	    
<!--functionality-->
<div class="bottom">
		<div>
			<table border="0">
				<tr>
                    <td>
                        <font color="white" size="5px">|The<br> traditionally <br>Sri Lankan, dining <br>experience.  </font> <br> <br>
                    </td>
                    
					<td >
                        <font color="white" size="5px">Herb 'n Kitchen </font> <br> <br>
                        <a href="Home.php" style="text-decoration:none; font-weight:bold; color:gray;">Herb 'n Kitchen </a>
					    <br>
					    <a href="Home.php" style="text-decoration:none; font-weight:bold; color:gray;">Book</a>
					    <br>
					    <a href="contact.php" style="text-decoration:none; font-weight:bold; color:gray;">Location</a>
                        <br>
                        <a href="menu.php" style="text-decoration:none; font-weight:bold; color:gray;">Menu</a>
                        <br>
                    </td>
				
					<td ><br>
                        <font color="white" size="5px">Stay Connected </font> <br> <br>
                        <a href="contact.php" style="text-decoration:none; font-weight:bold; color:gray;">Contact Us</a>
                        <br>
                        <a href="contact.php" style="text-decoration:none; font-weight:bold; color:gray;">Fecebook</a>
                        <br>
                        <a href="https://www.instagram.com/accounts/login/" target="blank" style="text-decoration:none; font-weight:bold; color:gray;">Instagram</a>
                        <br>
                        <a href="https://myaccount.google.com/?utm_source=sign_in_no_continue&pli=1" target="blank" style="text-decoration:none; font-weight:bold; color:gray;">Email Us</a>
                        <br>
                        <a href="newabout.php" style="text-decoration:none; font-weight:bold; color:gray;">Write to Us</a>
                        <br>
                        <br>
                    </td>

                    <td style="padding-left:20px;">
                        <font color="white" size="5px">More</font> <br> <br>
                        
                        Gift Vouchers
                        <br>
                        Two For One T&C's
                        <br>
                        <br>
                        <br>
                        <br>
                    </td>

                    <td style="padding-left:20px;">
                        <font color="white" size="5px">Info</font> <br> <br>
                        Careers
                        <br>
                        Privacy Policy
                        <br>
                        <br>
                        <br>
                        <br>
                    </td>
				</tr>
			</table>
		</div>
	</div>
        <!--down nav-->
	<div class="nav_down">
		<div>
		  Herb 'n Kitchen &copy; 2023|All rights reserved<br> Website Designed & Powered by P & I Creative
		</div>
	</div>
	
