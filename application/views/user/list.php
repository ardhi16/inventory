<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= site_url('media/css/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Fullname</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach ($users as $row) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['fullname'] ?></td>
                            <td>
                                <a href="#" class="btn btn-info">Detail</a>
                                <a href="#" class="btn btn-success">Edit</a>
                                <a href="<?= site_url('user/hapus/'.$row['user_id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan hapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="<?= site_url('media/js/jquery.min.js') ?>"></script>
    <script src="<?= site_url('media/js/bootstrap.min.js') ?>"></script>
</body>

</html>