<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class UserFilter extends ModelFilter
{


    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];



    protected $blacklist = ['secretMethod'];



    public function search($value)
    {
        return $this->where(function($q) use ($value)
        {
            return $q->where('name', 'LIKE', "%$value%")
                ->orWhere('email', 'LIKE', "%$value%");
        });
    }

    public function name($name)
    {
        return $this->where('name', 'LIKE', "%$name%");
    }


    public function industry($id)
    {
        return $this->related('clients', 'user_id', '=', $id);
    }

    public function clientName($value)
    {
       return $this->whereHas('clients', function($query) use ($value){
           return $query->where('name', 'LIKE', "%$value%");
       });
    }

    public function email($email)
    {
        return $this->where('email', 'LIKE', "%$email%");
    }


}
