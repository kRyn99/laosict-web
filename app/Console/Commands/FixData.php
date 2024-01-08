<?php

namespace App\Console\Commands;

use App\Helpers;
use App\Models\Payment;
use App\Models\Post;
use App\Models\Program;
use App\Models\Project;
use Illuminate\Console\Command;

class FixData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $programIdItemId = 18;
        $programIdMoneyId = 19;

        $ars = [$programIdItemId, $programIdMoneyId];

        // correct payment

        // correct project

        $payments = Payment::all();
        foreach ($payments as $payment) {
            if (!in_array($payment->program_id, $ars)) {
                $key = array_rand($ars, 1);
                $randomProgramId = $ars[$key];
                $payment->program_id = $randomProgramId;
                if ($randomProgramId == 18) {
                    $payment->donation_type = Helpers::PROGRAM_DONATION_TYPE_ITEM;
                } else {
                    $payment->donation_type = Helpers::PROGRAM_DONATION_TYPE_MONEY;
                }
                $program = Program::find($randomProgramId);
                $payment->partner_id = $program->partner_id;
                $payment->save();
            }
        }

        $projects = Project::all();
        foreach ($projects as $project) {
            if (!in_array($project->program_id, $ars)) {
                $key = array_rand($ars, 1);
                $randomProgramId = $ars[$key];
                $project->program_id = $randomProgramId;
                $project->save();
            }
        }

        $posts = Post::all();
        foreach ($posts as $post) {
            if (!in_array($post->program_id, $ars)) {
                $key = array_rand($ars, 1);
                $randomProgramId = $ars[$key];
                $post->program_id = $randomProgramId;
                $post->save();
            }
        }
    }
}
