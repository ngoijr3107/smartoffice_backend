<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{

    public function getDepartment()
    {
        $departments = Department::all();

        return response()->json(['departments' => $departments], 200);
    }


    public function create()
    {
        //
    }


    public function storeDepartment(Request $request)
    {
        $departments = new Department();
        $departments->code = $request->input('code');
        $departments->description = $request->input('description');
        $departments->save();
    }


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
