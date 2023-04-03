<section id="signup" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
          <p>ADD MENU ITEMS</p>
        </div>

        <form action="" method="post" role="form" class="" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
          <?php if(isset($msg1)){echo $msg1;} ?>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="food" class="form-control" id="food" placeholder="Enter Food Nane" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="qty" id="qty" placeholder="Enter Quantity of Food" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
     
          
         
          
          
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0"><button type="submit" name='add'>ADD</button></div>
        </form>

      </div>
    </section>