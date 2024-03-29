<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2018 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

// Module general information
$module_title = "TS3Admin";
$module_version = "0.2";
$db_version = 3;
$module_required = TRUE;
$module_menus = array( array( 'subpage' => '', 'name'=>'ts3admin', 'group'=>'user' ) );
$install_queries = array();
$install_queries[0] = array(
"DROP TABLE IF EXISTS `".OGP_DB_PREFIX."ts3_homes`;",
"CREATE TABLE IF NOT EXISTS `".OGP_DB_PREFIX."ts3_homes`
  (`ts3_id` int(50) NOT NULL auto_increment,
  `rserver_id` int(50) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  `vserver_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  PRIMARY KEY (`ts3_id`),
UNIQUE KEY user_id (user_id,vserver_id)) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;");
$install_queries[1] = array(
"ALTER TABLE `".OGP_DB_PREFIX."ts3_homes` DROP INDEX `user_id` ,
 ADD UNIQUE `rserver_id` ( `rserver_id` , `vserver_id` , `user_id` );");
$install_queries[2] = array(
"ALTER TABLE `".OGP_DB_PREFIX."ts3_homes` ADD `port` int(11) DEFAULT '10011'"
);
$install_queries[3] = array(
"ALTER TABLE `".OGP_DB_PREFIX."ts3_homes` MODIFY `ip` varchar(45);"
);
?>
