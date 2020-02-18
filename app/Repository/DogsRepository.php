<?php

namespace App\Repository;

use App\Repository\BaseRepositoryInterface;
use App\Models\dogs;
use App\Models\country;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;




class DogsRepository implements BaseRepositoryInterface{


    public function getList($limit){
        $this->content= dogs::paginate($limit);
        return $this->content;
    }
    public function getdogs(){
        $content= dogs::all();
        return $content;
    }
    public function getCountry(){
        $this->content= country::all();
        return $this->content;
    }

    

    
}
