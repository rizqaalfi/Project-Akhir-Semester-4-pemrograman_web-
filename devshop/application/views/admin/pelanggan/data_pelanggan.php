<section class="content-header">
      <h1>
        pelanggan Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">pelanggan</li>
      </ol>
</section>
    
<section class="content">
    <div class ="box">
        <div class="box-header">
            <h3 class="box-title">Data User</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>    
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; 
                    foreach($row->result() as $key=>$data) { ?>
                    <tr>
                        <td style="width:5%;"><?=$no++?></td>
                        <td><?=$data->kode_plg?></td>
                        <td><?=$data->nama_plg?></td>
                        <td><?=$data->gender_plg?></td>
                        <td><?=$data->email_plg?></td>
                        <td><?=$data->username_plg?></td>
                        <td class= "text-center" width="160px">
                            <a href="<?=site_url('pelanggan/del/'.$data->kode_plg)?>" onclick ="return confirm('Yakin ingin menghapus data??')" class="btn btn-danger btn-primary btn-xs">
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
