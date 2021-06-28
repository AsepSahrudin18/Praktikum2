<?php
    $proses = $_GET['proses'];
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];
    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;

    $ns1 = ['id'=>1,'nama'=>'01101','matkul'=>'Basis Data I','nilai_uts'=>80,'nilai_uas'=>84,'nilai_tugas'=>78];
    $ns2 = ['id'=>2,'nama'=>'01121','matkul'=>'Basis Data I','nilai_uts'=>70,'nilai_uas'=>50,'nilai_tugas'=>68];
    $ns3 = ['id'=>3,'nama'=>'01130','matkul'=>'Basis Data I','nilai_uts'=>60,'nilai_uas'=>86,'nilai_tugas'=>70];
    $ns4 = ['id'=>4,'nama'=>'01134','matkul'=>'Dasar Dasar Pemrograman','nilai_uts'=>90,'nilai_uas'=>91,'nilai_tugas'=>82];
    $ns5 = ['id'=>5,'nama'=>$nama_siswa,'matkul'=>$mata_kuliah,'nilai_uts'=>$nilai_uts,'nilai_uas'=>$nilai_uas,'nilai_tugas'=>$nilai_tugas];

    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
?>

<h3>Daftar Nilai Siswa</h3>
<table border="1" width="100%">
<thead>
<tr>
<th>No</th><th>Nama</th><th>Matkul</th><th>UTS</th>
<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
</tr>
</thead>
<tbody>
<?php
    $nomor = 1;
    foreach($ar_nilai as $ns){
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$ns['nama'].'</td>';
    echo '<td>'.$ns['matkul'].'</td>';
    echo '<td>'.$ns['nilai_uts'].'</td>';
    echo '<td>'.$ns['nilai_uas'].'</td>';
    echo '<td>'.$ns['nilai_tugas'].'</td>';
    $nilai_akhir = ($ns['nilai_uts'] + $ns['nilai_uas']+$ns['nilai_tugas'])/3;
    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
    echo '<tr/>';
    $nomor++;
    }
?>
</tbody>
</table> 