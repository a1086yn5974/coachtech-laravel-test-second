<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PersonController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
        ];
        DB::insert('insert into test (name, mail) values (:name, :mail)', $param);
        return view('thanks');
    }
}
