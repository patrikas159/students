<?php
namespace ProductsAPP;

class Students{
    public $klase;
    public $kodas;
    public $vardas;
    public $pavarde;
    public $vidurkis;
    public $data;

    public function __construct($klase, $kodas, $vardas, $pavarde, $vidurkis, $data)
    {
        $this->klase = $klase;
        $this->kodas = $kodas;
        $this->vardas= $vardas;
        $this->pavarde= $pavarde;
        $this->vidurkis = $vidurkis;
        $this->data = $data;

    }
    public function showStudents()
    {
        return[
            $this->klase,
            $this->kodas,
            $this->vardas,
            $this->pavarde,
            $this->vidurkis,
            $this->data
        ];
    }

}