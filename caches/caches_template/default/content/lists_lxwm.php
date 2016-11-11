<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>aoli-css/lxwm.css">

    <div class="zj1-bigbox">
        <div class="zj1-box">
            <div class="zj1-one">
                <div class="zj1-two">
                    <div class="zj1-two-1">关于我们 &nbsp;&nbsp;&nbsp;&nbsp;About</div>

                    <div class="zj1-right-fourwz"><span>西安傲立科技发展有限公司</span> <br/>地址：西安市高新区新型工业园硕士路38号傲立大厦<br/>电话：400-715-0715<br/>网址：<a href="<?php echo siteurl($siteid);?>">www.xaonly.com</a></div>

                </div>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9278178412da15a5ec005a30377603c0&action=lists&catid=12&order=listorder+ASC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'12','order'=>'listorder ASC','limit'=>'5',));}?> 
                <div class="zj1-three">
                    <div class="zj1-three-1">最新资讯 &nbsp;&nbsp;&nbsp;&nbsp;New</div>
                <?php $n=1;if(is_array($data)) foreach($data AS $j) { ?>
                    <div class="zj1-three-2" style="margin-top:10px"><?php echo date("Y-m-d $inputtime");?><br/><a href="<?php echo $j['url'];?>"><?php echo str_cut($j['title'],40,"");?></a></div>
                <?php $n++;}unset($n); ?>
                </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div class="zj1-four">
                    <div class="zj1-four-1"><img src="<?php echo IMG_PATH;?>aoli-img/1/zj1-5.png"></div>
                    <div class="zj1-four-2"><input type="text" value="请输入关键词"><span><a href="">搜索</a></span></div>
                </div>
            </div>

            <div class="zj1-five">
                <div class="zj1-six"><img src="<?php echo IMG_PATH;?>aoli-img/1/zj1-6.png">
                    <div class="zj1-sixwz">你的位置：<a href="">首页 > 关于我们</a></div>
                </div>
 
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8880c3b33dc2d8fabd37faa718a1c33b&action=lists&catid=27&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'27','moreinfo'=>'1','limit'=>'20',));}?> 
            <div class="zj1-mid-three">
                <?php $n=1;if(is_array($data)) foreach($data AS $b) { ?>
                    <?php echo $b['content'];?>
                <?php $n++;}unset($n); ?>
            
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </div>
        </div>
    </div>

<?php include template("content","footer"); ?>