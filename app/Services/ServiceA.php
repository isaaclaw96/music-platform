<?php

namespace App\Services;

use App\Models\User;

class ServiceA
{
    /**
     * Get the user's favorite genres.
     *
     * @param int $userId
     * @return array
     */
    public function getCustomerInfo($userId)
    {
        $user = User::find($userId);

        //  Perform any necessary logic or validation
        
        return $user;
    }
}
