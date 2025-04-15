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
      
      
            $this->call([
                UserSeeder::class,
            ]);
       
        

    }
}

