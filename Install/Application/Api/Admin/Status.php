<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Web\Api\Admin
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Web\Api\Admin;

use phpOMS\Application\StatusAbstract;

/**
 * Status class.
 *
 * @package Web\Api\Admin
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
final class Status extends StatusAbstract
{
    public const PATH = __DIR__;
}
