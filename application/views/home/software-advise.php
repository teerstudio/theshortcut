<section id="software-advise-container">
  <div class="outer-container">
    <div id="software-advise">
    
    
      <div class="box">
      <!--RIBBON-->
        <div class="ribbon-title-container">
          <div class="ribbon-title">ซอฟต์แวร์มาใหม่</div>
        </div>
        <div class="ribbon-more-container">
          <div class="ribbon-more"><a href="">ดูทั้งหมด >></a></div>
        </div>
        <!--END RIBBON-->
        
        <div class="line-top"></div>
        <div class="clearfix">

<?php
/*
$sqlProducts="SELECT
    sc_product.product_id
    , sc_product_detail.product_language_code
    , sc_product_detail.product_name
    , sc_product_detail.product_detail
    , sc_product_detail.product_industry
    , sc_product_detail.product_brand
    , sc_product_detail.product_tag
    , sc_product.type_id
    , sc_product.category_id
    , sc_product.product_logo
    , sc_product.product_reccomend
    , sc_product.product_view
    , sc_product.product_status
    , sc_product.is_active
    , sc_product.created_date
    , sc_product.created_by
    , sc_product.updated_date
    , sc_product.updated_by
FROM
    sc_product
    INNER JOIN sc_product_detail 
        ON (sc_product.product_id = sc_product_detail.product_id);";
*/
$sqlProducts="SELECT
    sc_product.product_id
    , sc_product_detail.product_language_code
    , sc_product_detail.product_name
    , sc_product_detail.product_detail
    , sc_product_detail.product_industry
    , sc_product_detail.product_brand
    , sc_product_detail.product_tag
    , sc_product.type_id
    , sc_product.category_id
    , sc_product.product_logo
    , sc_product.product_reccomend
    , sc_product.product_view
    , sc_product.product_status
    , sc_product.is_active
    , sc_product.created_date
    , sc_product.created_by
    , sc_product.updated_date
    , sc_product.updated_by
FROM
    sc_product
    INNER JOIN sc_product_detail 
        ON (sc_product.product_id = sc_product_detail.product_id) ORDER BY created_date DESC LIMIT 4;";
$query = $this->db->query($sqlProducts);

//$row = $query->row_array();
$row = $query->result();
//echo '<pre>';
//print_r($row);
//echo '</pre>';
?>

          <div class="box-inside"> <img src="<?=base_url('images')?>/temp.png"> 
           <div class="txt">
            <p><a href="">โปรแกรมบริหารการผลิต (Manufacturing)</a></p>
            <p>26-28, 2013 10.00-20.00 hrs. 
              Queen Sirikit National Convention Center</p>
          </div>
          </div>


        </div>
      </div>


    </div>
  </div>
</section>
