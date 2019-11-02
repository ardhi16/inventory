<div class="container-fluid">
    <div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0"><?= $title ?></h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)"><?= $title ?></a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </div>
    </div>
    <div class="card">
        <div class="card-block">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Nama Barang</label>
                    <input class="form-control" type="text" name="barang_nama" id="barang_nama">
                </div>
                <div class="form-group">
                    <label for="">Harga Barang</label>
                    <input class="form-control" type="number" name="barang_harga" id="barang_harga">
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select name="kategori_id" id="kategori_id" class="form-control">
                        <?php foreach ($kategori as $row) : ?>
                            <option value="<?= $row['kategori_id'] ?>"><?= $row['kategori_nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>

            </form>
        </div>

    </div>
</div>