<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IpService;

class IpController extends Controller
{
    // For this API we can find many ways, but i choose just first one in Google. We will use DB for found Country, Region etc.
    // I will write all code in App\Services\IpService and in directory Strategy. I will try to make code in style like pattern Strategy.
    protected $ipService;

    public function __construct()
    {
        $this->ipService = new IpService();
    }

    public function store(Request $request)
    {
        return $this->ipService->storeIPAddress($request);
    }

    public function show($id)
    {
        return $this->ipService->getIPData($id);
    }
}
