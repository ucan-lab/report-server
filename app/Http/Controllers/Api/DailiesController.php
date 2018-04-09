<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Daily;

class DailiesController extends Controller
{
    public function index()
    {
        return Daily::all();
    }

    public function store(Request $request)
    {
        return Daily::create($request->all());
    }

    public function show(Daily $daily)
    {
        return $daily;
    }

    public function update(Request $request, Daily $daily)
    {
        return $daily->update($request->all());
    }

    public function destroy(Daily $daily)
    {
        return $daily->delete();
    }    
}
