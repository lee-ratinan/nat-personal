<?php

namespace App\Models;

use CodeIgniter\Model;

class JourneyTransportModel extends Model
{
    protected $table = 'journey_transport';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}