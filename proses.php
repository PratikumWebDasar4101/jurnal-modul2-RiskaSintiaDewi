<?php 
 $input = $_POST['input'];

$row=$input;
printPyramid(0);


	function printPyramid($k){
		global $row;
		printSpace ($row, $k);
		printStar ($row, $k);
		echo "<br>";

		if (++$k < $row)
			printPyramid($k);
	}

	function printSpace($j, $k){
		global $row;
		if ($j < $row -$k-1){
			echo "&nbsp;&nbsp;";
			printSpace($j + 1, $k);
		}
	}

	function printStar($j, $k){
		global $row;
		if ($j > $row -$k-1){
			echo "* &nbsp;";
			printStar ($j -1, $k);
		}
	}

	    for($no=1;$no<=$row;$no++)
        {
            if($no % 2 == 0)
                echo "$no";

        }

     $a=0;
     rekursif ($input);

     for ($a=1; $a <=$input ; $a++) { 
     	if ($a% 2== 0) {
     	$genap[]=$a;
     	}else{
     		$ganjil[]=$a;
     	}
     }
?>
