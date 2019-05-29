<?php defined('InShopNC') or exit('Access Invalid!');?>

<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <h3>app轮播图</h3>
        </div>
    </div>
    <div class="fixed-empty"></div>
    <form id="link_form" enctype="multipart/form-data" method="post" action="index.php?act=app&op=saveAdd">
        <table class="table tb-type2">
            <tbody>
            <tr class="noborder">
                <td colspan="2" class="required"><label class="validation" for="ap_name">标题:</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform"><input type="text" name="title" id="ap_name" class="txt">
                </td>
                <td class="vatop tips"></td>
            </tr>
            <tr class="noborder">
                <td colspan="2" class="required"><label class="validation" for="ap_name">链接地址:</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform"><input type="text" name="link_url" id="ap_name" class="txt">
                </td>
                <td class="vatop tips"></td>
            </tr>
            <tr class="noborder">
                <td colspan="2" class="required"><label class="validation" for="ap_name">排序:</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform"><input type="text" name="sort" id="ap_name" class="txt">
                </td>
                <td class="vatop tips"></td>
            </tr>

            <tbody id="default_pic">
            <tr>
                <td colspan="2" class="required"><label class="validation" for="change_default_pic">图片</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform type-file-box"><input type="file" required name="file" >
                </td>
                <td class="vatop tips"><?php echo $lang['ap_show_defaultpic_when_nothing']; ?>,<?php echo $lang['adv_edit_support'];?>gif,jpg,jpeg,png</td>
            </tr>
            </tbody>
            <tfoot>
            <tr class="tfoot">
                <td colspan="15" ><a href="JavaScript:void(0);" class="btn" id="submitBtn"><span><?php echo $lang['nc_submit'];?></span></a></td>
            </tr>
            </tfoot>
        </table>
    </form>
</div>

<script>
    //按钮先执行验证再提交表单
    $(function(){$("#submitBtn").click(function(){
        if($("#link_form").valid()){
            $("#link_form").submit();
        }
    });
    });
    //
    $(document).ready(function(){

        $('#link_form').validate({
            errorPlacement: function(error, element){
                error.appendTo(element.parent().parent().prev().find('td:first'));
            },
            rules : {
                ap_name : {
                    required : true
                },
                ap_width_media:{
                    required :function(){return $("#ap_class").val()!=1;},
                    digits	 :true,
                    min:1
                },
                ap_height:{
                    required :function(){return $("#ap_class").val()!=1;},
                    digits	 :true,
                    min:1
                },
                ap_width_word :{
                    required :function(){return $("#ap_class").val()==1;},
                    digits	 :true,
                    min:1
                },
                default_word  :{
                    required :function(){return $("#ap_class").val()==1;}
                },
                change_default_pic:{
                    required :true
                }
            },
            messages : {
                ap_name : {
                    required : '<?php echo $lang['ap_can_not_null']; ?>'
                },
                ap_width_media	:{
                    required   : '<?php echo $lang['ap_input_digits_pixel']; ?>',
                    digits	:'<?php echo $lang['ap_input_digits_pixel'];?>',
                    min	:'<?php echo $lang['ap_input_digits_pixel'];?>'
                },
                ap_height	:{
                    required   : '<?php echo $lang['ap_input_digits_pixel']; ?>',
                    digits	:'<?php echo $lang['ap_input_digits_pixel'];?>',
                    min	:'<?php echo $lang['ap_input_digits_pixel'];?>'
                },
                ap_width_word	:{
                    required   : '<?php echo $lang['ap_input_digits_pixel']; ?>',
                    digits	:'<?php echo $lang['ap_input_digits_pixel'];?>',
                    min	:'<?php echo $lang['ap_input_digits_pixel'];?>'
                },
                default_word	:{
                    required   : '<?php echo $lang['ap_default_word_can_not_null']; ?>'
                }
            }
        });
    });
</script>