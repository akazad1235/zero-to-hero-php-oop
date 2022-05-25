<?php
class DistrictCollection implements IteratorAggregate{
    public $districts;

    function __construct()
    {
        $this->districts = array();
    }
    public function add($district){
        array_push($this->districts, $district);
    }
    public function getDistricts()
    {
        return $this->districts;
    }
    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }
    
}

$districts = new DistrictCollection;
$districts->add('Rajshahi');
$districts->add('Rangpur');
$districts->add('Dinajpur');

foreach($districts as $district){
    echo $district."\n";
}

