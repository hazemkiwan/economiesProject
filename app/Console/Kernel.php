<?php

namespace App\Console;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use DB;
use Illuminate\Support\Facades\Log;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
       $schedule->call(function () {
            $stocks = \App\Stock::all();
            foreach($stocks as $stock)
            {
                $newPrice = ($stock->price/$stock->factor)*2.5; 
                if($newPrice <= 0.01) $newPrice = 1.0;
                DB::table('stocks')->where('id', $stock->id)->update(['price' => $newPrice, 'last_updated' => \Carbon\Carbon::now()]);
            }
            Log::info('this is runing all time');
        })->everyMinute();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
