<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            #Admini Account
            'admin' => [
                'name'       => 'Abdi Mohammed',
                'employeeId' => 'GH504',
                'department' => 'IT',
                'email'      => 'abdymohammed@gmail.com',
                'phone'      => '+254712000000',
                'role'       => 'ADMIN',
                'password'    => \Illuminate\Support\Facades\Hash::make('1234')



            ],
#employee Account
            'employee' => [
                'name'       => 'Joan Kitulo',
                'employeeId' => 'MH501',
                'department' => 'Finance',
                'email'      => 'joan@gmail.com',
                'phone'      => '+254716700000',
                'role'       => 'EMPLOYEE',
                'password'    => \Illuminate\Support\Facades\Hash::make('1234')
            ],

        ];
        User::create($users['admin']);
        User::create($users['employee']);

        factory(User::class, 50)->create();

    }
}
