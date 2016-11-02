ALTER TABLE `tbl_cms`
ADD COLUMN `display_order`  int(11) NOT NULL DEFAULT 0 AFTER `modified_date`;

ALTER TABLE `tbl_news`
ADD COLUMN `display_order`  int(11) NOT NULL DEFAULT 0 AFTER `status`;

