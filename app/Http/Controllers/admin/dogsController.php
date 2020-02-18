<?php

namespace App\Http\Controllers\Admin;

use App\Repository\BaseRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class dogsController extends Controller
{
    
    private $DogsRepository;

    public function __construct(BaseRepositoryInterface $DogsRepository)
    {
        $this->DogsRepository = $DogsRepository;

    }
    public function showk(Request $request){
       
            $limit =$request->txtLimit;   
            if(!isset($limit)){
                $limit=5;
            }
        return view('admin.dogs.index',['showdog'=> $this->DogsRepository->getList($limit)]);
    }
}
