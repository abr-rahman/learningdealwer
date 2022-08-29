<?php 
	$x = 5;
	$y = 2;
	echo $x + $y;


	//Comparison Operators
	$x =100;
	$y = '100';
	var_dump ($x === $y);

	$x =100;
	$y = 100;
	var_dump ($x === $y);

	$x = 100;
	$y = 1000;
	var_dump($x !== $y);



		
	// Increment/Decrement Operators
	$x = 5;
	echo $x++;
	echo $x;
	echo "</br>";





	// Arry Operators

	$xx = array(
		"a" => "Bhola",
		"d" => "Barishal"
	);

	$yy = array(
		"c" => "Dhaka",
		"d" => "Bangladesh"
	);
	var_dump($xx == $yy);

																		echo "</br>";






	// if else Statements

	$x = 10;

	if($x > 15){
		echo "Traning with live";
	}
	elseif($x > 11){
		echo "wrong";
	}elseif($x > 13){
		echo "small number";
	}else{
		echo "Please show your right answer";
	}

																echo "</br>";






	// switch statement

	$coding = "java";

	switch($coding){
		case "html":
			echo "I love html";
		break;
		
		case "css":
			echo "I love css";
		break;
		
		case "php":
			echo "I love js";
		break;
		
		default:
		echo "You are case java is not Matching";
	}

																echo "</br>";



	// Loops for while do while

		for($x = 0; $x < 5; $x++){
			echo "Abdur Rahman" . "<br>";
		}


		$ss = 1;
		while($ss <= 3){
			echo "This is while Loop" . "<br>";
			$ss++;
		}

		$aa = 1;
		do{
			echo "This is do while" . "<br>";
			$aa++;
		}while($aa <= 4 );





		// foreach statement

		$colors = array("blue ", "green ", "yellow ", "brown");

		foreach($colors as $color){
			echo "$color </br>";
		}
	



	function school($fname, $lname){
		echo "$fname  Madrasah  $lname";
	}
	school("Uttir Ratanpur Dhakil", "  1998" );
	school("PKI Alim", "  1996". "<br>");




	function sums($numb, $lnumb){
		$result = $numb + $lnumb;
		echo $result;
	}
	//echo 'sum Result = ' . sums(10,4);
	sums(10,4);							 echo "</br>";




	// php array for loop

	$ax = array(30 ,5, 50, 2, 6);
	echo ($ax[3]);
	echo ($ax[2]); 						echo "</br>";

	$leng = count($ax);

	for($i = 0; $i < $leng; $i++){
		echo $ax[$i];
		echo "</br>";
	}




	// array for foreach loop

	$age = array("Karim"=>"25", "Rahim"=>"20", "Mamun"=>"21");

	foreach($age as $name => $value){
		echo "Name : " . $name . ",  Age : " . $value;
		echo "<br>";
	}


	// Multy diamantional array

	$cars = array(
		array("B M W", "marcitys"),
		array("volbo", "croma"),
		array("toyota", "white"
			// array("blue", "white")
		)

	);

	echo $cars[0][0];        echo "<br>";
	echo $cars[2][0];        echo "<br>";
	echo $cars[2][1][0];     echo "<br>";


	for($row = 0; $row < 3; $row++){
		echo "<p> Row Number : </P>";
		echo "<ul>";
			for($col =0; $col < 2; $col++){
				echo "<li>". $cars[$row][$col] ."</li>";
			}
		echo "</ul>";
	}


	// array sireal maintain

	$age = array("Karim"=>"25", "Rahim"=>"20", "Mamun"=>"21");
	ksort($age);  		// INPORTANT KEYWORD

	foreach($age as $name => $value){
		echo "Name : " . $name . ",  Age : " . $value;
		echo "<br>";
	}
	echo "<br>";

	$age = array("Karim"=>"25", "Rahim"=>"20", "Mamun"=>"21");
	sort($age);  		// INPORTANT KEYWORD

	foreach($age as $name => $value){
		echo "Name : " . $name . ",  Age : " . $value;
		echo "<br>";
	}
	echo "<br>";

	$age = array("Karim"=>"25", "Rahim"=>"20", "Mamun"=>"21");
	asort($age);  		// INPORTANT KEYWORD

	foreach($age as $name => $value){
		echo "Name : " . $name . ",  Age : " . $value;
		echo "<br>";
	}




	// Global & super global var

	$x = 10;
	$y = 5;

	function result(){			//  global VAR
		global $x;
		$a = 5;
		echo $a;											echo "<br>";
		echo 'test function global var ' . $x;						echo "<br>";
	}
	result();



	// Global & super

	function sum(){			// super global VAR
		$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	}
	sum();
	echo $z;


	// location / file location / etc. cheked

	echo $_SERVER['PHP_SELF'];
														echo "<br>";
	echo $_SERVER['SERVER_NAME'];		// SERVER PATH
														echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];   		 // FULL PATH
														echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];    // BROWSER NAME
														echo "<br>";
	echo $_SERVER['SERVER_ADDR'];   	 // SERVER IP ADDRESS 


	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_REQUEST['username'];
		 if(empty($name)){
			 echo "<span style='color:red'> Please Enter Your Username !! </span>";
		 }else{
			 echo "<span style='color:green'> You Have Submitted : ".$name."</span>";
		 }
	 }

		echo "<br>";


		// time and date for php

		echo "Taday is " . date("d.m.Y") ."<br>";	
		echo "Taday is " . date("l") ."<br>";	
	    echo "Default Taday is " . date("h:i:sa") ."<br>";
		
		date_default_timezone_set('Asia/Dhaka');
		echo "Bangladesh Taday is " . date("h:i:sa") ."<br>";	

		echo date_default_timezone_get()."<br>";	


	 	// others file loaded & leter counting
		  
		 $ourfile = fopen("new.txt","r") or die("File not found !!");
		 echo fread($ourfile,filesize("new.txt"));
		 fclose($ourfile);
		 //echo readfile("new.txt");


		 
		 $ourfile = fopen("new.txt","r") or die("File not found !!");
		 
		 while(!feof($ourfile)){
			echo fgets($ourfile).'<br>';  // fgetc
		 }

		 fclose($ourfile);


		 // new file and new text create

		 $createfile = fopen("newfile.txt", "w") or die("File not found !!");
		 $one = "Abdur Rahman";
		 fwrite($createfile, $one);

		 fclose($createfile);










	 



?>