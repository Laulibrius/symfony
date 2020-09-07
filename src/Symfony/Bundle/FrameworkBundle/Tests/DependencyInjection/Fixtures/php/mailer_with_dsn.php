<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $container) {
    $container->extension('framework', [
        'mailer' => [
            'dsn' => 'smtp://example.com',
            'envelope' => [
                'sender' => 'sender@example.org',
                'recipients' => ['redirected@example.org', 'redirected1@example.org'],
            ],
        ],
    ]);
};