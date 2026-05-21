<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Section;
use App\Models\SectionItem;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $category = Category::create([
            'name' => 'Pelayanan Umum',
            'slug' => 'pelayanan-umum',
        ]);

        $section = Section::create([
            'category_id' => $category->id,
            'title' => 'Layanan Paspor',
        ]);

        SectionItem::create([
            'section_id' => $section->id,
            'title' => 'Informasi Umum',
            'content' => 'Paspor RI adalah dokumen perjalanan resmi.'
        ]);

        SectionItem::create([
            'section_id' => $section->id,
            'title' => 'Persyaratan',
            'content' => '1. KTP\n2. KK\n3. Akta Lahir'
        ]);
    }
}