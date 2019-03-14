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

        $i = '0';
        $j = '0';

        foreach ($User_A as $a){
            if($i == 0){
                $response = $this->lineBotService->pushMessage($a,"馬辣到你了");
                $i++;
            }
            else{
                $response = $this->lineBotService->pushMessage($a,"馬辣前面只剩".strval($i++)."人");

            }
            echo 'pushed to '.$a."\n";
        }

        foreach ($User_B as $b){
            if($j == 0){
                $response = $this->lineBotService->pushMessage($b,"鬍子餐酒到你了");
                $j++;
            }
            else{
                $response = $this->lineBotService->pushMessage($b,"鬍子餐酒前面只剩".strval($j++)."人");
            }
            echo 'pushed to '.$b."\n";
        }
    }
}
