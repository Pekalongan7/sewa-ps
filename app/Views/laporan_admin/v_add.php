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

<?php echo form_open_multipart('laporan_admin/save');?>

<div class="form-group">
<label>Jumlah Distribusi Produk</label>
    <select name="id_distribusi" class="form-control">
    <option value="">--Pilih Jumlah Distribusi Produk--</option>
    <?php foreach($data_distribusi as $key => $value){?>
    <option value="<?= $value['id_distribusi']?>"><?= $value['jumlah_distribusi_produk']?></option>
    <?php } ?>
    </select>
</div>

<div class="form-group">
<label>Tanggal Distribusi Produk</label>
    <select name="id_distribusi" class="form-control">
    <option value="">--Pilih Tanggal Distribusi Produk--</option>
    <?php foreach($data_distribusi as $key => $value){?>
    <option value="<?= $value['id_distribusi']?>"><?= $value['tanggal_distribusi_produk']?></option>
    <?php } ?>
    </select>
</div>

<div class="form-group">
    <label>Nama Produk</label>
    <select name="id_produk" class="form-control">
    <option value="">--Pilih Produk--</option>
    <?php foreach($data_produk as $key => $value){?>
    <option value="<?= $value['id_produk']?>"><?= $value['nama_produk']?></option>
    <?php } ?>
    </select>
</div>

<div class="form-group">
    <label>Nama Cabang</label>
    <select name="id_cabang" class="form-control">
    <option value="">--Pilih Cabang--</option>
    <?php foreach($data_cabang as $key => $value){?>
    <option value="<?= $value['id_cabang']?>"><?= $value['nama_cabang']?></option>
    <?php } ?>
    </select>
</div>

<div class="modal-footer">
   <button type="submit" class="btn btn-success">Simpan</button>
   <a href="<?= base_url('laporan_admin')?>" class="btn btn-primary">Kembali</a>
</div>

<?php echo form_close();?>

</div>
</div>

</div>
<div class="col-md-3">
    </div>
</div>
