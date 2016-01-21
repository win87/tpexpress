<?php
    require_once 'include.php';
    require_once 'header.php';
?>

<!-- Content Start -->
<section id="content_wrap">
<article>
    <div class="page_title">
        <h2>做一家 <span>朋友圈</span>的海淘转运网站</h2>
    </div>

    <!-- Portfolio Start -->
    <ul class="splitter" id="filter">
        <li>
            <ul>
                <li class="segment-1 selected-1"><a href="#" data-value="all">所有线路</a></li>
                <li class="segment-0"><a href="#" data-value="business">包关税</a></li>
                <li class="segment-2"><a href="#" data-value="common">不包关税</a></li>
                <li class="segment-3"><a href="#" data-value="express">特快件</a></li>
                <li class="segment-4"><a href="#" data-value="hk">香港件</a></li>
                <li class="segment-5"><a href="#" data-value="milk">奶粉专线</a></li>
                <li class="segment-6"><a href="#" data-value="health">保健品（关税补贴）专线</a></li>
                <li class="segment-7"><a href="#" data-value="handbag">手袋（关税补贴）专线</a></li>
                <li class="segment-8"><a href="#" data-value="domestic">美国国内特快</a></li>
            </ul>
        </li>
    </ul>

    <div id="portfolio_4col" class="image_grid">
    <ul id="list" class="da-thumbs">
        <li data-id="id-1" class="common">
            <img src="images/portfolio_img_1.jpg" alt="img" />
            <div>
            	<a href="common_a.php">
                <h3>普通件A（不包关税）</h3>
                <p>限重： 2磅起，限15磅/包裹</p>
                <p>费用： 首磅$10 &nbsp; 续磅$5</p>
                <p>时间： 10-15个工作日</p>
                <p>
                                                        适用范围： 个人用品包裹、价值低于$150美元的包裹、等等...
                </p>
                <p></p>
                <p>点击了解更多详情</p>
                </a>
            </div>
        </li>
        <li data-id="id-2" class="business">
            <img src="images/portfolio_img_2.jpg" alt="img" />
            <div>
            	<a href="business_a.php">
                <h3>商业件A类（包关税）</h3>
                <p>限重： 6磅/包裹，单一品类可至10磅</p>
                <p>费用： 首磅$10 &nbsp; 续磅$5</p>
                <p>时间： 15-20个工作日</p>
                <p>
                                                        适用范围： 母婴用品、儿童玩具、食品类、宠物用品、渔具配件、家庭日用品、净水壶芯、手机壳、等等...
                </p>
                <p></p>
                <p>点击了解更多详情</p>
                </a>
            </div>
        </li>
        <li data-id="id-3" class="express common">
            <img src="images/portfolio_img_3.jpg" alt="img" />
            <div>
            	<a href="usps.php">
                <h3>大包裹（不包关税）</h3>
                <p>限重： 60磅/包裹</p>
                <p>费用： 首磅$40 &nbsp; 续磅$5</p>
                <p>时间： 5-7个工作日</p>
                <p>
                                                        适用范围： 特殊急件、高价值、包裹重、寄往其他国家、或其他线路不能寄的包裹...
                </p>
                <p></p>
                <p>点击了解更多详情</p>
                </a>
            </div>
        </li>
        <li data-id="id-4" class="business">
            <img src="images/portfolio_img_4.jpg" alt="img" />
            <div>
            	<a href="common_b.php">
                <h3>奶粉专线</h3>
                <p>限重： 每包裹限2罐/盒奶粉</p>
                <p>费用： 首磅$8 &nbsp; 续磅$5</p>
                <p>时间： 10-15个工作日</p>
                <p>
                                                        说明： 需提供收件人二代身份证正反面清晰照片，清关使用...
                </p>
                <p></p>
                <p>点击了解更多详情</p>
                </a>
            </div>
        </li>
        <li data-id="id-5" class="business health">
            <img src="images/portfolio_img_5.jpg" alt="img" />
            <div>
            	<a href="business_b.php">
                <h3>商业件B类（包关税）</h3>
                <p>限重： 6磅/包裹，单一品类可至10磅</p>
                <p>费用： 首磅$10 &nbsp; 续磅$6</p>
                <p>时间： 15-20个工作日</p>
                <p>
                                                        适用： 保健品、普通品牌服装、鞋类、书籍、旅行箱、帐篷、旅行背包、厨房用品、儿童座椅/推车、文具用品、低价值工艺饰品、等等...
                </p>
                <p></p>
                <p>点击了解更多详情</p>
                </a>
            </div>
        </li>
        <li data-id="id-7" class="business handbag">
            <img src="images/portfolio_img_8.jpg" alt="img" />
            <div>
            	<a href="business_c.php">
                <h3>商业件C类（包关税）</h3>
                <p>限重： 6磅/包裹（化妆品2磅/包裹）</p>
                <p>费用： 首磅$10 &nbsp; 续磅$7</p>
                <p>时间： 15-20个工作日</p>
                <p>
                                                        适用范围： 普通品牌化妆品、护肤品、手袋、钱包、咖啡机、游戏光碟、皮带、饰品、普通体育用品、自行车、空气净化器、小家电类（电动剃须刀、洗脸刷等）、等等...
                </p>
                <p>点击了解更多详情</p>
                </a>
            </div>
        </li>
        <li data-id="id-8" class="business">
            <img src="images/portfolio_img_11.jpg" alt="img" />
            <div>
            	<a href="special_item.php">
                <h3>特殊件</h3>
                <p>限重： 6磅/包裹， 单一品类可至10磅</p>
                <p>费用： 首磅$15 &nbsp; 续磅$10</p>
                <p>时间： 15-20个工作日</p>
                <p>
                                                        适用： 高价值商品（$750-$2500）、名牌手袋/钱包、墨镜、参类（花旗参/红参/海参）、家用小电器、录音笔、手表、显示器/电视、照相机/摄像机、等等...
                </p>
                <p>点击了解更多详情</p>
                </a>
            </div>
        </li>
        <li data-id="id-9" class="hk">
            <img src="images/portfolio_img_12.jpg" alt="img" />
            <div>
            <a href="hk_p.php">
                <h3>香港自提（无关税）</h3>
                <p>限重： 2磅起，限50磅/包裹</p>
                <p>费用： 首磅$5 &nbsp; 续磅$3</p>
                <p>时间： 5-7个工作日</p>
                <p>
                                                        适用范围： 除违禁品外...
                </p>
                <p></p>
                <p>点击了解更多详情</p>
                </a>
            </div>
        </li>
        <li data-id="id-10" class="hk">
            <img src="images/portfolio_img_12.jpg" alt="img" />
            <div>
            <a href="hk_d.php">
                <h3>香港送货（无关税）</h3>
                <p>限重： 2磅起，限50磅/包裹</p>
                <p>费用： 首磅$10 &nbsp; 续磅$5</p>
                <p>时间： 7-10个工作日</p>
                <p>
                                                        适用范围： 除违禁品外...
                </p>
                <p></p>
                <p>点击了解更多详情</p>
                </a>
            </div>
        </li>
        <li data-id="id-11" class="milk">
            <img src="images/portfolio_img_12.jpg" alt="img" />
            <div>
                <a href="common_b.php">
                <h3>奶粉专线</h3>
                <p>限重： 每包裹限2罐/盒奶粉</p>
                <p>费用： 首磅$8 &nbsp; 续磅$5</p>
                <p>时间： 10-15个工作日</p>
                <p>
                                                        说明： 需提供收件人二代身份证正反面清晰照片，清关使用...
                </p>
                <p></p>
                <p>点击了解更多详情</p>
                </a>
            </div>
        </li>
        <li data-id="id-12" class="domestic">
            <img src="images/portfolio_img_12.jpg" alt="img" />
            <div>
                <a href="domestic.php">
                <h3>美国国内特快</h3>
                <p>限重： 2-50磅/包裹</p>
                <p>费用： 首磅$18 &nbsp; 续磅$2</p>
                <p>时间： 5-7个工作日</p>
                <p>
                                                        适用范围： 除违禁品外...
                </p>
                <p></p>
                <p>点击了解更多详情</p>
                </a>
            </div>
        </li>
    </ul>

    <div class="v_space"></div>
    </div>
    <!-- Portfolio End -->

    <span class="divider">&nbsp;</span>

    <h3>海淘 <span>下单流程</span></h3><br />
    <div class="one_fourth">
        <span class="teaser_icon alignleft">
            <img src="images/mointor_icon.png" alt="img" />
        </span>
        <p>
                                使用我们提供的海外收货地址、向海外电商下单购买
        </p>
    </div>
    <div class="one_fourth">
        <span class="teaser_icon alignleft">
            <img src="images/brush_icon.png" alt="img" />
        </span>
        <p>
                                海外商家发货，将海外物流信息预报给我们客服
        </p>
    </div>
    <div class="one_fourth">
        <span class="teaser_icon alignleft">
            <img src="images/briefcase_icon.png" alt="img" />
        </span>
        <p>
                                海外仓库收件后，管理仓内包裹以及相关清关资料
        </p>
    </div>
    <div class="one_fourth_last">
        <span class="teaser_icon alignleft">
            <img src="images/paperplane_icon.png" alt="img" />
        </span>
        <p>
                                包裹到达
        </p>
    </div>

    <span class="divider">&nbsp;</span>

    <h3>我们 <span>承诺</span></h3><br />
    <div class="one_fourth">
        <span class="teaser_icon alignleft">
            <img src="images/mointor_icon.png" alt="img" />
        </span>
        <p>
                                用主人翁的态度对待每一件包裹
        </p>
    </div>
    <div class="one_fourth">
        <span class="teaser_icon alignleft">
            <img src="images/brush_icon.png" alt="img" />
        </span>
        <p>
                                为您推荐最合适的清关渠道线路，让您省时省钱又省心
        </p>
    </div>
    <div class="one_fourth">
        <span class="teaser_icon alignleft">
            <img src="images/briefcase_icon.png" alt="img" />
        </span>
        <p>
                                无论“天涯”，或是“海角”，我们对您的包裹进行全程追踪
        </p>
    </div>
    <div class="one_fourth_last">
        <span class="teaser_icon alignleft">
            <img src="images/paperplane_icon.png" alt="img" />
        </span>
        <p>
                                为每个包裹提供100至1000美元保险服务
        </p>
    </div>

</article>
</section>
<!-- Content End -->

<script type="text/javascript" src="js/jquery-1.8.1.js"></script>

<?php
    require_once 'footer.php';
?>