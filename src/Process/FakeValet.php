<?php

namespace WP_CLI_Valet\Process;

class FakeValet implements ValetInterface
{

    /**
     * Get the local domain served by Valet.
     *
     * @return string
     */
    public function domain()
    {
        return 'dev';
    }

    /**
     * Secure the installation with a self-signed TLS certificate.
     *
     * @param $domain
     *
     * @return mixed
     */
    public function secure($domain)
    {
        return true;
    }

    /**
     * Remove any Valet self-signed TLS certificate for this installation.
     *
     * @param $domain
     *
     * @return mixed
     */
    public function unsecure($domain)
    {
        return true;
    }
}
