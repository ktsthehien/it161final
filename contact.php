<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Lee Energy Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
     
   <!-- jQuery --> 
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <!-- menuMaker Plugin --> 
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
     
      <script src="js/script.js"></script>
 </head>
 <body>
     
     
   <div class="grid-container">
  <header class="item1">
      <a id="logo" href="template.html"><h1>Lee Energy</h1></a>
     
       <nav id="cssmenu">
        <ul>
             <li><a href="template.html"> Home</a></li>
             <li><a href="services.html"> Services</a></li>
            <!-- drop down meny for research pages -->
            
            <!-- drop down meny for google pages -->
            <li><a href="products.html"> Products</a>
             </li>
             <li><a href="contact.php"> About Us</a></li>
        </ul>
        </nav>
    
    </header>
       <div class="item2">
       <div class ="flex-container">
       <section class="aboutus">
          <h2 class="subheader">About Us</h2>
           <p>LEE Energy was established with the vision of being a Northwest company that could provide “the complete package” for energy efficiency.</p>
           
           <p>Since our start in 2015, we have developed an extensive network of suppliers and partners that help us deliver top-drawer products at reasonable prices.</p>
           
           <p>Working with our partner companies, LEE Energy has completed over 510 lighting and energy efficiency projects in the commercial and industrial sectors.</p>
           
           <i> <img src="images/service4.jpg"  alt=""/></i>
       </section>
       
        <section class="contact">
        <h2 class="subheader">Contact Us</h2>
         <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ktsthehien@gmail.com";  //place your/your client's email address here
        $toName = "Hien Nguyen"; //place your client's name here
        $website = "Contact Form";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
        </section>
           </div>
           </div>
        

          
     <div class="item10">
     <footer>
      <p><small>&copy; 2021 by <a href="contact.php">Hien Nguyen</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> ~ <a href="privacy.html" target="_blank">Privacy Policy</a></small></p>
    </footer>
    </div>
</div>
 
     
 </body>
</html>