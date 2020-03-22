<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <h1>Daftar Pengaduan</h1>


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