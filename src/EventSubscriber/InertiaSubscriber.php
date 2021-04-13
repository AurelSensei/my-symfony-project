<?php

namespace App\EventSubscriber;

use Rompetomp\InertiaBundle\Service\InertiaInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;

class InertiaSubscriber implements EventSubscriberInterface
{
    /** @var \Rompetomp\InertiaBundle\Service\InertiaInterface */
    protected $inertia;

    /**
     * AppSubscriber constructor.
     *
     * @param \Rompetomp\InertiaBundle\Service\InertiaInterface $inertia
     */
    public function __construct(InertiaInterface $inertia)
    {
        $this->inertia = $inertia;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onControllerEvent',
        ];
    }

    public function onControllerEvent($event)
    {
        $this->inertia->share(
            'Auth::user',
            [
                'name' => 'Hannes', // Synchronously
                'posts' => function () {
                    return [1 => 'Post'];
                }
            ]
        );
    }
}