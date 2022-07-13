
<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>English Porches |  Contact</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>
  <body class="bg-secondary">
    <header>
        <div class="container">
            <div class="row">
                <a class="col-sm-4 col-lg-3 my-sm-4 my-md-auto" href="index.html">
                    <img src="img/logo.png" class="img-fluid d-block mx-auto">
                </a>
    
                <div class="text-center col-sm-6 my-sm-3 my-md-auto">
                    <i class="icon-briefcase"></i>Office Hours: 8am - 5pm
                    <br>
                    <i class="icon-phone"></i>Phone number: 123 456 789
                    <br>
                    <i class="icon-mail-alt"></i>E-mail: something@example.com
                </div>

                <a class="text-center col-sm-2 col-lg-3 my-0" href="#">
                    <i class="icon-facebook-official"></i>
                </a>
            </div>
        </div>
        
        <nav class="navbar navbar-dark bg-primary navbar-expand-sm ps-3 ps-sm-5">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Navigation switcher">
				<span class="navbar-toggler-icon"></span>
			</button>

            <div class="collapse navbar-collapse" id="mainmenu">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.html"> Porches </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="gallery.html"> Gallery </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html"> About </a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="contact.php"> Contact </a>
					</li>
				</ul>
			</div>
        </nav>
        
    </header>
    
    <section class="contact">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-body bg-white mt-3 pb-3">
                    <header>
                        <h1 class="mt-3 text-center fw-bold">Contact</h1>
                    </header>

                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <p><i class="icon-phone"></i>Phone number: 123 456 789</p>
                            <p>Call us between 8am and 5pm</p>
                        </div>
                        <div class="col-sm-6 text-center">
                            <p><i class="icon-mail-alt"></i>E-mail: something@example.com</p>
                            <p>Ask us everything you want</p>
                        </div>
                    </div>

                    <p class="text-center">Do you have any questions? Send them to us!</p>

                    <form action="send_message.php" method="post" id="contactForm">
						<div class="row">
							<div class="col-sm-6 mt-3">
								<input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
							</div>
							<div class="col-sm-6 mt-3">
								<input class="form-control" name="email" id="email" type="email" placeholder="Enter your email" required>
							</div>
							<div class="col-12 mt-3">
								<textarea class="form-control" name="message" id="message" cols="30" rows="9" placeholder="Enter your message" required></textarea>
							</div>
						</div>
                        <?php
                            if(isset($_SESSION["result"])){
                                if($_SESSION["result"] == "OK"){
                                    echo "<p style='color: green;'>Your message was sent</p>";
                                }
                                elseif($_SESSION["result"] == "MISSING_DATA"){
                                    echo "<p style='color: red;'>You must enter your email and message</p>";
                                }
                                unset($_SESSION["result"]);
                            }
                        ?>
						<div class="form-group mt-3 d-grid col-md-4 offset-md-4">
							<button type="submit" class="btn btn-primary btn-lg">Send</button>
						</div>
						
					</form>
                </div>
            </div>
        </div>
        
    </section>

    <footer class="bg-primary mt-3 pt-3">
        <div class="container">
            <div class="row text-center">
                <p class="fs-5 text-white">English Porches &copy 2022 All rights reserved</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
  </body>
</html>