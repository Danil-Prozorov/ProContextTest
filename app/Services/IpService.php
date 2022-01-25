<?php

namespace App\Services;

use App\Services\Strategy\IpStrategy;
use Illuminate\Http\Request;

// Why i want to make `Strategy` pattern? And yes, i see what it is not exactly same thing like in books about patterns, i use extending
// and it's kind of wrong way, but i don't think that in real project we need 10 ways to write Data in DB, right? With this way we can just
// cut `Strategy` and use new without problem. But new `Strategy` need also implement the same interface like my 'IpStrategy'.
// If i was too wrong, just tell me about it on interview, okay? :)

class IpService extends IpStrategy
{
    public function storeIPAddress(Request $request)
    {
        return $this->storeIP($request);
    }

    public function getIPData($id)
    {
        return $this->showIpData($id);
    }
}
