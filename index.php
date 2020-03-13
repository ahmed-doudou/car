
<?php
// include 'inc/head.php';
include 'header.php';
include 'inc/db.php';
?>
<!--== Preloader Area Start ==-->
   <style type="text/css">
       .error-date{
        color: red;
       }
   </style>

    <!--== Slider Area Start ==-->
    <section id="slider-area">
        
        <!--== slide Item One ==-->
        <div class="single-slide-item overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="book-a-car">
                            <form action="" name="" method="post">

                                <!--== Pick Up Location ==-->
                                <div class="pickup-location book-item">
                                    <h4 class="tform"><b> Pick-up Location:</b></h4>
                                    <select name="depart" class="custom-select" required="">
                                         <option >--Select a country--</option>
                                        <?php 
                                        $query = "SELECT * from ville ";
                                                $result = mysqli_query($con,$query);
                                               while ( $row = mysqli_fetch_assoc($result)) {
                                                   
                                         ?>
                                      <option value="<?php $row["Nom"] ?>"><?php echo $row["Nom"] ?></option>
                                      <?php }  ?>
                                    </select>
                                </div>
                                <!--== Pick Up Location ==-->
                                <div class="choose-car-type book-item">
                                    <h4 class="tform"><b>Drop-Off Location:</b></h4>
                                   <select name="return" class="custom-select" required="">
                                      <option >--Select a country--</option>
                                       <?php 
                                        $query = "SELECT * from ville ";
                                                $result = mysqli_query($con,$query);
                                               while ( $row = mysqli_fetch_assoc($result)) {
                                                   
                                         ?>
                                      <option value="<?php $row["Nom"] ?>"><?php echo $row["Nom"] ?></option>
                                      <?php }  ?>
                                    </select>
                                </div>
                                <!--== Pick Up Date ==-->
                       <div class="pick-up-date book-item">
                                    <h4 class="tform"><b>Pick-Up Date:</b></h4>
                                    <input type="date" id="startDate" name="startDate"  required="" value="" />

                                    <div class="return-car">
                                        <h4 class="tform "><b>Drop-Off Date:</b></h4>
                                        <input type="date" id="endDate" name="endDate"  required="" />

                                    </div>
                                </div>
                                <!--== Pick Up Location ==-->

                                <!--== Car Choose ==-->
                                
                                <!--== Car Choose ==-->

                                <div class="book-button text-center">
                                    <input type="submit" name="search" value="earch" class="book-now-btn">
                                    
                                </div>
                            </form>
                            <?php 
                            
                            if(isset($_POST["search"]) ){
                                $startDate = $_POST["startDate"];
                                $endDate = $_POST["endDate"];
                                        if ($startDate >= $endDate) {
                                            echo "<h4 class='error-date'>the Pick-Up date is <span>SUPERIOR</span> Drop-Off Date</h4>";
                                        }
                            }

                             ?>
                        </div>
                    </div>
                    <div class="col-lg-7 text-right">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="slider-right-text">
                                    <h1>LOREM IPSUM DOLOR SIT </h1>
                                    <p>consectetur adipisicing elit, sed do eiusmod <br><b>  PUt enim ad minim veniam<b/>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== slide Item One ==-->
    </section>
    <!--== Slider Area End ==-->

       <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p></p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>Malysia Car is a car rental agency located in  <a href="https://www.google.com/maps/place/imm+n,+217+Boulevard+Brahim+Roudani,+Casablanca+20250/@33.5750134,-7.639789,341m/data=!3m1!1e3!4m5!3m4!1s0xda7d2c430157035:0xc641b71635983304!8m2!3d33.5752762!4d-7.6392914">Casablanca Maarif</a>. Our the customer benefits from a wide range of vehicles: families, sedans, SUV, 4 * 4 and luxury cars, we have all categories of cars. Find a car that meets your needs on our website now. with one of the best services in casablanca.

