<?php

namespace App\Models;

use CodeIgniter\Model;

class TripBucketListLogModel extends Model
{
    protected $table = 'trip_bucket_list_log';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}