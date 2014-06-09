<section id="software-advise-container">
  <div class="outer-container">
    <div id="software-advise">
    
    
      <div class="box">
        <div class="ribbon-title-container"><!--RIBBON-->
          <div class="ribbon-title">ซอฟต์แวร์มาใหม่</div>
        </div>
        <div class="ribbon-more-container">
          <div class="ribbon-more"><a href="">ดูทั้งหมด >></a></div>
        </div><!--END RIBBON-->

        <div class="line-top"></div>
        <div class="clearfix">
<?php
$sqlProducts="SELECT product_id,product_logo,product_name,product_detail FROM view_product ORDER BY created_date DESC LIMIT 4;";
$query = $this->db->query($sqlProducts);
	foreach ($query->result() as $row){
		$pLogo_old = 'products/'.$row->product_id.'/m/'.$row->product_logo;
		$pLogo = chkImg($pLogo_old);
		$proDetail = trim(strip_tags(stripslashes(str_replace("\n","",strip_tags($row->product_detail)))),'&nbsp;');
		//$proDetail = substr($proDetail,0,200);
		$proDetail = mb_substr($proDetail, 0, 200, 'UTF-8');
?>
          <div class="box-inside">
          <img style="background:url(<?php echo $pLogo?>) no-repeat center center;background-size:contain" src="<?=base_url('images')?>/temp.png"> 
           <div class="txt">
            <p><a href="" class="PCHeaderText"><?php echo $row->product_name?></a></p>
            <p class="PCDetailText"><?php echo $proDetail;?></p>
          </div>
          </div>
<?php
	}
?>
        </div>
      </div>

    
      <div class="box">
        <div class="ribbon-title-container"><!--RIBBON-->
          <div class="ribbon-title">ซอฟต์แวร์แนะนำ</div>
        </div>
        <div class="ribbon-more-container">
          <div class="ribbon-more"><a href="">ดูทั้งหมด >></a></div>
        </div><!--END RIBBON-->

        <div class="line-top"></div>
        <div class="clearfix">
<?php
$sqlProducts="SELECT product_id,product_logo,product_name,product_detail FROM view_product WHERE product_reccomend=1 ORDER BY created_date DESC LIMIT 4;";
$query = $this->db->query($sqlProducts);
	foreach ($query->result() as $row){
		$pLogo_old = 'products/'.$row->product_id.'/m/'.$row->product_logo;
		$pLogo = chkImg($pLogo_old);
		$proDetail = trim(strip_tags(stripslashes(str_replace("\n","",strip_tags($row->product_detail)))),'&nbsp;');
		//$proDetail = substr($proDetail,0,200);
		$proDetail = mb_substr($proDetail, 0, 200, 'UTF-8');
?>
          <div class="box-inside">
          <img style="background:url(<?php echo $pLogo?>) no-repeat center center;background-size:contain" src="<?=base_url('images')?>/temp.png"> 
           <div class="txt">
            <p><a href="" class="PCHeaderText"><?php echo $row->product_name?></a></p>
            <p class="PCDetailText"><?php echo $proDetail;?></p>
          </div>
          </div>
<?php
	}
?>
        </div>
      </div>



    </div>
  </div>
</section>
