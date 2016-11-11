<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>aoli-css/dongtai.css">

    <div class="zj1-bigbox">
        <div class="zj1-box">
            <div class="zj1-one">
                <div class="zj1-two">
                    <div class="zj1-two-1">公司动态 &nbsp;&nbsp;&nbsp;&nbsp;Case</div>
                        <div class="zj1-two-2" style="margin-top:9px;"><img src="<?php echo IMG_PATH;?>aoli-img/1/zj1-3.png">
                            <div class="zj1-two-3"><a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=lists&catid=21">售后服务</a></div>
                        </div>
                        <div class="zj1-two-2"><img src="<?php echo IMG_PATH;?>aoli-img/1/zj1-3.png">
                            <div class="zj1-two-3"><a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=lists&catid=22">下载中心</a></div>
                        </div>
                      
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
                    <div class="zj1-sixwz">你的位置：<a href="">首页</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="">公司动态</a></div>
                </div>

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b22daa444c205ca0a177a3826bbc787f&action=lists&catid=22&order=listorder+ASC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'22','order'=>'listorder ASC','limit'=>'2',));}?> 
            <div class="zj1-mid-three">
                <ul class="zj1-mid-four">
                <?php $n=1;if(is_array($data)) foreach($data AS $b) { ?>
                    <li><a href="<?php echo $b['url'];?>"><?php echo $b['title'];?></a><span><?php echo date("Y-m-d $inputtime");?></span></li>

                <?php $n++;}unset($n); ?>
                </ul>
            
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


                <div class="zj1-fy">
                    <div class="zj1-fywz">总数2条  当前页数：1/1 <a href="">首页</a>   上一页 <a href="">1</a>下一页  <a href="">尾页</a> </div>
                </div>

            </div>
            </div>
        </div>
    </div>

<?php include template("content","footer"); ?>