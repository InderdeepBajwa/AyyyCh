<?php require __DIR__.'./sidebar.php' ?>
<?php require __DIR__.'../../dbase/dbfunctions.php' ?>
<?php

    // sidebar


    // Session start
    #if(isset($_SESSION['UserToken'])) {
        // TODO: Send user to somehwere
    #    header("Location: /jig/admin/");
    #}
?>
<style>
input[type=number], select {
	text-align: center;
}
input[type=button], select {
	background-color: #079992;
}
</style>
<body background="/Jig/img/stripes-light.png" id = "myimg">

<div id = "main">
	<?php

	if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $sum =  $number1-$number2;     
		echo "<h2 align='center'>Your net income amount is: $sum$</h2>";   
	}  
	?>
	<div id = "mInput", style="width:500px; margin-top: 10%; margin-left:40%; margin-right:auto; font-size: 150%">  
		<form method="post">  
			Enter Gross Income:   
			<input type="number" name="number1" class = "num1"/><br><br>  
			Enter Amount for 401K:  
			<input type="number" name="number2" class = "num2"/><br><br>  
			<div id = "mCalc" style="margin-left:1%;">
				<input type="submit" style="background-color: #079992; border: none;
    				color: white;
    				font-size: 150%;
    				padding: 12px 12px;
    				border-radius: 12px;"name="submit" value="Calculate Net Income"> 
			</div> 
		</form>  
	</div>
</div>
