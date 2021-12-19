<?php

namespace App\Http\Controllers;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;


use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use Hyn\Tenancy\Environment;



use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function index(){
    // Get current Hostname

    //$hostname  = env('APP_URL');
    $hostname  = config('tenant.app_url_base');
    dd($hostname);
    $fqdn      = $hostname;
        return dd($fqdn);
    }
}
