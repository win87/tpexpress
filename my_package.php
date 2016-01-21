<?php
    require_once 'include.php';
    require_once 'header.php';
    checkProfileSession();

    $id=$_SESSION['user_id'];

    $sql="SELECT *
            FROM tpexpress_recipients as r
            JOIN tpexpress_package p ON r.user_id = p.user_id
            where p.user_id = {$id} and p.recipients = r.name
            order by package_id desc
            ";
    $rows=fetchAll($sql);

    $sql="SELECT *
            FROM tpexpress_recipients
            where user_id = {$id}";
    $rows_r=fetchAll($sql);

?>

<!-- Content Start -->
<section id="content_wrap" class="typography">
<article>

    <!-- Page Content -->
    <div class="container">

        <!-- Tab col-md-2 left side-->
		<div class="col-md-2">
	        <ul class="nav nav-pills nav-stacked" id="">
	            <li id="package-tab-1" class="active" style="position: relative;">
				    <a href="#package-tab" data-toggle="tab">我要寄包裹</a>
				</li>
				<li id="package-tab-2">
				    <a href="#package-list-tab" data-toggle="tab">我的包裹列表</a>
				</li>
			</ul>
        </div>
		<!-- Tab col-md-2 left side end-->

        <div class="col-md-10"  style="width:75%;">
        <div id="myTabContent" class="tab-content">

		<!-- Order tab begin -->
		<div class="tab-pane fade in active" id="package-tab">
        <div class="col-md-12">

        <!-- ship package tab begin-->
		<!-- Form begin -->
		<form action="doAction.php?act=addPackage" method="post" id="">
			<table class="table table-condensed">
				<tbody>
				    <tr>
                        <td><input name="user_id" type="hidden" value="<? echo $id; ?>" /></td>
                    </tr>
				    <!-- recipients -->
				    <tr>
						<td class="text-right">收件人</td>
						<td>

						<select class="form-control list-space-input" name="recipients" id="" required>
						<?php if ($rows_r): ?>
                        <?php foreach ($rows_r as $row): ?>
							<option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?> </option>
					    <?php endforeach; ?>
	                    <?php endif; ?>
						</select>

						</td>
					</tr>
					<!-- recipients end -->
				    <!-- shippment options -->
				    <tr>
						<td class="text-right">路线选择</td>
						<td>
						<select class="form-control list-space-input" name="line" id="line" required>
							<option value=""> - Select - </option>
							<option value=1 >普通A</option>
							<option value=1 >奶粉专线</option>
							<option value=1 >商业A</option>
							<option value=1 >商业B</option>
							<option value=1 >商业C</option>
							<option value=1 >大包裹</option>
							<option value=1 >特殊件</option>
							<option value=1 >香港自提</option>
							<option value=1 >香港送货上门</option>
							<option value=1 >美国国内</option>
						</select>
						</td>
					</tr>
					<!-- shippment options end -->
					<!-- cale -->
					<tr>
					    <td class="text-right">产品品类</td>
						<td>
							<input type="text" class="form-control list-space-input" name="catalogue" id="catalogue" value="" placeholder="例如： 婴儿1段奶粉" required />
						</td>
				    </tr>
				    <!-- cale end -->
				    <!-- brand -->
				    <tr>
				        <td class="text-right">品牌</td>
						<td>
					       <input type="text" class="form-control list-space-input" name="brand" id="brand" value="" placeholder="例如： 美赞臣" required />
						</td>
					</tr>
					<!-- brand end -->
					<!-- price -->
					<tr>
						<td class="text-right">单价</td>
						<td>
						    <input type="text" class="form-control list-space-input" name="pPrice" id="pPrice" value="" placeholder="$25" required />
						</td>
					</tr>
					<!-- price end -->
					<!-- quantity -->
					<tr>
						<td class="text-right">数量</td>
						<td>
						    <input type="text" class="form-control list-space-input" name="quantity" id="quantity" value="" placeholder="2" required />
						</td>
					</tr>
					<!-- quantity end -->
                    <!-- unit -->
					<tr>
						<td class="text-right">规格（单位）</td>
						<td>
						    <input type="text" class="form-control list-space-input" name="unit" id="unit" value="" placeholder="680克（罐）" required />
						</td>
					</tr>
					<!-- unit end -->
					<!-- note -->
					<tr>
						<td class="text-right">备注</td>
						<td>
							<textarea class="form-control" rows="5" name="note" id="note" placeholder="一些特别说明" ></textarea>
						</td>
					</tr>
					<!-- note end -->
					<tr>
					    <td></td>
					    <td style="color:red;">如需修改包裹信息，请前往“我的包裹”进行更改</td>
					</tr>
					<tr>
					    <td></td>
					    <td><button id="" class="btn btn-success">添加包裹</button></td>
					    <td><a href="#package-list-tab" type="button" data-toggle="tab" class="btn btn-primary" onclick="toPackageList();">查看包裹列表</a></td>
					</tr>
				</tbody>
			</table>
			<hr>
		</form>
		</div>
	    </div>
	    <!-- ship package tab end -->

	    <!-- My package list tab begin -->
		<div class="tab-pane fade" id="package-list-tab">
        <div class="col-md-12">

            <!-- My package tab begin -->
            <a href="my_package.php" class="btn btn-success">添加新包裹</a>
            <table class="table table-hover" style="width:95%;">
                <caption style="padding:10px 0 10px 20px;border:1px solid #ccc;margin-top:20px;background:#ccc;color:white;">包裹详情</caption>
                <?php if ($rows): ?>
                <?php foreach ($rows as $row): ?>
                <tbody>

                <tr>
                   <td>
                       <div>
                           <b>包裹单号:</b>
                           <?php echo $row['user_id']; ?>-<?php echo $row['package_id']; ?>
                       </div>
                       <div>
                           <b>日期:</b>
                           <?php echo $row['order_date']; ?>
                       </div>
                       <div>
                           <b>收件人姓名:</b>
                           <?php echo $row['recipients']; ?>
                       </div>
                       <div>
                           <b>收件地址:</b>
                           <?php echo $row['province']; ?> <?php echo $row['city']; ?> <?php echo $row['area']; ?> <?php echo $row['address']; ?> <?php echo $row['zip']; ?>  <?php echo $row['country']; ?>
                       </div>
                       <div>
                           <b>包裹状态:</b>
                           <?php
                               $statu = $row['status'];
                               switch ($statu){
                                   case 0:
                                      echo '未入库';
                                      break;
                                   case 1:
                                      echo '待发货';
                                      break;
                                   case 2:
                                      echo '运输途中';
                                      break;
                                   case 3:
                                       echo '已签收';
                                       break;
                                   default:
                                       echo '未入库';
                                       break;
                               }
                           ?>
                       </div>
                   </td>
                </tr>
                </tbody>
                <?php endforeach; ?>
    	        <?php endif; ?>

            </table>

        </div>
	    </div>
        <!-- My order list tab end -->

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
