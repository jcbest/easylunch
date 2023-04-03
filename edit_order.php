<section id="book-a-table" class="book-a-table contact">
       
   
 
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          
          <p>Edit Your Order </p>
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
                <div class="col-md-6 form-group  mt-3 mt-md-2">
                  <input type="text" name="name" class="form-control" id="name" placeholder="EnterYour Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-2">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email (optonal)">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-2">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone Number (Optional)" >
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-2">
                  <input type="text" class="form-control" name="idcard" id="idcard" placeholder="Enter Your ID Card No" required>
                </div>
              </div>
                            
             
            
              <div class="form-group mt-3">
              
                <select class="form-control mt-3" name="food" id="time" >
                  
              <option>Choose your Meal</option>
              <option>Fried Rice</option>
              <option>White Rice and Stew</option>
              <option>Eqwusi Soup</option>
              <option>Ogbono Soup</option>
              <option>Afam Soup</option>
              <option>Uha Soup</option>
            </select>

            <select class="form-control mt-3" name="book_time" id="time" >
              <option>Select Time</option>
                <option>11:00am</option>
                <option>11:20am</option>
                <option>11:40am</option>
                <option>12:00pm</option>
                <option>12:20pm</option>
                <option>12:40pm</option>
                <option>1:00pm</option>
              </select>

              <textarea class="form-control mt-3" name="message" rows="3" placeholder="Remark (Optional)" required></textarea>
              </div>
             
              <div class="text-center mt-3"><button type="submit" name="book">Send Message</button></div>
            </form>

          </div>

        </div>

        
      </div>
     
    </section>