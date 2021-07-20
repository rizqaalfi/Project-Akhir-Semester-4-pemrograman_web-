 <?php
  $getUser = $this->session->userdata('session_user');
  $getGrup = $this->session->userdata('session_grup');
  ?>
 <!-- Start Mainmenu Area -->
 <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
   <div class="container">
     <div class="row">
       <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
         <div class="logo"><a href="<?php echo  base_url('home/') ?>">
             <img src="<?php echo base_url('assets/cust/devita/logo/logo.png') ?> " alt="">
           </a>
         </div>
       </div>
       <!-- Start MAinmenu Ares -->
       <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
         <nav class="mainmenu__nav hidden-xs hidden-sm">
           <ul class="main__menu">
             <li class="drop"><a href="<?php echo  base_url('home/') ?>">Home</a></li>
             <li class="drop"><a href="<?php echo base_url('home/portofolio/') ?>">portfolio</a>
             </li>
             <li class="drop"><a href="#">Shop</a>
               <ul class="dropdown">
                 <li><a href="<?php echo  base_url('shop/blouse') ?>">blouse</a></li>
                 <li><a href="<?php echo  base_url('shop/kemeja') ?>">kemeja</a></li>
                 <li><a href="<?php echo  base_url('shop/jaket') ?>">jaket</a></li>
                 <li><a href="<?php echo  base_url('shop/dress') ?>">dress</a></li>

               </ul>
             </li>
             <li class="drop"><a href="#">pages</a>
               <ul class="dropdown">
                 <li><a href="about.html">About us</a></li>
                 <li><a href="<?php echo base_url('shop/blouse') ?>">shop</a></li>
                 <li><a href="<?php echo base_url('Home/cart/' . $getUser) ?>">Cart</a></li>
                 <li><a href="<?php echo base_url('Home/portofolio') ?>">Portofolio</a></li>
                 <li><a href="<?php echo base_url('Home/auth') ?>">login</a></li>
                 <li><a href="login-register.html">register</a></li>
                 <li><a href="<?php echo base_url('Home/contact') ?>">contact us</a></li>
               </ul>
             </li>
             <li><a href="<?php echo base_url('Home/contact') ?>">contact</a></li>
           </ul>
         </nav>
         <div class="mobile-menu clearfix visible-xs visible-sm">
           <nav id="mobile_dropdown">
             <ul>
               <li><a href="index.html">Home</a></li>
               <li><a href="#">portfolio</a> </li>
               <li class="drop"><a href="#">Shop</a>
                 <ul class="dropdown">
                   <li><a href="<?php echo  base_url('shop/blouse') ?>">blouse</a></li>
                   <li><a href="<?php echo  base_url('shop/kemeja') ?>">kemeja</a></li>
                   <li><a href="<?php echo  base_url('shop/jaket') ?>">jaket</a></li>
                   <li><a href="<?php echo  base_url('shop/dress') ?>">dress</a></li>

                 </ul>
               <li><a href="#">pages</a>
                 <ul class="dropdown">
                   <li><a href="about.html">About us</a></li>
                   <li><a href="shop.html">shop</a></li>
                   <li><a href="shop-sidebar.html">Cart</a></li>
                   <li><a href="checkout.html">Portofolio</a></li>
                   <li><a href="login-register.html">login</a></li>
                   <li><a href="login-register.html">register</a></li>
                   <li><a href="login-register.html">contact us</a></li>
                 </ul>
               </li>
               <li><a href="<?php echo base_url('Home/contact') ?>">contact</a></li>
             </ul>
           </nav>
         </div>
       </div>
       <!-- End MAinmenu Ares -->
       <div class="col-md-2 col-sm-4 col-xs-3">
         <!-- <ul class="menu-extra">
           <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
           <li><a href="login-register.html"><span class="ti-user"></span></a>
           </li>
           <li class="cart__menu">
             <a href="<?php echo base_url('Home/cart/' . $getUser) ?>"><span class="ti-shopping-cart"></span></a>
           </li>
         </ul> -->
         <nav class="mainmenu__nav hidden-xs hidden-sm">
           <ul class="main__menu">
             <li class="drop"><a href=""><span class="ti-user"></span></a>
               <ul class="dropdown">
                 <li><a href="<?php echo base_url('') ?>">Register</a></li>
                 <li><a href="<?php echo base_url('auth/') ?>">Login</a></li>
                 <li><a href="<?php echo base_url('logout/') ?>">Logout</a></li>
               </ul>
             </li>
             <li class="cart__menu">
               <a href="<?php echo base_url('Home/cart/' . $getUser) ?>"><span class="ti-shopping-cart"></span></a>
             </li>

           </ul>
         </nav>
       </div>
     </div>
     <div class="mobile-menu-area"></div>
   </div>
 </div>
 <!-- End Mainmenu Area -->