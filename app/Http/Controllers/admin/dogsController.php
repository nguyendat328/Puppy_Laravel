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
    public function index(Request $request){
       
            $limit =$request->txtLimit;   
            if(!isset($limit)){
                $limit=5;
            }
        return view('admin.dogs.index',['showdog'=> $this->DogsRepository->getList($limit)]);
    }
    public function add(){
        return view('admin.dogs.form',['countrys'=>$this->DogsRepository->getCountry()]);

    }
    public function edit(){
        return view('admin.dogs.form',['dog'=> $this->DogsRepository->getdogs(),'countrys'=>$this->DogsRepository->getCountry()]);

    }
    public function store(Request $request){
        

    }
}
