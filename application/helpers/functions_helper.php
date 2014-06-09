<?
function mysql_date_format($date){
	$paid_date = explode('/', $date);
	return $paid_date[2].'-'.$paid_date[1].'-'.$paid_date[0];
}


function chkImg($p=''){
	if(!file_exists("$p")){
		return 'images/no.png';
	}else{
		return $p;
	}
}

function pa($a=''){
	if(count($a)>0){
		echo '<pre>';
		print_r($a);
		echo '</pre>';
	}else{
		echo '<pre>'.$a.'</pre>';
	}
}

function pValue($fValue,$fName=''){
	if($fValue!=''){
		if($fName!=''){
			return $fName.':'.$fValue;
		}else{
			return $fValue;
		}
	}
}
?>