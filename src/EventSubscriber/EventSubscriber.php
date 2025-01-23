<?php

namespace Silecust\BaseTheme\EventSubscriber;


use Silecust\BaseTheme\Service\TestService;
use Silecust\Framework\Service\Component\Controller\EnhancedAbstractController;
use Silecust\Framework\Service\Component\Controller\TwigPreRenderEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Twig\Environment;

readonly class EventSubscriber implements EventSubscriberInterface
{
    public function __construct(TestService $myService, private Environment $environment)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [EnhancedAbstractController::TWIG_PRE_RENDER_EVENT => 'twig'];
    }

    public function twig(TwigPreRenderEvent $event)
    {
        if ($this->environment->getLoader()->exists("@SilecustBaseTheme/{$event->getView()}"))
            $event->setView("@SilecustBaseTheme/{$event->getView()}");

    }
}