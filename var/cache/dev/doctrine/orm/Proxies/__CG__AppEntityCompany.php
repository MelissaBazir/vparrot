<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Company extends \App\Entity\Company implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'address' => [parent::class, 'address', null],
        "\0".parent::class."\0".'city' => [parent::class, 'city', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'openings' => [parent::class, 'openings', null],
        "\0".parent::class."\0".'services' => [parent::class, 'services', null],
        "\0".parent::class."\0".'telephone' => [parent::class, 'telephone', null],
        "\0".parent::class."\0".'users' => [parent::class, 'users', null],
        "\0".parent::class."\0".'zipcode' => [parent::class, 'zipcode', null],
        'address' => [parent::class, 'address', null],
        'city' => [parent::class, 'city', null],
        'email' => [parent::class, 'email', null],
        'id' => [parent::class, 'id', null],
        'name' => [parent::class, 'name', null],
        'openings' => [parent::class, 'openings', null],
        'services' => [parent::class, 'services', null],
        'telephone' => [parent::class, 'telephone', null],
        'users' => [parent::class, 'users', null],
        'zipcode' => [parent::class, 'zipcode', null],
    ];

    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        if ($cloner !== null) {
            return;
        }

        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
