<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccountPower
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if(等級是普通客戶){
        //     return redirect('客戶首頁');
        // }elseif(甲級客戶){
        //     return redirect('甲級客戶首頁');
        // }elseif(加盟商){
        //     return redirect('加盟商首頁');
        // }elseif(系統管理員){
        //     return redirect('系統管理頁');
        // }
        // else{
        // //請求通過條件 前往下一個階段
        // return $next($request);
        // }

        if(Auth::user()->name == 'Manager'){
            return $next($request);
        }else{
            return  redirect('/');
        }
    }
}
