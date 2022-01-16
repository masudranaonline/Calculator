<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator</title>

    <style>
        .calculator {
            background-color: rgb(62,211,216);
            padding: 20px 68px 60px 68px;
            width: 300px;
            margin-left: 450px;
        }
        input[type="submit"] {
            width: 56px;
            height: 32px;
            cursor: pointer;
        }
        h1 {
            font-weight:bold;
            color:#ffffff;
        }
        input[type="number"] {
            width: 160px;
            height: 30px;
            border: 2px solid red;
            outline: none;
            border-radius: 8px;
        }
        label {
            color: #fff;
            font-weight: 600;
        }

    </style>


</head>
<body>
    <div class="calculator">
    <h1>PHP CALCULATOR</h1>
    <form action="index.php" method="post">
        
        <label for="">Fast Number</label>
        <input type="number"name="fname"><br><br>
        <label for="">Second Name</label>
        <input type="number" name="sname"><br><br>
        
        <input type="submit" name="sum" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="mul" value="*">
        <input type="submit" name="div" value="/">
        <input type="submit" name="clear" value="C">


    </form>
    <h1>Result</h1>
    <h2>
    <?php

    $a =$_POST['fname'];
    $b =$_POST['sname'];

    if(isset($_POST['sum'])){
        echo $a+$b;
    }elseif(isset($_POST['sub'])){
        echo $a-$b;
    }elseif(isset($_POST['mul'])){
        echo $a*$b;
    }elseif(isset($_POST['div'])){
        echo $a/$b;
    }elseif(isset($_POST['clear'])){
        echo 0;
    }
    ?>
    </h2>

    </div>


    
</body>
</html>