<?php
require_once("kvadraticka_rovnice.php");
/*
* Vytvoříme si body potřebné k výpočtu kvadratické rovnice
*/
$a = -5;
$b = -10;
$c = 6;
/*
* Zavoláme funkti create v classe CreateKvadr 
* Zadáme hodnoty a, b, c pro výpočet kvadratické rovnice
* Využíváme konstrukřní metodu "Factory"
*/
$kvadr = CreateKvadr::create($a, $b, $c);
/*
* Classe SimpleKvadr pošleme informace o bodech a, b, c a výsledek kvadratické rovnice
* Poté se tyto hodnoty uloží do private hodnot
* Využíváme zde a v nadcházejícím kroku motodu "Adapter Design"
*/
$simpleKvadr = new SimpleKvadr($a, $b, $c, $kvadr->getKvadr());
/*
* Zavoláme si classu KvadrAdapter
* Do proměnné kvadrAdapter si uložíme objekt z classy KvadrAdapter
*/
$kvadrAdapter = new KvadrAdapter($simpleKvadr);
/*
* Nakonec si v classe KvadrAdapter zavoláme funkci get_Info, které nám vrátí řetězec s informacemi o kvadratické informaci
* Tyto informace už jenom vypíšeme. 
*/
print_r('Informace o kvadratické rovnici:<br>' . $kvadrAdapter->get_Info());
