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

    public function getById(Request $request): JsonResponse
    {
        $validated = $request->validate(
            [
                'id' => 'required|string',
            ],
            [
                'id.required' => 'GazStation id is required',
                'id.string' => 'GazStation id must be string',
            ]
        );

        $id = $validated['id'];

        $response = self::getGazStationById($id);
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

    private static function getGazStationById(string $id)
    {
        $data = GazStation::find($id);

        \Illuminate\Support\Facades\Log::channel('debug')
            ->info('GazstationController::getGazStationById RESPONSE', [
                'success' => !empty($data),
                'data_count' => $data
            ]);

        return [
            'success' => !empty($data),
            'data' => $data,
        ];
    }
}
