<?php
/**
 * This file is part of the webmention project.
 *
 * (c) Darren Mothersele <darren@darrenmothersele.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Apiary\Webmention\Test;


use Apiary\Webmention\Client;
use GuzzleHttp\Client as GuzzleClient;

class Test extends \PHPUnit_Framework_TestCase
{

    public function testTest()
    {
        $this->assertTrue(true);
    }

    public function testDiscoverFromHeader()
    {
        $client = new Client(new GuzzleClient());
        $endpoint = $client->discover('http://localhost:9247/post?type=head');
        $this->assertEquals('http://localhost:9247/endpoint?type=head&status_code=200', $endpoint);
    }


    /**
     * @expectedException \Exception
     */
    public function testDiscoverFails() {
        $client = new Client(new GuzzleClient());
        $endpoint = $client->discover('http://localhost:9247/post');
        $this->assertEquals('http://localhost:9247/endpoint?type=head&status_code=200', $endpoint);
    }

}
