<?php 
namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository {
    private $model;

    public function __construct(Customer $customer)
    {
        $this->model = $customer;
    }

    public function getAll($select = ['*'])
    {
        $searchValues = request()->all();
        $query = $this->model->select($select);
        // foreach ($searchValues as $column => $value) {
        //     $query->orWhere($column, 'like', "%{$value}%");    
        // } 
        return $query->get();
    }
}
