<?php

class dispaly1{
    public $name; 
    public $age; 

    public function pub1() :string
    {
        return $this->name. 'class1 value';

    }
}

class dispaly2{
    public $name; 
    public $age; 

    public function pub1() :string
    {
        return $this->name. 'class1 value';

    }
}

$obj1 = new dispaly1;
$obj2 = new dispaly2;
# example 01
if ($obj1 instanceof dispaly2){
    echo "This is object of class dispaly1";
}
else{
    echo "This is no object of class dispaly1";
}
# answer
# This is object of class dispaly1"



# example 02
if ($obj1 instanceof dispaly2){
    echo "This is object of class dispaly1";
}
else{
    echo "This is no object of class dispaly1";
}
# answer
# This is no object of class dispaly1


 



# note:
# ata akta object ki na seta check kore 
# 
?>

