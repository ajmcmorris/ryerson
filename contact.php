<?php 
if(isset($_POST['submit'])){
    $to = "insid2016@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Ryerson School Of Interior Design";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ryerson Year End Show 2015 displaying the best work of the academic year">
    <meta name="keywords" content="Ryerson School of Interior Design,Ryerson,RSID,Interior Design,Graphics,Social Media">
    <meta name="author" content="Andre McMorris">
    <title>Ryerson School Of Interior Design</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/overlay.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <script src="js/modernizr.custom.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
      <i class="fa fa-bars fa-2x" id="trigger-overlay"></i>
      <!-- open/close -->
    <div class="overlay overlay-slidedown">
      <button type="button" class="overlay-close">Close</button>
      
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="committee.html">Committee</a></li>
          <li><a href="grads.html">Grads</a></li>
          <li><a href="legacy.html">Teasers</a></li>
          <li><a href="live.html">Live</a></li>
          <li><a href="pop-up.html">Pop Up</a></li>
          <li><a href="sponsorship.html">Sponsorship</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
     <ul class="icon-list pull-right"> 
       <li><a href="https://www.instagram.com/dialogueinsid/" target="_blank"><img src="img/insta.png" class="img-responsive" alt=""></a></li>
       <li><a href="https://www.facebook.com/Dialogue-INSID-490959174417796/?sk=timeline&app_data" target="_blank"><img src="img/facebook2.png" class="img-responsive" alt=""></a></li>
       <li><a href="https://www.linkedin.com/groups/8431642" target="_blank"><img src="img/linkedin1.png" class="img-responsive" alt=""></a></li>
       <li><a href="https://twitter.com/INSID2016YES" target="_blank"><img src="img/twitter.png" class="img-responsive" alt=""></a></li>
     </ul>       

    <div class="container-fluid" >
      

      <div class="col-sm-offset-1 col-sm-10 col-xs-12 contact-body">
      
       <section>
         <div class="col-md-6">
         <iframe id="map-canvas" width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ38q7dzXL1IkRHiF4_kcWm9s&key=AIzaSyCNPJiFW72d2uMa0y_0fkaVJJatVqdy-Wo" allowfullscreen></iframe>
          <!--<iframe id="map-canvas" width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJfRg6TTXL1IkRKzVtYzj1CWY&key=AIzaSyCNPJiFW72d2uMa0y_0fkaVJJatVqdy-Wo" allowfullscreen></iframe>
          --><address class="beebs-font text-left blk-font">
          <strong>Ryerson School of Interior Design.</strong><br>
          302 Church Street<br>
          Toronto, ON, M5B 2K3<br>
        </address>
         </div>
         <div class="col-md-6" id="form-section">
           <h1 class="beebs-neue-font blk-font">CONTACT US</h1>
           <h2 id="shy" class="beebs-neue-font blue-font">don't be shy!</h2>
           <form class="beebs-font" role="form" method="post" action="contact.php">
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" >
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="10" placeholder="Message" id="message" name="message"></textarea>
              </div>
              <button type="submit" name="submit" value="Submit" class="btn btn-default" id="sub-btn">Submit</button>
            </form>
         </div>
        
       </section>
      
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/demo1.js"></script>
  </body>
</html>