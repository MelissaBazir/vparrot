<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQYvaKc3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQYvaKc3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQYvaKc3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQYvaKc3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQYvaKc3\App_KernelDevDebugContainer([
    'container.build_hash' => 'QYvaKc3',
    'container.build_id' => 'f12c3ca5',
    'container.build_time' => 1700578115,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQYvaKc3');
