<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUser;
use App\Exports\ExportUser;
use Illuminate\Console\View\Components\Alert;

class UserController extends Controller
{
    public function importView(Request $request){
        return view('importFile');
    }

    public function import(Request $request){
       $data = Excel::toArray([],$request->file('file'));
       foreach($data as $item){
        echo $item[0][0];
        echo $item[0][1];
       }
    // return $data[0][0];
        //  Excel::import(new ImportUser, $request->file('file')->store('files'));
        // return $data;
        // return redirect()->back();
    }

    public function exportUsers(Request $request){
        return Excel::download(new ExportUser, 'users.xlsx');
    }
}
