<?php
namespace Parent;

class Base
{
    public $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
