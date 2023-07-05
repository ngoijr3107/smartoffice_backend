<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{

    public function getVisitors()
    {
        $visitors = Visitor::all();
        return response()->json(['visitors' => $visitors], 200);
    }


    public function checkIn(Request $request)
    {
        $visitor = new Visitor();
        $visitor->fname = $request->input('fname');
        $visitor->lname = $request->input('lname');
        $visitor->phone = $request->input('phone');
        $visitor->email = $request->input('email');
        // $visitor->carplateno = $request->input('carplateno');
        $visitor->checkintime = $request->input('checkintime');
        $visitor->visit_purpose = $request->input('visit_purpose');
        $visitor->department = $request->input('department');
        $visitor->save();

        return response()->json(['visitor' => $visitor], 200);
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
