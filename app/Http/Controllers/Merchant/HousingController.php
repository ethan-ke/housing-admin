<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\MainController;
use App\Http\Requests\Merchant\HousingManagementRequest;
use App\Models\House;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Spatie\QueryBuilder\QueryBuilder;

class HousingController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $result = QueryBuilder::for(House::class)
            ->allowedFilters(['complex'])
            ->orderByDesc('id')->paginate($this->limit);
        return json_response($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param HousingManagementRequest $request
     * @return JsonResponse
     */
    public function store(HousingManagementRequest $request): JsonResponse
    {
        $data = $request->validated();
        try {
            $this->user()->house()->create($data);
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
        }
        return json_response(status_code: 201);
    }

    /**
     * Display the specified resource.
     *
     * @param House $house
     * @return JsonResponse
     */
    public function show(House $house): JsonResponse
    {
        return json_response($house);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param HousingManagementRequest $request
     * @param House $house
     * @return JsonResponse
     */
    public function update(HousingManagementRequest $request, House $house): JsonResponse
    {
        $data = $request->validated();
        try {
            $house->update($data);
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
        }
        return json_response();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
