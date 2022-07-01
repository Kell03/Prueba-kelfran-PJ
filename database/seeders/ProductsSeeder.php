<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            DB::table('products')->insert([
            'name' => 'Producto 1',
            'price' => '124.45',
            'tax' => '5',
            'amount' => '12',
            'description'=> ''
             
        ]);


             DB::table('products')->insert([
            'name' => 'Producto 2',
            'price' => '45.65',
            'tax' => '15',
            'amount' => '8',
            'description'=> ''
             
        ]);


        DB::table('products')->insert([
            'name' => 'Producto 3',
            'price' => '39.73',
            'tax' => '12',
            'amount' => '4',
            'description'=> ''
             
        ]);



         DB::table('products')->insert([
            'name' => 'Producto 4',
            'price' => '250',
            'tax' => '8',
            'amount' => '1',
            'description'=> ''
             
        ]);



         DB::table('products')->insert([
            'name' => 'Producto 5',
            'price' => '59.35',
            'tax' => '10',
            'amount' => '7',
            'description'=> ''
             
        ]);
    }
}
