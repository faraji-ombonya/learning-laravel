<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServerRequest;
use App\Http\Requests\UpdateServerRequest;
use App\Http\Resources\ServerResource;
use App\Models\Server;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servers = Server::all();
        return ServerResource::collection($servers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServerRequest $request)
    {
        $validated = $request->validated();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Server $server)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Server $server)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServerRequest $request, Server $server)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Server $server)
    {
        //
    }
}
