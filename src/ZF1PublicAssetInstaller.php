<?php

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ZF1PublicAssetInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return "public" . DIRECTORY_SEPARATOR . $package->getPrettyName();
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return "zf1-public-asset" === $packagetype;
    }
}
