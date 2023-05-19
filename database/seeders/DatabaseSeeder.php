<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // Membuat seeder barang
        Barang::create([
            'nama' => 'Realme 3 Pro',
            'kategori_id' => 1,
            'warna_dasar' => 'Biru',
            'warna_sekunder' => 'Hitam',
            'Brand' => 'Realme',
            'Lokasi' => 'Meulaboh',
            'Waktu' => Carbon::now()->toDateTimeString(), // untuk inisiasi waktu sekarang
            'nama_penemu' => 'Alex',
            'noHP' => '082267450565',
            'email' => 'alex@gmail.com'
        ]);
        Barang::create([
            'nama' => 'Dompet Kulit',
            'kategori_id' => 3,
            'warna_dasar' => 'Coklat',
            'warna_sekunder' => 'Merah',
            'Brand' => 'Unknown',
            'Lokasi' => 'Banda Aceh',
            'Waktu' => Carbon::now()->toDateTimeString(),
            'nama_penemu' => 'Alex',
            'noHP' => '08123456790',
            'email' => 'alex@gmail.com'
        ]);
        Barang::create([
            'nama' => 'Lucifer T1 TWS',
            'kategori_id' => 5,
            'warna_dasar' => 'Hitam',
            'warna_sekunder' => 'Hitam',
            'Brand' => 'Black Shark',
            'Lokasi' => 'Lhokseumawe',
            'Waktu' => Carbon::now()->toDateTimeString(),
            'nama_penemu' => 'Alex',
            'noHP' => '08123456790',
            'email' => 'alex@gmail.com'
        ]);
        Barang::create([
            'nama' => 'Realme 5 Pro',
            'kategori_id' => 1,
            'warna_dasar' => 'Biru',
            'warna_sekunder' => 'Hitam',
            'Brand' => 'Realme',
            'Lokasi' => 'Meulaboh',
            'Waktu' => Carbon::now()->toDateTimeString(), // untuk inisiasi waktu sekarang
            'nama_penemu' => 'Alex',
            'noHP' => '082267450565',
            'email' => 'alex@gmail.com'
        ]);
        Barang::create([
            'nama' => 'Dompet Plastik',
            'kategori_id' => 3,
            'warna_dasar' => 'Coklat',
            'warna_sekunder' => 'Merah',
            'Brand' => 'Unknown',
            'Lokasi' => 'Banda Aceh',
            'Waktu' => Carbon::now()->toDateTimeString(),
            'nama_penemu' => 'Alex',
            'noHP' => '08123456790',
            'email' => 'alex@gmail.com'
        ]);
        Barang::create([
            'nama' => 'Shark T2 TWS',
            'kategori_id' => 5,
            'warna_dasar' => 'Hitam',
            'warna_sekunder' => 'Hitam',
            'Brand' => 'Black Shark',
            'Lokasi' => 'Lhokseumawe',
            'Waktu' => Carbon::now()->toDateTimeString(),
            'nama_penemu' => 'Alex',
            'noHP' => '08123456790',
            'email' => 'alex@gmail.com'
        ]);
        


        Kategori::create([
            'nama' => 'Handphone',
            'slug' => 'handphone',
            'english' => 'handphone'
        ]);
        
        Kategori::create([
            'nama' => 'Tas',
            'slug' => 'tas',
            'english' => 'bag'
        ]);
        
        Kategori::create([
            'nama' => 'Dompet',
            'slug' => 'dompet',
            'english' => 'wallet'
        ]);
        
        Kategori::create([
            'nama' => 'Pakaian',
            'slug' => 'pakaian',
            'english' => 'clothing'
        ]);
        
        Kategori::create([
            'nama' => 'Elektronik',
            'slug' => 'elektronik',
            'english' => 'electronics'
        ]);
        
        Kategori::create([
            'nama' => 'Hewan',
            'slug' => 'hewan',
            'english' => 'animal'
        ]);
        
        Kategori::create([
            'nama' => 'Kunci',
            'slug' => 'kunci',
            'english' => 'key'
        ]);
        
        Kategori::create([
            'nama' => 'Laptop',
            'slug' => 'laptop',
            'english' => 'laptop'
        ]);
        
        Kategori::create([
            'nama' => 'Kacamata',
            'slug' => 'kacamata',
            'english' => 'eyeglasses'
        ]);
        
        Kategori::create([
            'nama' => 'Sepeda',
            'slug' => 'sepeda',
            'english' => 'bicycle'
        ]);
        
        Kategori::create([
            'nama' => 'Jam Tangan',
            'slug' => 'jam-tangan',
            'english' => 'watch'
        ]);
        
        User::create([
            'name' => 'iniadmingantengsekali270703',
            'email' => 'miminganteng@gmail.com',
            'password' => Hash::make('miminganteng'),
        ]);
        User::create([
            'name' => 'fajry',
            'email' => 'fajry@gmail.com',
            'password' => Hash::make('fajry'),
        ]);

        // $this->call([
        //     ProvincesSeeder::class,
        //     CitiesSeeder::class,
        //     DistrictsSeeder::class,
        //     VillagesSeeder::class,
        // ]);

    }
}
