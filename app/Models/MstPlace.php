<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstPlace extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mst_place';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'place_id';
}
