<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Facility_A;
use App\Facility_B;
use App\Services\LineBotService;
use Illuminate\Support\Facades\Artisan;

class demo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function Deluser($shop){
        if($shop == 'A'){
            $Del_usr = Facility_A::first();
        }
        elseif($shop == 'B'){
            $Del_usr = Facility_B::first();
        }
        $Del_usr->delete();
        echo 'Deleted'.$Del_usr.'from'.$shop."\n";

    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $sleepseconds = 5;
        $num_A = Facility_A::all()->count();
        $num_B = Facility_B::all()->count();

        if($num_A >= $num_B){
            while(Facility_B::where('id','>',0)->first()){

                Artisan::call(NotifyUser::class);

                $this->Deluser('A');
                $this->Deluser('B');

                sleep($sleepseconds);

            }
            while(Facility_A::where('id','>',0)->first()){

                Artisan::call(NotifyUser::class);
                $this->Deluser('A');

                sleep($sleepseconds);

            }
        }
        else{
            while(Facility_A::where('id','>',0)->first()){

                Artisan::call(NotifyUser::class);
                $this->Deluser('A');
                $this->Deluser('B');

                sleep($sleepseconds);
            }
            while(Facility_B::where('id','>',0)->first()){

                Artisan::call(NotifyUser::class);
                $this->Deluser('B');

                sleep($sleepseconds);
            }
        }

    }
}
