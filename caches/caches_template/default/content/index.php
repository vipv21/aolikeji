<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!-- banner区 -->
<div class="banner-bigbox">
    <div class="banner-box">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cc9ec5e28de20f7a78691c21208f7dca&action=position&posid=1&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','limit'=>'20',));}?>
        <div class="banner-cbox">
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <div class="banner"><a href=""><img src="<?php echo IMG_PATH;?>aoli-img/banner-1.jpg"></a></div>
        <?php $n++;}unset($n); ?>
        </div>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<!--         <div class="banner-btnbox">
            <div class="banner-btn"></div>
            <div class="banner-btn"></div>
            <div class="banner-btn"></div>
        </div> -->
    </div>
</div>
<!-- 中间一区 -->
<div class="zj1-bigbox">
    <div class="zj1-box">
        <div class="zj1-leftbox">
            <div class="zj1-left-one"><img src="<?php echo IMG_PATH;?>aoli-img/zj1-1.png"></div>
            <div class="zj1-left-two"><a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=lists&catid=10"><img src="<?php echo IMG_PATH;?>aoli-img/zj1-2.png"></a></div>
            <div class="zj1-left-three">
                <div class="zj1-left-four"><img src="<?php echo IMG_PATH;?>aoli-img/zj1-3.png"></div>
                <div class="zj1-left-fourwz">&nbsp;&nbsp;&nbsp;&nbsp;公司简介： ■西安傲立科技发展有限公司，简称“傲立科技”，成立于2001年5月，是一家致力于应用IT技术、结合 互联网优 势，推动... <a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=lists&catid=10">详细>></a></div>
            </div>
        </div>
        <div class="zj1-midbox">
            <div class="zj1-mid-one"><img src="<?php echo IMG_PATH;?>aoli-img/zj1-4.png" alt=""></div>
            <div class="zj1-mid-two"><img src="<?php echo IMG_PATH;?>aoli-img/zj1-5.png" alt=""></div>

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=28d99ef837d4599d3484b660efcd2bdf&action=position&posid=2&order=listorder+ASC&num=9\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder ASC','limit'=>'9',));}?> 
            <div class="zj1-mid-three">
                <ul class="zj1-mid-four">
                <?php $n=1;if(is_array($data)) foreach($data AS $b) { ?>
                    <li><a href="<?php echo $b['url'];?>"><?php echo $b['title'];?></a><span><?php echo date("Y-m-d $inputtime");?></span></li>

                <?php $n++;}unset($n); ?>
                </ul>
            </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     
        </div>
        <div class="zj1-rightbox">
            <div class="zj1-right-one"><img src="<?php echo IMG_PATH;?>aoli-img/zj1-6.png"></div>
            <div class="zj1-right-two"><img src="<?php echo IMG_PATH;?>aoli-img/zj1-7.png"></div>
            <div class="zj1-right-three">
                <div class="zj1-right-four"><img src="<?php echo IMG_PATH;?>aoli-img/zj1-8.png"></div>
                <div class="zj1-right-fourwz">西安傲立科技发展有限公司<p>地址：西安市高新区新型工业园硕士路38号傲立大厦<p>电话：400-715-0715<p>网址：<a href="<?php echo siteurl($siteid);?>">www.xaonly.com</a></div>
            </div>
        </div>
    </div>
</div>
<!-- 中间二区 -->
<div class="zj2-bigbox">
    <div class="zj2-box">
        <div class="zj2-one"><img src="<?php echo IMG_PATH;?>aoli-img/zj2-1.png" ></div>
        <div class="zj2-two"><img src="<?php echo IMG_PATH;?>aoli-img/zj2-2.png" ></div>
        <div class="zj2-three">
            <div class="zj2-three-left">
                <div class="zj2-three-left1"><a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=lists&catid=11">TFi系列产品</a></div>
            </div>
            <div class="zj2-three-right">
                <div class="zj2-four"><a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=show&catid=17&id=2"><img src="<?php echo IMG_PATH;?>aoli-img/zj2-3.png"></a></div>
                <div class="zj2-four"><a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=show&catid=17&id=3"><img src="<?php echo IMG_PATH;?>aoli-img/zj2-4.png"></a></div>
                <div class="zj2-four"><a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=show&catid=17&id=4"><img src="<?php echo IMG_PATH;?>aoli-img/zj2-5.png"></a></div>
                <div class="zj2-four"><a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=show&catid=17&id=5"><img src="<?php echo IMG_PATH;?>aoli-img/zj2-6.png"></a></div>
            </div>
        </div>
    </div>
</div>

<!-- 底部区 -->
<div class="dibu-bigbox">
    <div class="dibu-box">
        <div class="dibu-wz"> 友情链接：<a href="">中国移动通信集团陕西有限公司</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">交通银行</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">中国人保财险</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Mobile Market应用商场</a> </div>
    </div>
</div>



<?php include template("content","footer"); ?>