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


                <?php
                
                $errors = session()->getFlashdata('errors');
                if(!empty($errors)) : ?>
                    <div class="alert alert-danger alert-dismissible">
                        <h4>Periksa lagi entry form!</h4>
                        <ul>
                            <?php foreach ($errors as $key => $error) : ?>
                                <li><?php echo esc($error); ?></li>        
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr class="text-center">
                        <th width="50px">No</th>
                        <th>Kode/Barcode</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Satuan</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th width="100px">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($produk as $key => $value) : ?>
                      <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td class="text-center"><?= $value['kode_produk']; ?></td>
                        <td><?= $value['nama_produk']; ?></td>
                        <td><?= $value['nama_kategori']; ?></td>
                        <td ><?= $value['nama_satuan']; ?></td>
                        <td class="text-center">Rp. <?= number_format($value['harga_beli'], 0); ?></td>
                        <td class="text-center">Rp. <?= number_format($value['harga_jual'], 0); ?></td>
                        <td class="text-center"><?= number_format($value['stok'], 0); ?></td>
                        <td class="text-center"><button class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#edit-data<?= $value['id_produk']; ?>"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash" data-toggle="modal" data-target="#delete-data<?= $value['id_produk']; ?>"></i></button>
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
            <?php echo form_open('Produk/TambahData'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Kode Produk</label>
                    <input name="kode_produk" class="form-control" value="<?= old('kode_produk'); ?>" placeholder="Kode produk" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input name="nama_produk" class="form-control" value="<?= old('nama_produk'); ?>" placeholder="Nama produk" required>
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select name="id_kategori" class="form-control">
                      <option value="">--Pilih Kategori--</option>
                      <?php foreach($kategori as $key => $value) :?>
                            <option value="<?= $value['id_kategori']; ?>"><?= $value['nama_kategori'] ?></option>
                    <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Satuan</label>
                    <select name="id_satuan" class="form-control">
                      <option value="">--Pilih Satuan--</option>
                      <?php foreach($satuan as $key => $value) :?>
                            <option value="<?= $value['id_satuan']; ?>"><?= $value['nama_satuan'] ?></option>
                    <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Harga Beli</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                    <input name="harga_beli" id="harga_beli" class="form-control" value="<?= old('harga_beli'); ?>" placeholder="Harga Beli" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Harga Jual</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                    <input name="harga_jual" id="harga_jual" class="form-control" value="<?= old('harga_jual'); ?>" placeholder="Harga Jual" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Stok</label>
                    <input name="stok" type="number" class="form-control" value="<?= old('stok'); ?>" placeholder="Stok" required>
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

      <?php foreach($produk as $key => $value) : ?>

       <!-- Modal tambah data -->
       <div class="modal fade" id="edit-data<?= $value['id_produk']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data <?= $subjudul; ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('Produk/TambahData'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Kode Produk</label>
                    <input name="kode_produk" class="form-control" value="<?= old('kode_produk'); ?>" placeholder="Kode produk" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input name="nama_produk" class="form-control" value="<?= old('nama_produk'); ?>" placeholder="Nama produk" required>
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select name="id_kategori" class="form-control">
                      <option value="">--Pilih Kategori--</option>
                      <?php foreach($kategori as $key => $k) :?>
                            <option value="<?= $value['id_kategori']; ?>"><?= $value['nama_kategori'] ?></option>
                    <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Satuan</label>
                    <select name="id_satuan" class="form-control">
                      <option value="">--Pilih Satuan--</option>
                      <?php foreach($satuan as $key => $s) :?>
                            <option value="<?= $value['id_satuan']; ?>"><?= $value['nama_satuan'] ?></option>
                    <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Harga Beli</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                    <input name="harga_beli" id="harga_beli" class="form-control" value="<?= old('harga_beli'); ?>" placeholder="Harga Beli" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Harga Jual</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                    <input name="harga_jual" id="harga_jual" class="form-control" value="<?= old('harga_jual'); ?>" placeholder="Harga Jual" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Stok</label>
                    <input name="stok" type="number" class="form-control" value="<?= old('stok'); ?>" placeholder="Stok" required>
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
      
      <?php endforeach;?>

        