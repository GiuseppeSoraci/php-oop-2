<?php
class product
{

    public $_brand;
    public $_model;
    public $_exit_date;
    public $_price;
    public $_features;

    // Functions
    public function __construct($_brand, $_model, $_exit_date, $_price, $_features)
    {

        $this->brand = $_brand;
        $this->model = $_model;
        $this->exit_date = $_exit_date;
        $this->price = $_price;
        $this->features = $_features;
    }

    public function getInfoData()
    {
        return [
            'brand' => $this->brand,
            'model' => $this->model,
            'exit_date' => $this->exit_date,
            'price' => $this->price,
            'features' => $this->features
        ];
    }
}
