<?php
    require_once 'include.php';
    require_once 'header.php';
    checkProfileSession();

    $id=$_SESSION['user_id'];

    $sql="SELECT *
            FROM tpexpress_order
            where user_id = {$id}
            order by id desc";
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
	            <li id="order-tab-1" class="active" style="position: relative;">
				    <a href="#order-tab" data-toggle="tab">新订单</a>
				</li>
				<li id="order-tab-2">
				    <a href="#order-list-tab" data-toggle="tab">我的订单</a>
				</li>
			</ul>
        </div>
		<!-- Tab col-md-2 left side end-->

		<div class="col-md-10"  style="width:75%;">
        <div id="myTabContent" class="tab-content">


    		<!-- Order tab begin -->
    		<div class="tab-pane fade in active" id="order-tab">
            <div class="col-md-12">
    		<!-- Form begin -->
    		<form action="doAction.php?act=addOrder" method="post" id="">
    			<table class="table table-condensed">
    				<tbody>
    				    <tr>
                            <td><input name="user_id" type="hidden" value="<? echo $id; ?>" /></td>
                        </tr>
    					<!-- Product -->
    					<tr>
    					    <td class="text-right">商品名称</td>
    						<td>
    							<input type="text" class="form-control list-space-input" name="oName" id="" placeholder="例如： Similac Stage 2" required />
    						</td>
    				    </tr>
    				    <!-- Product end -->
    					<!-- Price -->
    					<tr>
    						<td class="text-right">单价</td>
    						<td>
    						    <input type="text" class="form-control list-space-input" name="oPrice" id="" placeholder="$25" required />
    						</td>
    					</tr>
    					<!-- Price end -->
    					<!-- Quantity -->
    					<tr>
    						<td class="text-right">购买数量</td>
    						<td>
    						    <input type="text" class="form-control list-space-input" name="oQuantity" id="" placeholder="2罐" required />
    						</td>
    					</tr>
    					<!-- Quantity end -->
                        <!-- Unit -->
    					<tr>
    						<td class="text-right">规格（单位）</td>
    						<td>
    						    <input type="text" class="form-control list-space-input" name="oUnit" id="" placeholder="680克" required />
    						</td>
    					</tr>
    					<!-- Unit end -->
    					<!-- Website -->
    					<tr>
    						<td class="text-right">购买地址/网址</td>
    						<td>
    						    <textarea class="form-control" rows="3" name="oWebsite" id="" placeholder="详细的购买网址/地址" ></textarea>
    						</td>
    					</tr>
    					<!-- Website end -->
    					<!-- Note -->
    					<tr>
    						<td class="text-right">备注</td>
    						<td>
    							<textarea class="form-control" rows="5" name="oNote" id="" placeholder="其他说明 " ></textarea>
    						</td>
    					</tr>
    					<!-- Note end -->
    					<tr>
    					    <td></td>
    					    <td style="color:red;">如需修改包裹信息，请前往“我的包裹”进行更改</td>
    					</tr>
    					<tr>
    					    <td></td>
    					    <td><button id="" class="btn btn-success">确定</button></td>
    					    <td><a href="#order-list-tab" data-toggle="tab" class="btn btn-success" onclick="toOrderList();">查看订单记录</a></td>
    					</tr>
    				</tbody>
    			</table>
    			<hr>
    		</form>

    	    </div>
    	    </div>
            <!-- Order tab end -->

    	    <!-- My order list tab begin -->
    		<div class="tab-pane fade" id="order-list-tab">
            <div class="col-md-12">
                <a href="order.php" class="btn btn-success">添加新订单</a>
                <table class="table table-hover" style="width:95%;">

                    <caption style="padding:10px 0 10px 20px;border:1px solid #ccc;margin-top:20px;background:#ccc;color:white;">订单详情</caption>
                    <?php if ($rows): ?>
                    <?php foreach ($rows as $row): ?>
                    <tbody>

                    <tr>
                       <td>
                           <div>
                               <b>订单编号:</b>
                               <?php echo $row['user_id']; ?>-<?php echo $row['id']; ?>
                           </div>
                           <div>
                               <b>订单日期:</b>
                               <?php echo $row['oDate']; ?>
                           </div>
                           <div>
                               <b>商品名称:</b>
                               <?php echo $row['oName']; ?>
                           </div>
                           <div>
                               <b>单价:</b>
                               <?php echo $row['oPrice']; ?>
                           </div>
                           <div>
                               <b>规格:</b>
                               <?php echo $row['oUnit']; ?>
                           </div>
                           <div>
                               <b>购买状态:</b>
                               <?php
                                   $oBuy = $row['oBuy'];
                                   switch ($oBuy){
                                       case 0:
                                          echo '未购买';
                                          break;
                                       case 1:
                                          echo '已购买';
                                          break;
                                       default:
                                           echo '未购买';
                                           break;
                                   }
                               ?>
                           </div>
                           <div>
                               <b>付款状态:</b>
                               <?php
                                   $oPaid = $row['oPaid'];
                                   switch ($oPaid){
                                       case 0:
                                          echo '未付款';
                                          break;
                                       case 1:
                                          echo '已付款';
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

    			<hr>

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
