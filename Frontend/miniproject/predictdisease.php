<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel="stylesheet" href="includes/css/style.css" />
    <title>Healthify</title>
    <style>
        #card-body{
            background-color: #abea64;
        }

    </style>
</head>

<body class="bg-dark text-light">

    <?php
    require 'includes/_dbconnect.php';
    $predicted_disease = "";
    $prec1 = "";
    $prec2 = "";
    $prec3 = "";
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["desc"])) {

            $apiUrl = "http://127.0.0.1:5000/predict_disease";
            $userInput = $_POST["desc"] ?? "";
            if (empty($userInput)) {
                echo "Please enter some text to process.";
                exit;
            }
            $ch = curl_init($apiUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(["text" => $userInput]));
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json'
            ]);

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                echo "Error: " . curl_error($ch);
                exit;
            }
            curl_close($ch);
            $responseData = json_decode($response, true);

            if (isset($responseData["error"])) {
                echo "API Error: " . $responseData["error"];
                exit;
            }
            $predicted_disease = $responseData["predicted_disease"];
            // echo "Processed Text: " . $processedText;

            $sql4 = "SELECT * from `disease_precaution` where `disease` = '$predicted_disease';";
            $val = mysqli_query($conn, $sql4);
			$check = mysqli_num_rows($val);
			while ($row = mysqli_fetch_assoc($val)){
                $prec1 = $row['sym1'];
                $prec2 = $row['sym2'];
                $prec3 = $row['sym3'];
            }
        }
    }



    ?>

<?php 
if (!isset($_SESSION['user'])) {
    header('location: /miniproject/login.php');
    $login = false;
  
} else {
    $login = true;
}



require 'includes/navbar.php';

?>

    <div class="jumbotron jumbotron-fluid h-100 mt-0" id="card-body">
        <div class="container">
            <h2 class="display-4 text-success"><b>Disease Prediction</b></h2>
            <form action="predictdisease.php" method="post">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Enter your Symptoms or text description</label>
                    <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Predict Disease</button>
            </form>
        </div>

        <div class="card mx-auto mt-4" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title text-dark">Predicted Disease</h5>
                <h6 class="card-subtitle mb-2 text-muted" id="diseseasetext"><?php echo $predicted_disease?></h6>
                <h5 class="card-title text-dark"><br>Precautions : </h5>
                <p class="card-text text-dark"> <?php  echo $prec1; ?> </p>
                <p class="card-text text-dark"> <?php  echo $prec2; ?> </p>
                <p class="card-text text-dark"> <?php  echo $prec3; ?> </p>
            </div>
        </div>
    </div>

    <?php require 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
    <script src="includes/js/script.js"></script>
</body>

</html>