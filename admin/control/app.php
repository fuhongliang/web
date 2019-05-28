<?php
/**
 * app管理
 *
 *
 *
 **by 好商城V3 www.haoid.cn 运营版*/

defined('InShopNC') or exit('Access Invalid!');
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
class appControl extends SystemControl
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     * 管理员添加广告
     */
    public function bannerOp()
    {
        $app_banner= Model('app_banner');
        $list=$app_banner->getAppBannerList();
        Tpl::output('list',$list);
        Tpl::showpage('banner.index');
    }
    public function app_banner_addOp()
    {
        Tpl::showpage('banner.add');
    }
    public function saveAddOp()
    {


    }



}