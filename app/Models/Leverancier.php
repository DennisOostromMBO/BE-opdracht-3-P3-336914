<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    use HasFactory;

    protected $table = 'Leverancier';

    protected $primaryKey = 'Id';

    protected $fillable = [
        'Naam',
        'ContactPersoon',
        'Leveranciernummer',
        'Mobiel',
        'ContactId'
    ];

    public $timestamps = false;

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'ContactId', 'Id');  
    }
    
}
