<!DOCTYPE html>
<html>

<head>
    <title>Konversi Nilai</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align">Konversi Nilai</span>
                        <form method="POST" action="">
                            <div class="input-field">
                                <input type="text" id="nilai_partisipasi" name="partisipasi" class="validate" required>
                                <label for="nilai_partisipasi">Nilai Partisipasi</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="nilai_tugas" name="tugas" class="validate" required>
                                <label for="nilai_tugas">Nilai Tugas</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="nilai_uts" name="uts" class="validate" required>
                                <label for="nilai_uts">Nilai UTS</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="nilai_uas" name="uas" class="validate" required>
                                <label for="nilai_uas">Nilai UAS</label>
                            </div>
                            <button type="submit" name="submit" class="btn waves-effect waves-light">Konversi</button>
                        </form>
                        <?php
                        if (isset($_POST['submit'])) {
                            include 'Nilai.php';
                            include 'KonversiNilai.php';

                            $nilai = new Nilai($_POST['partisipasi'], $_POST['tugas'], $_POST['uts'], $_POST['uas']);
                            $na = $nilai->hitungNA();
                            $nh = KonversiNilai::konversi($na);

                            echo "<div class='alert alert-success mt-3'>Nilai Akhir: $na <br> Nilai Huruf: $nh</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>