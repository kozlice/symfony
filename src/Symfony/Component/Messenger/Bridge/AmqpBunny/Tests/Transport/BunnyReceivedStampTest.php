<?php

declare(strict_types=1);

namespace Symfony\Component\Messenger\Bridge\AmqpBunny\Tests\Transport;

use Bunny\Message as BunnyMessage;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Messenger\Bridge\AmqpBunny\Transport\BunnyReceivedStamp;

class BunnyReceivedStampTest extends TestCase
{
    public function testStampContainsDeliveryTagAndMessageName()
    {
        $bunnyMessage = new BunnyMessage('', 1, false, 'test', '', [], '{}');
        $stamp = new BunnyReceivedStamp($bunnyMessage, 'queue');

        $this->assertEquals($bunnyMessage, $stamp->getBunnyMessage());
        $this->assertEquals('queue', $stamp->getQueueName());
    }
}
