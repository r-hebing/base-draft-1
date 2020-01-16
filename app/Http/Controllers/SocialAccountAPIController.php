<?php

namespace App\Http\Controllers;

use App\SocialAccount;
use App\Http\Resources\SocialAccountCollection;
use App\Http\Resources\SocialAccountResource;
 
class SocialAccountAPIController extends Controller
{
    public function index()
    {
        return new SocialAccountCollection(SocialAccount::paginate());
    }
 
    public function show(SocialAccount $socialAccount)
    {
        return new SocialAccountResource($socialAccount->load(['user']));
    }

    public function store(Request $request)
    {
        return new SocialAccountResource(SocialAccount::create($request->all()));
    }

    public function update(Request $request, SocialAccount $socialAccount)
    {
        $socialAccount->update($request->all());

        return new SocialAccountResource($socialAccount);
    }

    public function destroy(Request $request, SocialAccount $socialAccount)
    {
        $socialAccount->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}