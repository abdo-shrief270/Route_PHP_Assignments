<?php
interface clientInt
{
    public function returnValues();
}

class client implements clientInt
{


    private $numOfHours;
    private $priceOfHour;
    private $discount;
    private $finalDiscount;
    private $salary;
    private $netSalary;
    private $department;
    private $departments=['internet technology'=>60,'customer service'=>55,'accountant'=>50];
    public function __construct($numOfHours, $department, $discount = 0)
    {
        $this->numOfHours = $numOfHours;
        $this->department = $department;
        $this->discount = $discount;
        $this->priceOfHour=$this->departments[$department];
        $this->calcSalary();
        $this->calcNetSalary();
    }


    private function calcSalary()
    {
        $this->salary = $this->numOfHours * $this->priceOfHour;
    }
    private function calcNetSalary()
    {
        $this->finalDiscount = $this->salary * ($this->discount / 100);
        $this->netSalary = $this->salary - $this->finalDiscount;
    }

    public function returnValues()
    {
        $result['salary'] = $this->salary;
        $result['netSalary'] = $this->netSalary;
        $result['numOfHours'] = $this->numOfHours;
        $result['priceOfHour'] = $this->priceOfHour;
        $result['discount'] = $this->discount;
        $result['finalDiscount'] = $this->finalDiscount;
        $result['department']=$this->department;
        return $result;
    }
}

if (isset($_POST['submit'])) {
    $newClient = new client($_POST['numOfHours'],$_POST['department'], $_POST['discount']);
    $result = $newClient->returnValues();
    header("location:final.php?" . "salary=" . $result['salary'] . "&netSalary=" . $result['netSalary'] . "&numOfHours=" . $result['numOfHours'] . "&priceOfHour=" . $result['priceOfHour'] . "&discount=" . $result['discount']. "&department=" . $result['department']."&finalDiscount=".$result['finalDiscount'] );
}
