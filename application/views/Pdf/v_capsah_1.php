<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Capsah-PNS(1)</title>
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/style.css">

    <!-- Normalize or reset CSS with your favorite library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>
        @page {
            size: A4
        }
    </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="A4">

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
    <section class="sheet padding-10mm">

        <!-- Write HTML just like a web page -->
        <?php
        $p = $isi_surat;
        ?>
        <hr width=120% color="black" style="margin-top:98.6mm; margin-left:-50px; position:absolute; z-index:0; height:0.2px">
        <hr width=120% color="black" style="margin-top:197.2mm; margin-left:-50px; position:absolute; z-index:0; height:0.2px">
        <hr width=1.2px color="black" style="margin-left:47%;margin-top:-40px; position:absolute; z-index:0; height:100%">
        <p style="text-align:justify;margin-top:10px;margin-left:400px;width:92%;position:absolute; z-index:0">Berangkat dari
        <p style="text-align:justify;margin-top:10px;margin-left:500px;width:92%;position:absolute; z-index:0">: <?php echo $p->kota.', '.$p->nama_provinsi ?>
        <p style="text-align:justify;margin-top:30px;margin-left:400px;width:92%;position:absolute; z-index:0">Pada Tanggal
        <p style="text-align:justify;margin-top:30px;margin-left:500px;width:92%;position:absolute; z-index:0">: <?php echo tanggal_indonesia($p->tanggal_berangkat) ?>
        <p style="text-align:justify;margin-top:50px;margin-left:400px;width:92%;position:absolute; z-index:0">ke
        <p style="text-align:justify;margin-top:50px;margin-left:500px;width:92%;position:absolute; z-index:0">: <?php echo $p->kota_tujuan.', '.$p->provinsi_tujuan ?>

        <p style="text-align:left;margin-top:100px;margin-left:500px;width:92%;position:absolute;z-index:1">An. Kuasa Pengguna Anggaran
        <p style="text-align:left;margin-top:120px;margin-left:500px;width:92%;position:absolute;z-index:2">Pejabat Pembuat Komitmen
        <p style="text-align:left;margin-top:280px;margin-left:500px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_ppk ?>
        <p style="text-align:left;margin-top:310px;margin-left:500px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip_ppk ?>

        <p style="text-align:justify;margin-top:410px;margin-left:-20px; width:75%; position:absolute;z-index:5">II. <br>
        <p style="text-align:justify;margin-top:410px;margin-left:10px;width:80%;position:absolute; z-index:0">Tiba di
        <p style="text-align:justify;margin-top:410px;margin-left:110px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:435px;margin-left:10px;width:80%;position:absolute; z-index:0">Pada Tanggal
        <p style="text-align:justify;margin-top:435px;margin-left:110px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:465px;margin-left:10px;width:80%;position:absolute; z-index:0">Kepala
        <p style="text-align:justify;margin-top:465px;margin-left:110px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:left;margin-top:670px;margin-left:110px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_pegawai ?></b>
        <p style="text-align:left;margin-top:700px;margin-left:110px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip ?>

        <p style="text-align:justify;margin-top:410px;margin-left:400px;width:80%;position:absolute; z-index:0">Berangkat dari
        <p style="text-align:justify;margin-top:410px;margin-left:500px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:435px;margin-left:400px;width:80%;position:absolute; z-index:0">Pada Tanggal
        <p style="text-align:justify;margin-top:435px;margin-left:500px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:465px;margin-left:400px;width:80%;position:absolute; z-index:0">Ke
        <p style="text-align:justify;margin-top:465px;margin-left:500px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:495px;margin-left:400px;width:80%;position:absolute; z-index:0">Kepala
        <p style="text-align:justify;margin-top:495px;margin-left:500px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:left;margin-top:670px;margin-left:500px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_pegawai ?></b>
        <p style="text-align:left;margin-top:700px;margin-left:500px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip ?>

        <p style="text-align:justify;margin-top:780px;margin-left:-20px; width:75%; position:absolute;z-index:5">III. <br>
        <p style="text-align:justify;margin-top:780px;margin-left:10px;width:80%;position:absolute; z-index:0">Tiba di
        <p style="text-align:justify;margin-top:780px;margin-left:110px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:805px;margin-left:10px;width:80%;position:absolute; z-index:0">Pada Tanggal
        <p style="text-align:justify;margin-top:805px;margin-left:110px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:835px;margin-left:10px;width:80%;position:absolute; z-index:0">Kepala
        <p style="text-align:justify;margin-top:835px;margin-left:110px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:left;margin-top:1000px;margin-left:110px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_pegawai ?></b>
        <p style="text-align:left;margin-top:1030px;margin-left:110px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip ?>

        <p style="text-align:justify;margin-top:780px;margin-left:400px;width:80%;position:absolute; z-index:0">Berangkat dari
        <p style="text-align:justify;margin-top:780px;margin-left:500px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:805px;margin-left:400px;width:80%;position:absolute; z-index:0">Pada Tanggal
        <p style="text-align:justify;margin-top:805px;margin-left:500px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:835px;margin-left:400px;width:80%;position:absolute; z-index:0">Ke
        <p style="text-align:justify;margin-top:835px;margin-left:500px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:865px;margin-left:400px;width:80%;position:absolute; z-index:0">Kepala
        <p style="text-align:justify;margin-top:865px;margin-left:500px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:left;margin-top:1000px;margin-left:500px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_pegawai ?></b>
        <p style="text-align:left;margin-top:1030px;margin-left:500px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip ?>
    </section>
    <?php

function tanggal_indonesia($tanggal){

	$bulan = array (
		1 =>   	'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
		);

		$var = explode('-', $tanggal);

		return $var[2] . ' ' . $bulan[ (int)$var[1] ] . ' ' . $var[0];
		// var 0 = tanggal
		// var 1 = bulan
		// var 2 = tahun
}?>

</body>

</html>