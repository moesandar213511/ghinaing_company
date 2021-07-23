<?php


namespace App\CustomClass;

use App\Feedback;

class FeedbackData
{

    private $id;
    private $feedback_data;

    function __construct($feedback_id) {
        $feedback=Feedback::findOrFail($feedback_id);
        $this->id=$feedback->id;
        $this->setFeedbackData($feedback);
    }

    /**
     * @return mixed
     */
    public function getFeedbackData()
    {
        $this->feedback_data['photo_url']=Path::$domain_url.'upload/feedback/'.$this->feedback_data['photo'];

        return $this->feedback_data;
    }

    /**
     * @param mixed $feedback_data
     */
    private function setFeedbackData($feedback_data)
    {
        $this->feedback_data = $feedback_data;
    }

}