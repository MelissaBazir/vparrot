<?php

namespace App\Data;

use App\Entity\Car;

class SearchData
{
    /**
     * Undocumented variable
     *
     * @var integer
     */
    public $page = 1;
    /**
     * Undocumented variable
     *
     * @var string
     */
    public $q = '';

    /**
     * @var car[]
     */
    public $cars = [];
    
    /**
     * Undocumented variable
     *
     * @var null|integer
     */
    public $maxYear;

    /**
     * Undocumented variable
     *
     * @var null|integer
     */
    public $minYear;

    /**
     * Undocumented variable
     *
     * @var null|integer
     */
    public $maxMileage;

    /**
     * Undocumented variable
     *
     * @var null|integer
     */
    public $minMileage;

    /**
     * Undocumented variable
     *
     * @var null|integer
     */
    public $maxPrice;

    /**
     * Undocumented variable
     *
     * @var null|integer
     */
    public $minPrice;
}