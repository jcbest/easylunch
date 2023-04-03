<section id="book-a-table" class="book-a-table contact">
       
   
 
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          
          <p>Place Your Order Now</p>
        </div>
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>NLNG IA Canteen</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Sunday:<br>
                  11:00 AM - 3:00 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@Courdeaucatering.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+234 8035 0972 70</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="" method="post" role="form" class="">
              <div class="row">
              <?php if(!isset($msg1)){
                    echo  "";
                   }else{echo $msg1;} ?>
                
                            
             
            
              <div class="form-group mt-3">
              
              <select class="form-control mt-3" name="food" id="time" >
                  
              <option>Choose your Meal</option>
              <option value="Fried Rice">Fried Rice</option>
              <option>White Rice and Stew</option>
              <option>Eqwusi Soup</option>
              <option>Ogbono Soup</option>
              <option>Afam Soup</option>
              <option>Uha Soup</option>
            </select>

            <select class="form-control mt-3" name="book_time" id="time" >
              <option>Select Time</option>
              <option value="11am">11am</option>
                <option value="1:20am">11:20am</option>
                <option value="11:40am">11:40am</option>
                <option value="12pm">12:00pm</option>
                <option value="pm12_20">12:20pm</option>
                <option value="pm12_40">12:40pm</option>
              
                <option value="pm1_20">1:20pm</option>
                <option value="pm1_40">1:40pm</option>
                <option value="pm2">2:00pm</option>
                <option value="pm2_20">2:20pm</option>
                <option value="pm2_40">2:40pm</option>
                <option value="pm3">3:00pm</option>
              </select>

              <textarea class="form-control mt-3" name="message" rows="3" placeholder="Remark (Optional)" required></textarea>
              </div>
             
              <div class="text-center mt-3"><button type="submit" name="book">Order Now</button></div>
            </form>

          </div>

        </div>

        
      </div>
     
    </section>