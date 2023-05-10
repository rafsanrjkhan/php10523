<?php
class Student {
    public $name;
    public $address;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    public function getStudent()
    {
        $studentInfo = [
            'name' => $this->name,
            'address' => $this->address,
        ];
    return $studentInfo;    
    }
}

$studentobj = new Student;
$studentInfo = $studentobj->setName('Mr. Smith')
->getStudent();
echo '<pre>';
print_r($studentInfo);