<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ProductImport implements ToModel ,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'category_id' => $row['category_id'],
            'subcategory_id' => $row['subcategory_id'],
            'name' => $row['name'],
            'slug' => $row['slug'],
            'description' => $row['description'],
            'image' => $row['image'],
            'gallery' => $row['gallery'],
            'available_strength' => $row['available_strength'],
            'trade_name' => $row['trade_name'],
            'packing' => $row['packing'],
            'pack_insert_leaflet' => $row['pack_insert_leaflet'],
            'therapeutic_use' => $row['therapeutic_use'],
            'production_capacity' => $row['production_capacity'],
            'meta_title' => $row['meta_title'],
            'meta_description' => $row['meta_description'],
            'meta_description' => $row['meta_description'],
            'status' => $row['status'],
        ]);
    }
}
