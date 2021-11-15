<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Web\Backend
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

use phpOMS\Uri\UriFactory;

$head = $this->getData('head');
?>
<?php include __DIR__ . '/head.tpl.php'; ?>
<main>
    <div id="login-container">
        <div id="login-logo">
            <img alt="<?= $this->getHtml('Logo', '0', '0'); ?>" src="<?= UriFactory::build('Web/Backend/img/logo.png'); ?>">
        </div>
        <header><h1><?= $this->getHtml('Login', '0', '0'); ?></h1></header>
        <div id="login-form">
            <form id="login" method="POST" action="<?= UriFactory::build('{/api}login?{?}'); ?>">
                <label for="iName"><?= $this->getHtml('Username', '0', '0'); ?>:</label>
                <div class="inputWithIcon">
                    <input id="iName" type="text" name="user" tabindex="1" value="admin" autocomplete="off" spellcheck="false" autofocus>
                    <i class="frontIcon fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                    <i class="endIcon fa fa-times fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <label for="iPassword"><?= $this->getHtml('Password', '0', '0'); ?>:</label>
                <div class="inputWithIcon">
                    <input id="iPassword" type="password" name="pass" tabindex="2" value="orange">
                    <i class="frontIcon fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                    <i class="endIcon fa fa-times fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <input id="iLoginButton" name="loginButton" type="submit" value="<?= $this->getHtml('Login', '0', '0'); ?>" tabindex="3">
            </form>
        </div>
        <div id="below-form"><a href="<?= UriFactory::build('{/prefix}forgot'); ?>" tabindex="4"><?= $this->getHtml('ForgotPassword', '0', '0'); ?></a></div>
    </div>
</main>
<?php include __DIR__ . '/foot.tpl.php'; ?>
