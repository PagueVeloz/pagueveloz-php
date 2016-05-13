#!/bin/sh

if [ -f "./phpunit.xml" ]
then
    TESTFILE="./phpunit.xml"
else
    TESTFILE="./phpunit.xml.dist"
fi

NUMPROC="$(nproc)"
NUMPROC=$(($NUMPROC+1))

./vendor/bin/paratest --processes $NUMPROC --functional --phpunit ./vendor/bin/phpunit --bootstrap ./vendor/autoload.php --configuration $TESTFILE --colors --path ./tests/
