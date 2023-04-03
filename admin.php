
<?php
session_start();
include("config.php");
//Booking
if(isset($_POST['add'])){
  extract($_POST);
  
    //book food
    $sql="INSERT INTO  food_list(type_of_food,qty) VALUES(:food,:qty)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':food',$food,PDO::PARAM_STR);
    $query->bindParam(':qty',$qty,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
     
              
        
//update food

    $msg1="<b style='color:green;'>Food has been added successfully</b>";

    echo "<script type='text/javascript'>window.alert('Food has been added successfully');</script>" ;
    }
    else 
    {
    $msg1="<b style='color:red;'>Something went wrong. Please try again</b>";
    
    
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
  <?php include("adminmenu.php");?>
  <!-- End Header -->

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">
        <p> ADMIN PAGE</p>
     
          
     
      <!-- ======= Book A Table Section ======= -->
    <?php 

    switch(strtolower($_GET['page'])){
    
   case "view_all":
          require_once 'view_all.php';
          break;
		case "logout":
		    require_once 'logout.php';
		    break;
		case "update_menu_list":
			require_once 'update_menu_list.php';
			break;
		case "update_lunch_time":
			require_once 'update_lunch_time.php';
			break;
   case "add_order":
        require_once 'add_order.php';
        break;
    case "edit_order":
          require_once 'edit_order.php';
          break;
   default:
	     require_once 'view_all.php';
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