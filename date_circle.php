<?php
$date_from = "2017-10-01";   
$date_from = strtotime($date_from);
  

$date_to = "2018-10-31";  
$date_to = strtotime($date_to); 
  
 
for ($i=$date_from; $i<=$date_to; $i+=86400) {  
	 
	
	$check_day  = date("d", $i);
	if($check_day == 15){		
	    	
		 $month    = date("M", $i);  
		echo '01 '.$month.'  To  '. date("jS M Y", $i).'<br />';
	    
	}
	 $month    = date("M", $i); 
	 $year     = date("Y", $i);  
	 $last_day = strtotime('last day of '.$month.'', time());
	 $last_day = date('d', $last_day); 	 
	 $day      = date('d', $i);	
	 if($last_day == $day){			
		   echo '16 '.$month.'  To '. date("jS", $last_day).' '.$month.' '.$year.'<br/>';
	} 
	 
}
/* get first and last element of a array */
$array = array(24.0,24.1,24.2,24.3,24.4,24.5,24.6);

    $first = reset($array);
    $last = end($array);

    var_dump($first, $last);
    ?>
