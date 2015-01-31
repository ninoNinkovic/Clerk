<?php namespace Maatwebsite\Clerk\Templates\Adapters\Blade;

use Illuminate\Contracts\Events\Dispatcher as DispatcherInterface;

/**
 * Class Dispatcher
 * @package Maatwebsite\Clerk\Templates\Adapters\Blade
 */
class Dispatcher implements DispatcherInterface {

    /**
     * Register an event listener with the dispatcher.
     *
     * @param  string|array $events
     * @param  mixed        $listener
     * @param  int          $priority
     * @return void
     */
    public function listen($events, $listener, $priority = 0)
    {
        // Do nothing
    }

    /**
     * Determine if a given event has listeners.
     *
     * @param  string $eventName
     * @return bool
     */
    public function hasListeners($eventName)
    {
        // Do nothing
    }

    /**
     * Fire an event until the first non-null response is returned.
     *
     * @param  string $event
     * @param  array  $payload
     * @return mixed
     */
    public function until($event, $payload = array())
    {
        // Do nothing
    }

    /**
     * Fire an event and call the listeners.
     *
     * @param  string|object $event
     * @param  mixed         $payload
     * @param  bool          $halt
     * @return array|null
     */
    public function fire($event, $payload = array(), $halt = false)
    {
        // Do nothing
    }

    /**
     * Get the event that is currently firing.
     *
     * @return string
     */
    public function firing()
    {
        // Do nothing
    }

    /**
     * Remove a set of listeners from the dispatcher.
     *
     * @param  string $event
     * @return void
     */
    public function forget($event)
    {
        // Do nothing
    }

    /**
     * Forget all of the queued listeners.
     *
     * @return void
     */
    public function forgetPushed()
    {
        // Do nothing
    }
}