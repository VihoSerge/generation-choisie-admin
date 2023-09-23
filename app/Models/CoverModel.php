<?php

namespace App\Models;

use CodeIgniter\Model;

class CoverModel extends Model
{
    protected $table = 'covers';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'description',
        'title',
        'url'
    ];
}
