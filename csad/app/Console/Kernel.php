<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Task;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\getOrders::class,
        // 'App\Console\Commands\getOrders',
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
       $tasks = Task::select('*')
        ->where([
            ['status', '=', 1],
        ])->get();
        foreach ($tasks as $key => $task) {
            $frequency = $task->frequency;
        }
         echo $frequency;
         // dd($tasks);
        // $schedule->command('get:orders')
        //     ->$frequency();
            
        $schedule->command('get:orders')
        ->$frequency()
        ->appendOutputTo ('/var/log/schedule.log');   
            
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
