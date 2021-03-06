<?php
/**
 * (c) 2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\EventDispatcher;

use Vespolina\EventDispatcher\Event;
use Vespolina\EventDispatcher\EventInterface;

class NullDispatcher implements EventDispatcherInterface
{
    public function createEvent($subject = null)
    {
        $event = new Event($subject);

        return $event;
    }

    public function dispatch($eventName, EventInterface $event = null)
    {
        return null;
    }
}
