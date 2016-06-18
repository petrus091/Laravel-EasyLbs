<?php
namespace HivenKay\LaravelLbs;
/**
 * Created by PhpStorm.
 * User: HivenKay
 * Date: 16/6/18
 * Time: 下午5:06
 */
class EasyLbs
{
    public function GeoTable() {
        return app('GeoTable');
    }
    public function GeoColumn() {
        return app('GeoColumn');
    }
    public function GeoPoi() {
        return app('GeoPoi');
    }
    public function GeoSearch() {
        return app('GeoSearch');
    }
}