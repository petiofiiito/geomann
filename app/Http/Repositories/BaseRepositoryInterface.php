<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
   /**
    * @param array $attributes
    * @return Model
    */
   public function createRecord(array $attributes): Model;

   /**
    * @param $id
    * @return Model
    */
   public function updateRecord($id, array $attributes): Model;

   /**
    * @param $id
    * @return Model
    */
    public function findRecord($id): ?Model;

    /**
    * @param $id
    * @return boolean
    */
   public function deleteRecord($id): boolean;
}