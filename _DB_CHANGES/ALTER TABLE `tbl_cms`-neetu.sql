ALTER TABLE `tbl_cms`
DROP COLUMN `type`,
DROP COLUMN `authors`,
DROP COLUMN `category_id`,
DROP COLUMN `footer_status`;

ALTER TABLE `tbl_cms`
ADD COLUMN `added_date`  datetime NULL AFTER `del_flag`,
ADD COLUMN `modified_date`  datetime NULL AFTER `added_date`;

ALTER TABLE `tbl_cms`
DROP COLUMN `page_title`;





