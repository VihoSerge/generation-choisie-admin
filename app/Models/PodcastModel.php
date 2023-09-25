<?php

namespace App\Models;

use CodeIgniter\Model;

class PodcastModel extends Model
{
    protected $table = 'podcasts';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'description',
        'name',
        'url'
    ];
}
