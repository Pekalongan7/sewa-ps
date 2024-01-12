<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
<div class="box box-primary box-solid">
<div class="box-header with-border">
               </div>

            <!-- /.box-header -->
<div class="box-body">
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

<?php echo form_open_multipart('sewa_ps/update/' . $data_sewa['id_sewa']);?>

<div class="form-group">
    <label>Nama Penyewa</label>
    <input name="nama_sewa" value="<?= $data_sewa['nama_sewa']?>" class="form-control" placeholder="Masukkan Nama Produk" required>
</div>

<div class="form-group">
    <label>Nomor PS</label>
    <input type="number" name="nomor_ps" value="<?= $data_sewa['nomor_ps']?>" class="form-control" placeholder="Masukkan Nomor PS" required>
</div>

<div class="form-group">
    <label>Lama Sewa</label>
    <input type="text" name="lama_sewa" value="<?= $data_sewa['lama_sewa']?>" class="form-control" placeholder="Masukkan Deskripsi Produk" required>
</div>

<div class="form-group">
    <label>Makanan</label>
    <input type="text" name="makanan" value="<?= $data_sewa['makanan']?>" class="form-control" placeholder="Masukkan Nama Makanan" required>
</div>

<div class="form-group">
    <label>Minuman</label>
    <input type="text" name="minuman" value="<?= $data_sewa['minuman']?>" class="form-control" placeholder="Masukkan Nama Minuman" required>
</div>

<div class="modal-footer">
   <button type="submit" class="btn btn-success">Simpan</button>
   <a href="<?= base_url('produk')?>" class="btn btn-primary">Kembali</a>
</div>

<?php echo form_close()?>

</div>
</div>

</div>
<div class="col-md-3">
    </div>
</div>
</div>
