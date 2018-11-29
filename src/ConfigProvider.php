<?php declare(strict_types=1);

namespace ExpressiveTodoFrontend;

class ConfigProvider
{
    public function __invoke() : array
    {
        return [
            'dependencies' => $this->getDependencies(),
            'routes'       => $this->getRoutes(),
            'templates'    => $this->getTemplates()
        ];
    }

    public function getDependencies() : array
    {
        return [
//            'delegators' => [
//                \Zend\Expressive\Application::class => [
//                    \Zend\Expressive\Container\ApplicationConfigInjectionDelegator::class,
//                ],
//            ],
            'factories'  => [
                Handler\TodoHandler::class => Handler\TodoHandlerFactory::class,
//                Handler\TodoHandler::class => Handler\TodoHandler::class
            ],
        ];
    }

    /**
     * Return available routes.
     * @return array
     */
    public function getRoutes() : array
    {
        return [
            'todo' => [
                'path'            => '/todo',
                'middleware'      => Handler\TodoHandler::class,
                'allowed_methods' => ['GET'],
            ]
        ];
    }

    /**
     * Returns the templates configuration
     */
    public function getTemplates() : array
    {
        return [
            'paths' => [
                'todo' => [__DIR__ . '/Templates'],
            ],
        ];
    }
}