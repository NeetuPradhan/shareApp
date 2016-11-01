CREATE TABLE `tbl_news` (
`id`  int NOT NULL AUTO_INCREMENT ,
`title`  varchar(255) NULL ,
`description`  varchar(255) NULL ,
`added_date`  datetime NULL ,
`updated_date`  datetime NULL ,
`del_flag`  int(11) NULL ,
`status`  int(1) NULL ,
PRIMARY KEY (`id`)
)
;

ALTER TABLE `tbl_news`
MODIFY COLUMN `del_flag`  int(11) NULL DEFAULT 0 AFTER `updated_date`;



