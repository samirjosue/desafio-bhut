<?php
declare(strict_types=1);
namespace src;
/**
 * @author Samir Josué <samirjosue@gmail.com>
 * @version 1.0.0
 */
class Multiple
{

    public function __construct()
    {
    }

    /** @var string[]
     * Constante de valores
     */
    const STRINGS = [
        "'BHUT TI'",
        "'BHUT'",
        "'IT'",
    ];

    /** Imprime os números de 1 a 100 testando se são multiplos de 3 e 5
     * @return void
     */
    public function printNumeros()
    {
        for ($i = 1; $i <= 100; $i++){
            echo $this->testMultiplo($i),"\n";
        }
    }

    /**
     * Testa se o número é multiplo de 3 e 5
     * @param $num
     * @return string
     * Se o número for multiplo de 3 retorna BHUT
     * Se o número for multiplo de 5 retorna IT
     * Se o número for multiplo de 3 e 5 retorna BHUT TI
     */
    function testMultiplo($num){
        $multiplo3 = $this->multiplo($num, 3);
        $multiplo5 = $this->multiplo($num, 5);
        $multiplo3e5 = $multiplo3 && $multiplo5;

        $array_multipos = [$multiplo3e5, $multiplo3, $multiplo5];

        foreach (self::STRINGS as $key => $value){
            if ($array_multipos[$key] === true){
                $num = self::STRINGS[$key];
                break;
            }
        }
        return $num;
    }

    /**
     * Verifica se o número é multiplo
     *
     * @param $numero
     * @param $divisor
     *
     * @return boolean
     */
    function multiplo($numero, $divisor)
    {
        return $numero % $divisor === 0;
    }

}

$object = new Multiple();
$object->printNumeros();
