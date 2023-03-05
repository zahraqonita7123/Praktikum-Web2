<?php
//tangkap hasil inputan
$nama_siswa = $_POST["nama_lengkap"];
$mata_kuliah = $_POST["mata_kuliah"];
$nilai_uts = $_POST["nilai_uts"];
$nilai_uas = $_POST["nilai_uas"];
$nilai_praktikum = $_POST["nilai_tugas"];

//buat variabel total nilai
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_praktikum) / 3;

//logic untuk status
$status;
if ($total_nilai >= 60) {
    $status = "lulus";
} else {
    $status = "tidak lulus";
}

//logic grade
$grade;
if ($total_nilai >= 85 && $total_nilai <= 100) {
    $grade = " A ";
} elseif ($total_nilai >= 75 && $total_nilai <= 85) {
    $grade = " B ";
} elseif ($total_nilai >= 55 && $total_nilai <= 75) {
    $grade = " C ";
} elseif ($total_nilai >= 40 && $total_nilai <= 55) {
    $grade = " D ";
} else {
    $grade = " E ";
}

//logic buat predikat
$predikat;
switch ($grade) {
    case " A ":
        $predikat = " sangat memuaskan ";
        break;
    case " B ":
        $predikat = " memuaskan ";
        break;
    case " C ":
        $predikat = " cukup ";
        break;
    case " D ":
        $predikat = " kurang ";
        break;
    case " E ":
        $predikat = " sangat kurang ";
        break;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title> NILAI SISWA </title>
</head>

<body>
    <h1 align="center">DAFTAR NILAI SISWA</h1>
    <hr>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Nilai UTS</th>
                    <th scope="col">Nilai UAS</th>
                    <th scope="col">Nilai Praktikum</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Predikat</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?= $nama_siswa ?></th>
                    <td><?= $mata_kuliah ?> </td>
                    <td><?= $nilai_uts ?> </td>
                    <td><?= $nilai_uas ?></td>
                    <td><?= $nilai_praktikum ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                    <td><?= $status ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>