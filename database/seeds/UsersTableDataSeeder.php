<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'lxc150896@gmail.com',
                'email' => 'lxc150896@gmail.com',
                'password' => bcrypt('12345'),
            ],
            ['name' => 'lxc150896@gmail.com',
                'email' => 'lxc@gmail.com',
                'password' => bcrypt('12345'),
            ],
            ['name' => 'lxc150896@gmail.com',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
            ],
        ];
        DB::table('users')->insert($data);
}
}
