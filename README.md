docker build . -t php-tdd

docker run -it --rm -v $(pwd):/app tutorial bash