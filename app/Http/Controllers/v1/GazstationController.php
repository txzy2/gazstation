<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\GazStation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GazstationController extends Controller
{
    public function getInfo(): JsonResponse
    {
        $response = self::getGazStation();
        if (!$response['success']) {
            return parent::sendResponse('GazStations not found', 404);
        }

        return response()->json($response, 200);
    }

    private static function getGazStation()
    {
        $data = GazStation::all();

        \Illuminate\Support\Facades\Log::channel('debug')
            ->info('GazstationController::getGazStation RESPONSE', [
                'success' => !empty($data),
                'data_count' => $data->count()
            ]);

        return [
            'success' => !empty($data),
            'data' => $data,
        ];
    }
}
