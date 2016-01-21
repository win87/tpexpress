$(function () {
    $("#cal-res").submit(function (e) {
        e.preventDefault(); //STOP default action
        $.ajax({
            cache: false,
            url: $(this).attr("action"),
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                $("#avail-res").html(data);
            }
        });
        return false;
    });
});

function delRecipients(recipients_id,user_id){
    if(window.confirm("确认删除该收件人地址?")){
	window.location="doAction.php?act=delRecipients&recipients_id="+recipients_id+"&user_id="+user_id;
	}
}

function toPackageList(){
    $('#package-tab-1').removeClass('active');
    $('#package-tab-2').addClass('active');
}

function toOrderList(){
    $('#order-tab-1').removeClass('active');
    $('#order-tab-2').addClass('active');
}