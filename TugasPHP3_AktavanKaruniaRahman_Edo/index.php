<?php
//array scalar (1 dimensi)
$m1 = ['NIM'=>'a1','NAMA'=>'Joko','NILAI'=>80];
$m2 = ['NIM'=>'a2','NAMA'=>'Ajeng','NILAI'=>80];
$m3 = ['NIM'=>'b1','NAMA'=>'Windah','NILAI'=>100];
$m4 = ['NIM'=>'b2','NAMA'=>'Rahman','NILAI'=>50];
$m5 = ['NIM'=>'c1','NAMA'=>'Cerry','NILAI'=>80];
$m6 = ['NIM'=>'a2','NAMA'=>'Megawati','NILAI'=>75];
$m7 = ['NIM'=>'a2','NAMA'=>'Supri','NILAI'=>90];
$m8 = ['NIM'=>'a2','NAMA'=>'Asep','NILAI'=>40];
$m9 = ['NIM'=>'a2','NAMA'=>'fitri','NILAI'=>70];
$m10 = ['NIM'=>'a2','NAMA'=>'rosa','NILAI'=>95];


$ar_judul = ['No','NIM','NAMA','NILAI','KETERANGAN',
'GRADE','PREDIKAT'];

//array assosiative (> 1 dimensi)
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

//aggregate function in array
$nilai = array_column($mahasiswa, 'NILAI');
$keterangan = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";

$nilai = array_column($mahasiswa, 'NILAI');
if ($nilai <= 20) {
    $grade = "E";
} elseif ($nilai <= 40) {
    $grade = "D";
} elseif ($nilai <= 60) {
    $grade = "C";
} elseif ($nilai <= 80) {
    $grade = "B";
} elseif ($nilai <= 100) {
    $grade = "A";
} else {
    $grade = "";
}

$predikat = $grade;

switch ($predikat) {
    case 'E':
        echo "Buruk Sekali";
        break;
    case 'D':
            echo "Buruk";
        break;
    case 'C':
        echo "Cukup";
        break;
    case 'B':
        echo "Baik";
        break;
    case 'A':
        echo "Memuaskan";
        break;
    default:
        echo "Tidak ada kategorinya";
        break;
}

$jumlah_mahasiswa = count($mahasiswa);
$total_nilai = array_sum($nilai);
$max_nilai = max($nilai);
$min_nilai = min($nilai);
$avg_nilai = $total_nilai / $jumlah_mahasiswa;

//keterangan
$keterangan = [
    'Jumlah Mahasiswa'=>$jumlah_mahasiswa,
    'Total nilai'=>$total_nilai,
    'Jml nilai Tertinggi'=>$max_nilai,
    'Jml nilai Terendah'=>$min_nilai,
    'Rata2'=>$avg_nilai
];
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TUGAS PHP 3 AKTAVAN Kel.4</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <h3 class="text-center">Daftar Nilai Mahasiswa</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $mhs){
                //rumus2
                $total_nilai = array_sum($nilai);
                $max_nilai = max($nilai);
                $min_nilai = min($nilai);
                $avg_nilai = $total_nilai / $jumlah_mahasiswa;
                $keterangan = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $mhs['NIM'] ?></td>
                    <td><?= $mhs['NAMA'] ?></td>
                    <td><?= $mhs['NILAI'] ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                    <td align="right">Rp. <?= number_format($netto,0,',','.') ?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($keterangan as $ket => $hasil) {
                ?>
                <tr>
                    <th colspan="7"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>