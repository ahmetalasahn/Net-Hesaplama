<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/main3.css">
    <title>Ahmet Alaşahin</title>
</head>
<body>
    <form action="" method="POST">
        <div class="form2">
            <div class="form">
                <h1>NET HESAPLAMA</h1>
                <div class="adi-soyadi">
                    <input type="text" name="adsoyad" id="" class="ad" placeholder="Ad-Soyad">
                </div>

                <div class="dogru">
                    <input type="text" name="dogru" id="" class="dogru" placeholder="Doğru Sayısı">
                </div>

                <div class="yanlisd">
                    <input type="text" name="yanlis" id="" class="yanlis" placeholder="Yanlış Sayısı">
                </div>

                <div class="net">
                    <input type="text" name="net" id="" class="net" placeholder="1 Net Puanı">
                </div>

                <div class="submit">
                    <button type="submit" class="button">Hesapla!</button>
                </div>
                
                <div class="php">
                    <?php
                    echo "<br> <span style='color: white; font-size: 20px; font-weight: bold;'>";
                    if (isset($_POST['adsoyad']) && isset($_POST['dogru']) && isset($_POST['yanlis']) && isset($_POST['net'])) {
                        $net = ($_POST['dogru'] - ($_POST['yanlis'] / $_POST['net'])) * $_POST['net'];

                        echo "Merhaba " .$_POST['adsoyad'];
                        echo "<br>";
                        echo "Doğru Sayınız = " .$_POST['dogru'];
                        echo "<br>";
                        echo "Yanlış Sayınız = " .$_POST['yanlis'];
                        echo "<br>";
                        echo "Netiniz = " .$net;
                    }
                    ?>
                </div>
            </div>  
        </div>
    </form>
</body>
</html>