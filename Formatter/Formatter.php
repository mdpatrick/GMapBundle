<?php

namespace Bundle\GMapBundle\Formatter;

abstract class Formatter
{

    protected $data, $status;

    public function __construct(array $data)
    {
        $this->status = $data['status'];

        if($this->isOk()) {
            $this->data = $data['results'][0];
        }
    }

    public function getStatus()
    {
        return $this->status();
    }

    public function isOk()
    {
        return $this->status === 'OK';
    }

}