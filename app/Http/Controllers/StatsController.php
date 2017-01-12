<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Charts;

class StatsController extends Controller
{
    public function show(){

		$percen = Charts::create('percentage', 'justgage')
	      			->title('memory')
	      			->colors(['#00ff00'])
				    ->elementLabel('percent (%)')
				    ->values([13,0,100])
				    ->responsive(false)
				    ->height(300)
				    ->width(0);

		$perce = Charts::create('percentage', 'justgage')
	        		->title('usage')
	        		->colors(['#0000ff'])
				    ->elementLabel('percent (%)')
				    ->values([35,0,100])
				    ->responsive(false)
				    ->height(300)
				    ->width(0);

        return view ('systemStatus', ['percen' => $percen], ['perce' => $perce]);

	}    
}
