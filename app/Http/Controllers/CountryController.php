<?php

namespace Modules\Country\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Modules\Common\Http\Controllers\Controller;
use Modules\Country\Enums\Country;

/**
 * @tags Country
 */
class CountryController extends Controller
{

    /**
     * List
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $country = Country::toArray();

        return response()->json(['data' => $country]);
    }
}
