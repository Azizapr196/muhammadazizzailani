<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI PERHITUNGAN DISKON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
 <style>
    body {
        background-image: url(assets/yo.jpg);
        background-size:cover;
        font-weight: bold;
        font-style: oblique;
        font-variant: small-caps;
    }
 </style>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center text-white"><marquee>APLIKASI PERHITUNGAN DISKON</marquee></h2>
                <form method="post" class="border rounded bg-warning p-2">
                    <label class="form-label">HARGA (Rp)</label>
                    <input type="number" name="harga" class="form-control" step="0.01" placeholder="Masukan harga barang" min="0" autocomplete="off"
                    required onkeypress="return event.charCode >=48 && event.charCode <=57">
                    <label class="form-label">DISKON (%)</label>
                    <input type="text" name="diskon" maxlength="3" class="form-control" step="0.01" placeholder="Masukan diskon" min="0" autocomplete="off"
                    required onkeypress="return event.charCode >=48 && event.charCode <=57">
                    <button type="submit" class="btn btn-primary w-100 p-2 mt-2" name="hitung">HITUNG</button>
                    <button type="reset" class="btn btn-light w-100 p-2 mt-2" name="hapus"> HAPUS</button>
                </form>
                <div id="hasil">
                    <?php
                    if (isset ($_POST ['hitung'])){
                        $harga = $_POST ['harga'];
                        $diskon =$_POST ['diskon'];
                    if($harga <0){
                        echo "<script>alert('Harga tidak boleh negatif!')</script>";
                    }elseif($diskon <0 || $diskon > 100){
                        echo  "<script>alert('Diskon harus di angka 0-100 !')</script>";
                    }else{
                        $nilai_diskon = $harga * ($diskon/100);
                        $total_harga =$harga -$nilai_diskon;?>
                        <div class="border rounded bg-warning p-2 mt-2">
                            <p>Harga : Rp.<b><?php echo number_format($harga,2,',','.')?></b></p>
                            <p>Diskon <?php echo $diskon ?>% : Rp. <b><?php echo number_format($nilai_diskon,2,',','.') ?></b></p>
                            <p>Total harga setelah diskon : Rp. <b><?php echo number_format($total_harga,2,',','.')?></b></p>
                            <button type="reset" id="resetButton" class="btn btn-danger w-100 p-2 mt-2" name="reset">RESET</button>
                        </div>
                    <?php }
                    }
                    ?>
                </div>
            <script>
                document.getElementById('resetButton').addEventListener('click',function(){
                    document.getElementById('hasil').innerHTML='';
                })
                </script>
            </div>
        </div>
    </div>
    <p class="text-center text-white ">&copy; UKK (MUHAMMAD AZIZ ZAILANI XII RPL)</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>