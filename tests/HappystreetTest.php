<?php
/**
 * HappystreetTest
 *
 * PHP Version 5.3
 *
 * @category Test
 * @package  Boscot
 * @license  http://www.gnu.org/licenses/gpl-3.0.txt GPL v3
 * @link     None
 */

require_once __DIR__."/../vendor/autoload.php";

use Boscot\Test\GameTest;


/**
 * Class: HappystreetTest
 * 
 * Test Happystreet classes
 *
 * @category Test
 * @package  Boscot
 * @license  http://www.gnu.org/licenses/gpl-3.0.txt GPL v3
 * @link     None
 * @see      PHPUnit_Framework_TestCase
 */
class HappystreetTest extends GameTest
{
	public $domain = "gzhappystreet.appspot.com";

    /**
     * Configuration
     *
     * Create Happystreet object
     *
     * @return void
     */
    protected function setUp()
    {

    }

    
    /**
     * Test all action method of the controller
     *
     * @return void
     */
    public function testHack()
	{
		$request =
<<<EOF
GET /login HTTP/1.1
Host: $this->domain
Connection: close


EOF;
$content = $this->sendData($request, GameTest::DOMAIN);


$this->assertSame(1, preg_match('#"floozBought": "1000"#ms', $content));
$this->assertSame(1, preg_match('#"dailySpin": 1000#ms', $content));
$this->assertSame(1, preg_match('#"spin": 1000#ms', $content));
$this->assertSame(1, preg_match('#Content-Type: application/json#ms', $content));
    }
}
