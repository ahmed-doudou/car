<?php   
    include 'inc/head.php';
    include 'connection.php';
     ?>
<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>

    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Login</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <h1 style="color: white">MALYSIA CAR</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 m-auto">
                	<div class="login-page-content">
                		<div class="login-form">
                			<h3>Welcome Back!</h3>
							<form action="" method="post">
								<div class="username">
									<input type="text" placeholder="Email or Username" name="user_name" required="">
								</div>
								<div class="password">
									<input type="password" placeholder="Password" name="password" required="">
								</div>
								<div class="log-btn">
									<button type="submit" name="submit"><i class="fa fa-sign-in" ></i> Log In</button>
								</div>
                                
                                
							</form>
                		</div>
                		
                	</div>
                </div>
        	</div>
        </div>
    </section>
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>


    <?php 

    if (isset($_POST["submit"])) {
        $user_name = $_POST["user_name"];
        $password  = $_POST["password"];
        $query = "SELECT * FROM users WHERE user_name='$user_name' and Password='$password'";
        $results = mysqli_query($conn, $query);

        if($results == true){
                echo "you have a count";
                header ('Location: index.php');
        }
        if ($row = $results->fetch_assoc()) {

                echo $row['email']. "<h1> you have a count </H1><br> ";
            
    
            } else{

                echo "<h1> you don't have a count </H1><br> ";
              }
        
         
    }
        

     ?>
 
