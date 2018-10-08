<?php
namespace Sorter;

class SorterTypes
{
    public function asc()
	{
		$arr = $this->data;
		
		for($i=0; $i<count($arr); $i++){
		   for($j=$i+1; $j<count($arr); $j++){
			   if($arr[$i]>$arr[$j]){
				   $temp = $arr[$j];
				   $arr[$j] = $arr[$i];
				   $arr[$i] = $temp;
			   }
		  }         
		}
		
		return $arr;
	}
	
	public function desc()
	{
		$arr = $this->data;

		for($i=0; $i<count($arr); $i++){
		   for($j=$i+1; $j<count($arr); $j++){
			   if($arr[$i]<$arr[$j]){
				   $temp = $arr[$j];
				   $arr[$j] = $arr[$i];
				   $arr[$i] = $temp;
			   }
		  }         
		}
		
		return $arr;
	}
}