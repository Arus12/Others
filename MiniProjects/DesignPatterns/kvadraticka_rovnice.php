<?php
/*
* Class kvadr
*/
class kvadr
{
    /* 
    * Private hodnoty a, b, c
    */
    private $a;
    private $b;
    private $c;

    /*
    * Konstructor, který uloží hodnoty do private proměnných
    */
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /*
    * Funkce, která za pomocí funkce getD a showRoots vrátí hodnoty x1 a x2
    */
    public function getKvadr()
    {
        return ($this->showRoots($this->getD()));
    }

    /*
    * Funkce, která spočítá diskriminant
    */

    public function getD()
    {
        $d = pow($this->b, 2) - (4 * $this->a * $this->c);
        $this->check($d);
        return pow($this->b, 2) - (4 * $this->a * $this->c);
    }

    /*
    * Funkce, která Zkontroluje, zdali diskriminant vyšel kladně.
    * Když vyšel záporně, vrací jednoduchý string s errorem
    */
    public function check($d)
    {
        if ($d > 0) {
            return TRUE;
        }
        die("Diskriminant vyšel záporně nebo nulově.");
    }

    /*
    * Funkce, která spočítá hodnoty x1 a x2
    */
    public function showRoots($d)
    {
        $x = (-$this->b + sqrt($d)) / (2 * $this->a);
        $y = (-$this->b - sqrt($d)) / (2 * $this->a);
        return ("x1 = " . $x . "<br>x2 = " . $y);
    }
}

/*
* Class CreateKvadr
*/
class CreateKvadr
{
    /*
    * Funkce a také metoda "Factory", která vytvoří object kvadr
    */
    public static function create($a, $b, $c)
    {
        return new kvadr($a, $b, $c);
    }
}

/*
* Funkce a také metoda "Adapter Design", která ukládá hodnoty do private proměnných
* Poté pouze pomocí getterů vrací uložené hodnoty
*/
class SimpleKvadr
{
    private $Kvadr;
    private $a;
    private $b;
    private $c;
    function __construct($a, $b, $c, $Kvadr)
    {
        $this->Kvadr = $Kvadr;
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /*
    * Getter proměnné a
    */
    function getA()
    {
        return $this->a;
    }

    /*
    * Getter proměnné b
    */
    function getB()
    {
        return $this->b;
    }

    /*
    * Getter proměnné c
    */
    public function getC()
    {
        return $this->c;
    }

    /*
    * Getter proměnné Kvadr
    */
    public function getKvadr()
    {
        return $this->Kvadr;
    }
}

/*
* Funkce a také metoda "Adapter Design", která vypisuje informace o kvadratické rovnicis
*/
class KvadrAdapter
{
    private $kvadrA;
    /*
    * Konstruktor, který uloží objekt SimpleKvadr do private proměnné KvadrA
    */
    function __construct(SimpleKvadr $kvadrA_S)
    {
        $this->kvadrA = $kvadrA_S;
    }

    /*
    * Funkce, která vypíše informace o kvadratické rovnici
    */

    function get_Info()
    {
        return ("Zadali jste a = " . $this->kvadrA->getB() .
            "<br>Zadali jste b = " . $this->kvadrA->getB() .
            "<br>Zadali jste c = " . $this->kvadrA->getC()) .
            "<br><br>Výsledek:<br>" . $this->kvadrA->getKvadr();
    }
}
