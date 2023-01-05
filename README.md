docker build . -t php-tdd

docker run -it --rm -v $(pwd):/app php-tdd bash

composer require --dev phpunit/phpunit

## phpunitテスト
vendor/phpunit/phpunit/phpunit tests