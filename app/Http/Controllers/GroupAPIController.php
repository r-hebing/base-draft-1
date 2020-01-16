<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Resources\GroupCollection;
use App\Http\Resources\GroupResource;
 
class GroupAPIController extends Controller
{
    public function index()
    {
        return new GroupCollection(Group::paginate());
    }
 
    public function show(Group $group)
    {
        return new GroupResource($group->load(['company', 'users']));
    }

    public function store(Request $request)
    {
        return new GroupResource(Group::create($request->all()));
    }

    public function update(Request $request, Group $group)
    {
        $group->update($request->all());

        return new GroupResource($group);
    }

    public function destroy(Request $request, Group $group)
    {
        $group->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}