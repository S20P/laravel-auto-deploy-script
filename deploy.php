<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/S20P/laravel-auto-deploy-script.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('ecosaa.com')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/laravel-deploy-app');

// Hooks

after('deploy:failed', 'deploy:unlock');
