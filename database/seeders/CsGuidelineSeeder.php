<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Section;
use App\Models\SectionItem;

class CsGuidelineSeeder extends Seeder
{
    public function run(): void
    {
        // =========================
        // CATEGORY
        // =========================
        $cs = Category::create(['name' => 'CS', 'slug' => 'cs']);
        $service = Category::create(['name' => 'Pelayanan', 'slug' => 'service']);
        $faq = Category::create(['name' => 'FAQ', 'slug' => 'faq']);

        // =========================
        // CS SECTIONS
        // =========================
        $sop = Section::create([
            'category_id' => $cs->id,
            'title' => 'SOP CS',
            'order_number' => 1
        ]);

        SectionItem::insert([
            [
                'section_id' => $sop->id,
                'title' => 'Etika & Sikap',
                'description' => '3S (Senyum, Sapa, Salam)...',
            ],
            [
                'section_id' => $sop->id,
                'title' => 'Penanganan Keluhan',
                'description' => 'Metode HEAT...',
            ],
        ]);

        Section::create([
            'category_id' => $cs->id,
            'title' => 'Barang Hilang',
            'order_number' => 2
        ]);

        Section::create([
            'category_id' => $cs->id,
            'title' => 'Penerimaan Surat',
            'order_number' => 3
        ]);

        Section::create([
            'category_id' => $cs->id,
            'title' => 'Permintaan Nomor Paspor',
            'order_number' => 4
        ]);

        Section::create([
            'category_id' => $cs->id,
            'title' => 'Eskalasi Masalah',
            'order_number' => 5
        ]);

        // =========================
        // PELAYANAN SECTIONS
        // =========================
        $paspor = Section::create([
            'category_id' => $service->id,
            'title' => 'Layanan Paspor',
        ]);

        SectionItem::insert([
            [
                'section_id' => $paspor->id,
                'title' => 'Informasi Umum',
                'description' => 'Paspor RI adalah dokumen perjalanan...',
            ],
            [
                'section_id' => $paspor->id,
                'title' => 'Persyaratan',
                'description' => 'KTP, KK, Akta...',
            ],
            [
                'section_id' => $paspor->id,
                'title' => 'Prosedur',
                'description' => 'Daftar online M-Paspor...',
            ],
            [
                'section_id' => $paspor->id,
                'title' => 'Biaya',
                'description' => 'Rp 650.000 - Rp 950.000',
            ],
        ]);

        Section::create([
            'category_id' => $service->id,
            'title' => 'Visa & Izin Tinggal',
        ]);

        Section::create([
            'category_id' => $service->id,
            'title' => 'Jam Operasional',
        ]);

        Section::create([
            'category_id' => $service->id,
            'title' => 'Layanan Spesial Kantor',
        ]);

        // =========================
        // FAQ
        // =========================
        $faq1 = Section::create([
            'category_id' => $faq->id,
            'title' => 'E-VOA Requirements',
        ]);

        SectionItem::create([
            'section_id' => $faq1->id,
            'title' => 'Syarat',
            'description' => 'Paspor minimal 6 bulan + tiket pulang',
        ]);
    }
}