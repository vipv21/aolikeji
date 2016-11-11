<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>aoli-css/rencai.css">

    <div class="zj1-bigbox">
        <div class="zj1-box">
            <div class="zj1-one">
                <div class="zj1-two">
                    <div class="zj1-two-1">人才招聘 &nbsp;&nbsp;&nbsp;&nbsp;Recruit</div>
                        <div class="zj1-two-2" style="margin-top:9px;"><img src="<?php echo IMG_PATH;?>aoli-img/1/zj1-3.png">
                            <div class="zj1-two-3"><a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=lists&catid=23">人才培训</a></div>
                        </div>
                        <div class="zj1-two-2"><img src="<?php echo IMG_PATH;?>aoli-img/1/zj1-3.png">
                            <div class="zj1-two-3"><a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=lists&catid=24">福利待遇</a></div>
                        </div>
                        <div class="zj1-two-2"><img src="<?php echo IMG_PATH;?>aoli-img/1/zj1-3.png">
                            <div class="zj1-two-3"><a href="<?php echo APP_PATH;?>/index.php?m=content&c=index&a=lists&catid=25">招聘职位</a></div>
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
                    <div class="zj1-sixwz">你的位置：<a href="">首页</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href=""><?php echo catpos($catid);?></a></div>
                </div>

          <!--   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4ad06b9c62896a75bfae388a497823b5&action=lists&catid=25&moreinfo=1&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','moreinfo'=>'1','limit'=>'1',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $c) { ?> 
                <?php echo $content;?>
                <?php $n++;}unset($n); ?> -->
            <div class="zj1-mid">
                <div class="zj1-mid-one">安卓开发工程师<span>[2015/3/9 10:24:14]</span></div>
                <div class="zj1-mid-two"><span>工作地点：</span>&nbsp;&nbsp;西安</div>
                <div class="zj1-mid-two"><span>工资待遇：</span>&nbsp;&nbsp;8000</div>
                <div class="zj1-mid-two"><span>招聘人数：</span>&nbsp;&nbsp;3人</div>
                <div class="zj1-mid-two"><span>性别要求：</span>&nbsp;&nbsp;男性</div>
                <div class="zj1-mid-two"><span>年龄要求：</span>&nbsp;&nbsp;24岁以上</div>
                <div class="zj1-mid-two"><span>条件要求：</span>&nbsp;&nbsp;精通Java开发，熟练使用Eclipse，具有一定的C语言知识及功底</div>

                <div class="zj1-mid-twowz"><span>职位描述：</span>&nbsp;&nbsp; <span2> 1、从事Android手机端应用程序及JNI开发；</span2> <br/><span1> 2、精通Java开发，熟练使用Eclipse，具有一定的C语言知识及功底；</span1><br/><span1>3、要求至少三年以上Android开发经验；</span1><br/><span1> 4、至少主创过一个独立完成的已发布市场的Android应用，且熟练使用HTTP/JSON与后台通信接口；</span1> <br/><span1> 5、有WiFi及NFC相关开发经验者优先。</span1></div>
            </div>

            <div class="zj1-mid">
                <div class="zj1-mid-one">公关策划专员<span>[2015/3/9 10:24:14]</span></div>
                <div class="zj1-mid-two"><span>工作地点：</span>&nbsp;&nbsp;西安</div>
                <div class="zj1-mid-two"><span>工资待遇：</span>&nbsp;&nbsp;面议</div>
                <div class="zj1-mid-two"><span>招聘人数：</span>&nbsp;&nbsp;2人</div>
                <div class="zj1-mid-two"><span>性别要求：</span>&nbsp;&nbsp; </div>
                <div class="zj1-mid-two"><span>年龄要求：</span>&nbsp;&nbsp; </div>
                <div class="zj1-mid-two"><span>条件要求：</span>&nbsp;&nbsp; </div>

                <div class="zj1-mid-twowz-2" ><span id="aa">职位描述：</span>&nbsp;&nbsp; <span2>岗位职责：</span2> <p><span1> 负责网络营销、社会化媒体营销， 针对微博、微信、SNS、论坛等国内社交媒体营销网站进行策划和推广；</span1><p><span1>制定各社会化平台营销方案和策略，具备优秀的活动策划能力；</span1><p><span1> 分析整理竞争对手社会媒体营销情况，进行数据分析、挖掘；/JSON与后台通信接口；</span1> <p><br/><span2> 任职要求：</span2> <p><span1> 大专以上学历，2年以上社交媒体专职推广工作经验，有SNS运营、互联网等经验者优先</span1><p><span1>熟悉网络运营、媒体、整合营销工作，善于利用公司内部资源，创新性解决问题；有一定数据分析能力，同时具备较强的运营数据敏感性；</span1><p><span1> 喜好互联网，了解广告、传媒行业，日常关注互联网发展、互联网动态、互联网新产品、网络营销事件，善于搜集整理资料，并能完成数据分析。</span1> <p></div>
            </div>


            <div class="zj1-mid">
                <div class="zj1-mid-one">.NET开发工程师<span>[2015/3/9 10:24:14]</span></div>
                <div class="zj1-mid-two"><span>工作地点：</span>&nbsp;&nbsp;西安</div>
                <div class="zj1-mid-two"><span>工资待遇：</span>&nbsp;&nbsp;6000</div>
                <div class="zj1-mid-two"><span>招聘人数：</span>&nbsp;&nbsp;2人</div>
                <div class="zj1-mid-two"><span>性别要求：</span>&nbsp;&nbsp; </div>
                <div class="zj1-mid-two"><span>年龄要求：</span>&nbsp;&nbsp; </div>
                <div class="zj1-mid-two"><span>条件要求：</span>&nbsp;&nbsp; </div>

                <div class="zj1-mid-twowz-2" ><span id="bb">职位描述：</span>&nbsp;&nbsp; <span2>职位描述：</span2> <br/><span1>1、参与系统设计、概要设计、详细设计等工作；</span1><br/><span1>2、业务模块应用详细设计</span1><br/><span1> 3、.Net代码开发</span1> <br/><span1> 4、代码单元测试与BUG修改</span1><br/><br/><span2> 任职要求：</span2> <br/><span1> 1、全日制专科及以上学历，3年以上互联网开发经验；</span1><br/><span1>2、熟悉数据库相关知识，有至少2年相关开发经验（SqlServer、Oracle、Mysql其中至少一种），能熟练运用sql语句并熟悉sql语句优化及数据库优化；</span1><br/><span1> 3、熟悉html、css、wcf及主流ORM框架；</span1> <br/><span1> 4、较强的学习及沟通</span1> </div>
            </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div class="zj1-fy">
                    <div class="zj1-fywz">总数3条&nbsp;&nbsp;&nbsp;&nbsp;当前页数：1/1 <a href="">首页</a>      上一页 <a href="">1</a>下一页  <a href="">尾页</a> </div>
                </div>

            </div>
        </div>
    </div>

<?php include template("content","footer"); ?>