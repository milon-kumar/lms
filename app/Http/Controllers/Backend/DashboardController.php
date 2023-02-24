<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\From;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('backend.admin.dashboard.dashboard');
    }

    public function formSubmit(Request $request)
    {
        foreach ($request->name as $key => $value){
            From::create([
                'name'=>$value,
                'image'=>$request->hasFile('image') ? $request->image[$key]->store('/images/form', ['disk' =>'my_files']):'defalut.jpg',
            ]);
        }
        toast('Data Created','success');
        return redirect()->back();
    }
}
