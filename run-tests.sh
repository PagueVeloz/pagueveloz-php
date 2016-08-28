#!/bin/sh

# check wich config file to use .xml or .xml.dist
if [ -f "./phpunit.xml" ]
then
    TESTFILE="./phpunit.xml"
else
    TESTFILE="./phpunit.xml.dist"
fi

# --coverage-clover=coverage.xml

# run tests
./vendor/bin/paratest \
$COVERAGE \
--colors \
--functional \
--path ./tests/ \
--processes $(($(nproc)+1)) \
--configuration $TESTFILE \
--phpunit ./vendor/bin/phpunit \
--runner ParaTest\\Runners\\WrapperRunner
