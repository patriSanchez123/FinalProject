<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$user= User::factory(1)->create();


        $user1 = new User();
        $user1->name='Sandra Cabeza López';
        $user1->email= 'sandra@gmail.com';
        $user1->password='$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user1->dni='35411236J';
        $user1->save();

        $user1 = User::find(1);
        $user1->assignRole('employee');

        $user2 = new User();
        $user2->name='Rocio Salazar Clavería';
        $user2->email= 'rocio@gmail.com';
        $user2->password='$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user2->dni='15234563L';
        $user2->save();

        $user2 = User::find(2);
        $user2->assignRole('admin');

        $user3 = new User();
        $user3->name='Alejandro Jimenénez Rodrígez';
        $user3->email= 'alejandrojr@gmail.com';
        $user3->password='$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user3->dni='14725836Y';
        $user3->save();

        $user3 = User::find(3);
        $user3->assignRole('customer');






    }
}
