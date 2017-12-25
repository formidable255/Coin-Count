<?php 
    if(empty($_POST["pennies"])){
        $_POST["pennies"] = 0;;
    }else if(false == is_numeric($_POST["pennies"])){
        header("Location: index.php?error=Please enter a numeric penny value.");
    }
    if(empty($_POST["nickels"])){
        $_POST["nickels"] = 0;;
    }else if(false == is_numeric($_POST["nickels"])){
        header("Location: index.php?error=Please enter a numeric nickel value.");
    }
    if(empty($_POST["dimes"])){
        $_POST["dimes"] = 0;;
    }else if(false == is_numeric($_POST["dimes"])){
        header("Location: index.php?error=Please enter a numeric dime value.");
    }
    if(empty($_POST["quarters"])){
        $_POST["quarters"] = 0;;
    }else if(false == is_numeric($_POST["quarters"])){
        header("Location: index.php?error=Please enter a numeric quarter value.");
    }
    if(empty($_POST["dollar"])){
        $_POST["dollar"] = 0;;
    }else if(false == is_numeric($_POST["dollar"])){
        header("Location: index.php?error=Please enter a numeric dollar value.");
    }
    if(empty($_POST["twodollar"])){
        $_POST["twodollar"] = 0;;
    }else if(false == is_numeric($_POST["twodollar"])){
        header("Location: index.php?error=Please enter a numeric two dollar value.");
    }
?>
<?php include("include/header2.php"); ?>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
        <h2 class="head center">Coin Count</h2>
        <h4 class="head center">The following coins were counted and valued</h4>
    </div>
</div>
<br />
<br />
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
        <p>Pennies:</p>
        <p>Dimes:</p>
        <p>Loonies:<p>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">   
        <P><?PHP ECHO $_POST["pennies"]?></P>
        <p><?php echo $_POST["dimes"]; ?></p>
        <p><?php echo $_POST["dollar"]; ?></p>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <p>Nickels:<br /></p>
        <p>Quarters:<br /></p>
        <p>Twoonies:<br /></p>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <p><?php echo $_POST["nickels"]; ?></p>
        <p><?php echo $_POST["quarters"]; ?></p>
        <p><?php echo $_POST["twodollar"]; ?></p>
    </div>
</div>
<br />
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p id="result"><?php echo $_POST["name"];?>, you therefore have:</p>
    </div>
</div>
<?php
    extract($_POST);
    //$pennies = $nickels = $dimes = $quarters = $dollar = $twodollar = "";
    //$typeError = "123";
    if (!is_numeric($pennies)){
        $typeError = "You must enter a number for pennies";
    }
    $pennies = $_POST["pennies"];
    $nickels = $_POST["nickels"] * 5;
    $dimes = $_POST["dimes"] * 10;
    $quarters = $_POST["quarters"] * 25;
    $dollars = $_POST["dollar"] * 100;
    $twoDollar = $_POST["twodollar"] * 200;
    $totalCent = "<p>Total Cents" + ($pennies + $nickels + $dimes + $quarters + $dollars + $twoDollar);
    $totalDollar = "<p>Total Dollars" + (($pennies + $nickels + $dimes + $quarters + $dollars + $twoDollar) / 100);
?>
<div class="row">
    <div class="col-lg-3 col-md-cs col-sm-3 col-xs-3">
        <p>Total Cents:</p>
    </div>
    <div class="col-lg-3 col-md-cs col-sm-3 col-xs-3">
        <p><?php echo $totalCent ?></p>
    </div>
    <div class="col-lg-3 col-md-cs col-sm-3 col-xs-3">
        <p>Total Dollars:</p>
    </div>
    <div class="col-lg-3 col-md-cs col-sm-3 col-xs-3">
        <p><?php echo $totalDollar ?></p>
    </div>
</div>
<br />
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <a href="index.php" class=" btn myButton">Home Page</a>
    </div>
</div>
<?php include("include/footer.php")?>







