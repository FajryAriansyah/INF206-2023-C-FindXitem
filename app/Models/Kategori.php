<?php

namespace App\Models;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori'; // untuk menghubungkan ke tabel kategori
    protected $fillable = ['nama','slug', 'english'];
    public function barang(){
        return $this->hasMany(Barang::class);
    }
}
