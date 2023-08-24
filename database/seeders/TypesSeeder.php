<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//importo il Model!!!!!!
use App\Models\Types;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['E-commerce', 'Magazine', 'Blog', 'Portal'];

        foreach($categories as $cat){
            $type = new Types();

            $type->category = $cat;

            DB::table('types')->insert([
                'category'=> $cat,
                'mobile'=> false,
                'tablet'=> false,
                'pc'=> false,
                'smart_tv'=> false,
                'android'=> false,
                'ios'=> false,
                'windows'=> false,
                'mac'=> false,
                'linux'=> false,
                'age_protection'=> false,
                
            ]);
            
        }
        
    }
}
