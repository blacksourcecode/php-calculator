<?php

/*
*
* This is a simpel php oop calculator, hope it will be
* of use, enjoy and happy coding. 
*
*/

require_once 'calculator.php';

$cal = new Calculator();

$cal->run();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">

    <style>

    body{

        background-color: #222;
    }

    .max-960{
        max-width: 960px;
        margin: 0 auto;
    }
    .container{
        margin-top: 70px;
    }
    </style>
</head>
<body>
<div class="container max-960">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                <div class="panel-heading"><h3>Calculation = <?php echo $cal->sum();?></h3></div>
                    <form action="" method="post" role="form">
                      <div class="form-group">
                        <label for="val1">Value 1</label>
                        <input type="number"  name="val1" class="form-control" placeholder=" Enter number">
                      </div>
                         <select class="form-control" name="operator">
                            <?php $cal->get_Operator(); ?>
                        </select>
                      <div class="form-group">
                        <label for="val2">Value 2</label>
                        <input type="number"  name="val2" class="form-control" placeholder=" Enter number">
                      </div>
                      <button type="submit" name="calculate" value="Calculate" class="btn btn-success">Calculate</button>
                    </form>
                </div>
            </div>
        </div>    
    </div>
</div> 
</body>
</html>
