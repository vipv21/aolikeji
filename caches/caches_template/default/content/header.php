<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>aoli-css/index.css">
    <script src="<?php echo JS_PATH;?>js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo JS_PATH;?>js/index.js"></script>
</head>
<body>
<!-- 顶部top区 -->       
    <div class="top-bigbox">
        <div class="topbox">
            <div class="topleft"><a href="<?php echo siteurl($siteid);?>"><img src="<?php echo IMG_PATH;?>aoli-img/top-1.png"></a></div>
            <div class="topright"><img src="<?php echo IMG_PATH;?>aoli-img/top-2.png"></div>
        </div>
    </div>
<!-- 导航区 -->
    <div class="nav-bigbox">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=12e68b14121d7d115119958082a0f7e2&action=category&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('limit'=>'20',));}?><!--一级栏目-->
        <div class="navbox">
            <div class="nav"><a href="<?php echo siteurl($siteid);?>">网站首页</a></div>
        <?php $n=1;if(is_array($data)) foreach($data AS $c) { ?>
            <div class="nav"><a href="<?php echo $c['url'];?>"><?php echo $c['catname'];?></a>

        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7082dbbd27434465ae9db826a11a3715&action=category&catid=%24c%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$c[catid],'limit'=>'20',));}?><!--二级栏目-->
            <?php $n=1;if(is_array($data)) foreach($data AS $d) { ?>
                <div class="navwz"><a href="<?php echo $d['url'];?>"><?php echo $d['catname'];?></a></div>
            <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>

        <?php $n++;}unset($n); ?>
        </div>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
