<?php

namespace App\Models;

class Location 
{
    private static $church_locations = [
        [
            "nama_pos" => "GKI Sulawesi Selatan Jemaat Palu",
            "slug" => "gki-sulawesi-selatan-jemaat-palu",
            "alamat_pos"=> "Jl. Pattimura No. 53, Kota Palu, Sulawesi Tengah 94111",
            "tipe_pos"=> "Pusat",
            "jam_ibadah"=>"09.30"
        ],
        [
            "nama_pos" => "Gereja Cabang LIK Bumi Roviega",
            "slug" => "gereja-cabang-lik-bumi-roviga",
            "alamat_pos"=> "Jl. Palu Nagaya 2 No. 30-31",
            "tipe_pos"=> "Cabang",
            "jam_ibadah"=>"09.30"
        ],
        [
            "nama_pos" => "Pos PI Masara",
            "slug" => "pos-pi-masara",
            "alamat_pos"=> "Desa Masara Kab. Morowali",
            "tipe_pos"=> "Pos",
            "jam_ibadah"=>"09.00"
        ],
        [
            "nama_pos" => "Pos PI Tontowea",
            "slug" => "pos-pi-tontowea",
            "alamat_pos"=> "Desa Tontowea Kab. Morowali",
            "tipe_pos"=> "Pos",
            "jam_ibadah"=>"09.00"
        ]
    ];

    public static function all()
    {
        return collect(self::$church_locations);
    }

    public static function find ($slug)
    {
        $locations = static::all();
        // $location=[];
        // foreach($locations as $loc){
        //     if($loc["slug"]===$slug){
        //         $location=$loc;
        //     }
        // }
        return $locations->firstWhere('slug', $slug);
    }
}
