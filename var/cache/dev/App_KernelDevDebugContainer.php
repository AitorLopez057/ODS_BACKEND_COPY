<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNxokBej\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNxokBej/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNxokBej.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNxokBej\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNxokBej\App_KernelDevDebugContainer([
    'container.build_hash' => 'NxokBej',
    'container.build_id' => '29c9b43a',
    'container.build_time' => 1741606309,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNxokBej');
