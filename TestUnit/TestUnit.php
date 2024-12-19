<?php


namespace TEST;
include_once "../vendor/autoload.php";
use PHPUnit\Framework\TestCase;
use function App\Fonctions\CalculComplexiteMdp;

class TestUnit extends TestCase
{
    public function testConstruct(): void
    {
        $bit = CalculComplexiteMdp("12345678");
        $this->assertEquals(26, $bit, "La complexité pour '12345678' devrait être de 10 bits.");

        $bit = CalculComplexiteMdp("abcdefgh");
        $this->assertEquals(37, $bit, "La complexité pour 'abcdefgh' devrait être de 37 bits.");

        $bit = CalculComplexiteMdp("abcdefg1");
        $this->assertEquals(41, $bit, "La complexité pour 'abcdefg1' devrait être de 41 bits.");

        $bit = CalculComplexiteMdp("abcdEFGH");
        $this->assertEquals(45, $bit, "La complexité pour 'abcdEFGH' devrait être de 45 bits.");

        $bit = CalculComplexiteMdp("abcdEF12");
        $this->assertEquals(47, $bit, "La complexité pour 'abcdEF12' devrait être de 47 bits.");

        $bit = CalculComplexiteMdp("abcDE12@");
        $this->assertEquals(51, $bit, "La complexité pour 'abcDE12' devrait être de 51 bits.");
    }
}
