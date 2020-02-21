<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Comply - Free Bootstrap 4 Product Landing Page Template</title>
        <meta name="description" content="Download free Bootstrap 4 product landing page template Comply." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap 4-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!--icons-->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    </head>
    <body>
        <!--main section-->
        <section class="bg-texture hero" id="main">
            <div class="container">
                <div class="row d-md-flex brand">
                    <div class="col-md-6 col-sm-12 text-white wow fadeIn">
                        <h2 class="pt-4">Anak anda memiliki kecenderungan bakat diantaranya :</h2>
                        <p class="mt-5">
                            <?php
                            $k1 = 0;
                            $k2 = 0;
                            $k3 = 0;
                            $k4 = 0;
                            $k5 = 0;
                            $k6 = 0;

                            if (isset($_POST['c1']) + isset($_POST['c2']) + isset($_POST['c3']) == 3) {
                                echo '<a>Tingkat perbendaharaan kata yang tinggi</a><br>';
                                $k1++;
                            }
                            if (isset($_POST['c4']) + isset($_POST['c5']) + isset($_POST['c6']) + isset($_POST['c7']) + isset($_POST['c8']) + isset($_POST['c9']) == 6) {
                                echo '<a>Mempunyai Ingatan kuat</a><br>';
                                $k1++;
                            }
                            if (isset($_POST['c10']) + isset($_POST['c11']) + isset($_POST['c12']) + isset($_POST['c13']) + isset($_POST['c14']) == 5) {
                                echo '<a>Penguasaan kata - kata abstrak</a><br>';
                                $k1++;
                            }
                            if (isset($_POST['c15']) + isset($_POST['c16']) + isset($_POST['c17']) + isset($_POST['c18']) == 4) {
                                echo '<a>Memiliki Pemikiran abstrak</a><br>';
                                $k2++;
                            }
                            if (isset($_POST['c19']) + isset($_POST['c20']) + isset($_POST['c21']) + isset($_POST['c22']) + isset($_POST['c23']) + isset($_POST['c24']) + isset($_POST['c25']) == 7) {
                                echo '<a>Memiliki Prestasi bidang matematika</a><br>';
                                $k2++;
                            }
                            if (isset($_POST['c26']) + isset($_POST['c27']) == 2) {
                                echo '<a>Memiliki Prestasi sains</a><br>';
                                $k3++;
                            }
                            if (isset($_POST['c28']) + isset($_POST['c29']) + isset($_POST['c30']) + isset($_POST['c31']) + isset($_POST['c32']) == 5) {
                                echo '<a>Keterbukaan terhadap pengalaman</a><br>';
                                $k3++;
                            }
                            if (isset($_POST['c33']) + isset($_POST['c34']) == 2) {
                                echo '<a>Menetapkan standar personal</a><br>';
                                $k3++;
                            }
                            if (isset($_POST['c35']) + isset($_POST['c36']) == 2) {
                                echo '<a>Kemampuan memainkan ide-ide</a><br>';
                                $k3++;
                            }
                            if (isset($_POST['c37']) + isset($_POST['c38']) + isset($_POST['c39']) + isset($_POST['c40']) == 4) {
                                echo '<a>Keinginan untuk menghadapi resiko</a><br>';
                                $k3++;
                            }
                            if (isset($_POST['c41']) + isset($_POST['c42']) + isset($_POST['c43']) == 3) {
                                echo '<a>Kesukaan terhadap kompleksitas</a><br>';
                                $k3++;
                            }
                            if (isset($_POST['c44']) + isset($_POST['c45']) + isset($_POST['c46']) == 3) {
                                echo '<a>Toleran terhadap ambiguitas</a><br>';
                                $k3++;
                            }
                            if (isset($_POST['c47']) + isset($_POST['c48']) == 2) {
                                echo '<a>Image diri yang positif</a><br>';
                                $k3++;
                            }
                            if (isset($_POST['c49']) + isset($_POST['c50']) == 2) {
                                echo '<a>Kemampuan menyatu dengan tugas</a><br>';
                                $k4++;
                            }
                            if (isset($_POST['c51']) + isset($_POST['c52']) == 2) {
                                echo '<a>Kepercayaan diri</a><br>';
                                $k4++;
                            }
                            if (isset($_POST['c53']) + isset($_POST['c54']) + isset($_POST['c55']) + isset($_POST['c56']) + isset($_POST['c57']) == 5) {
                                echo '<a>Tanggung jawab</a><br>';
                                $k4++;
                            }
                            if (isset($_POST['c58']) + isset($_POST['c59']) == 2) {
                                echo '<a>Kerja sama</a><br>';
                                $k4++;
                            }
                            if (isset($_POST['c60']) + isset($_POST['c61']) + isset($_POST['c62']) == 3) {
                                echo '<a>Kecenderungan untuk mendominasi</a><br>';
                                $k4++;
                            }
                            if (isset($_POST['c63']) + isset($_POST['c64']) == 2) {
                                echo '<a>Beradaptasi dengan mudah terhadap situasi yang baru</a><br>';
                                $k5++;
                            }
                            if (isset($_POST['c65']) + isset($_POST['c66']) == 2) {
                                echo '<a>Keterbakatan dalam bidang seni visual</a><br>';
                                $k5++;
                            }
                            if (isset($_POST['c67']) + isset($_POST['c68']) == 2) {
                                echo '<a>Keterbakatan dalam bidang seni musik</a><br>';
                                $k5++;
                            }
                            if (isset($_POST['c69']) == 1) {
                                echo '<a>Keterbakatan dalam bidang drama</a><br>';
                                $k5++;
                            }
                            if (isset($_POST['c70']) + isset($_POST['c71']) + isset($_POST['c72']) == 3) {
                                echo '<a>Kemampuan motorik kinestetik</a><br>';
                                $k6++;
                            }
                            if (isset($_POST['c73']) + isset($_POST['c74']) == 2) {
                                echo '<a>Keterampilan praktik</a><br>';
                                $k6++;
                            }
                            if (isset($_POST['c75']) + isset($_POST['c76']) + isset($_POST['c77']) == 3) {
                                echo '<a>Keterampilan spasial</a><br>';
                                $k6++;
                            }
                            if (isset($_POST['c78']) + isset($_POST['c79']) + isset($_POST['c80']) + isset($_POST['c81']) == 4) {
                                echo '<a>Keterampilan mekanika</a><br>';
                                $k6++;
                            }
                            if (isset($_POST['c82']) + isset($_POST['c83']) == 2) {
                                echo '<a>Keterampilan fisikal</a><br>';
                                $k6++;
                            }
                            if ($k1 == 3) {
                                echo '<a>Intelektual Umum</a><br>';
                            }
                            if ($k2 == 2) {
                                echo '<a>Akademik Khusus</a><br>';
                            }
                            if ($k3 == 8) {
                                echo '<a>Berpikir kreatif dan Produktif</a><br>';
                            }
                            if ($k4 == 5) {
                                echo '<a>Kepemimpinan</a><br>';
                            }
                            if ($k5 == 4) {
                                echo '<a>Seni Visual dan Pertunjukan</a><br>';
                            }
                            if ($k6 == 5) {
                                echo '<a>Psikomotorik</a><br>';
                            }
                            ?>
                        </p>
                        <p class="mt-5">
                            <a href="index.html" class="btn btn-primary mr-2 mb-2 page-scroll">Home</a>
                            <a href="soal.html" class="btn btn-white mb-2 page-scroll">Konsultasi Ulang</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
