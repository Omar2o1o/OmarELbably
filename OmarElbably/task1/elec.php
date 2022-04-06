<?php
$chargePrice = "";
if ($_POST) {
    $chargeCount = $_POST["FirstNumber"];
    $surcharge = 0.2;

    if ($chargeCount <= 50 && $chargeCount > 0) {
        $unitPrice = $chargeCount * 0.5;
        $surchargePrice = $unitPrice * $surcharge;
        $priceAfterCharge = $unitPrice + $surchargePrice;

        $chargePrice =
            "<div class='alert alert-success'>
        <strong> Your bill </strong> is $priceAfterCharge EGP 
        </div>";
    } elseif ($chargeCount <= 150 && $chargeCount > 50) {
        $unitPrice = $chargeCount * 0.75;
        $surchargePrice = $unitPrice * $surcharge;
        $priceAfterCharge = $unitPrice + $surchargePrice;

        $chargePrice =
            "<div class='alert alert-success'>
        <strong> Your bill </strong> is $priceAfterCharge EGP 
        </div>";
    } elseif ($chargeCount <= 250 && $chargeCount > 150) {
        $unitPrice = $chargeCount * 1.2;
        $surchargePrice = $unitPrice * $surcharge;
        $priceAfterCharge = $unitPrice + $surchargePrice;

        $chargePrice =
            "<div class='alert alert-success'>
        <strong> Your bill </strong> is $priceAfterCharge EGP 
        </div>";
    } elseif ($chargeCount >= 250) {
        $unitPrice = $chargeCount * 1.5;
        $surchargePrice = $unitPrice * $surcharge;
        $priceAfterCharge = $unitPrice + $surchargePrice;

        $chargePrice =
            "<div class='alert alert-success'>
        <strong> Your bill </strong> is $priceAfterCharge EGP 
        </div>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Electricity Bill</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center text-dark">
                <h4>Electricity Bill</h4>
            </div>
            <div class="col-4 offset-4 mt-5">
                <form method="post">
                    <div class="form-group">
                        <label for="FirstNumber">First Number</label>
                        <input type="number" name="FirstNumber" class="form-control">
                    </div>

                    <button class="btn btn-outline-dark rounded btn-sm mb-5"> Calculate </button>
                </form>
                <?php
                echo $chargePrice ?? "";
                ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>