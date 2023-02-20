<?php

namespace App\Http\Controllers;

use App\Services\ServiceC;
use App\Services\SubscriptionService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServiceCContoller extends Controller
{
    protected $serviceC;

    public function __construct(ServiceC $serviceC)
    {
        $this->serviceC = $serviceC;
    }

    public function getSubscription(Request $request)
    {

        // Call Service C method to get subscription information
        $subscription = $this->serviceC->billCustomer($request);

        // Return subscription as JSON response
        return response()->json($subscription);
    }
}
