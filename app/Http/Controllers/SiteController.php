<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;

class SiteController extends Controller
{

    public function getSite()
    {
        $sites = Site::all();

        return response()->json(['sites' => $sites], 200);
    }

    public function storeSite(Request $request)
    {
        $sites = new Site();
        $sites->name = $request->input('name');
        $sites->address = $request->input('address');
        $sites->description = $request->input('description');
        $sites->save();

        return response()->json(['sites' => $sites], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
