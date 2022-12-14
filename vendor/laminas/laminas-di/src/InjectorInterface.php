<?php

declare(strict_types=1);

namespace Laminas\Di;

/**
 * Interface that defines the dependency injector
 */
interface InjectorInterface
{
    /**
     * Check if this dependency injector can handle the given class
     */
    public function canCreate(string $name): bool;

    /**
     * Create a new instance of a class or alias
     *
     * @template T of object
     * @param string|class-string<T> $name
     * @param array<mixed> $options Parameters used for instantiation
     * @return T The resulting instance
     * @throws Exception\ExceptionInterface When an error occours during instantiation.
     */
    public function create(string $name, array $options = []);
}
