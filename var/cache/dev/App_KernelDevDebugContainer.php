<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLlx1x4K\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLlx1x4K/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLlx1x4K.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLlx1x4K\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLlx1x4K\App_KernelDevDebugContainer([
    'container.build_hash' => 'Llx1x4K',
    'container.build_id' => '3d45fdcb',
    'container.build_time' => 1614597602,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLlx1x4K');
