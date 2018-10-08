<?php
namespace Sorter;

require_once __DIR__ . "/SortetInterface.php";
//use Sorter\SorterInterface;

class Sorter extends SorterTypes implements SorterInterface
{

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function sort()
    {
        $arr = $this->data;
        if(!is_array($arr))
        {
            $arr = explode(",", $arr);
            foreach($arr as $key=>$ar)
                $arr[$key] = trim($ar);
        }

        $this->data = $arr;

        return $this;
    }
}
