
<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Validate.php';

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email= App\Validate::email('nasdedasd@aq.com');
        $this->assertTrue($email);

    }
}