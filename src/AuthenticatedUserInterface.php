<?php

namespace Vendimia\Interface;

/**
 * Helps Authenticator middleware to determine if there is an authenticated
 * user in session.
 */
interface AuthenticatedUserInterface
{
    /**
     * Returns whether there is an authenticated logged user.
     */
    public function isAuthenticated(): bool;

    /**
     * URL where to redirect once the user is authenticated.
     */
    public function getTargetURL(): ?string;

}
