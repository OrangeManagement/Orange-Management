<?php
/**
 * Karaka
 *
 * PHP Version 8.1
 *
 * @package   Web\E503\Admin
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

namespace Web\E503\Admin;

use phpOMS\Application\InstallerAbstract;

/**
 * Installer class.
 *
 * @package Web\E503\Admin
 * @license OMS License 1.0
 * @link    https://jingga.app
 * @since   1.0.0
 */
final class Installer extends InstallerAbstract
{
    /**
     * Application path
     *
     * @var string
     * @since 1.0.0
     */
    public const PATH = __DIR__;
}
