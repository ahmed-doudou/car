<?php 
    include 'inc/head.php'; 
    include 'inc/header.php';

?>
<style type="text/css">
    .form{
            width: 50%;
            margin-left: 267px;
    }
    .fa-briefcase{
        float: right;
    }
    .door{
        float: right;
    }
</style>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
               
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="book-a-car form">
                            <form action="index.php" name="">
                                <!--== Pick Up Location ==-->
                                <div class="pickup-location book-item">
                                    <h4 class="tform"><b>Lieu de départ:</b></h4>
                                    <select class="custom-select">
                                      <option value="1">CASA</option>
                                      <option value="2">KECH</option>
                                      <option value="3">FES</option>
                                      <option value="3">RABAT</option>
                                      <option value="4">CASA</option>
                                      <option value="5">KECH</option>
                                      <option value="6">FES</option>
                                      <option value="7">RABAT</option>
                                    </select>
                                </div>
                                <!--== Pick Up Location ==-->

                                <!--== Pick Up Date ==-->
                                <div class="pick-up-date book-item">
                                    <h4 class="tform"><b>Date De Départ :</b></h4>
                                    <input id="startDate" placeholder="Pick Up Date" />

                                    <div class="return-car">
                                        <h4 class="tform"><b>Date D’arriver :</b></h4>
                                        <input id="endDate" placeholder="Return Date" />
                                    </div>
                                </div>
                                <!--== Pick Up Location ==-->

                                <!--== Car Choose ==-->
                                <div class="choose-car-type book-item">
                                    <h4 class="tform"><b>Lieu d’arriver:</b></h4>
                                    <select class="custom-select">
                                      <option value="1">CASA</option>
                                      <option value="2">KECH</option>
                                      <option value="3">FES</option>
                                      <option value="3">RABAT</option>
                                      <option value="4">CASA</option>
                                      <option value="5">KECH</option>
                                      <option value="6">FES</option>
                                      <option value="7">RABAT</option> 
                                    </select>
                                </div>
                                <!--== Car Choose ==-->

                                <div class="book-button text-center">
                                    <button class="book-now-btn">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Service Page Content Start ==-->
    <section id="gallery-page-content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="popular-cars-wrap">
                        <!-- Filtering Menu -->
                        <div class="popucar-menu text-center">
                            <a href="#" data-filter="*" class="active">all</a>
                            <a href="#" data-filter=".con">RENAULT TWINGO</a>
                            <a href="#" data-filter=".hat">FIAT </a>
                            <a href="#" data-filter=".mpv">CITROEN C3</a>
                            <a href="#" data-filter=".sedan">FORD FOCUS</a>
                            <a href="#" data-filter=".suv">PEUGEOT 308 AUTO</a>
                        </div>
                        <!-- Filtering Menu -->
                
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
                                            <a href="#">BMW 1500</a>
                                            <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                        </h3>

                                        <h5>HATCHBACK</h5>
                                            
                                        <div class="p-car-feature">
                                            <i class="fa fa-users"> <b>5</b></i>
                                            <i class="fa fa-briefcase"> <b>2</b></i><br>
                                            <i class="kmh"><img src="speed.png" style="width:15px;height:15px"> <b>180KM/H</b></i>
                                            <i class="door"><img src="car-door.png"  style="width: 15px;height: 15px;"> <b>4</b></i><br><br>
                                            
                                            
                                    
                                            <a href="#">2017</a>
                                            <a href="#"><b>manual</b></a>
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
                                            <i class="fa fa-users"> <b>5</b></i>
                                            <i class="fa fa-briefcase"> <b>2</b></i><br>
                                            <i class="kmh"><img src="speed.png" style="width:15px;height:15px"> <b>180KM/H</b></i>
                                            <i class="door"><img src="car-door.png"  style="width: 15px;height: 15px"> <b>4</b></i><br><br>
                                            
                                            
                                    
                                            <a href="#">2017</a>
                                            <a href="#"><b>manual</b></a>
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
                                            <a href="#">DACIA </a>
                                            <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                        </h3>

                                        <h5>HATCHBACK</h5>

                                        <div class="p-car-feature">
                                            <i class="fa fa-users"> <b>5</b></i>
                                            <i class="fa fa-briefcase"> <b>2</b></i><br>
                                            <i class="kmh"><img src="speed.png" style="width:15px;height:15px"> <b>180KM/H</b></i>
                                            <i class="door"><img src="car-door.png"  style="width: 15px;height: 15px"> <b>4</b></i><br><br>
                                            
                                            
                                    
                                            <a href="#">2017</a>
                                            <a href="#"><b>manual</b></a>
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
                                            <a href="#"> FIRARY 230</a>
                                            <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                        </h3>

                                        <h5>HATCHBACK</h5>

                                        <div class="p-car-feature">
                                           <i class="fa fa-users"> <b>5</b></i>
                                            <i class="fa fa-briefcase"> <b>2</b></i><br>
                                            <i class="kmh"><img src="speed.png" style="width:15px;height:15px"> <b>180KM/H</b></i>
                                            <i class="door"><img src="car-door.png"  style="width: 15px;height: 15px"> <b>4</b></i><br><br>
                                            
                                            
                                    
                                            <a href="#">2017</a>
                                            <a href="#"><b>manual</b></a>
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
                                       <i class="fa fa-users"> <b>5</b></i>
                                       
                                            <i class="fa fa-briefcase"> <b>2</b></i><br>
                                            <i class="kmh"><img src="speed.png" style="width:15px;height:15px"> <b>180KM/H</b></i>
                                            <i class="door"><img src="car-door.png"  style="width: 15px;height: 15px"> <b>4</b></i><br><br>
                                            
                                            
                                    
                                            <a href="#">2017</a>
                                            <a href="#"><b>manual</b></a>
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
                                            <i class="fa fa-users"> <b>5</b></i>
                                            <i class="fa fa-briefcase " > <b>2</b></i><br>
                                            <i class="kmh"><img src="speed.png" style="width:15px;height:15px"> <b>180KM/H</b></i>
                                            <i class="door"><img src="car-door.png"  style="width: 15px;height: 15px"> <b>4</b></i><br><br>
                                            
                                            
                                    
                                            <a href="#">2017</a>
                                            <a href="#"><b>manual</b></a>
                                            <a href="#">AIR CONDITION</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Popular Car End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--== Service Page Content End ==-->

    <!--== Partner Area Start ==-->
    
    <!--== Partner Area End ==-->

    <!--== Testimonials Area Start ==-->
    
    <!--== Testimonials Area End ==-->

    <!--== Footer Area Start ==-->
   
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
<?php include 'footer.php'; ?>
