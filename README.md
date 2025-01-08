## README

First, install dependencies:

```
composer install
```

### Error scenario

* Delete the cache dirs: `rm -fr var/cache/*`
* Run the command ` php bin/console cache:clear`

Symfony first runs the cache warmer, and then it clears the cache:

```
❯ php bin/console cache:clear

[DEBUG] Running my own custom cache warmer

[DEBUG] Symfony command being run: cache:clear
// Clearing the cache for the dev environment with debug true

[OK] Cache for the "dev" environment (debug=true) was successfully cleared.
```

### Success scenario

* Make sure the cache dirs exist by running: `php bin/console`
* Run the command ` php bin/console cache:clear`

Symfony first clears the cache, and then it runs the cache warmer:

```
❯ php bin/console cache:clear

[DEBUG] Symfony command being run: cache:clear
// Clearing the cache for the dev environment with debug true

[DEBUG] Running my own custom cache warmer

[OK] Cache for the "dev" environment (debug=true) was successfully cleared.
```
