<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use App\Models\Employee;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // چک کن که کاربر از قبل وجود نداشته باشه
        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }

        Company::factory(5)->create()->each(function ($company) {
            Employee::factory(10)->create(['company_id' => $company->id]); // اینجا باید Employee باشه
        });
        
    }
}

