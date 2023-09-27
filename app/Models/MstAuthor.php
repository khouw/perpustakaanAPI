<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstAuthor extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mst_author';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'author_id';

}
