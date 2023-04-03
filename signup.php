<section id="signup" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
          <p>Sign Up</p>
        </div>

        <form action="" method="post" role="form" class="" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
          <?php if(isset($msg1)){echo $msg1;} ?>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email (optonal)" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="idcard" class="form-control" id="date" placeholder="Enter Your ID Card Number" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
            <select class="form-control" name="company" id="time" >
              <option>Select Your Company</option>
                <option value="Dover">Dover</option>
                <option value='Arco'>Arco</option>
                <option value="NLNG Staff">NLNG Staff</option>
               
              </select>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="password" id="time" placeholder="Enter Your Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          
         
          
          
          <div class="text-center mt-3"><button type="submit" name='signup'>Sign Up</button></div>
        </form>

      </div>
    </section>