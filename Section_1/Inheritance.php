<?php
class Collection
{
    protected $items=array();
    public function __construct(array $items){
        $this->items = $items;
    }

    public function sum($key){
        return array_sum(array_map(fn($item) => $item->$key,$this->items));
    }
}

class VideoCollection extends Collection{
    public function length(){
        return $this->sum('length');
    }
}
class Video 
{
    public $title;
    public $length;

    public function __construct($title, $length){
        $this->title = $title;
        $this->length = $length;
    }
}
$collection = new VideoCollection([
    new Video('1',100),
    new Video('2',200),
]);
echo $collection->length();
?>