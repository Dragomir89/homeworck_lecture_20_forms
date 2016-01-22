<?php
session_start();


if($_GET){
    $_SESSION["submitCount"] = 0;
}

if($_POST){

    $_SESSION["submitCount"] ++;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Regster</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-5 col-lg-2">

            <form class="form" method="post" action="">
                <div class="form-group">
                    <label class="form-control">This form is submitted</label>
                    <input class="form-control" name="submitCount" value=" <?=$_SESSION["submitCount"]?> times">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </div>
            </form>
        </div>

    </div>

</div>

</body>
</html>
