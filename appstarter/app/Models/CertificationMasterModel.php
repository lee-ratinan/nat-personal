<?php

namespace App\Models;

use CodeIgniter\Model;

class CertificationMasterModel extends Model
{
    protected $table = 'certification_master';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function retrieveData(): array
    {
        return $this->select('certification_master.*, certification_institution.institution_name, certification_institution.institution_native_name, certification_institution.country_code')
            ->join('certification_institution', 'certification_institution.id = certification_master.certification_institution_id')
            ->findAll();
    }
}