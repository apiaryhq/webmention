<?php
/**
 * This file is part of the webmention project.
 *
 * (c) Darren Mothersele <darren@darrenmothersele.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Apiary\Webmention;


use GuzzleHttp\ClientInterface;
use Psr\Log\LoggerInterface;
use GuzzleHttp\Psr7;

class Client
{
    protected $logger;
    protected $client;

    /**
     * Client constructor.
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function discover($target)
    {
        $res = $this->client->request('GET', $target);
        foreach(Psr7\parse_header($res->getHeader('Link')) as $linkHeader) {
            if ($linkHeader['rel'] == 'webmention') {
                return substr($linkHeader[0],1,-1);
            }
        }
        throw new \Exception('Webmention link not found');
    }

    public function send($source, $target) {
        // TODO: implement webmention discovery and send
    }
}
