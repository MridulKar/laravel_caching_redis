1. App > cache.php > change  'default' => env('CACHE_DRIVER', 'redis')
2. .env > CACHE_DRIVER=redis
3. install windows subsystem for linux: cmd > wsl --install
4. linux will be installed
5. reboot pc
6. ubuntu installed, give username, password
7. check in cmd > wsl -l -v

8. run this commands in ubuntu/linux

curl -fsSL https://packages.redis.io/gpg | sudo gpg --dearmor -o /usr/share/keyrings/redis-archive-keyring.gpg

echo "deb [signed-by=/usr/share/keyrings/redis-archive-keyring.gpg] https://packages.redis.io/deb $(lsb_release -cs) main" | sudo tee /etc/apt/sources.list.d/redis.list

sudo apt-get update
sudo apt-get install redis
sudo service redis-server start
redis-cli 

9. install package predis: composer require predis/predis
10. get data in variable by cache

11. take dispatchableEvents in model for save and delete
12. make event class for ModelNameCreated,Updated,Deleted like:

    php artisan make:event PostCreated
    php artisan make:event PostUpdated
    php artisan make:event PostDeleted

13. make listener:
    
    php artisan make:listener PostCacheListener

14. Register Event Listeners in Providers > EventServiceListener

15. go to PostCacheListen and forget, forever data in cache

16. config > app.php > alias: 'predis' => Illuminate\Support\Facades\Redis::class,

17. database.php >

 'redis' => [

        'client' => env('REDIS_CLIENT', 'predis'),
