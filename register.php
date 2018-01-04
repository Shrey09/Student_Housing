<!DOCTYPE html>
<html>
    <head>
        <title>Register Page</title>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
        <link rel="stylesheet" type="text/css" href="pcss.css" media="all" />
    </head>
<body>
<div class="container">
    <div id="particles-js"></div>
            <div class="count-particles">
       <span class="js-count-particles">--
         </span> particles </div> <!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> 
         <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> 
        
         <script src="index.js"></script>
			<header>
				<h1>Register</h1>
            </header>       
      <div  class="form">
    		<form id="contactform" method="post" action="register_process.php"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 
    			 
                <p class="contact"><label for="Mobile">Contact (Indian Format)</label></p> 
    			<input id="contact" name="contact" placeholder="1234567890" required="" type="tel"pattern="^\d{10}$" > 
    			 
                
    			<p class="contact"><label for="Address">Address</label></p> 
                <input id="address" name="address" placeholder="Enter Valid Address" required="" type="text"> <br>
                
                <input class="buttom" name="submit" id="submit" tabindex="5" value="Submit" type="submit"> 	         
   </form> 
</div>      
</div>
</body>
</html>
