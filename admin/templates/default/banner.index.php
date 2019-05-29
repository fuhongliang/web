<?php defined('InShopNC') or exit('Access Invalid!');?>
<!--v3-v12-->
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <ul class="tab-base">
                <li><a href="JavaScript:void(0);" class="current"><span>管理</span></a></li>
                <li><a href="index.php?act=app&op=app_banner_add" ><span>新增</span></a></li>
            </ul>
        </div>
    </div>
    <table class="table tb-type2" id="prompt">
        <tbody>
        <tr class="space odd">
            <th colspan="12"><div class="title">
                    <h5><?php echo $lang['nc_prompts'];?></h5>
                    <span class="arrow"></span></div></th>
        </tr>
        <tr>
            <td><ul>
                    <li><?php echo $lang['store_help1'];?></li>
                </ul></td>
        </tr>
        </tbody>
    </table>
    <form method="post" id="store_form">
        <input type="hidden" name="form_submit" value="ok" />
        <table class="table tb-type2">
            <thead>
            <tr class="thead">

                <th>标题</th>
                <th>图片</th>
                <th>链接地址</th>
                <th>排序</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($output['list'] as $k => $v){
            ?>
            <td><?php echo $v['title'] ?></td>
            <td><?php echo $v['image_name'] ?></td>
            <td><?php echo $v['link_url'] ?></td>
            <td><?php echo $v['sort'] ?></td>
            <td>删除</td>
            <?php } ?>
            </tbody>
        </table>
    </form>
</div>

