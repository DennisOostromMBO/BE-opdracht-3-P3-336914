<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'Contact';

    protected $primaryKey = 'Id';

    protected $fillable = [
        'Straat',
        'Huisnummer',
        'Postcode',
        'Stad',
    ];

    public $timestamps = false;

    public function leveranciers()
    {
        return $this->hasOne(Leverancier::class, 'ContactId', 'Id'); 
    }
}

