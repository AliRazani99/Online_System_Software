<?php

namespace App\Http\Controllers;

use App\Models\Docter;
use Illuminate\Http\Request;

class DocterController extends Controller
{
    public function show()
    {
        return view('docter');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'from' => 'required',
            'until' => 'required',
            'specialty' => 'required',
        ]);
        Docter::create([
           'name' => $request->name,
           'from' => $request->from,
           'until' => $request->until,
           'specialty' => $request->specialty,
        ]);

        return redirect('/home');
    }
}
