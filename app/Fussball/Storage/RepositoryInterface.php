<?php namespace Fussball\Storage;


interface RepositoryInterface {
    public function all();
    public function find($id);
    public function create($input);
}