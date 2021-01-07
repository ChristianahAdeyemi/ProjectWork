<?php 
include('include/config.php');
include('include/header.php');



if(isset($_POST['submit'])){
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $bedroom = mysqli_real_escape_string($conn, $_POST['bedroom']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);

    // echo $status;
    // echo $type;
    // echo $bedroom;
    // echo $location;
  //  $image = $_FILES['image']['name'];

  //   $target = "image/".basename($image);
  //   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
    
    
    
    
    
                // create sql 
                // $sql = "INSERT INTO houses(status,bedroom,type,location,agent,pictures,agent_contact,price) VALUES('$status','$bedroom','$type','$location','$agent','$pictures', '$agent_contact', '$price')";
    
            //     // save to db and check
            //     if(mysqli_query($conn, $sql)){
            //         // success
            //         header('Location: index.php');
            //     } else {
            //         echo 'error: '. mysqli_error($conn);
            //     }
            // }
            
            }


  if ($type == 'restaurant') {
    $select_query = "SELECT * FROM houses WHERE location = '".$location."' AND type = '".$type."' AND bedroom = '".$bedroom."' AND status = '".$status."'";
  }
  else {
    $select_query = "SELECT * FROM houses WHERE location = '".$location."' AND type = '".$type."' AND bedroom = '".$bedroom."' AND status = '".$status."'";
  }
      
  // $query = "SELECT width FROM modules WHERE code = '".$module."'";
  $result = mysqli_query($conn, $select_query);
  $house = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // print_r($house);

  mysqli_close($conn);
?>
<div class="container">
<?php 
  if (count($house) == 0) {
    echo "WHAT YOU SELECTED IS NOT AVAILABLE...TRY AGAIN LATER";
  }


?>
</div>

<section>
<div class="container">
<div class="row">
    <?php foreach($house as $house_item){ ?>
    <div class="col s12 m6 l4">
      <div class="card blue-grey darken-1">
      <div class="card-image">
      <img src="img/<?php echo $house_item['pictures']; ?>" width="250px" height="250px">
      <!-- <img src="image/<?php echo $food_item['image']; ?>" width="250px" height="250px"> -->
      <span class="card-title"><?php echo $house_item["status"];?></span>
      </div>
        <div class="card-content">
        <h4> Apartments Available </h4>
        <h6> DETAILS </h6>
          <p>Bedroom: <?php echo $house_item["bedroom"];?></p>
          <p>Type: <?php echo $house_item["type"];?></p>
          <p> Location: <?php echo $house_item["location"];?></p>
          <p> Agent: <?php echo $house_item["agent"];?></p>
          <p> Agent Contact: <?php echo $house_item["agent_contact"];?></p>
          <p>Price: <?php echo $house_item["price"];?></p>
        </div>
      </div>
    </div>
    <?php }?>
  </div>
  </div>
</section>
<div class="container center-align">
<a href="index.php" class="btn indigo">Back </a>
</div>




