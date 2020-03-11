<?php 
// Load Composer's autoloader
require_once '../vendor/autoload.php';
require 'config.php';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Instantiation and passing `true` enables exceptions
function send_mail($from = 'null', $name = 'null', $body = '. . .')
{

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.sendgrid.net';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'apikey';                               // SMTP username
        $mail->Password   = API_Key['SendGrid'];          			// SMTP password // API keys kept at config.php
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('noreply@fabrika.rs');
        $mail->addAddress(email);                                   // Name is optional
        $mail->addReplyTo($from, $name);

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $title = $name.', '.$from.' sent from fabrika.rs';
        $mail->Subject = $title;
        $mail->Body    = $body;

        $mail->send();
        echo "<br><br><div class='alert alert-success alert-dismissible fade show' role='alert'>Message has been sent</div>"; # <button type='button' class='close' data-dismiss='alert' aria-label='Close' style='color: #155724 !important; box-shadow: none;'><span aria-hidden='true'>&times;</span></button>
    } catch (Exception $e) {
        echo "<br><br><div class='alert alert-danger alert-dismissible fade show' role='alert'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>"; # <button type='button' class='close' data-dismiss='alert' aria-label='Close' style='box-shadow: none;'><span aria-hidden='true'>&times;</span></button>
    }
}

function WriteHead($a)
	{
		$location 	= '-1';
		$location 	= $a;
		$title 		= 'Fabrika &bull; '. $location;
	?> 
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Local CSS -->
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<title><?php echo $title; ?></title>
		<meta name="description" content=""/>
		<meta name="keywords" content="">
	</head>
	<?php
	}

function WriteNav($a)
	{
		$location 	= '-1';
		$location 	= $a;
	?>
	<header>
		<div class="w-100 text-center bg-light logo">
			<a href="index.php"><img src="img/logos/fabrika.png" class="" alt="Fabrika logo"></a>
		</div>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<a href="index.php" class="navbar-brand font-weight-bold">
				<img src="img/logos/fabrika.png" class="align-top header_img_sm <?php echo ($location === 'Home') ? ' active' : ''; ?>" alt="Fabrika logo">
				Fabrika
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li><a href="#nav_dropdown" class="dropdown-toggle nav-link <?php echo ($location === '') ? ' active' : ''; ?>" id="" data-toggle="collapse" aria-controls="nav_dropdown" aria-expanded="false">Events</a>
						<ul class="collapse dropdown_list" id="nav_dropdown">
							<li><a href="_iff.php" class="nav-link <?php echo ($location === 'International fashion festival') ? ' active' : ''; ?>">International fashion festival</a></li>
							<li><a href="_kotor.php" class="nav-link <?php echo ($location === 'Art and Fashion Festival, Kotor') ? ' active' : ''; ?>">Art and Fashion Festival, Kotor</a></li>
							<li><a href="_bfn.php" class="nav-link <?php echo ($location === 'Belgrade fashion nights') ? ' active' : ''; ?>">Belgrade fashion nights</a></li>
							<li><a href="_lifestyle.php" class="nav-link <?php echo ($location === 'Extraordinary Persons') ? ' active' : ''; ?>">Extraordinary Persons</a></li>
							<li><a href="_music.php" class="nav-link <?php echo ($location === 'Music & Fashion') ? ' active' : ''; ?>">Music & Fashion</a></li>
							<li><a href="_other.php" class="nav-link <?php echo ($location === 'Other') ? ' active' : ''; ?>">Other</a></li>
						</ul>
					</li>
					<li><a href="gallery.php" class="nav-link <?php echo ($location === 'Gallery') ? ' active' : ''; ?>">Gallery</a></li>
					<li><a href="_about.php" class="nav-link <?php echo ($location === 'About us') ? ' active' : ''; ?>">About us</a></li>
					<li><a href="_modeling.php" class="nav-link <?php echo ($location === 'Modeling') ? ' active' : ''; ?>">Modeling</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<?php
	}

