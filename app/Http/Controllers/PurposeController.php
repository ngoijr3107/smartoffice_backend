<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purpose;

class PurposeController extends Controller
{

    public function getPurpose()
    {
        $purposes = Purpose::all();

        return response()->json(['purposes' => $purposes], 200);
    }

    public function create()
    {
        //
    }


    public function storePurpose(Request $request)
    {
        $purposes = new Purpose();
        $purposes->code = $request->input('code');
        $purposes->description = $request->input('description');
        $purposes->save();

        return response()->json(['purposes' => $purposes], 200);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
