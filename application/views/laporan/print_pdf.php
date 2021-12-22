<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan <?= $karyawan->nama ?> bulan <?= bulan($bulan) . ', ' . $tahun ?></title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style>
        @media print {
            .firstrow {
                page-break-after: always;
            }
        }
    </style>
</head>

<body>
    <div class="row mt-2">
        <div class="mt-2">
            <div class="row">
                <div class="col-12">
                    <?php if ($lapor) : ?>
                        <?php foreach ($lapor as $i => $h) : ?>
                            <?php
                            $lapor_harian = array_search($h['tanggal'], array_column($lapor, 'tanggal')) !== false ? $lapor[array_search($h['tanggal'], array_column($lapor, 'tanggal'))] : '';
                            ?>
                            <div><?= ($lapor_harian == '') ? 'class="bg-danger text-white"' : '' ?></div>
                            <div class="card">
                                <div>
                                    <div class="firstrow">
                                        <h4><span>Tanggal</span></h4>
                                        <span><?= $h['tanggal'] ?></span>
                                    </div>
                                    <div class="firstrow">
                                        <h4><span>Waktu</span></h4>
                                        <span><?= $h['waktu'] ?></span>
                                    </div>
                                    <div class="firstrow">
                                        <h4><span>Tempat</span></h4>
                                        <span><?= $h['tempat'] ?></span>
                                    </div>
                                    <div class="firstrow">
                                        <h4><span>Kegiatan</span></h4>
                                        <span><?= $h['kegiatan'] ?></span>
                                    </div>
                                    <br>
                                    <div class="firstrow">
                                        <h4><span>Deskripsi</span></h4>
                                        <span><?= $h['deskripsi'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <h4><span>Tidak ada data laporan</span></h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>