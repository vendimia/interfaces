<?php

namespace Vendimia\Interface\Controller;

use Vendimia\Http\Response;

/**
 * Interface for implementing Controllers for a Vendimia project.
 */
interface ControllerInterface
{
    /**
     * Executes a method from this controller, and returns a Response
     */
    public function execute($method, ...$args): Response;
}