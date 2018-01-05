<?php

namespace AppBundle\Service;

class MyService
{
    public function doSomething($data)
    {
        $data->setAuthor('moi');

        return $data;
    }

    public function reformat($data)
    {
        $data->setPublicationDate(new \DateTime());
    }
}
