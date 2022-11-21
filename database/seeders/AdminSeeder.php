<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords =[
            [
                'id'=>1,
                'name'=>'Super Admin',
                'type'=>'superadmin',
                'vendor_id'=>0,
                'mobile'=>'0987654321',
                'email'=>'admin@admin.com',
                'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
                'image'=>'',
                'status'=>1
            ],
        ];
        Admin::insert($adminRecords);
    }
}
