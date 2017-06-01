<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config = array();
$config['page_prefix'] = "page_";
$config['page_suffix'] = "";
$config['suffix'] = ".html";
$config['domain'] = "";
$config['home'] = "/";
$config['home_m'] = "/m/";
$config['channel'] = array(
	"url" => "{$config['home']}[$1]/[page_$2{$config['suffix']}]",
	"none" => "",
	"all" => false
);
$config['huddle'] = array(
	"url" => "{$config['home']}[$1]/[page_$2{$config['suffix']}]",
	"none" => "",
	"all" => false
);
$config['car'] = array(
	"url" => "{$config['home']}[$1]/[page_$2{$config['suffix']}]",
	"none" => "",
	"all" => false
);
$config['car_m'] = array(
	"url" => "{$config['home']}[$1]/[page_$2{$config['suffix']}]",
	"none" => "",
	"all" => false
);
$config['cars'] = array(
	"url" => "{$config['home']}[$1]/[$2]{$config['suffix']}",
	"none" => "",
	"all" => true
);
$config['cars_m'] = array(
	"url" => "{$config['home_m']}[$1]/[$2]{$config['suffix']}",
	"none" => "",
	"all" => true
);
$config['search'] = array(
    "url" => "{$config['home']}[$1]/[$2]/[$3]/[$4]/[$5]/[$6]{$config['suffix']}",
    "none" => "",
    "all" => true
);
$config['article'] = array(
	"url" => "{$config['home']}[$1]/[$2]{$config['suffix']}",
	"none" => "",
	"all" => true
);

$config['channel_m'] = array(
	"url" => "{$config['home_m']}[$1]/[{$config['page_prefix']}$2{$config['suffix']}]",
	"none" => "",
	"all" => false
);
$config['huddle_m'] = array(
	"url" => "{$config['home_m']}[$1]/[{$config['page_prefix']}$2{$config['suffix']}]",
	"none" => "",
	"all" => false
);
$config['article_m'] = array(
	"url" => "{$config['home_m']}[$1]/[$2]{$config['suffix']}",
	"none" => "",
	"all" => true
);
$config['oldomain'] = "";
$config['rollnews'] = array(
	"url" => "{$config['home']}roll/[page_$1{$config['suffix']}]",
	"none" => "",
	"all" => false
);
