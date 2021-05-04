<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Something;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $department = Department::factory()->withRelations()->create();
        User::factory()->create([
            'email' => 'test@example.com',
            'organisation_id' => $department->branch->organisation->id,
        ]);
        Something::factory()->create([
            'department_id' => $department->id,
        ]);
    }
}
