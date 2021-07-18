<!doctype html>
<html class="no-js" lang="en">

<?php echo @$head; ?>

<body>


  <!-- Body main wrapper start -->
  <div class="wrapper fixed__footer">
    <!-- Start Header Style -->
    <header id="header" class="htc-header header--3 bg__white">
      <!-- Start Mainmenu Area -->
      <?php echo @$topbar; ?>
      <!-- End Mainmenu Area -->
    </header>
    <!-- End Header Style -->

    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
      <!-- Start Search Popap -->
      <div class="search__area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="search__inner">
                <form action="#" method="get">
                  <input placeholder="Search here... " type="text">
                  <button type="submit"></button>
                </form>
                <div class="search__close__btn">
                  <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Search Popap -->

      <!-- Start Cart Panel -->

      <?php $cart = $this->cart->contents()  ?>
      <div class="shopping__cart">

        <div class="shopping__cart__inner">
          <div class="offsetmenu__close__btn">
            <a href="#"><i class="zmdi zmdi-close"></i></a>
          </div>

          <div class="shp__cart__wrap">
            <div class="shp__single__product">
              <div class="shp__pro__thumb">

                <?php foreach ($cart as $row) { ?>
                  <a href="#">
                    <img src="<?php echo base_url('assets/cust/tmart/images/product/sm-img/1.jpg') ?>" alt="product images">
                  </a>
              </div>
              <div class="shp__pro__details">
                <h2><a href="<?php echo base_url('assets/cust/tmart/product-details.html') ?>"><?php echo $row['name'] ?></a></h2>
                <span class="quantity">QTY: 1</span>
                <span class="shp__price">$105.00</span>
              </div>
              <div class="remove__btn">
                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
              </div>

            <?php } ?>
            </div>

          </div>
          <ul class="shoping__total">
            <li class="subtotal">Subtotal:</li>
            <li class="total__price">$130.00</li>
          </ul>
          <ul class="shopping__btn">
            <li><a href="<?php echo base_url('assets/cust/tmart/cart.html') ?>">View Cart</a></li>
            <li class="shp__checkout"><a href="<?php echo base_url('assets/cust/tmart/checkout.html') ?>">Checkout</a></li>
          </ul>
        </div>
      </div>
      <!-- End Cart Panel -->
    </div>
    <!-- End Offset Wrapper -->


    <?php echo @$isi1; ?>

    <!-- Start Footer Area -->
    <?php echo @$footer; ?>
    <!-- End Footer Area -->
  </div>
  <!-- Body main wrapper end -->
  <!-- QUICKVIEW PRODUCT -->
  <div id="quickview-wrapper">

  </div>
  <!-- END QUICKVIEW PRODUCT -->
  <!-- Placed js at the end of the document so the pages load faster -->

  <?php echo @$script; ?>

</body>

</html>