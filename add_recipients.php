<?php
    require_once 'include.php';
    require_once 'header.php';
    checkProfileSession();

    $id=$_SESSION['user_id'];

    $sql="SELECT *
            FROM tpexpress_recipients
            where user_id = {$id}";
    $rows=fetchAll($sql);

?>

<!-- Content Start -->
<section id="content_wrap" class="typography">
<article>

    <!-- Page Content -->
    <div class="container">

        <!-- Tab col-md-2 left side-->
		<div class="col-md-2">
	        <ul class="nav nav-pills nav-stacked" id="">
	            <li class="active" style="position: relative;">
				    <a href="#recipients-tab" data-toggle="tab">添加新收件人</a>
				</li>
				<li>
				    <a href="#recipients-list-tab" data-toggle="tab">收件人列表</a>
				</li>
			</ul>
        </div>
		<!-- Tab col-md-2 left side end-->

		<div class="col-md-10"  style="width:75%;">
        <div id="myTabContent" class="tab-content">

		<!-- Order tab begin -->
		<div class="tab-pane fade in active" id="recipients-tab">
        <div class="col-md-12">

	    <!-- Add recipients tab begin -->
	    <form action="doAction.php?act=addRecipients" method="post">
        <table class="table table-condensed" style="width:90%;">
            <tbody>
			<!-- cale -->
			<tr>
			    <td class="text-right">收件人姓名</td>
				<td>
					<input type="text" class="form-control list-space-input" name="name" id="" required />
				</td>
		    </tr>
		    <!-- cale end -->
		    <!-- brand -->
		    <tr>
		        <td class="text-right">电话号码</td>
				<td>
			       <input type="text" class="form-control list-space-input" name="phone" id="" placeholder="手机或家庭电话" required />
				</td>
			</tr>
			<!-- brand end -->
			<!-- price -->
			<tr>
				<td class="text-right">国家</td>
				<td>
				    <input type="text" class="form-control list-space-input" name="country" id="" value="中国" required />
				</td>
			</tr>
			<!-- price end -->
			<!-- quantity -->
			<tr>
				<td class="text-right">省份</td>
				<td>
				    <input type="text" class="form-control list-space-input" name="province" id="" required />
				</td>
			</tr>
			<!-- quantity end -->
            <!-- city -->
			<tr>
				<td class="text-right">城市</td>
				<td>
				    <input type="text" class="form-control list-space-input" name="city" id="" required />
				</td>
			</tr>
			<!-- city end -->
			<!-- area -->
			<tr>
				<td class="text-right">区/县/镇</td>
				<td>
				    <input type="text" class="form-control list-space-input" name="area" id="" />
				</td>
			</tr>
			<tr>
				<td class="text-right">邮政编码</td>
				<td>
				    <input type="text" class="form-control list-space-input" name="zip" id="" />
				</td>
			</tr>
			<!-- area end -->
			<!-- address -->
			<tr>
				<td class="text-right">详细地址</td>
				<td>
				    <input type="text" class="form-control" name="address" id="" required />
				</td>
			</tr>
			<!-- address end -->
			<!-- ID -->
			<tr>
				<td class="text-right">身份证号码</td>
				<td>
				    <input type="text" class="form-control" name="id_num" id="" />
				</td>
			</tr>
			<!-- ID end -->
			<tr>
			    <td></td>
			    <td style="color:red;">“奶粉专线”必须输入收件人身份证号码，并且上传二代身份证证方面照片。</td>
			</tr>
			<tr>
			    <td></td>
			    <td><button class="btn btn-success fr">添加收件人地址</button></td>
                <td><a href="#recipients-list-tab" type="button" data-toggle="tab" class="btn btn-primary">查看收件人列表</a></td>
			</tr>
            </tbody>
        </table>
        </form>

        </div>
        </div>
	    <!-- Add recipients tab end -->

	    <!-- My recipients list tab begin -->
		<div class="tab-pane fade" id="recipients-list-tab">
        <div class="col-md-12">

        <a href="add_recipients.php" class="btn btn-success">添加新收件人</a>
        <table class="table table-hover" style="width:95%;">
            <caption style="padding:10px 0 10px 20px;border:1px solid #ccc;margin-top:20px;background:#ccc;color:white;">收件人地址列表</caption>
            <tbody>
            <?php if ($rows): ?>
            <?php foreach ($rows as $row):
            ?>
            <tr>
               <td>
                   <div>
                       <b>收件人姓名:</b>
                       <?php echo $row['name']; ?>
                   </div>
                   <div>
                       <b>电话号码:</b>
                       <?php echo $row['phone']; ?>
                   </div>
                   <div>
                       <b>详细地址:</b>
                       <?php echo $row['province']; ?> <?php echo $row['city']; ?> <?php echo $row['area']; ?> <?php echo $row['address']; ?> <?php echo $row['zip']; ?>  <?php echo $row['country']; ?>
                   </div>
                   <div>
                       <b>身份证号码:</b>
                       <?php echo $row['id_num']; ?>
                   </div>
               </td>
               <td>
                   <div>
                       <a href="#" class="btn btn-danger" onclick="delRecipients(<?php echo $row['id'] ;?>,<?php echo $id ;?>)">删除</a>
                   </div>
               </td>
            </tr>

            <?php endforeach; ?>
	        <?php endif; ?>
            </tbody>
        </table>

        </div>
        </div>
        <!-- My recipients list tab begin -->

	    </div>
	    </div>

    </div>
    <!-- /.container -->


</article>
</section>
<!-- Content End -->


<?php
    require_once 'footer.php';
?>
