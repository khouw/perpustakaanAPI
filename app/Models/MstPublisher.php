<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstPublisher extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mst_publisher';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'publisher_id';

    
}
