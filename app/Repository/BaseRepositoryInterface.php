<?php

namespace App\Repository;


use Illuminate\Http\Request;

interface BaseRepositoryInterface{
    // public function addCategory(Request $request);

    // public function updateCategory(Request $request, $id);

    // public function deleteCategory($id);

    public function getList($limit);
    public function getdogs();
    public function getCountry();

    // public function getEditCategory($id);

}