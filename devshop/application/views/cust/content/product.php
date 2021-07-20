<!-- Start Slider Area -->
<div class="slider__container slider--one">
  <div class="slider__activation__wrap owl-carousel owl-theme">
    <!-- Start Single Slide -->
    <div class="slide slider__full--screen slider-height-inherit slider-text-right" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/cust/devita/slider/slider1.jpg') ?>) no-repeat scroll center center / cover ;">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
            <div class="slider__inner">
              <h1>New Product <span class="text--theme">Collection</span></h1>
              <div class="slider__btn">
                <a class="htc__btn" href="<?php echo base_url('assets/cust/tmart/cart.html') ?>">shop now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end single slider -->
    <!-- Start Single Slide -->
    <div class="slide slider__full--screen slider-height-inherit slider-text-right" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/cust/devita/slider/slider4.jpg') ?>) no-repeat scroll center center / cover ;">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
            <div class="slider__inner">
              <h1>New Product <span class="text--theme">Collection</span></h1>
              <div class="slider__btn">
                <a class="htc__btn" href="<?php echo base_url('assets/cust/tmart/cart.html') ?>">shop now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end single slider -->
    <!-- Start Single Slide -->
    <div class="slide slider__full--screen slider-height-inherit slider-text-right" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/cust/devita/slider/slider3.jpg') ?>) no-repeat scroll center center / cover ;">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
            <div class="slider__inner">
              <h1>New Product <span class="text--theme">Collection</span></h1>
              <div class="slider__btn">
                <a class="htc__btn" href="<?php echo base_url('assets/cust/tmart/cart.html') ?>">shop now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end single slider -->
  </div>
</div>
<!-- Start Our Product Area -->
<div class="wrapper fixed__footer">
  <section class="htc__product__area shop__page ptb--130 bg__white">
    <div class="container">
      <div class="htc__product__container">
        <!-- Start Product MEnu -->
        <div class="row">
          <div class="col-md-12">
            <div class="filter__menu__container" id="kategori">
              <div class="product__menu">
                <button data-filter="*" class="is-checked">Semua</button>
                <?php
                $b = 'blouse';
                $j = 'jaket';
                $k = 'kemeja';
                $d = 'dress'; ?>
                <button data-filter=".cat--1"><?php echo $b ?></button>
                <button data-filter=".cat--2"><?php echo  $j  ?></button>
                <button data-filter=".cat--3"><?php echo  $k ?></button>
                <button data-filter=".cat--4"><?php echo  $d  ?></button>
              </div>

            </div>
          </div>
        </div>

        <!-- End Product MEnu -->
        <div class="row">
          <div class="product__list another-product-style">

            <?php foreach ($produk as $row) { ?>

              <!-- Start Single Product -->
              <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                <div class="product foo">
                  <div class="product__inner">
                    <div class="pro__thumb">
                      <a href="<?php echo  base_url('home/detailProduk/' . $row->id_prd) ?>">
                        <?php echo '<img height="350" src="' . base_url('uploads/product/' . $row->gambar_prd) . '" >'; ?>

                      </a>
                    </div>

                  </div>
                  <div class="product__details">
                    <h2><a href=""><?php echo $row->nama_prd ?></a></h2>
                    <h6>Stok Produk : <?php echo $row->stok_prd ?></h6>

                    <ul class="product__price">

                      <li class="new__price"><?php echo $row->harga_prd ?></li>

                    </ul>
                  </div>
                </div>


              </div>

            <?php } ?>

            <!-- End Single Product -->



          </div>
        </div>
        <!-- Start Load More BTn -->
        <div class="row mt--60">
          <div class="col-md-12">
            <div class="htc__loadmore__btn">
              <a href="#">load more</a>
            </div>
          </div>
        </div>
        <!-- End Load More BTn -->
      </div>
    </div>
  </section>
</div>
<!-- End Our Product Area -->

<!-- <script>
  $(document).ready(function() {
    $('#kategori').change(function() {
      let a = $(this).val()
      console.log(a)
    });
  });
</script> -->