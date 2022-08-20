<?php

namespace App\Models;

use App\Models\Toko;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';
    protected $guarded = 'id';

    protected $fillable = [
        'nama',
        'image',
        'harga',
        'deskripsi'
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'nama';
    }

    /**
     * Get the toko that owns the Produk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toko(): BelongsTo
    {
        return $this->belongsTo(Toko::class);
    }
}
