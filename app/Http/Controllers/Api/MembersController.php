<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;

class MembersController extends Controller
{
    public function index()
    {
        return Member::all();
    }

    public function store(Request $request)
    {
        return Member::create($request->all());
    }

    public function show(Member $Member)
    {
        return $Member;
    }

    public function update(Request $request, Member $Member)
    {
        return $Member->update($request->all());
    }

    public function destroy(Member $Member)
    {
        return $Member->delete();
    }    
}
