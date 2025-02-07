<?php

namespace app\interfaces;

interface Crud
{
    public function insert(string $table,array $data):int;
    public function delete(string $table,int $id):int;
    public function select(string $table,int $id):object;
    public function update(string $table,int $id,array $data):int;
}