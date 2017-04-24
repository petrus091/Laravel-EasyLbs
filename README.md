# Laravel-EasyLbs
Laravel 百度 LBS云  SDK Service Provider
# EasyLbs
百度云地图LBS SDK
使用前请先阅读百度云LBS服务云文档，本SDK不再对请求参数以及响应作解释
---
# 使用说明
## 安装
 composer require hivenkay/easylbs
 
## 配置
在`app/config.php`中的 providers数组增加：
```
  HivenKay\LaravelLbs\ServiceProvider::class,
```
在命令行执行`php artisan vendor:publish`发布 lbs 配置文件

在`app/easy_lbs.php`中配置百度云的ak和 sk
## 使用
```php
  EasyLbs::XXX()
  GeoTable::XXX()
  ...
```

# 云存储

## 方法列表：
    * create
    * getList
    * update
    * detail
    * delete

## 位置数据表（geotable）

```php
    $geoTable = new GeoTable('your-ak','your-sk');
```
  
## 自定义扩展列（column）
  
```php
    $geoColumn = new GeoColumn('your-ak','your-sk');
```
  
## 位置数据（poi）

```php
    $geoPoi = new GeoPoi('your-ak','your-sk');
```

# 云检索

## poi周边搜索

```php
    $geoSearch = new GeoSearch('your-ak','your-sk');
    //$attributes 请参考百度云文档
    $geoSearch->searchOfNearBy($attributes);
```
  
## poi本地检索
  
```php
    $geoSearch = new GeoSearch('your-ak','your-sk');
    //$attributes 请参考百度云文档
    $geoSearch->searchOfLocal($attributes);
```
  
## poi详情检索
  
```php
    $geoSearch = new GeoSearch('your-ak','your-sk');
    //$attributes 请参考百度云文档
    $geoSearch->searchOfDetail($attributes);
```
