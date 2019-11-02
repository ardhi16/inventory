<div class="container-fluid">
    <div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0"><?= $title ?></h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)"><?= $title ?></a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a href="<?= site_url('barang/tambah') ?>" class="btn pull-right hidden-sm-down btn-success">Tambah</a>
        </div>
    </div>

    <div class="card">
        <div class="card-block">

            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Tanggal Buat</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($barang as $row) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $row['barang_nama'] ?></td>
                            <td><?= number_format($row['barang_harga']) ?></td>
                            <td><?= date('d F Y', strtotime($row['barang_tanggal'])) ?></td>
                            <td><?= $row['kategori_nama'] ?></td>
                            <td>
                                <a href="<?= site_url('barang/edit/' . $row['barang_id']) ?>">Edit</a>
                                <a onclick="return confirm('Apakah anda yakin ingin menghapus ini?')" href="<?= site_url('barang/hapus/' . $row['barang_id']) ?>">Hapus</a>
                                <a href="<?= site_url('barang/detail/' . $row['barang_id']) ?>">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>