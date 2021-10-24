<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   tests
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace tests\Console;

require_once __DIR__ . '/../../phpOMS/Autoloader.php';

use Console\ConsoleApplication;

/**
 * @internal
 */
class ConsoleApplicationTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers Console\ConsoleApplication
     * @group framework
     */
    public function testConsoleApplication() : void
    {
        $console = new ConsoleApplication(
        	[],
        	$GLOBALS['CONFIG']
        );

        self::assertInstanceOf('\Console\ConsoleApplication', $console);
    }
}
