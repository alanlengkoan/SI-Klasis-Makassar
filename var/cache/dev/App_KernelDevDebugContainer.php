<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQlK8Qd3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQlK8Qd3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQlK8Qd3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQlK8Qd3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQlK8Qd3\App_KernelDevDebugContainer([
    'container.build_hash' => 'QlK8Qd3',
    'container.build_id' => 'b81100f1',
    'container.build_time' => 1622948738,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQlK8Qd3');
