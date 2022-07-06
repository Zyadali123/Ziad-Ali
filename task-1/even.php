<?php
if (isset($_POST['submit'])) 
{
    if ($_POST) 
    {
        $num = $_POST['num'];
        if(is_numeric($num))
        {
            if($num % 2 == 0)
            {
                $messege = "even";
            }
            else
            {   
                $messege = "odd";
            }
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
        <title>even or ood number</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6 m-auto mt-5 p-5">
                    <h3 class="text-center text-success">even or ood number</h3>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="num" class="form-label">number</label>
                            <input type="number" name="num" class="form-control" id="num">
                        </div>
                        <button type="submit" name="submit" class="btn btn-warning">ok</button>
                    </form>      
                    <div class="alert alert-success mt-3 col-11 m-auto" role="alert">
                        the number is :  <b> <?php if(isset($messege)){echo $messege;} ?> </b>  
                    </div>
                </div>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
    </body>
</html>