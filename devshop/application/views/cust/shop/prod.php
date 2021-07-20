<div class="portfolio-grid-area bg__white pt--130 pb--100">
  <div class="container">

    <div class="portfolio-style">
      <div class="row grid">
        <?php foreach ($produk as $row) { ?>

          <div class="col-md-6 col-sm-6 col-xs-12 grid-item cat2 cat3">
            <div class="single-portfolio-card mb--30">
              <div class="portfolio-img">
                <a href="<?php echo  base_url('home/detailProduk/' . $row->id_prd) ?>">
                  <img src="<?php echo base_url('uploads/product/' . $row->gambar_prd) ?>" alt="" />
                </a>
                <div class="portfolio-icon">
                  <a href="<?php echo  base_url('home/detailProduk/' . $row->id_prd) ?>">
                  </a>
                </div>
              </div>
              <div class="portfolio-title portfolio-card-title text-center">
                <h3><a href="single-portfolio.html"><?php echo $row->nama_prd ?></a></h3>
                <span><?php echo $row->harga_prd ?></span>
              </div>
            </div>
          </div>

        <?php } ?>


      </div>
    </div>
  </div>
</div>
<!-- Start Footer Area -->