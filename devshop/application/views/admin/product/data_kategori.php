<section class="content-header">
      <h1>
        Kategori Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">kategori</li>
      </ol>
</section>
    
<section class="content">
    <div class ="box">
        <div class="box-header">
            <h3 class="box-title">Data User</h3>
            <div class="pull-right">
                <a href="<?=site_url('kategori/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i>Tambah kategori
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>    
                        <th>No</th>
                        <th>Kategori Barang</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; 
                    foreach($row->result() as $key=>$data) { ?>
                    <tr>
                        <td style="width:5%;"><?=$no++?></td>
                        <td><?=$data->kategori?></td>
                        <td class= "text-center" width="160px">
                            <a href="<?=site_url('kategori/edit/'.$data->id_kategori)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i>Edit
                            </a>
                            <a href="<?=site_url('kategori/del/'.$data->id_kategori)?>" onclick ="return confirm('Yakin ingin menghapus data??')" class="btn btn-danger btn-primary btn-xs">
                                <i class="fa fa-trash"></i>Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                    }?>
                </tbody> 
            </table>
        </div>
    </div>
</section>