</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="assets/img/home-2-about.png" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>

            <!-- About Fretutes Start -->
            <div class="about-feature-area">
                <div class="row">
                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item active">
                            <i class="fa fa-car"></i>
                            <h3>ALL BRANDS</h3>
                            <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3>ALL BRANDS</h3>
                            <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3>ALL BRANDS</h3>
                            <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->
                </div>
            </div>
            <!-- About Fretutes End -->
        </div>
    </section>
    <!--== About Us Area End ==-->


    <!--== Partner Area Start ==-->
    
    <!--== Partner Area End ==-->

    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

           
			<!-- Service Content Start -->
			<div class="row">
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-taxi"></i>
						<h3>RENTAL CAR</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div>
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-cog"></i>
						<h3>CAR REPAIR</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div>
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-map-marker"></i>
						<h3>TAXI SERVICE</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div>
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-life-ring"></i>
						<h3>life insurance</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div>
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-bath"></i>
						<h3>car wash</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div>
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-phone"></i>
						<h3>call driver</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div>
				<!-- Single Service End -->
			</div>
			<!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->
        <!--== What We Do Area Start ==-->
    <section id="what-do-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>WHAT WE DO</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Single We Do Start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-we-do we-do-bg-1">
                        <div class="we-do-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3>CAR INSPECTION</h3>
                                    <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single We Do End -->

                <!-- Single We Do Start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-we-do we-do-bg-2">
                        <div class="we-do-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3>CAR INSPECTION</h3>
                                    <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single We Do End -->

                <!-- Single We Do Start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-we-do we-do-bg-3">
                        <div class="we-do-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3>CAR INSPECTION</h3>
                                    <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single We Do End -->
            </div>
        </div>
    </section>
    <!--== What We Do Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">550</span>+</p>
                                        <h4>HAPPY CLIENTS</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">250</span>+</p>
                                        <h4> Les voitures dans le stocke </h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">50</span>+</p>
                                        <h4>office in cities</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

    <!--== Choose Car Area Start ==-->
    <section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Choisissez votre voiture</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-content-wrap">
                        <!-- Choose Area Tab Menu -->
                        <!--ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular_cars" role="tab" aria-selected="true">popular Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newest_cars" role="tab" aria-selected="false">newest cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#office_map" role="tab" aria-selected="false">Our Office</a>
                            </li>
                        </ul-->
                        <!-- Choose Area Tab Menu -->

                        <!-- Choose Area Tab content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Popular Cars Tab Start -->
                            <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                                <!-- Popular Cars Content Wrapper Start -->
                                <div class="popular-cars-wrap">
                                    <!-- Filtering Menu -->
                                    <!--div class="popucar-menu text-center">
                                        <-a href="#" data-filter="*" class="active">all</a>
                                        <a href="#" data-filter=".con">Conver</a>
                                        <a href="#" data-filter=".hat">Truck</a>
                                        <a href="#" data-filter=".mpv">MPV</a>
                                        <a href="#" data-filter=".sedan">Sedan</a>
                                        <a href="#" data-filter=".suv">SUV</a>
                                    </div-->

                                    <!-- Filtering Menu -->

                                    <!-- PopularCars Tab Content Start -->
                                    <div class="row popular-car-gird">
                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 con suv mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-1.jpg">
                                                      <img src="assets/img/car/car-1.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 hat sedan">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-2.jpg">
                                                      <img src="assets/img/car/car-2.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 suv con mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-3.jpg">
                                                      <img src="assets/img/car/car-3.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 con hat">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-4.jpg">
                                                      <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 con sedan mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-5.jpg">
                                                      <img src="assets/img/car/car-5.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 hat suv mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-6.jpg">
                                                      <img src="assets/img/car/car-6.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->
                                    </div>
                                    <!-- PopularCars Tab Content End -->
                                </div>
                                <!-- Popular Cars Content Wrapper End -->
                            </div>
                            <!-- Popular Cars Tab End -->

                            <!-- Newest Cars Tab Start -->
                            <div class="tab-pane fade" id="newest_cars" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- Newest Cars Content Wrapper Start -->
                                <div class="popular-cars-wrap">
                                    <!-- Filtering Menu -->
                                    <div class="newcar-menu text-center">
                                        <a href="#" data-filter="*" class="active">all</a>
                                        <a href="#" data-filter=".toyota">toyota</a>
                                        <a href="#" data-filter=".bmw">bmw</a>
                                        <a href="#" data-filter=".audi">audi</a>
                                        <a href="#" data-filter=".tata">Tata</a>
                                    </div>

                                    <!-- Filtering Menu -->

                                    <!-- NewestCars Tab Content Start -->
                                    <div class="row newest-car-gird">
                                        <!-- Single Newest Car Start -->
                                        <div class="col-lg-4 col-md-6 tata audi">
                                            <div class="single-new-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-6.jpg">
                                                      <img src="assets/img/car/car-6.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Toyota RAV4 EV</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                    </h3>

                                                    <h5>Toyota</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2018</a>
                                                        <a href="#">Auto</a>
                                                        <a href="#">Non AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Newest Car End -->

                                        <!-- Single Newest Car Start -->
                                        <div class="col-lg-4 col-md-6 bmw tata toyota">
                                            <div class="single-new-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-5.jpg">
                                                      <img src="assets/img/car/car-5.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Toyota RAV4 EV</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                    </h3>

                                                    <h5>Toyota</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2018</a>
                                                        <a href="#">Auto</a>
                                                        <a href="#">Non AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Newest Car End -->

                                        <!-- Single Newest Car Start -->
                                        <div class="col-lg-4 col-md-6 bmw">
                                            <div class="single-new-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-4.jpg">
                                                      <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Toyota RAV4 EV</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                    </h3>

                                                    <h5>Toyota</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2018</a>
                                                        <a href="#">Auto</a>
                                                        <a href="#">Non AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Newest Car End -->
                                    </div>
                                    <!-- NewestCars Tab Content End -->
                                </div>
                                <!-- Newest Cars Content Wrapper End -->
                            </div>
                            <!-- Newest Cars Tab End -->

                            <!-- Office Map Tab -->
                            <div class="tab-pane fade" id="office_map" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="map-area">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6538067244583!2d90.37092511435942!3d23.79533919297639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0cce3251ab1%3A0x7a2aa979862a9643!2sJSoft!5e0!3m2!1sen!2sbd!4v1516771096779"></iframe>
                                </div>
                            </div>
                            <!-- Office Map Tab -->
                        </div>
                        <!-- Choose Area Tab content -->
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>
    <!--== Choose Car Area End ==-->

    <!--== Pricing Area Start ==-->
    <!--section id="pricing-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <-- Section Title Start >
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Only quality for clients</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <-- Section Title End >
            </div>

            <- Pricing Table Conatent Start >
            <div class="row">
                <- Single Pricing Table ->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>BUSINESS</h3>
                        <h2>$ 55.99</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>FREE VEHICLE DELIVERY</li>
                            <li>WEDDINGS CELEBRATIONS</li>
                            <li>FULL INSURANCE INCLUDED</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>ALL INCLUSIVE MINI BAR</li>
                            <li>CHAUFFER INCLUDED IN PRICE</li>
                        </ul>
                    </div>
                </div>
                <-- Single Pricing Table ->

                <-- Single Pricing Table ->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>Trial</h3>
                        <h2>Free</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>FREE VEHICLE DELIVERY</li>
                            <li>OTHER CELEBRATIONS</li>
                            <li>FULL INSURANCE</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>MINI BAR</li>
                            <li>INCLUDED IN PRICE</li>
                        </ul>
                    </div>
                </div>
                <-- Single Pricing Table ->

                <!- Single Pricing Table ->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>standard</h3>
                        <h2>$ 35.99</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>DELIVERY AT AIRPORT</li>
                            <li>WEDDINGS AND OTHER</li>
                            <li>FULL INCLUDED</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>ALL MINI BAR</li>
                            <li>CHAUFFER PRICE</li>
                        </ul>
                    </div>
                </div>
                <-- Single Pricing Table ->
            </div>
            <!- Pricing Table Conatent End ->
        </div>
    </section-->
    <!--== Pricing Area End ==-->

    <!--== Testimonials Area Start ==-->
    
    <!--== Testimonials Area End ==-->

    <!--== Mobile App Area Start ==-->
    

    <!--== Mobile App Area End ==-->

    <!--== Articles Area Start ==-->
    
    <!--== Articles Area End ==-->

   
        <!-- Footer Widget End -->
<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
        <!-- Footer Bottom Start -->
        <?php include 'footer.php';?>

<!--localisation demalysia car -->
<a href="https://goo.gl/maps/8qKR7kX5WN27XT6v9"></a>