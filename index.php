<?php include("include/header.php");?>
<br />
<div class="row center">
    <div clas="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
        <?php
            echo "<p class=\"error\">$_GET[error]</p>";
        ?>
    </div>
</div>
<br />
<form action="coincount.php" method="post">
    <span class="error"><?php echo $typeError ?></span>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 right">
            Your name: <span class="error">*</span><br /><br />
            Pennies (1 &cent;):<br /><br />
            Nickels (5 &cent;):<br /><br />
            Dimes (10 &cent;):<br /><br />
            Quarters (25 &cent;):<br /><br />
            1 Dollar Coins:<br /><br />
            2 Dollar Coins:<br /><br />
        </div>

        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 ">
            <input type="text" name="name" size="30" required class="textarea"/><br /><br />
            <input type="text" name="pennies" size="6" class="textarea" /><br /><br />
            <input type="text" name="nickels" size="6" class="textarea" /><br /><br />
            <input type="text" name="dimes" size="6" class="textarea" /><br /><br />
            <input type="text" name="quarters" size="6" class="textarea" /><br /><br />
            <input type="text" name="dollar" size="6" class="textarea" /><br /><br />
            <input type="text" name="twodollar" size="6" class="textarea" /><br />
        </div>
    </div>
    <div class="row">
    	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 ">
          <input type="submit" name="submit" value="Calculate Coins" class="myButton"/>
          <input type="reset" name="reset" value="Clear form" class="myButton" />
        </div>
    </div>
 
</form>
<?php include("include/footer.php"); ?>
