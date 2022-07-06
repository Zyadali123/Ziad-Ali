<?php

    if(isset($_POST['submit']))
    {
        if($_POST)
        {
            $number = $_POST['num'];
            $power = $_POST['power'];

            if(is_numeric($number) && is_numeric($power))
            {
                $result = $number ** (1/$power);
            }
            else
            {
                echo "<h1> YOU should enter numbers</h1>";
                die;
            }

            
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
        <title>root number</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6 m-auto mt-5 p-5">
                    <h3 class="text-center text-success">root ntmber</h3>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="num" class="form-label">The Number</label>
                            <input type="number" name="num" class="form-control" id="num">
                        </div>
                        <div class="mb-3">
                            <label for="power" class="form-label">power</label>
                            <input type="number" name="power" class="form-control" id="power">
                        </div>
                        <button type="submit" name="submit" class="btn btn-warning">ok</button>
                    </form>      
                    <div class="alert alert-success mt-3 col-11 m-auto" role="alert">
                        root numer : <b> <?php if(isset($result)){echo $result;}?> </b> 
                    </div>
                </div>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
    </body>
</html>