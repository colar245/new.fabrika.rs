<?php require 'assets/logic/main.php'; 
	$location = 'Home';
	WriteHead($location);
?>
<body>
	<!-- NAVIGATION -->
	<?php WriteNav($location); ?>
	<div class="container-fluid p-0">
		<div class="col-12 span p-0">
			<div id="hero" class="carousel carousel-fade" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="img/4.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="img/5.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="img/6.jpg" class="d-block w-100" alt="...">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#hero" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#hero" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		<!--div class="cal">
			<div class="elegant-calencar">
			<p id="reset">reset</p>
	        <div id="header" class="clearfix">
				<div class="pre-button"><</div>
				<div class="next-button">></div>
	            <div class="head-info">
	                <div class="head-day"></div>
	                <div class="head-month"></div>
	            </div>	
	        </div>
	        <table id="calendar">
	            <thead>
	                <tr>
	                    <th>Sun</th>
	                    <th>Mon</th>
	                    <th>Tue</th>
	                    <th>Wed</th>
	                    <th>Thu</th>
	                    <th>Fri</th>
	                    <th>Sat</th>
	                </tr>
	            </thead>
	            <tbody>
	                <tr>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                </tr>
	                <tr>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                </tr>
	                <tr>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                </tr>
	                <tr>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                </tr>
	                <tr>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                </tr>
	                <tr>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                </tr>
	            </tbody>
	        </table>
	    	</div>
	    </div-->
	    <div class="row pl-2 pr-2 pt-5 event_wrap">
	    	<div class="calendar col-12 col-md-4 mb-5">
		    	<div class="jzdbox1 jzdbasf jzdcal">

					<div class="jzdcalt">
						<a class="" role="button">
							<span class="float-left carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous month</span>
						</a>
						June 2017
						<a class="" role="button">
							<span class="float-right carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next month</span>
						</a>
					</div>

					<span>Su</span>
					<span>Mo</span>
					<span>Tu</span>
					<span>We</span>
					<span>Th</span>
					<span>Fr</span>
					<span>Sa</span>


					<span class="jzdb"><!--BLANK--></span>
					<span class="jzdb"><!--BLANK--></span>
					<span class="jzdb"><!--BLANK--></span>
					<span class="jzdb"><!--BLANK--></span>
					<span class="jzdb"><!--BLANK--></span>
					<span class="jzdb"><!--BLANK--></span>
					<span>1</span>
					<span class="circle" data-title="My 25th birthday!">2</span>
					<span>3</span>
					<span>4</span>
					<span>5</span>
					<span>6</span>
					<span>7</span>
					<span>8</span>
					<span>9</span>
					<span>10</span>
					<span>11</span>
					<span class="circle" data-title="2 month anniversary!">12</span>
					<span>13</span>
					<span>14</span>
					<span>15</span>
					<span>16</span>
					<span class="curent_date">17</span>
					<span>18</span>
					<span>19</span>
					<span>20</span>
					<span>21</span>
					<span class="circle" data-title="#MusicMonday - share your favorite song!">22</span>
					<span>23</span>
					<span>24</span>
					<span>25</span>
					<span>26</span>
					<span>27</span>
					<span>28</span>
					<span>29</span>
					<span>30</span>
					<span class="jzdb"><!--BLANK--></span>
					<span class="jzdb"><!--BLANK--></span>
					<span class="jzdb"><!--BLANK--></span>
					<span class="jzdb"><!--BLANK--></span>
					<span class="jzdb"><!--BLANK--></span>
					<span class="jzdb"><!--BLANK--></span>
				</div>
	    	</div>
		    <div class="col-12 col-md-8 mb-5 coming-next">
		    	<img src="img/POZIV.jpg" class="shadow-lg rounded-lg">
		    </div>
	    </div>
	</div>
	<div class="container-fluid row r-wrap">
		<div class="col-12 row">
			<?php WriteRotate(
				'img/_iff.jpg',
				'International Fashion Festival',
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, voluptatibus.',
				'_iff.php'
			); ?>
			<?php WriteRotate(
				'img/_bfn.jpg',
				'Belgrade Fashion Nights',
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A possimus mollitia sunt qui tempora, ut reprehenderit accusantium vero perferendis ullam.',
				'_bfn.php'
			); ?>
			<?php WriteRotate(
				'img/_kotor.jpg',
				'Kotor Fashion Festival',
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A possimus mollitia sunt qui tempora, ut reprehenderit accusantium vero perferendis ullam.',
				'_kotor.php'
			); ?>
			<?php WriteRotate(
				'img/_lifestyle.jpg',
				'Extraordinary Persons',
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A possimus mollitia sunt qui tempora, ut reprehenderit accusantium vero perferendis ullam.',
				'_lifestyle.php'
			); ?>
			<?php WriteRotate(
				'img/1.jpg',
				'Lorem ipsum dolor.',
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A possimus mollitia sunt qui tempora, ut reprehenderit accusantium vero perferendis ullam.',
				''
			); ?>
		</div>
	</div>
	<!-- Footer -->
	<?php WriteFooter(); ?>