<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toko extends Model
{
    use HasFactory;

    protected $table = 'tokos';
    protected $guarded = 'id';

    protected $fillable = [
        'x',
        'y',
        'nama',
        'alamat',
        'no_hp',
        'pemilik',
        'image',
        'jam_buka',
        'jam_tutup'
    ];

    protected $with = ['produk'];

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
     * Get the produk that owns the Toko
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class);
    }
}
