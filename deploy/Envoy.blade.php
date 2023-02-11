@servers(['web' => ['wesleygsantos@78.159.112.135:22']])

@setup
    $path = "/cloudcmd/"
@endsetup
 
@story('deploy')
    git
    composer
    config
    route
    restart
@endstory
 
@task('git')
    cd {{ path }}

    git reset --hard origin/main
    git pull origin main
@endtask
 
@task('composer')
    cd {{ path }}

    composer install --optimize-autoloader --no-dev
@endtask

@task('config')
    cd {{ path }}

    php artisan config:cache
@endtask

@task('route')
    cd {{ path }}

    php artisan route:cache
@endtask


