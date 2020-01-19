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
        DB::table('users')->insert([
            'name' => "admin",
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        $user = User::where('email', 'admin@admin.com')->first();
        $user->givePermissionTo('admin');
    }
}
