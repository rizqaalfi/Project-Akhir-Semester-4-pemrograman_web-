<section class="content-header">
      <h1>
        item Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">item</li>
      </ol>
</section>
<section class="content">
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><?=ucfirst($page)?> item</h3>
        <div class="pull-right">
            <a href="<?=site_url('item')?>" class ="btn btn-warming btn-flat">
                <i class="fa fa-undo"></i> Back
            </a>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-4 col-md-offset-4"> 
             <?php echo form_open_multipart('item/proses')  ?> 
                
                                <!--apabila tombol ditekan maka akan melakukan proses pengiputan data-->
                    <div class="form-group "> <!--from untuk nama dengann menggunakan nama-->
                        <label>Kode</label>
                        <input type="hidden" name="id" value="<?=$row->id_item?>">
                        <input type="nama" class="form-control form-control-user" value="<?=$row->kode?>" required 
                            id="kode" name="kode"  > 
                    </div>  
                    <div class="form-group "> <!--from untuk nama dengann menggunakan nama-->
                        <label>Nama</label>
                        <input type="nama" class="form-control form-control-user" value="<?=$row->nama?>" required 
                            id="nama" name="nama"  > 
                    </div> 
                    <div class="form-group "> <!--from untuk nama dengann menggunakan nama-->
                        <label>Kategori</label>
                        <select id="kategori" class="form-control" name="kategori"> 
                            <option value="">Pilih Kategori</option> 
                             <?php foreach($kategori->result() as $key=>$data) { ?>
                             <option value="<?=$data->id_kategori ?>" <?=$data->id_kategori == $row->id_kategori ? "selected": null ?>><?=$data->kategori ?></option>
                             <?php } ?>        
                        </select> 
                    </div>
                    <div class="form-group "> <!--from untuk nama dengann menggunakan nama-->
                        <label>Unit</label>
                        <select id="unit" class="form-control" name="unit"> 
                            <option value="">Pilih Unit</option> 
                             <?php foreach($unit->result() as $key=>$data) { ?>
                             <option value="<?=$data->id?>" <?=$data->id == $row->id ? "selected": null ?>><?=$data->unit ?></option>
                             <?php } ?>        
                        </select> 
                    </div>
                    <div class="form-group "> <!--from untuk nama dengann menggunakan nama-->
                        <label>Harga</label>
                        <input type="number" class="form-control form-control-user" value="<?=$row->harga?>" required 
                            id="harga" name="harga"  > 
                    </div>
                    <div class="form-group "> <!--from untuk nama dengann menggunakan nama-->
                        <label>Gambar</label>
                        <input type="file" class="form-control form-control-user"  
                            id="gambar" name="gambar"  > 
                    </div>
                    
                                
                    <!--button untuk menambahkan data-->
                    <input type="submit" class="btn btn-success btn-icon-split" name="<?=$page?>" value="Simpan"> 
                <?php echo form_close() ?>
                    <hr></hr>
                    <div class="text-right"> <!--membuat text berada ditengah--> 
                        <a class="small" href="index">Kembali</a> <!--untuk memberi judul yang berada dibawah form-->                        </div>
                    </div>
            </div>
        </div> 
    </div>
</section>