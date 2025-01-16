<?php

namespace Silecust\BaseTheme\EventSubscriber;


use Silecust\BaseTheme\Services\TestService;
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
        if ($this->environment->getLoader()->exists("@AlphaTheme/{$event->getView()}"))
            $event->setView('@SilecustBaseTheme/module/web_shop/external/category/web_shop_category_hierarchy.html.twig');

    }
}