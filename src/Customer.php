<?php
namespace Parent;

class Customer extends Base
{
    public function index($skip=0,$take=20,$data = [])
    {
        return $this->client->request(
            'customers?skip%5D='.$skip.'&take%5D='.$take,
            $data,
            'GET'
        );
    }

    public function create($data)
    {
        return $this->client->request(
            'customers',
            $data,
	        'POST'
        );
    }

    public function show($id , $data = [])
    {
        return $this->client->request(
            'customers/' . $id,
            $data,
            'GET'
        );
    }

    public function update($id , $data = [])
    {
        return $this->client->request(
            'customers/' . $id,
            $data,
            'POST'
        );
    }
    
    public function delete($id , $data = [])
    {
        return $this->client->request(
            'customers/' . $id,
            $data,
            'DELETE'
        );
    }
}
