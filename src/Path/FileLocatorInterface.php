<?php
namespace Vendimia\Interface\Path;

interface FileLocatorInterface
{
    public function find($name): string;
}
