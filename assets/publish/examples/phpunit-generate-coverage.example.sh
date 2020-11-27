#!/bin/sh
sed -i "s|throttle:60,1|throttle:500,1|g" ./app/Http/Kernel.php
phpdbg -qrr -d memory_limit=-1 vendor/bin/phpunit --configuration phpunit.xml --coverage-clover ./phpunit-coverage.xml --coverage-html ./public/coverage
sed -i "s|throttle:500,1|throttle:60,1|g" ./app/Http/Kernel.php
