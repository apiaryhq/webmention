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


use Psr\Log\LoggerInterface;

class Client
{
    protected $logger;

    /**
     * Client constructor.
     */
    public function __construct()
    {
    }

    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

}