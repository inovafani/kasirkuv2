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
                <h1> Hallo Semua </h1>
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

        