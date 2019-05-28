<?php

defined('InShopNC') or exit('Access Invalid!');
class app_bannerModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getAppBannerList() {
        $result = $this->table('app_banner')->select();
        return $result;
    }

}