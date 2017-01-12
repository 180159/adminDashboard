<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\userCountView;

use Illuminate\Support\Facades\DB;

use Charts;

class noOfUserController extends Controller
{
    public function show()
    {
    	$counts = DB::table('userCountViews')->get();

        $chart = Charts::database( User::all() ,'pie', 'highcharts')
                 ->title('pie chart below shows the no. of users for the system')
                 ->dimensions(3000, 3000)
                 ->groupBy('role_id')
                 ->labels(['Accountant', 'Accountant Delegate', 'Auditor', 'Auditor Delegate', 'Company Director', 'Company Secretary']);
 
        return view ('noOfUser', ['chart' => $chart], compact('counts'));
    }
}
