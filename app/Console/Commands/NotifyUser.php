<?php

namespace App\Console\Commands;

use App\Facility_A;
use App\Facility_B;
use Illuminate\Console\Command;
use App\Services\LineBotService;

class NotifyUser extends Command
{
    private $lineBotService;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:NotifyUser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '通知使用者';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->lineBotService = app(LineBotService::class);
        $number = 5;
        $User_A = Facility_A::limit($number)->pluck('queuer');
        $User_B = Facility_B::limit($number)->pluck('queuer');


        foreach ($User_A as $user){
            $response = $this->lineBotService->pushMessage($user,'ER');
            echo "sent";
        }
    }
}
