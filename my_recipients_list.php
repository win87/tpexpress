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

	    <!-- Recipients list tab begin -->
        <table class="table table-hover" style="width:95%;">
            <tr><td><a href="add_recipients.php" class="btn btn-success">添加新收件人</a></td></tr>
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
		<!-- Recipients list tab end -->

    </div>
    <!-- /.container -->


</article>
</section>
<!-- Content End -->


<?php
    require_once 'footer.php';
?>
