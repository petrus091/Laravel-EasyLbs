<?php
namespace HivenKay\LaravelLbs;
/**
 * Created by PhpStorm.
 * User: HivenKay
 * Date: 16/6/18
 * Time: 下午2:48
 */
use Illuminate\Support\Facades\Facade as LaravelFacade;
class Facade extends LaravelFacade
{
    static public function getFacadeAccessor()
    {
        return 'Lbs';
    }

}