<div class="box box-primary box-solid">
<div class="box-header">
        
<a href="<?= base_url('sewa_ps/add')?>" class="btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i>
               Tambah Data</a>  

               <!--<a href="<?= base_url('sewa/cetak_sewa') ?>" class="btn-sm"><i class="fa fa-print" aria-hidden="true"></i>
            Cetak Data</a>-->

               </div>

            <!-- /.box-header -->
<div class="box-body">
    
    <?php
    if(session()->getFlashdata('pesan')){
        echo '<div class="alert alert-success" role="alert">';
echo session()->getFlashdata('pesan');
echo '</div>';
    }
    ?>

<div class="table-responsive">
    
    <table id="example1" class="table table-bordered table-striped ">
        
        <thead>
            
        <tr class="label-primary">
                <th>No</th>
                <th>Nama Penyewa</th>
                <th>Nomer PS</th>
                <th>Lama Sewa</th>
                <th>Makanan</th>
                <th>Minuman</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($data_sewa as $key => $value) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['nama_sewa']; ?></td>
                    <td><?= $value['nomor_ps']; ?></td>
                    <td><?= $value['lama_sewa']; ?></td>
                    <td><?= $value['makanan']; ?></td>
                    <td><?= $value['minuman']; ?></td>
                    
                    <td>
                    <a href="<?= base_url('sewa_ps/edit/' . $value['id_sewa'])?>" class="btn btn-xs btn-warning"><i class="fa fa-fw fa-edit"></i>Edit</a>
                       <button class="btn btn-danger btn-sm btn-xs" data-toggle="modal" data-target="#delete<?= $value['id_sewa']?>"><i class="fa fa-fw fa-trash"></i>Delete</button></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>
</div>

<!-- Modal delete-->
<?php foreach ($data_sewa as $key =>$value){?>
    <div class="modal fade" id="delete<?= $value['id_sewa'] ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete <?= $title ?></h4>
              </div>
              <div class="modal-body">

                <h4><p><center>Apakah Anda Ingin Menghapus Data <b><?= $value['nama_sewa']?> ?</b></center></p></h4>

              </div>

              <div class="modal-footer">
              <a href="<?= base_url('sewa_ps/delete/' . $value['id_sewa']) ?>" class="btn btn-success pull-left btn-flat"> Delete</a>
                <button type="button" class="btn btn-danger  btn-flat" data-dismiss="modal">Close</button>
              </div>
              </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <?php } ?>
        </div>

