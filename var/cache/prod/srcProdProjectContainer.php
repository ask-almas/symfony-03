<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7hz1sY2\srcProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7hz1sY2/srcProdProjectContainer.php') {
    touch(__DIR__.'/Container7hz1sY2.legacy');

    return;
}

if (!\class_exists(srcProdProjectContainer::class, false)) {
    \class_alias(\Container7hz1sY2\srcProdProjectContainer::class, srcProdProjectContainer::class, false);
}

return new \Container7hz1sY2\srcProdProjectContainer(array(
    'container.build_hash' => '7hz1sY2',
    'container.build_id' => 'e996ad20',
    'container.build_time' => 1542021689,
), __DIR__.\DIRECTORY_SEPARATOR.'Container7hz1sY2');
