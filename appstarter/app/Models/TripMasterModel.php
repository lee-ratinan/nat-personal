<?php

namespace App\Models;

use CodeIgniter\Model;

class TripMasterModel extends Model
{
    protected $table = 'trip_master';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getGalleries(string $locale): array
    {
        $link_model    = new TripLinkModel();
        $all_galleries = $this->orderBy('trip_start_date', 'DESC')->findAll();
        $all_links     = $link_model->findAll();
        $galleries     = [];
        foreach ($all_galleries as $gallery) {
            $dates       = [$gallery['trip_start_date']];
            if (!empty($gallery['trip_end_date'])) {
                $dates[] = $gallery['trip_end_date'];
            }
            $galleries[$gallery['id']] = [
                'code'      => $gallery['trip_code'],
                'country'   => substr($gallery['trip_country_code'], 0, 2),
                'countries' => explode(',', $gallery['trip_country_code']), // NEW - support 3 countries max
                'filter'    => $gallery['trip_filter'],
                'title'     => $gallery['trip_title'],
                'locations' => explode(',', $gallery['trip_locations']),
                'dates'     => $dates,
                'details'   => $gallery['trip_subtitle'],
            ];
        }
        foreach ($all_links as $link) {
            if ('gallery' == $link['link_type']) {
                $galleries[$link['trip_id']]['link'] = "/{$locale}" . $link['page_url'];
            } else {
                $galleries[$link['trip_id']]['junrei'][] = [
                    'link'  => "/{$locale}/" . $link['page_url'],
                    'title' => $link['page_title']
                ];
            }
        }
        return $galleries;
    }
}