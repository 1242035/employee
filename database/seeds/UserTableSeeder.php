<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hoanglaravel = DB::table('users')->insert([
            'username' => 'HoangLaravel',
            'email' => 'HoangLaravel@gmail.com',
            'password' => Hash::make('123456'),
            'first_name' => 'Hoang',
            'last_name' => 'Laravel',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('users')->insert([
            'username' => 'hoangcam',
            'email' => 'cam@foobla.com',
            'password' => Hash::make('123456'),
            'first_name' => 'Hoang',
            'last_name' => 'Manh Cam',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('users')->insert([
            'username' => 'Lucifer',
            'email' => 'abc@xyz.com',
            'password' => Hash::make('123456'),
            'first_name' => 'Lucifer',
            'last_name' => 'Morningstar',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
} 