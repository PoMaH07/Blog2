<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPIVCIgX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPIVCIgX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPIVCIgX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPIVCIgX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPIVCIgX\App_KernelDevDebugContainer([
    'container.build_hash' => 'PIVCIgX',
    'container.build_id' => '0b864f0a',
    'container.build_time' => 1579941613,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPIVCIgX');
