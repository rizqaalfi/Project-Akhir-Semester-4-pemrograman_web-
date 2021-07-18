<section class="content-header">
      <h1>
        unit Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">unit</li>
      </ol>
</section>
<section class="content">
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><?=ucfirst($page)?> unit</h3>
        <div class="pull-right">
            <a href="<?=site_url('unit')?>" class ="btn btn-warming btn-flat">
                <i class="fa fa-undo"></i> Back
            </a>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-4 col-md-offset-4"> 
             <?php //echo validation_errors(); ?> 
                <form action="<?=site_url('unit/proses')?>" method="post">
                                <!--apabila tombol ditekan maka akan melakukan proses pengiputan data-->
                    <div class="form-group "> <!--from untuk nama dengann menggunakan nama-->
                        <label>Name</label>
                        <input type="hidden" name="id" value="<?=$row->id?>">
                        <input type="nama" class="form-control form-control-user" value="<?=$row->unit?>" required 
                            id="nama" name="nama" placeholder="unit" > 
                    </div>  
                                
                    <!--button untuk menambahkan data-->
                    <input type="submit" class="btn btn-success btn-icon-split" name="<?=$page?>" value="Simpan"> 
                </form>
                    <hr></hr>
                    <div class="text-right"> <!--membuat text berada ditengah--> 
                        <a class="small" href="index">Kembali</a> <!--untuk memberi judul yang berada dibawah form-->                        </div>
                    </div>
            </div>
        </div> 
    </div>
</section>