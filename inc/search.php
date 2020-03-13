<?php 


	include 'db.php';
	include 'header.php';


 ?>
<style type="text/css">
	h2{
		color: red;
	}
</style>
<form method="post">
	<input type="text" name="searched" placeholder="search ..." class="col-12">
	<input type="submit" name="submit" value="search">
</form><br>
<table class="table table-striped table-sm" border="2px">
                      <thead>
                        <tr >
                          <th>#</th>
                          <th>User Name</th>
                          <th>Email</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
<?php 

	if (isset($_POST["submit"])) {
		$count=0;
		$searched = $_POST["searched"];
		echo "result of search <b>". $searched. "</b>";
		$sel_query="Select * from users WHERE CONCAT(`id`,`user_name`, `password`, `email`) LIKE '%".$searched."%'";
                $result = mysqli_query($con,$sel_query);
                while($row = mysqli_fetch_assoc($result)) { 
              
                 $count++;


	?>
                    
                      
                        <tr >
                          
                          <td><?php echo $row["id"]; ?></td>
                          <td><?php echo $row["user_name"]; ?></td>
                          <td><?php echo $row["email"]; ?></td>
                         
                          
                          <?php }} ?>
                        </tr>
                     
                    </table>

<div class="book-a-car">
                            <form action="" name="" method="post">

                     <div class="pick-up-date book-item">
                                    <h4 class="tform"><b>Pick-Up Date:</b></h4>
                                    <input type="date" id="startDate" name="startDate"  required="" value="" />

                                    <div class="return-car">
                                        <h4 class="tform "><b>Drop-Off Date:</b></h4>
                                        <input type="date" id="endDate" name="endDate"  required="" />
                                    </div>
                                    <input type="submit" name="date" value="CONCAT">
                                </div>
                                <?php 
                                	if (isset($_POST["date"])) {
                                		$startDate = $_POST["startDate"];
                                		$endDate = $_POST["endDate"];
                                		
                                		if ($startDate >= $endDate) {
                                			echo "<h2>the Pick-Up date is <span>SUPERIOR</span> Drop-Off Date</h2>";
                                		}else{
                                			echo "Pick-Up Date:".$startDate."<br>" ;
                                			echo "<br>Drop-Off Date:". $endDate;
                                		}
                                	}
                                 ?>
                            </form>
                        </div>

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