<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>aoli-css/gongsi-xq.css">

	<div class="zj1-bigbox">
		<div class="zj1-box">
			<div class="zj1-one">
                <div class="zj1-two">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0ff55a538c0eed6c193de15476c50a54&action=category&catid=11&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'11','limit'=>'2',));}?>
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

			<div class="zj1-six-right">

			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1e92c447043e546088bdd16ed92cb9fb&action=lists&catid=%24catid&oeder=listorder+ASC&moreinfo=1&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'oeder'=>'listorder ASC','moreinfo'=>'1','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<div class="zj1-seven">
				<div class="zj1-seven-left"><img src="<?php echo $thumb;?>"></div>
				<div class="zj1-seven-right">
					<div class="zj1-seven-right1"><?php echo $title;?></div>
					<div class="zj1-seven-right2">更新：2015/3/9 16:09:23 <span>点击：96</span></div>
					<div class="zj1-seven-right3">
						<div class="zj1-right3-one">产品品牌</div>
						<div class="zj1-right3-two">TFi</div>
					</div>
					<div class="zj1-seven-right3">
						<div class="zj1-right3-one">产品型号</div>
					</div>
					<div class="zj1-seven-right3">
						<div class="zj1-right3-one">产品描述</div>
					</div>
					<div class="zj1-seven-right3">...</div>
				</div>
			</div>

			<div class="zj1-eight">
				<div class="zj1-eight-one"><img src="<?php echo IMG_PATH;?>aoli-img/4/gs-xq-2.png"></div>
			</div>
			<div class="zj1-nine"><?php echo $content;?></div>
			
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<div class="zj1-eight">
				<div class="zj1-eight-one"><img src="<?php echo IMG_PATH;?>aoli-img/4/gs-xq-3.png"></div>
			</div>
				
			

			<div class="zj2-six-right">
				<div class="zj2-seven" style="margin-left:20px"><a href="#"><img src="<?php echo IMG_PATH;?>aoli-img/2/gs-1.png"></a></div>
				<!-- <div class="zj2-seven"><a href="#"><img src="img/2/gs-2.png"></a></div> -->
				<div class="zj2-seven"><a href="#"><img src="<?php echo IMG_PATH;?>aoli-img/2/gs-3.png"></a></div>
				<div class="zj2-seven"><a href="#"><img src="<?php echo IMG_PATH;?>aoli-img/2/gs-4.png"></a></div>
			</div>			

			</div>
			</div>
		</div>
	</div>
<?php include template("content","footer"); ?>