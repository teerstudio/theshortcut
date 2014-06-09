-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `shortcut`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `sc_banner`
-- 

CREATE TABLE `sc_banner` (
  `banner_id` smallint(5) unsigned NOT NULL auto_increment,
  `banner_language_code` varchar(5) collate utf8_unicode_ci default NULL,
  `banner_title` varchar(255) collate utf8_unicode_ci default NULL,
  `banner_image` varchar(200) collate utf8_unicode_ci default NULL,
  `banner_url` varchar(200) collate utf8_unicode_ci default NULL,
  `banner_position` varchar(10) collate utf8_unicode_ci default NULL,
  `banner_status` tinyint(3) unsigned default NULL,
  `is_active` tinyint(3) unsigned default NULL,
  `created_date` datetime default NULL,
  `created_by` varchar(20) collate utf8_unicode_ci default NULL,
  `updated_date` datetime default NULL,
  `updated_by` varchar(20) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`banner_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `sc_category`
-- 

CREATE TABLE `sc_category` (
  `category_id` smallint(5) unsigned NOT NULL auto_increment,
  `type_id` tinyint(3) unsigned default NULL,
  `category_language_code` varchar(5) collate utf8_unicode_ci default NULL,
  `category_name` varchar(200) collate utf8_unicode_ci default NULL,
  `category_status` tinyint(3) unsigned default NULL,
  `is_active` tinyint(3) unsigned default NULL,
  `created_date` datetime default NULL,
  `created_by` varchar(20) collate utf8_unicode_ci default NULL,
  `updated_date` datetime default NULL,
  `updated_by` varchar(20) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `sc_product`
-- 

CREATE TABLE `sc_product` (
  `product_id` int(10) unsigned NOT NULL auto_increment,
  `type_id` tinyint(3) unsigned default NULL,
  `category_id` smallint(5) unsigned default NULL,
  `product_language_code` varchar(5) collate utf8_unicode_ci default NULL,
  `product_name` varchar(200) collate utf8_unicode_ci default NULL,
  `product_detail` text collate utf8_unicode_ci,
  `product_industry` smallint(5) unsigned default NULL,
  `product_brand` varchar(200) collate utf8_unicode_ci default NULL,
  `product_logo` varchar(100) collate utf8_unicode_ci default NULL,
  `product_tag` varchar(255) collate utf8_unicode_ci default NULL,
  `product_reccomend` tinyint(3) unsigned default NULL,
  `product_view` int(10) unsigned default NULL,
  `product_status` tinyint(3) unsigned default NULL,
  `is_active` tinyint(3) unsigned default NULL,
  `created_date` datetime default NULL,
  `created_by` varchar(20) collate utf8_unicode_ci default NULL,
  `updated_date` datetime default NULL,
  `updated_by` varchar(20) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `sc_product_image`
-- 

CREATE TABLE `sc_product_image` (
  `image_id` int(10) unsigned NOT NULL auto_increment,
  `product_id` int(11) default NULL,
  `image_language_code` varchar(5) collate utf8_unicode_ci default NULL,
  `image_name` varchar(200) collate utf8_unicode_ci default NULL,
  `image_file_name` varchar(200) collate utf8_unicode_ci default NULL,
  `image_status` tinyint(3) unsigned default NULL,
  `created_date` datetime default NULL,
  `created_by` varchar(20) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `sc_product_rate`
-- 

CREATE TABLE `sc_product_rate` (
  `product_rate_id` int(10) unsigned NOT NULL auto_increment,
  `product_id` int(10) unsigned default NULL,
  `pruduct_rate` tinyint(3) unsigned default NULL,
  `created_date` datetime default NULL,
  `created_by` varchar(20) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`product_rate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `sc_type`
-- 

CREATE TABLE `sc_type` (
  `type_id` tinyint(3) unsigned NOT NULL auto_increment,
  `type_language_code` varchar(5) collate utf8_unicode_ci default NULL,
  `type_name` varchar(200) collate utf8_unicode_ci default NULL,
  `type_status` tinyint(1) unsigned default NULL,
  `is_active` tinyint(1) unsigned default NULL,
  `created_date` datetime default NULL,
  `created_by` varchar(20) collate utf8_unicode_ci default NULL,
  `updated_date` datetime default NULL,
  PRIMARY KEY  (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
