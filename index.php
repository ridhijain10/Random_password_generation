<?php
//error_reporting(0);
//print_r($_POST);
$a="1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&_~*";
$b= str_shuffle(str_repeat($a,100));
$c= substr($b,0,isset($_POST['num']) ? $_POST['num'] : false);
// echo "</br>"."Your Random Password is:-"."$c"."</br>";
//echo $a."</br>";
//echo strlen($c);
?>
<html>
</head>
<style type="text/css">
.form-style-1 {
	margin:10px auto;
	max-width: 90%;
    /* border: 1px solid black; */
	padding: 2px 12px 10px 20px;
	font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
	padding: 0;
	display: block;
	list-style: none;
	margin: 10px 0 0 0;
}
.form-style-1 label{
	margin:0 0 3px 0;
	padding:0px;
	display:block;
    font-size: 20px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
	background: green;
	padding: 8px 15px 8px 15px;
	border: none;
    border-radius: 5px;
	color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
	background: darkgreen;
	box-shadow:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
}
</style>
<body>
    <form method="POST">
      <ul class="form-style-1">
        <li><label>Password Range:</label></li>
        <li><input type="number" name="num" min="5" max="1000" required placeholder="enter password range between 5 to 1000" style="height:30px; width:99%; border:1px solid black;"></li>
        <li><input type="submit" value="Generate"></li>
        <li><label>your Random Password</label></li>
        <li><input type="text" name="num2"placeholder="generated password"  value="<?php echo $c; ?>" style="height:30px; width:99%; border:1px solid black;"></li>
        <li><input type="text" disabled style="height:30px; width:99%;"; value="<?php echo $a ?>"></li>
		<li><input type="text" disabled style="height:30px; width:99%;"; value="<?php echo "Generated Password Character Count :- ".strlen($c); ?>"></li>
	  </ul>
    </form>
</body>
</html>
