<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new App\User;
        $administrator->name = 'Doni';
        $administrator->email = 'doni090@admin.com';
        $administrator->password = Hash::make('admin');
        $administrator->nik = '6402052908960001';
        $administrator->address = 'Desa Gas Alam Badak I, Muara Badak';
        $administrator->phone ='085250708309';
        $administrator->roles =json_encode(['ADMIN']);
        $administrator->status = 'BELUM';

        $administrator->save();

        $this->command->info('User Admin sudah diinsert');
    }
}
