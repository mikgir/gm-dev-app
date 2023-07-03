<?php

namespace App\Contracts;

interface BaseRepositoryInterface
{
    public function getAll();

    public function getOne($id);

}
