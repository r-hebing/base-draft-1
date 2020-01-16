<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Http\Resources\PermissionCollection;
use App\Http\Resources\PermissionResource;
 
class PermissionAPIController extends Controller
{
    public function index()
    {
        return new PermissionCollection(Permission::paginate());
    }
 
    public function show(Permission $permission)
    {
        return new PermissionResource($permission->load(['service']));
    }

    public function store(Request $request)
    {
        return new PermissionResource(Permission::create($request->all()));
    }

    public function update(Request $request, Permission $permission)
    {
        $permission->update($request->all());

        return new PermissionResource($permission);
    }

    public function destroy(Request $request, Permission $permission)
    {
        $permission->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}