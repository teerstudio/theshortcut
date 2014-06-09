CREATE
    /*[ALGORITHM = {UNDEFINED | MERGE | TEMPTABLE}]
    [DEFINER = { user | CURRENT_USER }]
    [SQL SECURITY { DEFINER | INVOKER }]*/
    VIEW `shortcut`.`view_type_category` 
    AS
SELECT
sc_type.type_id
    , sc_type_detail.type_language_code
    , sc_type_detail.type_name
    , sc_category.category_parent_id
    , sc_category.category_id
    , sc_category_detail.category_language_code
    , sc_category_detail.category_name
   
FROM
    shortcut.sc_type
    INNER JOIN shortcut.sc_type_detail 
        ON (sc_type.type_id = sc_type_detail.type_id)
    INNER JOIN shortcut.sc_category 
        ON (sc_type.type_id = sc_category.type_id)
    INNER JOIN shortcut.sc_category_detail 
        ON (sc_category.category_id = sc_category_detail.category_id)
WHERE (sc_type.type_status =1
    AND sc_type.is_active =1
    AND sc_category.category_status =1
    AND sc_category.is_active =1);