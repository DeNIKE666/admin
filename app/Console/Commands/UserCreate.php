<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class UserCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


    public function handle()
    {
        $type = $this->choice('Какой тип профиля создать?', ['admin' , 'GlAdmin' , 'investor'], 'GlAdmin');

        $password = str_random(10);

        $email = str_random(10) . '@site.com';

        $user = User::create([
            'name'  =>  'Anonyus_' . mt_rand(100,10000),
            'email' =>  $email,
            'password' => bcrypt($password),
        ]);

        $user->assignRole($type);

        $this->line($email . ':' . $password . ' | ' . $type);


    }
}
