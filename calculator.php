
<div class="sub_header">
    <?php if(empty($_SESSION['user_id']) && empty($_SESSION['email'])){ ?>
		<h3><a href="login.php" style="color:red;">登录</a>计算运费</h3>
    <?php } else {
        if(!empty($_POST['weight'])){
            @$res = $_POST['weight'] * $num2 + $num1;
        }
    ?>
        <form action="" method="post" id="">
        <h4>
        $<?php echo $num1; ?>(首磅) + $<?php echo $num2; ?>(续磅) X
            <input type="text" name="weight" placeholder=" 重量(磅)" style="width:60px;" />
            = <span style="color:red;">$<?php echo @$res; ?></span>
        </h4>
        <h3><input type="submit" value="计算运费" /></h3>
        </form>


    <?php } ?>
    <p>该运费仅供参考，实际运费按客服人员称重后报价为准。</p>
<!--     <form class="searchform" method="get" role="search" />
        <input class="s" type="text" onblur="if(this.value=='') this.value='Site Search'" onfocus="if(this.value =='Site Search' ) this.value=''" value="Site Search" />
        <input class="searchsubmit" type="submit" value="" />
        <a onclick="document.getElementById('search-form').submit()"></a>
    </form>

-->

</div>