function WriteFooter($location = '')
	{
	?>
	<br><br>
	<footer id="header">
		<h1><a href="index.php"><strong>Fabrika</strong> Beograd</a></h1>
		<nav>
			<ul>
				<li><a href="#footer" class="solid">Contact us	<i class="fas fa-chevron-circle-up"></i></a></li>
			</ul>
		</nav>
	</footer>

	<footer id="footer" class="panel">
		<div class="inner split">
			<div>
				<section>
					<h2>Fabrika fashion agency</h2>
					<div class="col-12 col-md-6">
						<p>Takovska 23-25, 11000 Belgrade, Serbia</p>
					</div>
				</section>
				<section>
					<h2>Follow us on ...</h2>
					<ul class="">
						<a title="Fabrika Facebook" href="https://www.facebook.com/fabrika.rs"><i class="fab fa-facebook icon"></i></a>
						<a title="Fabrika Instagram" href="https://www.instagram.com/fabrika_rs/"><i class="fab fa-instagram icon"></i></a>
					</ul>
					<h2>And subscribe to our newsletter</h2>
				<form method="post" action="#">
					<div class="fields">
						<div class="field half">
							<input type="text" name="email" id="email" placeholder="Email" />
						</div>
						<div class="field half">
							<input type="submit" value="Subscribe" class="primary bold" />
						</div>
					</div>
				</form>
				</section>
				<p class="copyright">
					&copy; Fabrika Belgrade
				</p>
			</div>
			<div>
				<section>
					<h2>Get in touch</h2>
					<form method="post" action="#">
						<div class="fields">
							<div class="field half">
								<input type="text" name="name" id="name" placeholder="Name" />
							</div>
							<div class="field half">
								<input type="text" name="email" id="email" placeholder="Email" />
							</div>
							<div class="field">
								<textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Send" class="primary bold"/></li>
							<li><input type="reset" value="Reset" class="bold" /></li>
						</ul>
						<?php if (isset($_POST["email"]) && isset($_POST["name"]) && isset($_POST["message"])) 
								{send_mail($_POST["email"], $_POST["name"], $_POST["message"]);} ?>
					</form>
				</section>
			</div>
		</div>
	</footer>
	<!-- Add Scripts -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
	<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- Multiverse JS -->
	<script type="text/javascript" src="assets/js/jquery.poptrox.min.js"></script>
	<script type="text/javascript" src="assets/js/browser.min.js"></script>
	<script type="text/javascript" src="assets/js/breakpoints.min.js"></script>
	<script type="text/javascript" src="assets/js/util.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<?php if ($location === 'Home') { ?>
		<!-- Calendar -->
		<script src="../node_modules/underscore/underscore-min.js"></script>
	    <script src="../node_modules/moment/min/moment.min.js"></script>
		<script type="text/javascript" src="assets/js/clndr.js"></script>
		<script type="text/javascript">
		// Call this from the developer console and you can control both instances
	    var calendars = {};

	    $(document).ready( function() {

	        // Assuming you've got the appropriate language files,
	        // clndr will respect whatever moment's language is set to.
	        // moment.locale('ru');

	        // Here's some magic to make sure the dates are happening this month.
	        var thisMonth = moment().format('YYYY-MM');
	        // console.log(thisMonth);
	        // Events to load into calendar
	        var eventArray = [
	            {
	                title: 'Multi-Day Event',
	                endDate: thisMonth + '-14',
	                startDate: thisMonth + '-10'
	            }, {
	                endDate: thisMonth + '-23',
	                startDate: thisMonth + '-21',
	                title: 'Another Multi-Day Event'
	            }, {
	                date: 	'2020-05' + '-24',
	                title: 'Another Multi-Day Event'
	            }, {
	                date: thisMonth + '-27',
	                title: 'Single Day Event'
	            }
	        ];

	        calendars.clndr1 = $('.cal').clndr({
	            events: eventArray,
	            clickEvents: {
	                click: function (target) {
	                },
	                today: function () {
	                },
	                nextMonth: function () {
	                },
	                previousMonth: function () {
	                },
	                onMonthChange: function () {
	                },
	                nextYear: function () {
	                },
	                previousYear: function () {
	                },
	                onYearChange: function () {
	                },
	                nextInterval: function () {
	                },
	                previousInterval: function () {
	                },
	                onIntervalChange: function () {
	                }
	            },
	            multiDayEvents: {
	                singleDay: 'date',
	                endDate: 'endDate',
	                startDate: 'startDate'
	            },
	            showAdjacentMonths: true,
	            adjacentDaysChangeMonth: false
	        });

	        // Bind all clndrs to the left and right arrow keys
	        $(document).keydown( function(e) {
	            // Left arrow
	            if (e.keyCode == 37) {
	                calendars.clndr1.back();
	            }

	            // Right arrow
	            if (e.keyCode == 39) {
	                calendars.clndr1.forward();
	            }
	        });
	    });
		</script>
	<?php } ?>
	<!-- Font CDN -->
	<script src="https://kit.fontawesome.com/3f7f7bdb28.js" crossorigin="anonymous"></script>
	<!-- JS not Supported! -->
	<noscript>Your browser does not support JavaScript!</noscript>
	</body>
	</html>
	<?php
	}

function WriteCard($img, $alt, $title, $subtitle, $body, $link, $href)
	{

	?>
	<div class="event-card col-12 col-md-6 col-lg-4 mb-4">
		<div class="card bg-light border-dark h-100 shadow">
			<div class="card-body">
				<img src="<?= $img; ?>" class="card-img-top" alt="<?= ($alt === '') ? '...' : $alt; ?>">
				<h5 class="card-title m-2"><?=($title === '') ? 'Naslov' :  $title; ?></h5>
				<h6 class="card-subtitle m-2"><?= ($subtitle === '') ? '...' : $subtitle; ?></h6>
				<p class="card-text"><?=($body === '') ? '...' :  $body; ?></p>
			</div>
			<div class="card-footer">
				<a href="<?= ($href === '') ? '#' : $href; ?>" class="card-link"><?=($link === '') ? 'Click to see more...' : $link; ?></a>
			</div>
		</div>
	</div>
	<?php 
	}

function WriteRotate($img, $title, $text, $href)
	{ 

	?>
	<div class="col-12 col-sm-6 col-xl-4 row">
		<div class="r-card">
			<div class="r-front shadow-lg">
				<img src="<?= $img; ?>" class="r-card-img" alt="...">
			</div>
			<div class="r-back shadow-lg">
				<div class="r-backCont">
					<h2><?= $title; ?></h2>
					<p><?= $text; ?></p>
					<a href="<?= ($href === '') ? '#' : $href ?>">More...</a>
				</div>
			</div>
		</div>
	</div>
	<?php
	}
?>