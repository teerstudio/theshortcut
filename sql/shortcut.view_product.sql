CREATE VIEW view_product AS
SELECT
    sc_product.product_id
    , sc_product.type_id
    , sc_product.category_id
    , sc_product_detail.product_detail_id
    , sc_product_detail.product_language_code
    , sc_product_detail.product_name
    , sc_product_detail.product_detail
    , sc_product.product_logo
    , sc_product.product_reccomend
    , sc_product.product_view
    , sc_product.product_status
    , sc_product.is_active
    , sc_product.created_date
    , sc_product.created_by
    , sc_product.updated_date
    , sc_product.updated_by
    , sc_product_detail.product_industry
    , sc_product_detail.product_brand
    , sc_product_detail.product_tag

    , sc_category.category_parent_id
    , sc_category.category_status
    , sc_category_detail.category_language_code
    , sc_category_detail.category_name

    , sc_type.type_status
    , sc_type_detail.type_language_code
    , sc_type_detail.type_name
FROM
    sc_product
    INNER JOIN sc_product_detail 
        ON (sc_product.product_id = sc_product_detail.product_id)
    INNER JOIN sc_category 
        ON (sc_category.category_id = sc_product.category_id)
    INNER JOIN sc_category_detail 
        ON (sc_category_detail.category_id = sc_category.category_id)
    INNER JOIN sc_type 
        ON (sc_type.type_id = sc_product.type_id)
    INNER JOIN sc_type_detail 
        ON (sc_type_detail.type_id = sc_type.type_id)
GROUP BY sc_product_detail.product_id
;