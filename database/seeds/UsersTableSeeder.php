<?php

use Illuminate\Database\Seeder;
use Someline\Models\Foundation\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        Schema::enableForeignKeyConstraints();

        User::create([
//            'slid' => '1',
            'name' => "Xiao jinhua",
            'email' => 'xiaojinhua@sailvan.com',
            'password' => bcrypt('jinhua'),
            'remember_token' => str_random(10),
            'gender' => 'M',
            'birthday' => '1994-07-08',
            'country' => 'CN',
            'timezone' => 'Asia/Shanghai',
            'locale' => 'en',
            'username' => 'xiaojinhua',
            'phone_number' => '+1234567890',
            'status' => 1,
        ]);

        factory(User::class, 500)->create();
    }
}
