<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class WorkersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showAll()
    {
        $all = DB::table('workers')->get();

        dd($all);
        //return view('user.index', ['users' => $users]);
    }
}
