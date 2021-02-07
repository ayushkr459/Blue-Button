<?php

$url = 'https://sandbox.bluebutton.cms.gov/v1/fhir/metadata?format=json';
$json = file_get_contents($url);
$json = json_decode($json);

// print_r($json);

$result = $json->software->name . '<br> Software Version - ' . $json->software->version . '<br> Resource Type - ' . $json->resourceType . '<br> Status - ' .
    $json->status . '<br> Date - ' . $json->date . '<br> Kind - ' . $json->kind . '<br> Publisher - ' . $json->publisher . '<br> FHIR Version - ' . $json->fhirVersion . '<br> Description - ' .
    $json->implementation->description . '<br> URL - ' . $json->implementation->url;
// echo $result;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <title>PHP API</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron my-5 text-center">
            <h3 class="display-4">Blue-Button API call using PHP</h3>
            <p class="lead">DistilInfo Assignment - <a href="https://linkedin.com/in/ayushkr459" target="_blank" rel="noopener noreferrer">Ayush Kumar</a></p>
            <hr class="my-2">
            <p class="lead">
                <a class="btn btn-primary btn-lg" id="fetch" role="button">Fetch FHIR Data</a>
            </p>
        </div>
        <div id="result">
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> -->

    <script>
        var result = "<?php print $result; ?>"
        $(document).ready(function() {
            $("#fetch").click(function() {
                document.getElementById("result").innerHTML = result;
            });
        });

    </script>
</body>

</html>