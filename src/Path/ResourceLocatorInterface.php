<?php
namespace Vendimia\Interface\Path;

interface ResourceLocatorInterface
{
    public function find($name): ?string;
}
