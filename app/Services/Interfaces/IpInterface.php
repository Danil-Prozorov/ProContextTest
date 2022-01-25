<?php

namespace App\Services\Interfaces;

use Illuminate\Http\Request;

interface IpInterface
{
    public function storeIp(Request $request);

    public function showIpData($id);
}
