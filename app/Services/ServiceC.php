<?php

namespace App\Services;

use Illuminate\Http\Request;

class ServiceC
{
     /**
     * Service A instance.
     *
     * @var \App\Services\ServiceA
     */
    protected $serviceA;

    /**
     * Constructor.
     *
     * @param \App\Services\ServiceA $serviceA
     */
    public function __construct(ServiceA $serviceA)
    {
        $this->serviceA = $serviceA;
    }

    public function billCustomer(Request $request)
    {
        // Retrieve user data from Service A
        $customerInfo = $this->serviceA->getCustomerInfo($request->user_id);


        $plan = $customerInfo['plan'];
        $billingInfo = $customerInfo['billing_info'];

        // Code to process user subscription using the user profile data
        $subscription = [
            'user_id' => $request->user_id,
            'plan' => $plan,
            'billing_info' => $billingInfo
            ];


        return $subscription;
    }
}
