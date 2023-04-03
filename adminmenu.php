<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">IA CANTEEN </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="?page=add_order">Add Menu Order</a></li>
          <li><a class="nav-link scrollto" href="?page=update_menu_list">Update Menu</a></li>
          <li><a class="nav-link scrollto" href="?page=update_lunch_time">Update lunch Time</a></li>
        <li><a class="nav-link scrollto" href="?page=view_all">View All Order</a></li>
       
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#signup" class="book-a-table-btn scrollto d-none d-lg-flex">Welcome <?php echo $_SESSION['login']; ?> </a>

    </div>
  </header>