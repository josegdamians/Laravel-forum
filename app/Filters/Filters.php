<?php

namespace App\Filters;

use Illuminate\Http\Request;

abstract class Filters
{

    protected $request, $builder;

    protected $filters = [];

    /**
     * 
     *  ThreadFilters construct
     * 
     *  @param Request $request
     */

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($builder)
    {
        $this->builder = $builder;

        foreach($this->getFilters() as $filter => $value) {
            if (method_exists($this, $filter)) {

                $this->$filter($value);
            }
        }

        return $this->builder;
    }

    public function getFilters()
    {
        return $this->intersect($this->filters);
    }

    public function intersect($keys)
    {
        return array_filter($this->request->only(is_array($keys) ? $keys : func_get_args()));
    }
}