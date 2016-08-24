<?
$a = [1,3,8,6,5,2,9,54];
$i = 0 ;
$j = count($a)-1;
$baseNum = $a[0];



$flag = true;
while($i < $j && $j>0 && $i<5){


	if($flag){
		while ($a[$j] > $baseNum && $i < $j && $j>0) {
		$j--;
	}

  if($a[$j] < $baseNum){

	     //$temp     =  $a[$i];
	     $a[$i]  =  $a[$j];
		 //$a[$j]= $temp;
		 $i++;
		 $flag = false;
	}

	}

	if(!$flag){
	while($a[$i] < $baseNum && $i < $j && $i<5) {
		$i++;
	}
	if($a[$i] > $baseNum){
		$a[$j]  =  $a[$i];
		$j--;
		$flag = true;
	}	     
	}
	

	
	

	// if($a[$i] > $baseNum){
	//      $temp   =  $a[$i];
	//      $a[$i]  =  $a[$j];
	// 	 $a[$j]  = $temp;
	// 	 $j--;
	// }else{

	// 	$i++;
	// }

}
if($i == $j){
	     $a[$i]  =  $baseNum;
		 
}

var_dump($a);	

?>
