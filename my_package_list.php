<?php
    require_once 'include.php';
    require_once 'header.php';
    checkProfileSession();

    $id=$_SESSION['user_id'];

    $sql="SELECT *
            FROM tpexpress_recipients as r
            JOIN tpexpress_package p ON r.user_id = p.user_id
            where p.user_id = {$id} and p.recipients = r.name
            order by package_id desc";
    $rows=fetchAll($sql);

?>

<!-- Content Start -->
<section id="content_wrap" class="typography">
<article>

    <!-- Page Content -->
    <div class="container">

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
		<!-- My package tab end -->
    </div>
    <!-- /.container -->


</article>
</section>
<!-- Content End -->


<?php
    require_once 'footer.php';
?>
