<?php
// Create The Integer Array 
$sorted_numbers=array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11,12,13,14,15,16,17,18,19,20);


// check if the submit button Pressed
if(isset($_POST["submit"]))
	{
		// Give the value of the search text box for variable 
		$number = $_POST["number"];
		//loop on you array
		for ($i=0 ;$i<20 ;$i++)
		{
			// check if there are a match betwwn your text box value in the array 
			if($number == $sorted_numbers[$i])
			{
				echo "The Number ".$number." Is Exists in your Array";
				break ;
			}
		}
	
	}
	// create the sting array you can add items as much as you want at the sam way
	$unsorted_strings =array("lemon", "orange", "banana", "apple");
	// check if the sort button Pressed
	if(isset($_POST["sort"])){
		echo "UnSorted String";
		echo "<br>";
		// loop on the string array and print it unsoted
		foreach ($unsorted_strings as $key => $fruit) {
			echo  $fruit;
			echo "<br>";
	}
		sort($unsorted_strings);
		echo "<br>";
		echo "<br>";
		echo "Sorted String";
		echo "<br>";
		// loop on the string array and print it unsoted
		foreach ($unsorted_strings as $key => $val) {
			echo  $val;
			echo "<br>";
	}
	}
?>
<html>
	<head>
		<title><!-- Write Your Page Title Here --></title>
		<script src="jquery-3.5.1.min.js"></script>
		<script>
			// add your Javascript Code Here .
		</script>
		<style>
			<!--add Your Css style Here  -->
		</style>
	</head>
	<body>
	<!-- add Html Code Here -->
		<form action="index.php" method="post">
			Search :
			<input type="text" placeholder="search" name="number"/>
			<input type="submit" value = "search" name="submit"/>
			<input type="submit" value = "Sort" name="sort"/>
		</form>
	</body>	
</html>