<?php

namespace Modules\Voyager\Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2021-07-28 20:48:17',
                'updated_at' => '2021-07-28 20:48:17',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-07-28 20:50:38',
                'updated_at' => '2021-07-28 20:50:38',
            ),
            26 => 
            array (
                'id' => 32,
                'key' => 'browse_blog_posts',
                'table_name' => NULL,
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            27 => 
            array (
                'id' => 33,
                'key' => 'read_blog_posts',
                'table_name' => NULL,
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            28 => 
            array (
                'id' => 34,
                'key' => 'edit_blog_posts',
                'table_name' => NULL,
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            29 => 
            array (
                'id' => 35,
                'key' => 'add_blog_posts',
                'table_name' => NULL,
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            30 => 
            array (
                'id' => 36,
                'key' => 'delete_blog_posts',
                'table_name' => NULL,
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            31 => 
            array (
                'id' => 37,
                'key' => 'browse_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            32 => 
            array (
                'id' => 38,
                'key' => 'read_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            33 => 
            array (
                'id' => 39,
                'key' => 'edit_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            34 => 
            array (
                'id' => 40,
                'key' => 'add_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            35 => 
            array (
                'id' => 41,
                'key' => 'delete_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            36 => 
            array (
                'id' => 42,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            37 => 
            array (
                'id' => 43,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            38 => 
            array (
                'id' => 44,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            39 => 
            array (
                'id' => 45,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            40 => 
            array (
                'id' => 46,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2021-07-30 14:08:21',
                'updated_at' => '2021-07-30 14:08:21',
            ),
            41 => 
            array (
                'id' => 47,
                'key' => 'browse_pages',
                'table_name' => NULL,
                'created_at' => '2021-07-30 14:08:33',
                'updated_at' => '2021-07-30 14:08:33',
            ),
            42 => 
            array (
                'id' => 48,
                'key' => 'read_pages',
                'table_name' => NULL,
                'created_at' => '2021-07-30 14:08:33',
                'updated_at' => '2021-07-30 14:08:33',
            ),
            43 => 
            array (
                'id' => 49,
                'key' => 'edit_pages',
                'table_name' => NULL,
                'created_at' => '2021-07-30 14:08:33',
                'updated_at' => '2021-07-30 14:08:33',
            ),
            44 => 
            array (
                'id' => 50,
                'key' => 'add_pages',
                'table_name' => NULL,
                'created_at' => '2021-07-30 14:08:33',
                'updated_at' => '2021-07-30 14:08:33',
            ),
            45 => 
            array (
                'id' => 51,
                'key' => 'delete_pages',
                'table_name' => NULL,
                'created_at' => '2021-07-30 14:08:33',
                'updated_at' => '2021-07-30 14:08:33',
            ),
            46 => 
            array (
                'id' => 52,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2021-07-30 14:08:33',
                'updated_at' => '2021-07-30 14:08:33',
            ),
            47 => 
            array (
                'id' => 53,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2021-07-30 14:08:33',
                'updated_at' => '2021-07-30 14:08:33',
            ),
            48 => 
            array (
                'id' => 54,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2021-07-30 14:08:33',
                'updated_at' => '2021-07-30 14:08:33',
            ),
            49 => 
            array (
                'id' => 55,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2021-07-30 14:08:33',
                'updated_at' => '2021-07-30 14:08:33',
            ),
            50 => 
            array (
                'id' => 56,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2021-07-30 14:08:33',
                'updated_at' => '2021-07-30 14:08:33',
            ),
        ));
        
        
    }
}