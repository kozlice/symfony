<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Symfony\Component\Messenger\Bridge\AmqpBunny\Transport;

use Bunny\Message as BunnyMessage;
use Symfony\Component\Messenger\Stamp\NonSendableStampInterface;

/**
 * @author Valentin Nazarov <i.kozlice@protonmail.com>
 */
final class BunnyReceivedStamp implements NonSendableStampInterface
{
    private $bunnyMessage;
    private $queueName;

    public function __construct(BunnyMessage $message, string $queueName)
    {
        $this->bunnyMessage = $message;
        $this->queueName = $queueName;
    }

    public function getBunnyMessage(): BunnyMessage
    {
        return $this->bunnyMessage;
    }

    public function getQueueName(): string
    {
        return $this->queueName;
    }
}
