<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>aoli-css/gongsi.css">

    <div class="zj1-bigbox">
        <div class="zj1-box">
            <div class="zj1-one">
                <div class="zj1-two">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=06162ee321c29530b1af8e8a864288b9&action=category&catid=11&num=2&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'11','moreinfo'=>'1','limit'=>'2',));}?>
                    <div class="zj1-two-1">公司产品 &nbsp;&nbsp;&nbsp;&nbsp;About</div>
                   <?php $n=1;if(is_array($data)) foreach($data AS $b) { ?>
                        <div class="zj1-two-3"><a href="<?php echo $CATEGORYS['26']['url'];?>">傲立体彩</a></div>
                        <div class="zj1-two-4"><a href="<?php echo $CATEGORYS['17']['url'];?>">TFi系列产品</a></div>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c636f3387f76efc732b72dc298b76c95&action=lists&catid=17&order=listorder+ASC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','order'=>'listorder ASC','limit'=>'4',));}?>
                <div class="zj1-three">
                    <div class="zj1-three-1">热门产品 &nbsp;&nbsp;&nbsp;&nbsp;New</div>
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
                    <div class="zj1-sixwz">你的位置：<a href="">首页</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href=""><?php echo catpos($catid);?></a></div>
                </div>

        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9a12ffe7334048196b48c897d4bb1e3b&action=lists&catid=17&oeder=listorder+ASC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','oeder'=>'listorder ASC','limit'=>'4',));}?>
            <div class="zj1-six-right">
            <?php $n=1;if(is_array($data)) foreach($data AS $c) { ?>
                <div class="zj1-seven" style="margin-left:20px"><a href="<?php echo $c['url'];?>"><img src="<?php echo $c['thumb'];?>"></a></div>
       

            <?php $n++;}unset($n); ?>
                <div class="zj1-fy">
                    <div class="zj1-fywz">总数：4条  当前页数：1/1 <a href="">首页</a>   上一页 <a href="">1</a>下一页  <a href="">尾页</a> </div>

                </div>
            </div>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


            </div>
        </div>
    </div>

<?php include template("content","footer"); ?>