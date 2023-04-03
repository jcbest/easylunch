
<?php
session_start();
include("config.php");
//Booking
if(isset($_POST['book'])){
  extract($_POST);
  
  $idcard = $_SESSION['login'];

  
  $time=date('Y-m-d H:i:s');

  if(!empty($message)){
    //book food
    $sql="INSERT INTO  booking(message,time,idcard,food,book_time) VALUES(:message,:time,:idcard,:food,:book_time)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':message',$message,PDO::PARAM_STR);
    $query->bindParam(':time',$time,PDO::PARAM_STR);
    $query->bindParam(':idcard',$idcard,PDO::PARAM_STR);
    $query->bindParam(':food',$food,PDO::PARAM_STR);
    $query->bindParam(':book_time',$book_time,PDO::PARAM_STR);
 
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
      //update table food list
      $sql = "SELECT * from food_list where type_of_food = '$food'";
            $query = $dbh->prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            if($query->rowCount() > 0)
            {
            foreach($results as $result)
            {  
              $no=htmlentities($result->booked_qty +1);
              
              $id=htmlentities($result->id);

             
              $sql1="update food_list  set booked_qty=:no where id=:id ";
              $query1 = $dbh->prepare($sql1);
              $query1->bindParam(':no',$no,PDO::PARAM_STR);
              $query1->bindParam(':id',$id,PDO::PARAM_STR);
              $query1->execute();
              
            }}
//update luch time
$sql = "SELECT * from dbtime where time = '$book_time'";
            $query = $dbh->prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            if($query->rowCount() > 0)
            {
            foreach($results as $result)
            {  
              $no=htmlentities($result->booked_qty +1);
              
              $id=htmlentities($result->id);

              echo $id,$no;
              $sql1="update dbtime  set booked_qty=:no where id=:id ";
              $query1 = $dbh->prepare($sql1);
              $query1->bindParam(':no',$no,PDO::PARAM_STR);
              $query1->bindParam(':id',$id,PDO::PARAM_STR);
              $query1->execute();
            }}
    $msg1="<b style='color:green;'>Your Order has been Booked successfully</b>";

    echo "<script type='text/javascript'>window.alert('Your Order has been Booked successfully');</script>" ;
    }
    else 
    {
    $msg1="<b style='color:red;'>Something went wrong. Please try again</b>";
    
    
    }
  }else{
      $msg1= "<b style='color:red;'>you must complete all the information, fill them and try again</b>";
  }
    }
  

  

?>

<!-- ======= Head ======= -->

<?php include("head.php");?>

<!-- End Head -->

<!-- ======= Header ======= -->


  <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->

  <?php include("top.php");?>

  <!-- Ebd Top -->

  <!-- ======= Header ======= -->
  <?php include("menu.php");?>
  <!-- End Header -->

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">
      
          
     
      <!-- ======= Book A Table Section ======= -->
    <?php 

    switch(strtolower($_GET['page'])){
    
   case "view":
          require_once 'view.php';
          break;
		case "logout":
		    require_once 'logout.php';
		    break;
		case "menu_list":
			require_once 'menu_list.php';
			break;
		case "lunch_time":
			require_once 'lunch_time.php';
			break;
   case "order":
        require_once 'order.php';
        break;
    case "edit_order":
          require_once 'edit_order.php';
          break;
   default:
	     require_once 'order.php';
		  break;
		}
    ?>

    <!-- End Book A Table Section -->
       
   
      </div>
    </section>

    <section class="inner-page">
      <div class="container">
        
    

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
<?php include("footer.php"); ?>

 <!-- ======= End Footer ======= -->