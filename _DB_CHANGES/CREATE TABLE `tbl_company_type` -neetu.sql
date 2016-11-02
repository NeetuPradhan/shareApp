CREATE TABLE `tbl_company_type` (
`id`  int NOT NULL AUTO_INCREMENT ,
`type`  char(10) NULL DEFAULT '' COMMENT '0-Banks,1-Development Banks,2-FInance,3-Mutual Funds' ,
`added_date`  datetime NULL ,
`updated_date`  datetime NULL ,
`status`  int(1) NULL ,
PRIMARY KEY (`id`)
)
;

ALTER TABLE `tbl_company_type`
MODIFY COLUMN `type`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL AFTER `id`;

ALTER TABLE `tbl_company_type`
MODIFY COLUMN `status`  int(1) NOT NULL AFTER `updated_date`,
ADD COLUMN `display_order`  int(11) NOT NULL DEFAULT 0 AFTER `status`;





