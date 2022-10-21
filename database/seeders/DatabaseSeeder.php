<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\LocationCategory;
use App\Models\Location;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // User::create([
        //     'name'=>'Ang Andres',
        //     'email'=>'andres@gmail.com',
        //     'password'=>bcrypt('password')
        // ]);

        LocationCategory::create([
            'name'=>'Pusat', 
            'slug'=>'pusat'
        ]);
        LocationCategory::create([
            'name'=>'Cabang', 
            'slug'=>'cabang'
        ]);
        LocationCategory::create([
            'name'=>'Pos PI', 
            'slug'=>'pos_pi'
        ]);

        // Location::create(['nama_pos'=>'GKI Sulsel Jemaat Palu','slug'=>'gki-sulsel-jemaat-palu','alamat_pos'=>'Pattimura','location_category_id'=>'1','jam_ibadah'=>'09:00']);

        // Location::create(['nama_pos'=>'pos 2','slug'=>'pos_2','alamat_pos'=>'alamat pos 2','location_category_id'=>'2','jam_ibadah'=>'10:00']);

        // Location::create(['nama_pos'=>'Pos PI 3','slug'=>'pos_pi_3','alamat_pos'=>'alamat pos 3','location_category_id'=>'3','jam_ibadah'=>'10:00']);

        Location::factory(20)->create();
    }
}
