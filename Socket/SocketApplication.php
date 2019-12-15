<?php
/**
 * Orange Management
 *
 * PHP Version 7.4
 *
 * @package    Socket
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://orange-management.com
 */
declare(strict_types=1);

namespace Socket;

use phpOMS\ApplicationAbstract;

/**
 * Controller class.
 *
 * @package    Socket
 * @license    OMS License 1.0
 * @link       http://orange-management.com
 * @since      1.0.0
 * @codeCoverageIgnore
 */
class SocketApplication extends ApplicationAbstract
{
    /**
     * Constructor.
     *
     * @param array  $config Core config
     * @param string $type   Socket type
     *
     * @throws \Exception
     *
     * @since 1.0.0
     */
    public function __construct(array $config, string $type)
    {
        $this->setupHandlers();

        $sub = null;

        try {
            $app = '\Socket\\' . $type . '\Application';
            $sub = new $app($this, $config);
        } catch (\Throwable $e) {
            $sub = ''; // todo: create dummy app
        } finally {
            $sub->run();
        }
    }

    /**
     * Setup general handlers for the application.
     *
     * @return void
     *
     * @since 1.0.0
     */
    private function setupHandlers() : void
    {
//        \set_exception_handler(['\phpOMS\UnhandledHandler', 'exceptionHandler']);
//        \set_error_handler(['\phpOMS\UnhandledHandler', 'errorHandler']);
//        \register_shutdown_function(['\phpOMS\UnhandledHandler', 'shutdownHandler']);
//        \mb_internal_encoding('UTF-8');
    }
}
