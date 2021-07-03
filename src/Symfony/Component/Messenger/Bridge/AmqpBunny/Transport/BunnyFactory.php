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

use Bunny\Client;

/**
 * @author Valentin Nazarov <i.kozlice@protonmail.com>
 */
class BunnyFactory
{
    public function createConnection(array $config): Client
    {
        return new Client($config);
    }

    public function createBuffer(): \SplQueue
    {
        return new \SplQueue();
    }
}
