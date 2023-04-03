<section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Choose Your Lunch Time</p>
        </div>
            <div class="row">
            <?php 
            $sql = "SELECT * from dbtime";
            $query = $dbh->prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            if($query->rowCount() > 0)
            {
            foreach($results as $result)
            {  ?>

          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span><?php echo htmlentities($result->time);?></span>
              <h4>Avaliable Space:
                 <?php
               $no = htmlentities($result->booked_qty);
               if($no== '150'){echo"<span style='color:red' >max Limit Reached</span>";}else{ echo htmlentities($result->qty - $result->booked_qty);}
               ?>
               </h4>
          
            </div>
          
          </div>

<?php }}?>

        </div>

      </div>
     
</section>