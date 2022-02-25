<?php

class Person
{
    private string $lastname;
    private string $firstname;
    private string $adress;
    private string $birthDate;

    public function __construct(string $lastname, string $firstname, string $adress, string $birthDate)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->adress = $adress;
        $this->birthDate = $birthDate;
    }

    public function getPerson(): string
    {
        return "Cette personne s'appelle ".$this->firstname." ".$this->lastname.", est né(e) le ".$this->birthDate." et habite au ".$this->adress;
    }

    public function getAge()
    {
        $birthDate = $this->birthDate;
        $currentDate = date("d-m-Y");
        $age = date_diff(date_create($birthDate), date_create($currentDate));
        return $this->firstname." ".$this->lastname." à ".$age->format("%y"). " ans";
    }



    public function setAdress($adress)
    {
        $this->adress = $adress;
    }
}