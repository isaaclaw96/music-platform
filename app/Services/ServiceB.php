<?php

namespace App\Services;

use App\Services\ServiceA;
use Illuminate\Http\Request;

class ServiceB
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

    /**
     * Get playlist recommendations for a user.
     *
     * @param int $userId
     * @return array
     */
    public function getPlaylistRecommendations(Request $request)
    {
        // Retrieve user data from Service A
        $customerInfo = $this->serviceA->getCustomerInfo($request->user_id);

        // Get customer's favorite genres, interests, and history from Service A
        $favoriteGenres = $customerInfo['favorite_genres'];
        $interests = $customerInfo['interests'];
        $history = $customerInfo['history'];

        // Code to generate personalized playlist based on user profile data
        $playlist = [
            'user_id' => $request->user_id,
            'songs' => ['song4', 'song5', 'song6']
        ];

        return $playlist;
    }

}
