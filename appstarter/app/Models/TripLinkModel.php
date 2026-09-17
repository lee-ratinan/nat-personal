<?php

namespace App\Models;

use CodeIgniter\Model;

class TripLinkModel extends Model
{
    protected $table = 'trip_link';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}