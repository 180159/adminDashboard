<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Charts;

class StatusController extends Controller
{
	
	public function show(){

		$geo = Charts::create('geo', 'highcharts')
	                ->title('map below showing current location of users')
	                ->elementLabel('country')
	                ->labels(['ID', 'SG', 'MY'])
	                ->colors(['#C5CAE9', '#283593'])
	                ->values([5,2,7])
	                ->dimensions(1000,500)
	                ->responsive(false);

	    $percent = Charts::create('percentage', 'justgage')
	        		->title('Dashboard Health')
	        		->colors(['#00ff00'])
				    ->elementLabel('percent (%)')
				    ->values([98,0,100])
				    ->responsive(false)
				    ->height(300)
				    ->width(0);

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

        return view ('systemStatus', ['geo' => $geo], ['percent' => $percent], ['percen' => $percen], ['perce' => $perce]);
	}    

}
