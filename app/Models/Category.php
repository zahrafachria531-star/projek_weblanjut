<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    //kategori ini mencakup (belongsToMany) campaign apa saja?
    public function campaigns()
    {
        //Parameter kedua adalah nama tabel pivot yang kita buat di migration
        return $this->belongsToMany(Campaign::class);
    }
}
