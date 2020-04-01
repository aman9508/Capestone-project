<?php 
require "navigation.php";
if(isset($_GET["action"])){
    if($_GET["action"]=="view"){
        if(isset($_GET["id"])){
            $query= 'SELECT * from vacationpack where pk_id='.$_GET["id"];
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
           <div class="view-package">
         <form class= "form" method="GET" action="checkout.php" ?>" >
         <div class="view-img">
         <img  class ="view-pk-image" width= 200 src="<?php echo $row["pk_image"];?>" alt="">
         </div>
         <div class="view-content">
         <h1 class = "view-pk-name"><?php echo $row["pk_title"];?></h1>
         <p>Destination<?php echo $row["pk_destination"]; ?>
         <p><?php echo $row["pk_description"]; ?>
         <h4>Price: $<?php echo $row["pk_price"]; ?> </h4>
         <input type="hidden" name="id" value = "<?php echo $row["pk_id"]; ?>">
         <!--<input type="hidden" name="hidden_price" value = "<?php //echo $row["pk_price"]; ?>">-->
         <p> Choose your dates </p>
         <input type = date name="departDate">
         <input type = date name="returnDate">
         <input type="submit" class="btn btn-secondary" name="action" value ="Purchase" >
         </div>
         </form>    </div>
     <?php
     }
 }
 else{
     echo mysqli_error($link);
 }
        }
    }
}
?>
