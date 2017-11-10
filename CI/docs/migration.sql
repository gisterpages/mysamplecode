/*paste all future migrations from base */

-- 001 - abilash - add field brand

ALTER TABLE `myproducts`
ADD `brand` varchar(255) COLLATE 'latin1_swedish_ci' NULL AFTER `product_type`;

-- 002 - abilash - change varchar to datetime
ALTER TABLE `brands`
CHANGE `create_datetime` `create_datetime` datetime NULL AFTER `brandname`,
CHANGE `update_datetime` `update_datetime` datetime NULL AFTER `create_datetime`;

-- 003 - abilash - change varchar to datetime
ALTER TABLE `categories`
CHANGE `create_datetime` `create_datetime` datetime NULL AFTER `product_type`,
CHANGE `update_datetime` `update_datetime` datetime NULL AFTER `create_datetime`;

-- 004 - abilash - change manuals date and datetime fields
ALTER TABLE `manuals`
CHANGE `manual_date` `manual_date` date NULL AFTER `manual_version`,
CHANGE `create_datetime` `create_datetime` datetime NULL AFTER `document`,
CHANGE `update_datetime` `update_datetime` datetime NULL AFTER `create_datetime`;

-- 004 - abilash - added a field at myproducts table
ALTER TABLE `myproducts`
ADD `is_registered` enum('yes','no') NULL DEFAULT 'no';
ALTER TABLE `states_us`
CHANGE `state_abbr` `state_abbr` char(2) COLLATE 'utf8_general_ci' NULL AFTER `stateid`,
CHANGE `state_name` `state_name` varchar(255) COLLATE 'utf8_general_ci' NULL AFTER `state_abbr`;