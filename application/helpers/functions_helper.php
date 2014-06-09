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

function getCategory($lang_code, $type_id='', $category_id='',$order=''){
	$CI =& get_instance();
	
	if($order==''){
		$order = ' order by type_name, category_name';
	}
	
	$sql = "SELECT
    type_name
    , category_name
    , category_language_code
    , type_language_code
    , type_id
    , category_id
FROM
    view_type_category
	WHERE type_language_code = '".$lang_code."'
	AND category_language_code = '".$lang_code."'
	".$order."
	";
	$result = $CI->db->query($sql);
	$view_type_category['num_rows'] = $result->num_rows();
	$view_type_category['data'] = $result->result_array();
	return $view_type_category;
}
?>