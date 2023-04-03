<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
                   <p>Contact Us</p>
                 
        </div>
      </div>

    

      <div class="container" data-aos="fade-up">

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
              <?php if(!isset($msg)){
                    echo  "";
                   }else{echo $msg;} ?>
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
             
              <div class="text-center"><button type="submit" name="submitbtn">Send Message</button></div>
            </form>

          </div>

        </div>

        
      </div>
      <div data-aos="fade-up" style="margin-top:30px;">
      
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.62326080406518!2d7.15565420734024!3d4.41628560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10685447bb87e667%3A0xd4ad52e2a1a6185b!2sNLNG%20Admin%20Building!5e0!3m2!1sen!2sng!4v1680009696004!5m2!1sen!2sng" style="border:0; width: 100%; height: 350px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </section>