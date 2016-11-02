ALTER TABLE `tbl_banner`
ADD COLUMN `display_order`  int4 NOT NULL DEFAULT 0 AFTER `updated_date`;

