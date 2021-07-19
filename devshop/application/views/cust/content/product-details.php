<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');

foreach ($produk as $row) { ?>
  <form class="user" action="<?php echo base_url('home/addCart'); ?>" method="post">
    <!-- Start Product Details -->
    <section class="htc__product__details pt--120 pb--100 bg__white">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <div class="product__details__container">

              <div class="product__big__images">
                <div class="portfolio-full-image tab-content">
                  <div role="tabpanel" class="tab-pane fade in active product-video-position" id="img-tab-1">
                    <?php echo '<img height="600" width="500" src="' . base_url('assets/cust/devita/images/' . $row->gambar_prd) . '" >'; ?>
                    <div class="product-video">
                      <a class="video-popup" href="#">
                        <i class="zmdi zmdi-videocam"></i> View Video
                      </a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
            <div class="htc__product__details__inner">
              <div class="pro__detl__title">
                <input type="hidden" name="nama_prd" value="<?php echo $row->nama_prd; ?>">
                <input type="hidden" name="username" value="<?php echo $getUser ?>">
                <input type="hidden" name="id_prd" value="<?php echo $row->id_prd; ?>">
                <input type="hidden" name="harga_prd" value="<?php echo $row->harga_prd; ?>">
                <input type="hidden" name="id_keranjang" value="<?php echo $row->id_prd . $getUser ?>">
                <h2><?php echo $row->nama_prd ?></h2>
                <h6><?php echo $row->id_prd ?></h6>
              </div>

              <div class="pro__details">
                <p><?php echo nl2br(str_replace('', '', htmlspecialchars($row->deskripsi_prd))); ?> </p>
              </div>
              <ul class="pro__dtl__prize">
                <!-- <li class="old__prize">$15.21</li> -->
                <li><?php echo 'Rp.' . $row->harga_prd . ',-' ?></li>
              </ul>

              <div class="pro__dtl__size">
                <h2 class="title__5">Size</h2>

                <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="ukuran_prd" id="optionsRadios1" value="S" checked>
                      <label for="">S (<?php echo $row->S ?>)</label>
                    </label>

                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="ukuran_prd" id="optionsRadios2" value="M">
                      <label for="">M (<?php echo $row->M ?>)</label>
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="ukuran_prd" id="optionsRadios2" value="L">
                      <label for="">L (<?php echo $row->L ?>)</label>
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="ukuran_prd" id="optionsRadios2" value="XL">
                      <label for="">XL (<?php echo $row->XL ?>)</label>
                    </label>
                  </div>

                </div>
              </div>
              <div class="product-action-wrap">
                <div class="prodict-statas"><span>Quantity :</span></div>
                <div class="product-quantity">

                  <div class="product-quantity">
                    <div class="cart-plus-minus">
                      <input class="cart-plus-minus-box" type="text" name="qty" value="1">
                    </div>
                  </div>


                </div>
              </div>
              <ul class="pro__dtl__btn">
                <input class="btn btn-default btn-block" type="submit" value="buy Now">

              </ul>
              <div class="pro__social__share">
                <h2>Share :</h2>
                <ul class="pro__soaial__link">
                  <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                  <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                  <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                  <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Product Details -->

  </form>


<?php } ?>