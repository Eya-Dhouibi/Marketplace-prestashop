<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCqnl0xn\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCqnl0xn/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerCqnl0xn.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerCqnl0xn\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerCqnl0xn\appProdProjectContainer([
    'container.build_hash' => 'Cqnl0xn',
    'container.build_id' => 'bf78b06b',
    'container.build_time' => 1683871300,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCqnl0xn');
