<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Thiagoprz\CompositeKey\HasCompositeKey;

class BiblioAuthor extends Model
{
    use HasFactory;
    use HasCompositeKey;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'biblio_author';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['biblio_id', 'author_id'];
}
