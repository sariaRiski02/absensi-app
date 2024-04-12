<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participant extends Model
{
    use HasFactory;
    protected $table = 'participant';
    protected $id = 'id';



    protected $guarded = [
        'id',
    ];

    public function group()
    {
        return $this->belongsTo(group::class, 'id_group', 'id');
    }
}
