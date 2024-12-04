<?php declare(strict_types=1);

use App\Colvert;
use App\Mandarin;
use PHPUnit\Framework\TestCase;

final class CanardTest extends TestCase
{
    public function testAfficherUnColvert(): void
    {
        $colvert = new Colvert();
        $this->assertStringContainsString("Aspect d un colvert.", $colvert->afficher());
    }

    public function testAfficherUnMandarin(): void
    {
        $mandarin = new Mandarin();
        $this->assertStringContainsString("Aspect d un mandarin.", $mandarin->afficher());
    }
}