<?php
require_once '../../require.php';
require_once CLASS_EX_REALDIR . 'page_extends/mypage/LC_Page_Mypage_Pkg_Notice_Ex.php';

$objPage = new LC_Page_Mypage_Pkg_Notice_Ex();
$objPage->init();
$objPage->process();
