<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPkxFg6H\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPkxFg6H/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPkxFg6H.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPkxFg6H\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPkxFg6H\App_KernelDevDebugContainer([
    'container.build_hash' => 'PkxFg6H',
    'container.build_id' => 'cf533598',
    'container.build_time' => 1603108586,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPkxFg6H');
