<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
<div class="box box-primary box-solid">
<div class="box-header with-border">
               </div>

            <!-- /.box-header -->
<div class="box-body">
     <!-- pop up alert -->
    <?php
    $errors= session()->getFlashdata('errors');
    if (!empty($errors)) {?>
<div class="alert alert-danger" role="alert">
    <ul>
        <?php foreach ($errors as $key =>$value) {?>
                <li><?= esc($value)?></li>
        <?php } ?>
    </ul>
</div>
    <?php }?>

<?php echo form_open_multipart('user/save');?>

<div class="form-group">
    <label>Nama Pengguna</label>
    <input name="username" class="form-control" placeholder="Masukkan Nama Pengguna" required>
</div>

<div class="form-group">
    <label>Password</label>
    <input name="password" class="form-control" placeholder="Masukkan Kata Sandi" required>
</div>

<div class="form-group">
    <label>Nama Lengkap</label>
    <input name="fullname" class="form-control" placeholder="Masukkan Nama Lengkap" required>
</div>

<div class="form-group">
    <label>Level</label>
    <select name="level" class="form-control">
    <option value="">--Pilih Level--</option>
    <option value="1">Admin</option>
    <option value="2">Member</option>
    </select>
</div>


<div class="form-group">
<label>Pilih Foto User</label>
<input type="file" class="form-control" name="foto_user" id="preview_gambar">
</div>

<div class="modal-footer">
   <button type="submit" class="btn btn-success">Simpan</button>
   <a href="<?= base_url('user')?>" class="btn btn-primary">Kembali</a>
</div>

<?php echo form_close();?>

</div>
</div>

</div>
<div class="col-md-3">
    </div>
</div>
</div>
