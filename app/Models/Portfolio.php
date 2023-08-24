<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//importo la tabella ( che nel db si chiama types)
use App\App\Models\Types;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'link','description','back_ender', 'front_ender','ux','ui','illustrator','type_id'];

    //La tabella types è dipendente dalla tabella
    public function types(){
        return $this->belongsTo(Types::class);
    }
}

