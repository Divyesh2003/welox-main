<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert(array(
  array('id' => '1','parent_id' => NULL,'name' => 'Tablet','slug' => 'tablet','image' => '2023/10/24/tablet_14-26-06.png','icon' => NULL,'description' => 'Tablet','meta_title' => 'Tablet','meta_description' => 'Tablet','meta_keywords' => 'Tablet','total_view' => NULL,'status' => '1','created_by' => NULL,'updated_by' => NULL,'created_at' => '2023-10-24 14:26:06','updated_at' => '2023-10-24 14:26:06','deleted_at' => NULL),
  array('id' => '2','parent_id' => NULL,'name' => 'Capsule','slug' => 'capsule','image' => '2023/10/24/capsule_14-26-53.png','icon' => NULL,'description' => 'Capsule','meta_title' => 'Capsule','meta_description' => 'Capsule','meta_keywords' => 'Capsule','total_view' => NULL,'status' => '1','created_by' => NULL,'updated_by' => NULL,'created_at' => '2023-10-24 14:26:53','updated_at' => '2023-10-24 14:26:53','deleted_at' => NULL),
  array('id' => '3','parent_id' => NULL,'name' => 'Creams','slug' => 'creams','image' => '2023/10/24/creams_14-27-40.png','icon' => NULL,'description' => 'Creams','meta_title' => 'Creams','meta_description' => 'Creams','meta_keywords' => 'Creams','total_view' => NULL,'status' => '1','created_by' => NULL,'updated_by' => NULL,'created_at' => '2023-10-24 14:27:40','updated_at' => '2023-10-24 14:27:40','deleted_at' => NULL),
  array('id' => '4','parent_id' => NULL,'name' => 'Eye/Ear Drop','slug' => 'eye-drops','image' => '2023/10/24/eye-drop_14-28-19.png','icon' => NULL,'description' => 'Eye/Ear Drop','meta_title' => 'Eye/Ear Drop','meta_description' => 'Eye/Ear Drop','meta_keywords' => 'Eye/Ear Drop','total_view' => NULL,'status' => '1','created_by' => NULL,'updated_by' => NULL,'created_at' => '2023-10-24 14:28:19','updated_at' => '2023-10-24 14:28:19','deleted_at' => NULL),
  array('id' => '5','parent_id' => NULL,'name' => 'Injection','slug' => 'injection','image' => '2023/10/24/injection_14-29-00.png','icon' => NULL,'description' => 'Injection','meta_title' => 'Injection','meta_description' => 'Injection','meta_keywords' => 'Injection','total_view' => NULL,'status' => '1','created_by' => NULL,'updated_by' => NULL,'created_at' => '2023-10-24 14:29:00','updated_at' => '2023-10-24 14:29:00','deleted_at' => NULL),
  array('id' => '6','parent_id' => '["1","5"]','name' => 'Anaesthetic','slug' => 'anaesthetic','image' => 'null','icon' => NULL,'description' => 'Anaesthetic','meta_title' => 'Anaesthetic','meta_description' => 'Anaesthetic','meta_keywords' => 'Anaesthetic','total_view' => NULL,'status' => '1','created_by' => NULL,'updated_by' => NULL,'created_at' => '2023-10-24 14:30:11','updated_at' => '2023-10-24 14:30:11','deleted_at' => NULL),
  array('id' => '7','parent_id' => '["1","2"]','name' => 'Analgesic','slug' => 'analgesic','image' => 'null','icon' => NULL,'description' => 'Analgesic','meta_title' => 'Analgesic','meta_description' => 'Analgesic','meta_keywords' => 'Analgesic','total_view' => NULL,'status' => '1','created_by' => NULL,'updated_by' => NULL,'created_at' => '2023-10-24 14:30:43','updated_at' => '2023-10-24 14:30:43','deleted_at' => NULL),
  array('id' => '8','parent_id' => '["1","2"]','name' => 'Antacid','slug' => 'antacid','image' => 'null','icon' => NULL,'description' => 'Antacid','meta_title' => 'Antacid','meta_description' => 'Antacid','meta_keywords' => 'Antacid','total_view' => NULL,'status' => '1','created_by' => NULL,'updated_by' => NULL,'created_at' => '2023-10-24 14:31:17','updated_at' => '2023-10-24 14:31:17','deleted_at' => NULL),
  array('id' => '9','parent_id' => '["1","2"]','name' => 'Anthelmintic','slug' => 'anthelmintic','image' => 'null','icon' => NULL,'description' => 'Anthelmintic','meta_title' => 'Anthelmintic','meta_description' => 'Anthelmintic','meta_keywords' => 'Anthelmintic','total_view' => NULL,'status' => '1','created_by' => NULL,'updated_by' => NULL,'created_at' => '2023-10-24 14:31:52','updated_at' => '2023-10-24 14:31:52','deleted_at' => NULL)
          ));
    }
}
