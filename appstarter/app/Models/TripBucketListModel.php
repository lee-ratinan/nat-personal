<?php

namespace App\Models;

use CodeIgniter\Model;

class TripBucketListModel extends Model
{
    protected $table = 'trip_bucket_list';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}