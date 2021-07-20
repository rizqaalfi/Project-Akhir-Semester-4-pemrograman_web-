<section class="content-header">
      <h1>
        Stock Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">stock</li>
      </ol>
</section>
<section class="content">
<div class="box">
    <div class="box-header">
        <h3 class="box-title"> stock</h3>
        <div class="pull-right">
            <a href="<?=site_url('stock/in')?>" class ="btn btn-warming btn-flat">
                <i class="fa fa-undo"></i> Back
            </a>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-4 col-md-offset-4"> 
             <?php //echo validation_errors(); ?> 
                <form action="<?=site_url('stock/proses')?>" method="post">
                                <!--apabila tombol ditekan maka akan melakukan proses pengiputan data-->
                    <div class="form-group "> <!--from untuk nama dengann menggunakan nama-->
                        <label>Date</label>
                        <input type="date" class="form-control form-control-user"  required 
                             name="date" value="<?=date('Y-m-d')?>" > 
                    </div>  
                    <div class="form-group "> <!--from untuk nama dengann menggunakan nama-->
                        <label>Barcode</label>
                    </div>  
                    <div class="form-group input-group "> <!--from untuk nama dengann menggunakan nama-->    
                        <input type="hidden" name="id_item" id="id_item" > 
                        <input type="text" name="kode" id="kode" class="form-control" required autofocus > 
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                <i class="fa fa-search"></i> 
                            </button>
                        </span>
                    </div>
                    <div class="form-grup">
                        <label for="nama">Nama Item</label>
                        <input type="text" name="nama" id="nama" class="form-control" readonly>   
                    </div>  
                    <div class="form-grup">
                        <div class="row">
                            <div class="col-md-8">
                                <label for="unit">Item unit</label>
                                <input type="text" name="unit" id="unit" value="" class="form-control" readonly>   
                            </div>
                            <div class="col-md-4">
                                <label for="unit">Initial Stok</label>
                                <input type="text" name="stok" id="stok" value="" class="form-control" readonly>   
                            </div>
                         </div>
                    </div>
                    <div class="form-group "> <!--from untuk nama dengann menggunakan nama-->
                        <label>Detail</label>
                        <input type="text" name="detail" class="form-control"  placeholder="Tambahan / etc" required > 
                    </div> 
                    <div class="form-group "> <!--from untuk nama dengann menggunakan nama-->
                        <label>Supplier</label>
                        <select name="supplier" class="form-control">
                            <option value=""> pilih </option>
                        <?php foreach($supplier as $i => $data){
                            echo '<option value="'.$data->id.'">'.$data->nama.'</option>';
                        }?>
                        </select>
                    </div> 
                    <div class="form-group "> <!--from untuk nama dengann menggunakan nama-->
                        <label>Qty</label>
                        <input type="number" name="qty" class="form-control"  required > 
                    </div>      
                    
                    <!--button untuk menambahkan data-->
                    <input type="submit" class="btn btn-success btn-icon-split" name="in_add" value="Simpan"> 
                </form>
                    <hr></hr>
                    <div class="text-right"> <!--membuat text berada ditengah--> 
                        <a class="small" href="index">Kembali</a> <!--untuk memberi judul yang berada dibawah form-->                        </div>
                    </div>
            </div>
        </div> 
    </div>
</section>

<div class="modal fade" id="modal-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-tittle">Select Product Item</h4>
            </div>
                <div class="modal-body table-responsive">
                    <table class="table table-bordered table-striped"  id="table1">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Unit</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($item as $i => $data) { ?>
                        <tr>
                            <td><?=$data->kode?></td>
                            <td><?=$data->nama?></td>
                            <td><?=$data->unit?></td>
                            <td class="text-right"><?=$data->harga?></td>
                            <td class="text-right"><?=$data->stok?></td>
                            <td class="text-right">
                                <button class="btn btn-xs btn-info" id="select"
                                    data-id_item="<?=$data->id_item?>"
                                    data-kode="<?=$data->kode?>"
                                    data-nama="<?=$data->nama?>"
                                    data-stok="<?=$data->stok?>"
                                    >
                                    <i class="fa fa-check"></i>select
                                </button>
                            </td>
                        </tr>
                        <?php } ?> 
                    </tbody> 
                    </table>
                </div>
            
        </div>
    </div>
</div>
