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