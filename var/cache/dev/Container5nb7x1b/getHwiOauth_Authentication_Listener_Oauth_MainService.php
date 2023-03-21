<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hwi_oauth.authentication.listener.oauth.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Firewall/AbstractAuthenticationListener.php';
include_once $this->targetDirs[3].'/vendor/hwi/oauth-bundle/Security/Http/Firewall/OAuthListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Authentication/AuthenticationSuccessHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Util/TargetPathTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Authentication/DefaultAuthenticationSuccessHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Authentication/AuthenticationFailureHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Authentication/DefaultAuthenticationFailureHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Session/SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Session/SessionAuthenticationStrategy.php';

$a = ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'};
$b = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, []);
$b->setOptions(['login_path' => '/login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false]);
$b->setProviderKey('main');
$c = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'};

$d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->getHttpKernelService()) && false ?: '_'}, $a, [], $c);
$d->setOptions(['login_path' => '/login', 'failure_path' => '/login', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

$this->services['hwi_oauth.authentication.listener.oauth.main'] = $instance = new \HWI\Bundle\OAuthBundle\Security\Http\Firewall\OAuthListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.session_strategy.admin']) ? $this->services['security.authentication.session_strategy.admin'] : ($this->services['security.authentication.session_strategy.admin'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))) && false ?: '_'}, $a, 'main', $b, $d, ['check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => false], $c, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

$instance->setResourceOwnerMap(${($_ = isset($this->services['hwi_oauth.resource_ownermap.main']) ? $this->services['hwi_oauth.resource_ownermap.main'] : $this->getHwiOauth_ResourceOwnermap_MainService()) && false ?: '_'});
$instance->setCheckPaths([0 => '/login/check-facebook', 1 => '/login/check-google', 2 => '/login/check-twitter', 3 => '/login/check-instagram']);
$instance->setRememberMeServices(${($_ = isset($this->services['security.authentication.rememberme.services.simplehash.main']) ? $this->services['security.authentication.rememberme.services.simplehash.main'] : $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_MainService.php')) && false ?: '_'});

return $instance;
