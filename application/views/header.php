<?php
$lang_code = 'th';
$category = getCategory($lang_code);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?=$title?></title>

<!--CSS-->
<link type="text/css" rel="stylesheet" href="<?=base_url('css')?>/reset.css">
<link type="text/css" rel="stylesheet" href="<?=base_url('css')?>/master.css">
<?=$css_url?>

<!--JAVASCRIPT-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
</head>

<body>
<section id="header-container">
<div class="outer-container">
  <div id="header" class="clearfix">
    <div id="logo">THE SHORTCUT <i><strong>2014</strong></i></div>
    <div id="search">
    
      <div id="category-search-container">
          <div id="category-search" style="display:none;">
          <?php
		  	$current_type = '';
		  	 for($i=0; $i<$category['num_rows'];$i++){
				 if($current_type != $category['data'][$i]['type_name']){
					 $current_type = $category['data'][$i]['type_name'];
					 echo '<ul class="menu-category-column">
          <li><h3>'.$current_type.'</h3>
           <ul class="category-sub-menu">'; }
		    $cat_name = $category['data'][$i]['category_name'];
               echo '<li>'.$cat_name.'</li>';
		 if($current_type != $category['data'][$i]['type_name']){
			 $current_type = $category['data'][$i]['type_name'];
            echo '</ul>
          </li>
        </ul>';
		 }
					 
				
			 }
		  ?>
          </div>
        </div>
        
      <input name="" type="text" id="search-input">
      <div id="category-list"></div>
      <button class="btn btn-search btn-search-a"> <img src="<?=base_url('images')?>/magnifier.png" align="absmiddle"> ค้นหา </button>
      <p>ค้นหาละเอียด</p>
    </div>
  </div>
 </div>
 </section>
  <nav id="nav-container">
  <div class="outer-container">
  <div id="nav">
 <ul>                      
            <li><a href="index.php">หน้าแรก</a></li>
            <li><a href="index.php">ข่าวสาร</a></li>
              <li><a href="index.php">รายชื้อกิจการ</a></li>
                <li><a href="index.php">สมัครเข้าโครงการ</a></li>
                  <li><a href="index.php">หลักสูตร</a></li>
                    <li><a href="index.php">เกี่ยวกับเรา</a></li>
                      <li><a href="index.php">ติดต่อเรา</a></li>
                      
            </ul>
            <div style="float:right;" class="clearfix">
            <button class="btn btn-login btn-login-a"> เข้าระบบ </button>
             <button class="btn btn-register btn-register-a"> Register </button>
          </div></div>
          </div>
  </nav>
