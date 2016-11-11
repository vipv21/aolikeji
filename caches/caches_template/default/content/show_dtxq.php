<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>aoli-css/dongtai-xq.css">

	<div class="zj1-bigbox">
		<div class="zj1-box">
			<div class="zj1-one">
                <div class="zj1-two">
                    <div class="zj1-two-1">公司动态 &nbsp;&nbsp;&nbsp;&nbsp;Case</div>
                        <div class="zj1-two-2" style="margin-top:9px;"><img src="<?php echo IMG_PATH;?>aoli-img/1/zj1-3.png">
                            <div class="zj1-two-3"><a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=lists&catid=18">公司动态</a></div>
                        </div>
                        <div class="zj1-two-2"><img src="<?php echo IMG_PATH;?>aoli-img/1/zj1-3.png">
                            <div class="zj1-two-3"><a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=lists&catid=19">通讯企业案例</a></div>
                        </div>
                        <div class="zj1-two-2"><img src="<?php echo IMG_PATH;?>aoli-img/1/zj1-3.png">
                            <div class="zj1-two-3"><a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=lists&catid=20">金融企业案例</a></div>
                        </div>
                </div>
				<div class="zj1-three">
					<div class="zj1-three-1">最新资讯 &nbsp;&nbsp;&nbsp;&nbsp;New</div>
					<div class="zj1-three-2" style="margin-top:10px">2015/8/26<br/><a href="">法治中国文化艺术研究院在西安</a></div>
					<div class="zj1-three-2">2015/8/26<br/><a href="">服务器维护通知</a></div>
					<div class="zj1-three-2">2015/8/26<br/><a href="">2015年春节放假通知</a></div>
					<div class="zj1-three-2">2015/8/26<br/><a href="">2014中国移动校园活动优秀</a></div>
					<div class="zj1-three-2">2015/8/26<br/><a href="">中国移动校园活动现场</a></div>
				</div>
				<div class="zj1-four">
					<div class="zj1-four-1"><img src="<?php echo IMG_PATH;?>aoli-img/1/zj1-5.png"></div>
					<div class="zj1-four-2"><input type="text" value="请输入关键词"><span><a href="">搜索</a></span></div>
				</div>
			</div>

			<div class="zj1-five">
				<div class="zj1-six"><img src="<?php echo IMG_PATH;?>aoli-img/1/zj1-6.png">
					<div class="zj1-sixwz">你的位置：<a href="">首页</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="">公司动态</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href=""><?php echo catpos($catid);?></a></div>
				</div>

	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b7121ce3470b396b94c577f714aac1ab&action=position&posid=2&oeder=listorder+ASC&num=1&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','oeder'=>'listorder ASC','moreinfo'=>'1','limit'=>'1',));}?>
			<div class="zj1-seven">
			<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<div class="zj1-seven-1"><?php echo $v['title'];?></div>
				<div class="zj1-seven-2">2015/8/26 9:43:04 <span>点击：125</span></div>
				<?php echo $content;?>

			<?php $n++;}unset($n); ?>
			</div>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

				<!-- 上下篇翻页 -->
<!-- 				<div class="zj1-fys"><img src="<?php echo IMG_PATH;?>aoli-img/3/xqfy-1.png"><span>上一篇：<a href="">没有啦</a></span> </div>
				<div class="zj1-fys"><img src="<?php echo IMG_PATH;?>aoli-img/3/xqfy-1.png"><span>下一篇：<a href="">《TFI云端管理平台》使用指南 2015/3/9</a></span> </div> -->

			<div class="sx"><img src="<?php echo IMG_PATH;?>aoli-img/3/xqfy-1.png">
                上一篇：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a><br />
                <img src="<?php echo IMG_PATH;?>aoli-img/3/xqfy-1.png" style="margin-left:-15px;">
                下一篇：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
			</div>




			</div>
		</div>
	</div>














<?php include template("content","footer"); ?>