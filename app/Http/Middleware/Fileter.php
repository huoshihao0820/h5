<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redis;

class Fileter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        $redis_key='str:count:res:'.$_SERVER['HTTP_TOKEN'].':url:'.$_SERVER['REQUEST_URI'];
//        dd($redis_key);
//        dd($_SERVER);
        if ($_SERVER['HTTP_TOKEN']){
            $redis_key='str:count:'.$_SERVER['HTTP_TOKEN'].':url:'.$_SERVER['REQUEST_URI'];
//            dd($redis_key);
            $count=Redis::get($redis_key);
            if ($count>=5){

                Redis::expire($redis_key,60);
                $respon=[
                    'error'=>20004,
                    'msg'=>"接口上限，稍后再试"
                ];
                die(json_encode($respon,JSON_UNESCAPED_UNICODE));
            }
//            dd(2);
            Redis::incr($redis_key);
        }else{
            $respon=[
                'error'=>20005,
                'msg'=>"网络繁忙，稍后再试"
            ];
            die(json_encode($respon,JSON_UNESCAPED_UNICODE));
        };
        return $next($request);
    }
}
