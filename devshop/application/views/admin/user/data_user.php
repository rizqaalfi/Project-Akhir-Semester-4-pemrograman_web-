<section class="content-header">
      <h1>
        User
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
</section>
    
<section class="content">
    <div class ="box">
        <div class="box-header">
            <h3 class="box-title">Data User</h3>
            <div class="pull-right">
                <a href="<?=site_url('user/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i>Tambah User
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>    
                        <th>No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; 
                    foreach($row->result() as $key=>$data) { ?>
                    <tr>
                        <td style="width:5%;"><?=$no++?></td>
                        <td><?=$data->username?></td>
                        <td><?=$data->email?></td>
                        <td><?=$data->grup == 1 ? "Admin" : "Customer" ?></td>
                        <td class= "text-center" width="160px">

                            <form action="<?=site_url('user/del')?>" method="post">
                                <input type="hidden" name="id" value="<?=$data->id_user?>">
                                <button onclick="return confirm('Yakin ingin menghapus data??')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    }?>
                </tbody> 
            </table>
        </div>
    </div>
</section>
