<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'name' => 'Paddocks',
                'isActive' => 1,
                'image' => 'paddocks1.jpg',
                'description' => 'This is a nice tshirt',
                'created_at' => '2020-08-16 21:24:27',
                'updated_at' => '2020-08-16 21:24:27',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 2,
                'name' => 'Mango',
                'isActive' => 1,
                'image' => 'mango1.jpg',
                'description' => 'This is a nice dress',
                'created_at' => '2020-08-16 21:25:42',
                'updated_at' => '2020-08-16 21:25:42',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 2,
                'name' => 'Marvel',
                'isActive' => 1,
                'image' => 'marvel1.jpg',
                'description' => 'This is a nice kids dress',
                'created_at' => '2020-08-16 21:26:18',
                'updated_at' => '2020-08-16 21:26:18',
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 2,
                'name' => 'Adidas',
                'isActive' => 1,
                'image' => 'adidas1.jpg',
                'description' => 'This is a great basketball shoes',
                'created_at' => '2020-08-16 21:27:16',
                'updated_at' => '2020-08-16 21:27:16',
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 2,
                'name' => 'Lego',
                'isActive' => 1,
                'image' => 'mango1.jpg',
                'description' => 'This is a toy for kids',
                'created_at' => '2020-08-16 21:27:41',
                'updated_at' => '2020-08-16 21:27:41',
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 2,
                'name' => 'Samsung',
                'isActive' => 1,
                'image' => 'samsung1.jpg',
                'description' => 'This is a gadget',
                'created_at' => '2020-08-16 21:28:18',
                'updated_at' => '2020-08-16 21:28:18',
            ),
        ));
        
        
    }
}