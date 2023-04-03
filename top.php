<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+234 8035 0972  74</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sun: 11AM - 3PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li><?php if(!isset($_SESSION['login'])){echo "You are yet to Login";}else{ echo "<a href='?page=logout'>Logout</a>";} ?></li>
          
        </ul>
      </div>
    </div>
  </div>