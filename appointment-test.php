<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Set Up Appointment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/serviclean.js"></script>
    <link rel="stylesheet" href="css/rangeSlider.css">
	<link href = "css/seviclean_stylesheet.css" type = "text/css" rel = "stylesheet" />
    <link rel="stylesheet" href="css/appointment.css" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>

    <!--Mobile menu-->
    <!--Mobile menu-->
 	<nav class="navbar navbar-findcond navbar-fixed-top ">
    <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
            <a class="navbar-brand" href="index.html" style="padding-top: 0;">
      			<img src='images/logo_nav_mobile.png' alt="Logo" width="50" height="50" />
      		</a>
			<a class="navbar-brand hidden-xs hidden-sm" href="index.html">H C <span class="serviclean">ServiClean</span></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="index.html">Home</a></li>
          		<li><a href="about_us.html">About Us</a></li>
          		<li><a href="faq.html">FAQ</a></li>
          		<li><a href="contact_us.html">Contact Us</a></li>
			</ul>
		</div>
	</div>
</nav>


    <!--End mobile menu-->
    <div class = "container">
    	<div class = "padding_top"></div>
        <div class="row">
        	<div class="col-md-2"></div>
        	<div class = "col-xs-12 col-md-8" align="center">
        		<h2 style="font-size:40px">FREE CONSULTATION</h2>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
        	<div class = "col-xs-1 col-md-3"></div>
            <div class = "col-xs-10 col-md-6">
            	<p class = "appointment-description">
                	You are a couple of seconds away from scheduling your free consultation. Please take the time to fill out the information
                    needed to ensure that we have all that we need.
                </p>
            </div>
            <div class = "col-xs-1 col-md-3"></div>
        </div>
        <br /><br /><br />
         <form id = "ajax-contact"  class="formoid-solid-purple" style="background-color:#FFFFFF;font-size:12px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="appointment.php">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            YOUR INFORMATION
                        </a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="icon-addon addon-lg">
                            <input class="form-control" placeholder="First Name" type="text" name="first_name" required />
                            <label for="first_name" class="glyphicon glyphicon-user"></label>
                        </div>
                        <div class="icon-addon addon-lg">
                            <input class="form-control" placeholder="Last Name" type="text" name="last_name" required />

                            <label for="last_name" class="glyphicon glyphicon-user"></label>
                        </div>


                        <div class="icon-addon addon-lg">
                            <input class="form-control" placeholder="Street Address" type="text" name="street_address1" required />
                            <label for="address[addr1]" class="glyphicon glyphicon-home"></label>
                        </div>

                        <div class="icon-addon addon-lg">
                            <input class="form-control" placeholder= " Street Address Line 2" type="text" name="street_address2" />
                            <label for="address[addr2]" class="glyphicon glyphicon-home"></label>
                        </div>

                        <div class="icon-addon addon-lg">
                            <input class="form-control"  placeholder="City" type="text" name="city" required />
                            <label for="address[city]" class="glyphicon glyphicon-road"></label>
                        </div>

                       <div class="icon-addon addon-lg">
                           <input class="form-control" placeholder="Postal / Zip Code" type="text" maxlength="15" name="zip_code" required />
                           <label for="address[zip]" class="glyphicon glyphicon-road"></label>
                        </div>
                        <div class="icon-addon addon-lg">
                            <input class="form-control" type="email" name="email" value="" placeholder="Email" required />
                            <label for="email" class="glyphicon glyphicon-envelope"></label>
                        </div>
                        <div class="icon-addon addon-lg">
                            <input class="form-control" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone" placeholder="Phone" value="" required />
                            <label for="phone" class="glyphicon glyphicon-earphone"></label>
                        </div>
                    </div>
               </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            OTHER INFO
                        </a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                    	<label class = "appt-label">Pets Owned</label>
                        <select id = "pets"name="pets"  class="form-control">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5+</option>
                        </select>
                        <br/>
                        <label class= "appt-label">Extras [EXTRA FEE]</label>
                        <br/>
                            <div class = "check-spacer"> <input name = "extra[]" class="appt-checkbox" type="checkbox"  value="Inside Fridge" />  Inside Fridge</div>
                            <div class = "check-spacer"> <input name = "extra[]" class="appt-checkbox" type="checkbox" value="Inside Oven" />  Inside Oven</div>
                            <div class = "check-spacer"> <input name = "extra[]" class="appt-checkbox" type="checkbox"  value="Interior Windows" />  Interior Windows</div>
                            <div class = "check-spacer"> <input name = "extra[]" class="appt-checkbox" type="checkbox" value="Laudry Wash & Dry" />  Laundry Wash And Dry</div>
                            <div class = "check-spacer"> <input name = "extra[]" class="appt-checkbox" type="checkbox" value="Inside Cabinets">  Inside Cabinets</div>
                            <div class = "check-spacer"> <input name = "extra[]" class="appt-checkbox" type="checkbox" value="Baseboard Deep Clean">  Baseboard Deep Clean</div>
                        <br />

                        <textarea id = "message" name="message"   placeholder="Additional comments...."class="form-control comments_textbox" rows="8"></textarea>
                        <?php
    						$bedrooms = $_REQUEST["bedrooms"];
							$bathrooms = $_REQUEST["bathrooms"];
							$size = $_REQUEST["size"];
							$options= $_REQUEST["options"];
    						echo"<input name='bedrooms' value='$bedrooms' style = 'display:none;'/>";
							echo"<input name='bathrooms' value='$bathrooms' style = 'display:none;' />";
							echo"<input name='size' value='$size' style = 'display:none;' />";
							echo"<input name='options' value='$options' style = 'display:none;' />";
						?>
                    </div>
                </div>
            </div>
        </div>
        <div class="submit"><input type="submit" value="Submit" /></div>
    </form>




 	</div>
     <br /><br /><br /><br />
	<footer class="footer-distributed">

			<div class="footer-left">

				<h3>H C <span>ServiClean</span></h3>

				<p class="footer-links">
					<a class="home_link" href="index.html">Home</a>
					·
					<a  class="about_us_link" href="about_us.html">About Us</a>
					·
					<a class = "faq_link" href="faq.html">FAQ</a>
					·
					<a class="contact_us_link" href="contact_us.html">Contact Us</a>
				</p>

				<p class="footer-company-name">H C ServiClean &copy; 2016</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker glyphicon glyphicon-home"></i>
					<p><span class="address_span">P.O Box 1091</span>46060 Noblesville, Indiana</p>
				</div>

				<div>
					<i class="fa fa-phone glyphicon glyphicon-earphone "></i>
					<p>+1 (847) 293 4525</p>
				</div>

				<div>
					<i class="fa fa-envelope glyphicon glyphicon-envelope  "></i>
					<p class="email_span">contact<span style="color:#ffca3c">@</span>hcserviclean.com</p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span class = "abut_the_company_span">About the company</span>
					

						Providing house and commercial cleaning for more than 5 years. We have a history of excellence and dedication
                        to our clients, providing professional and high-quality cleaning. 
				</p>

				<div class="footer-icons">

					<a target = "_blank" href="https://www.yelp.com/biz/hc-serviclean-noblesville-2"><i class="fa fa-yelp"></i></a>
					<a target = "_blank" href="https://www.facebook.com/hcserviclean/"><i class="fa fa-facebook-square"></i></a>

				</div>

			</div>

		</footer>

</body>
</html>
