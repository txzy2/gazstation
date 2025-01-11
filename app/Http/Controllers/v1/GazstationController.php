<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\GazStation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Validator;

class GazstationController extends Controller
{
    public function getInfo(Request $request): JsonResponse
    {
        \Illuminate\Support\Facades\Log::channel('debug')->info('getInfo request data', $request->all());

        $validator = Validator::make($request->all(), [
            'id' => 'nullable|uuid',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 400);
        }

        $id = $request->input('id');
        $data = $this->getGazStationData($id);

        if (!$data['success']) {
            return response()->json(['message' => 'GazStations not found'], 404);
        }

        \Illuminate\Support\Facades\Log::channel('debug')
            ->info('getInfo response data', $data);

        return response()->json($data, 200);
    }

    private function getGazStationData($id = null)
    {
        $data = $id
            ? GazStation::where('id', $id)->first()
            : $data = GazStation::all();

        return [
            'success' => !empty($data),
            'data' => $data,
        ];
    }
}
