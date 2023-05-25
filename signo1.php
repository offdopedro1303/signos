<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <?php
        $data = date_parse($_GET["data"]);
        
        switch($data["month"]){
            case 1:if($data["month"] == 1 and $data["day"] >= 20){
                echo "<p>Aquário</p>";
                echo "<img src='img/aquário.jpg'>";
            } 

            case 2:if($data["month"] == 1 and $data["day"] <= 19){
                echo "<p>Capricórnio</p>";
                echo "<img src='img/capricórnio.jpg'>";
            }

            case 3:if($data["month"] == 2 and $data["day"] <= 18){
                echo "<p>Aquário</p>";
                echo "<img src='img/aquário.jpg'>";
            }


            case 4:if($data["month"] == 2 and $data["day"] >= 19){
                echo "<p>Peixes</p>";
                echo "<img src='img/peixes.jpg'>";
            }

            case 5:if($data["month"] == 3 and $data["day"] <= 20){
                echo "<p>Peixes</p>";
                echo "<img src='img/peixes.jpg'>";
            }

            case 6:if($data["month"] == 3 and $data["day"] >= 21){
                echo "<p>Áries</p>";
                echo "<img src='img/áries.jpg'>";
            }

            case 7:if($data["month"] == 4 and $data["day"] <= 19){
                echo "<p>Áries</p>";
                echo "<img src='img/áries.jpg'>";
            }

            case 8:if($data["month"] == 4 and $data["day"] >= 20){
                echo "<p>Touro</p>";
                echo "<img src='img/touro.jpg'>";
            }

            case 9:if($data["month"] == 5 and $data["day"] <= 20){
                echo "<p>Touro</p>";
                echo "<img src='img/touro.jpg'>";
            }

            case 10:if($data["month"] == 5 and $data["day"] >= 21){
                echo "<p>Gêmeos</p>";
                echo "<img src='img/gêmeos.jpg'>";
            }

            case 11:if($data["month"] == 6 and $data["day"] <= 20){
                echo "<p>Gêmeos</p>";
                echo "<img src='img/gêmeos.jpg'>";
            }

            case 12:if($data["month"] == 6 and $data["day"] >= 21){
                echo "<p>Câncer</p>";
                echo "<img src='img/câncer.jpg'>";
            }

            case 13:if($data["month"] == 7 and $data["day"] <= 22){
                echo "<p>Câncer</p>";
                echo "<img src='img/câncer.jpg'>";
            }

            case 14:if($data["month"] == 7 and $data["day"] >= 23){
                echo "<p>Leão</p>";
                echo "<img src='img/leão.jpg'>";
            }

            case 15:if($data["month"] == 8 and $data["day"] <= 22){
                echo "<p>Leão</p>";
                echo "<img src='img/leão.jpg'>";
            }

            case 16:if($data["month"] == 8 and $data["day"] >= 23){
                echo "<p>Virgêm</p>";
                echo "<img src='img/virgêm.jpg'>";
            }

            case 17:if($data["month"] == 9 and $data["day"] <= 22){
                echo "<p>Virgêm</p>";
                echo "<img src='img/virgêm.jpg'>";
            }

            case 18:if($data["month"] == 9 and $data["day"] >= 23){
                echo "<p>Libra</p>";
                echo "<img src='img/libra.jpg'>";
            }

            case 19:if($data["month"] == 10 and $data["day"] <= 22){
                echo "<p>Libra</p>";
                echo "<img src='img/libra.jpg'>";
            }

            case 20:if($data["month"] == 10 and $data["day"] >= 23){
                echo "<p>Escorpião</p>";
                echo "<img src='img/escorpião.jpg'>";
            }

            case 21:if($data["month"] == 11 and $data["day"] <= 21){
                echo "<p>Escorpião</p>";
                echo "<img src='img/escorpião.jpg'>";
            }

            case 22:if($data["month"] == 11 and $data["day"] >= 22){
                echo "<p>Sagitário</p>";
                echo "<img src='img/sagitário.jpg'>";
            }

            case 23:if($data["month"] == 12 and $data["day"] <= 21){
                echo "<p>Sagitário</p>";
                echo "<img src='img/sagitário.jpg'>";
            }
            
            case 24:if($data["month"] == 12 and $data["day"] >= 22){
                echo "<p>Capricórnio</p>";
                echo "<img src='img/capricórnio.jpg'>";
            }
            break;
                echo "<p>Mês " .$data["month"]. " incorreto!</p>";        
        }

    ?>

</body>
</html>