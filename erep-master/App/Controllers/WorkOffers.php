<?php

namespace App\Controllers;

use App\Models\Country;
use App\Models\WorkOffer;
use App\System\App;
use App\System\AppException;
use App\System\Controller;

class WorkOffers extends Controller
{
    public function showList ()
    {
        $page = (int)$_GET["page"];
        $country = (int)$_GET["country"];
        $limitPerPage = 15;

        $offers = WorkOffer::where([
            "country" => $country,
            "worker" => null
        ])->paginate($limitPerPage);

        return $this->render('market/workList.html.twig', [
            "offers" => $offers,
            "countryList" => Country::all()->toArray()
        ]);
    }
}