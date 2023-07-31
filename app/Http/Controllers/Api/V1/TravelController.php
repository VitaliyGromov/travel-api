<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TravelResource;
use App\Models\Travel;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TravelController extends Controller
{
    public function index(): ResourceCollection
    {
        $publicTravels = Travel::where('is_public', true)->paginate();

        return TravelResource::collection($publicTravels);
    }
}
