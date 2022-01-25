<?php

namespace App\Services\Strategy;

use App\Models\Ip_storage;
use App\Services\Interfaces\IpInterface;

class IpStrategy implements IpInterface
{
    // I use GeoIP for get data about IP address. Link on documentation https://lyften.com/projects/laravel-geoip/doc/
    public function storeIp($request)
    {
        $ip      = $request->ip();
        $geoData = geoip('95.211.16.66');
        $data    = [
          'IP_address' => $geoData->ip,
          'Country'    => $geoData->country,
          'Region'     => $geoData->state_name,
          'City'       => $geoData->city
        ];

        Ip_storage::create($data);

        return response(['message' => 'Data was added'], 201);
    }

    public function showIpData($id)
    {
        $data = Ip_storage::findOrFail($id);

        return response(['ip_data' => $data], 200);
    }
}
