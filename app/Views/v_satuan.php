<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $subjudul; ?></h3>

                <div class="card-tools">
                  <button class="btn btn-tool" data-toggle="modal" data-target="#tambah-data"><i class="fas fa-plus"></i> Tambah Data
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success alert-dismissible">
                        <?= session()->getFlashdata('pesan'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    </div>
                <?php endif; ?>
                <table class="table table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th width="50px">No</th>
                        <th>Satuan</th>
                        <th width="100px">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($satuan as $key => $value) : ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value['nama_satuan']; ?></td>
                        <td><button class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#edit-data<?= $value['id_satuan']; ?>"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash" data-toggle="modal" data-target="#delete-data<?= $value['id_satuan']; ?>"></i></button>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        <!-- Modal tambah data -->
        <div class="modal fade" id="tambah-data">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data <?= $subjudul; ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('Satuan/TambahData'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nama Satuan</label>
                    <input name="nama_satuan" class="form-control" placeholder="Satuan" required>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!-- Modal edit data -->
      <?php foreach ($satuan as $key => $value): ?>
        <div class="modal fade" id="edit-data<?= $value['id_satuan']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Data <?= $subjudul; ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('Satuan/UpdateData/' . $value['id_satuan']); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nama Satuan</label>
                    <input name="nama_satuan" value="<?= $value['nama_satuan']; ?>" class="form-control" placeholder="Satuan" required>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <?php endforeach; ?>

            <!-- Modal delete data -->
            <?php foreach ($satuan as $key => $value): ?>
        <div class="modal fade" id="delete-data<?= $value['id_satuan']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Data <?= $subjudul; ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <div class="modal-body">
                <p>Apakah anda yakin akan menghapus data <b><?= $value['nama_satuan']; ?></b> ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <a href="<?= base_url('Satuan/DeleteData/' . $value['id_satuan']) ?>" class="btn btn-danger">Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <?php endforeach; ?>