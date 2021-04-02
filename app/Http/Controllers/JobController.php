<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Jobs\LearningJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JobController extends Controller
{
    public function learnJob(){

        for ($i=0; $i < 20; $i++) { 
            
            $newJob =(new LearningJob())->delay(Carbon::now()->addSeconds(20));
            dispatch($newJob);
            Log::info("here");
            echo('Job completed');
        }
    }
}
