<section class="content-header">
      <h1>
        Add user
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=site_url('user')?>"><i class="fa fa-user"></i> User</a></li>
        <li class="active">Add User</li>
      </ol>
</section>
<section class="content">
    <div class="box-body">
        <div class="row">
            <div class="col-md-4 col-md-offset-4"> 
                <?php //echo validation_errors(); ?> 
                    <form action="" method="post">
                        <!--apabila tombol ditekan maka akan melakukan proses pengiputan data-->
                            <div class="form-group <?=form_error('username') ? 'has-error':null?>"> <!--from untuk username dengann menggunakan id username-->
                                <label>Username</label>
                                <input type="text" class="form-control form-control-user" value="<?=set_value('username')?>"
                                id="username" name="username" placeholder="Username"> 
                                <?=form_error('username')?>
                            </div> 
                            <div class="form-group <?=form_error('nama') ? 'has-error':null?>"> <!--from untuk nama dengann menggunakan nama-->
                                <label>Name</label>
                                <input type="nama" class="form-control form-control-user" value="<?=set_value('nama')?>" 
                                id="nama" name="nama" placeholder="Nama Lengkap" > 
                                <?=form_error('nama')?>
                            </div>  
                            <div class="form-group <?=form_error('pass') ? 'has-error':null?>"> <!--from untuk password dengann menggunakan pass-->
                                <label>Password</label>
                                <input type="password" class="form-control form-control-user" value="<?=set_value('pass')?>"
                                id="pass" name="pass" placeholder="Password Maximal 8 Character" > 
                                <?=form_error('pass')?>
                            </div>
                            <div class="form-group <?=form_error('passconf') ? 'has-error':null?>"> <!--from untuk password dengann menggunakan pass-->
                                <label>Password Confirmation</label>
                                <input type="password" class="form-control form-control-user" value="<?=set_value('passconf')?>"
                                id="passconf" name="passconf" placeholder="Konfirmasi Password" > 
                                <?=form_error('passconf')?>
                            </div>
                            <div class="form-group <?=form_error('level') ? 'has-error':null?>"> <!--from untuk grup dengann menggunakan grup-->
                                <label>Grup</label>
                                <select id="level" class="form-control" name="level"> 
                                    <option value="0">Pilih Grup</option> 
                                    <option value="1" <?=set_value('level') == 1 ? "selected" : null ?>>Admin</option> 
                                    <option value="2" <?=set_value('level') == 2 ? "selected" : null ?>>User</option> 
                                </select> 
                                <?=form_error('level')?>
                            </div> 
                        <!--button untuk menambahkan data-->
                        <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah"> 
                    </form>
                        <hr></hr>
                        <div class="text-right"> <!--membuat text berada ditengah--> 
                            <a class="small" href="index">Kembali</a> <!--untuk memberi judul yang berada dibawah form-->
                        </div>
                </div>
            </div>
        </div> 
    </div>
</section>