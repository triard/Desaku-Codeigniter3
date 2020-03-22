<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <h1>Daftar Pengaduan</h1>

<<<<<<< HEAD
    <!-- <?php var_dump($pengaduan); ?> -->
=======

>>>>>>> a28855c3c9aaabf9a0b9ddd3a0794f6a5c9010ad
    <table>

        <tr>
            <th>Nama</th>
            <th>Nik</th>
            <th>Isi</th>
            <th>Detail</th>
        </tr>
        <?php foreach ($pengaduan as $pd) : ?>
            <tr>
                <td><?= $pd["nama"] ?></td>
                <td><?= $pd["nik"] ?></td>
                <td><?= $pd["isi"] ?></td>
                <td>4</td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>