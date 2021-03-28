<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="./webpage/buyagrade.css" type="text/css" rel="stylesheet" />

    <title>Data Resived</title>
</head>
<body>

<?php if( $_SERVER["REQUEST_METHOD"] != "POST" ) { ?>

    <h1>Invalid Request</h1>

<?php } else { ?>

    <div class="wrapper">
        <h1>Thanks, sucker!</h1>

        <p>Your information has been recorded.</p>

        <dl>
            <dt>Name</dt>
            <dd> <?= $_REQUEST["name"] ?> </dd>


            <dt>Section</dt>
            <dd> <?= $_REQUEST["section"] ?> </dd>

            <dt>Credit Card</dt>
            <dd> <?= $_REQUEST["creditCard"] ?>  ( <?= $_REQUEST["card"] ?> )  </dd>
        </dl>
    </div>

<?php } ?>


</body>
</html>
