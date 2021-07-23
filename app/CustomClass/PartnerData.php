<?php


namespace App\CustomClass;

use App\Partnercompany;

class PartnerData
{

    private $id;
    private $partner_data;

    function __construct($partner_id) {
        $member=Partnercompany::findOrFail($partner_id);
        $this->id=$member->id;
        $this->setPartnerData($member);
    }

    /**
     * @return mixed
     */
    public function getPartnerData()
    {
        $this->partner_data['photo_url']=Path::$domain_url.'/upload/partnercompany/'.$this->partner_data['photo'];

        return $this->partner_data;
    }

    /**
     * @param mixed $partner_data
     */
    private function setPartnerData($partner_data)
    {
        $this->partner_data = $partner_data;
    }

}