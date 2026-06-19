<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServerRequest;
use App\Http\Requests\UpdateServerRequest;
use App\Models\Server;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = min($request->input("per_page", 15), 60);
        $status = $request->input("status");
        $environment = $request->input("environment");

        return Server::when($status, function ($query, string $status) {
                $query->where('status', $status);
            })
            ->when($environment, function ($query, string $environment) {
                $query->where('environment', $environment);
            })
            ->paginate($perPage)->toResourceCollection();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServerRequest $request)
    {
        $server = Server::create($request->validated());
        return $server->toResource();
    }

    /**
     * Display the specified resource.
     */
    public function show(Server $server)
    {
        return $server->toResource();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServerRequest $request, Server $server)
    {
        $server->updateOrFail($request->validated());
        return $server->toResource();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Server $server)
    {
        $server->delete();
        return response(status: 204);
    }
}
