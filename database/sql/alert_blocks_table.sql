ALTER TABLE `blocks`
ADD `type` varchar(255) NOT NULL DEFAULT 'html' AFTER `title`,
ADD `config` mediumtext NULL AFTER `text`;