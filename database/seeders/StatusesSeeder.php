<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;
use Illuminate\Support\Facades\DB;

class StatusesSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert sample data into the statuses table
        DB::table('statuses')->insert([
            [
                'name' => 'Active',
                'code' => '1',
                'status' => true,
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Inactive',
                'code' => '2',
                'status' => false,
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pending',
                'code' => 'PENDING',
                'status' => true,
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
