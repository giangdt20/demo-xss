<!DOCTYPE html>
<html>
<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['pass'])) {
  header("Location: login.php");
}
$searchVal = isset($_GET['search']) ? $_GET['search'] : "";
$searchVal = str_replace("'", "[remove]", $searchVal);
//$searchVal = str_replace('"', "[remove]", $searchVal);
$searchVal = str_replace("document.cookie", "[remove]", $searchVal);
$searchVal = str_replace("+", "[remove]", $searchVal);
$searchVal = str_replace("<", "[remove]", $searchVal);
$searchVal = str_replace(">", "[remove]", $searchVal);
$searchVal = strip_tags($searchVal);
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {
        font-family: Arial;
    }

    * {
        box-sizing: border-box;
    }

    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
    }

    form.example button {
        float: left;
        width: 20%;
        padding: 10px;
        background: #2196F3;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        cursor: pointer;
    }

    form.example button:hover {
        background: #0b7dda;
    }

    form.example::after {
        content: "";
        clear: both;
        display: table;
    }
    </style>
</head>

<body>

    <h2>Giang demo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="logout.php"><button>logout</button></a></span></h2>
    <p>Xin chao Tr.Giang</p>
    <p>Gmail: giang@gmail.com</p>
    <p>Sdt: 012342349234</p>



    <form class="example" action="" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="search" value="<?php echo $searchVal ?>">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>

</body>

</html>