<?php
include "navigation.php"?>
<script>
function getDestination(val){
	console.log(val);
	document.getElementById("destList").style.display="none";
}
</script>
<div class="slider">
			<div class="slider-container">
				<div class="slider_main">
					<h1>Find Your Wave Chasin smile!</h1>
					<p>If you find a lower price, we'll match it and refund the difference.</p>
					<div class="find">
						<h4>FIND YOUR TOUR</h4>
						<form class="form-container">
									<div class="form-group">
								     	<label for="from" method="GET">Packages</label><br>
								      	<select class="list" name="from" id="from">
										  <?php  
										   $query= 'SELECT `pk_region` from vacationpack';
            								$result = mysqli_query($link,$query);
            								if(mysqli_num_rows($result)>0){
                								while($row = mysqli_fetch_array($result)){
													echo "<option value = ".$row['pk_id'].">".$row["pk_region"]."</option>";
												}
											}
                    					   ?>
										</select>
								    </div>
								    <div class="form-group">
								     	<label for="Departure">Departure:</label><br>
								      <input type=date name ="departDate">
								    </div>
								    <div class="form-group">
									<label for="return">
								   <input type="date" name="returnDate">
								   </div>
								</div>
									<div class="search_button">
										<a href="#">Search</a>
								</div>
						</form>
				</div>
			</div>
		</div><!--slider-->
<div class="packages">
<?php $query= "SELECT * from vacationpack";
 $result = mysqli_query($link,$query);
 if(mysqli_num_rows($result)>0){
     while($row = mysqli_fetch_array($result)){
         ?>
           <div class="package">
         <form class= "form" method="post" action="view.php?action=view&id=<?php echo $row["pk_id"]; ?>" >
         <img  class ="package-image" width= 200 src="<?php echo $row["pk_image"];?>" alt="">
         <h4 class = "package-name"><a href="view.php?id=<?php echo $row["pk_id"]; ?> "> <?php echo $row["pk_title"]; ?></a></h4>
         <p> <?php echo $row["pk_destination"]?></p>
         <h4>$<?php echo $row["pk_price"]; ?></h4>
         <input type="hidden" name="hidden_name" value = "<?php echo $row["pk_destination"]; ?>">
         <input type="hidden" name="hidden_price" value = "<?php echo $row["pk_price"]; ?>">
         <input type="submit" class="btn btn-secondary" name ="details" value ="View More details" >
         </form>    </div>
     <?php
     }
 }
 else{
     echo mysqli_error($link);
 }
?>
		<div class="media">
			<div class="container">
				<div class="media_title">
					<h2>WHY My TRIP?</h2>
				</div>
				<div class="col-lg-12 padding_part media_main">

					<div class="col-lg-4 ">
						<div class="media_first">
							<div class="col-lg-5  media_first_left">

								<i class="fa fa-plane" aria-hidden="true"></i>
							</div>
							<div class="col-lg-7 media_first_right">
								<h4>Travel with Confidence.</h4>
								<p>Be served by travel agents that know! 24/7 service just a phone-call away.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 ">
						<div class="media_first">
							<div class="col-lg-5media_first_left">

								<i class="fa fa-compass" aria-hidden="true"></i>
							</div>
							<div class="col-lg-7 media_first_right">
								<h4>OUR BEST DEALS</h4>
								<p>Prices to worldwide destinations are constantly updated due to our one-of-a-kind enhanced software engine.</p>
							</div>
						</div>
					</div>
				</div>
			</div>



		<div class="footer">
			<div class="container">
				<div class=" col-lg-12  padding_part">
					<div class="col-lg-3 ">
						<div class="contact_us">
							<h4>Contact Us</h4>
							<div class="contact_us_menu">
								<ul>
                                    <li><i class="fa fa-envelope-open" aria-hidden="true"></i><span>webdesigners@gmail.com</span></li>
									<li><i class="fa fa-mobile" aria-hidden="true"></i><span>235-562-2563</span></li>

									<li><i class="fa fa-map-pin" aria-hidden="true"></i><span>1235,Street Market Canada Ontario. </span></li>
								</ul>
                                <p>© 2019. All rights reserved. </p>
							</div>
						</div>




					</div>

                </div>

		</div><!--footer-->
	</div><!--wrapper-->
    </div>
</body>
</html>
