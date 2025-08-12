<?php

namespace App\Http\Controllers;

use App\Enums\ClickLogSource;
use App\Http\Requests\ClickLog\StoreRequest;
use App\Http\Resources\ClickLogResource;
use App\Models\ClickLog;

class ClickLogController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return ClickLogResource
     */
    public function store(StoreRequest $request): ClickLogResource
    {
        $log = ClickLog::query()->create([
            'open_url' => $request->input('open_url'),
            'source' => $request->input('source', ClickLogSource::Unknown),
            'ip' => $request->ip(),
        ]);

        return ClickLogResource::make($log);
    }
}
