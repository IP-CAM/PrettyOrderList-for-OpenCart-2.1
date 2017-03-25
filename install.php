<?php 

$query = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "order_status` WHERE `field` = 'color'");

if (!$query->num_rows) {

    $this->db->query("ALTER TABLE `" . DB_PREFIX . "order_status` ADD COLUMN  `color` VARCHAR(7) NOT NULL DEFAULT '#FFFFFF' AFTER name");

?>