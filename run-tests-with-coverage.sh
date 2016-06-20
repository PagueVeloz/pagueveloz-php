#!/bin/sh

# check wich config file to use .xml or .xml.dist
if [ -f "./phpunit.xml" ]
then
    TESTFILE="./phpunit.xml"
else
    TESTFILE="./phpunit.xml.dist"
fi

# number of parallel jobs
NUMJOBS="$(($(nproc)+1))"

# run tests
./vendor/bin/paratest --coverage-clover=coverage.xml --processes $NUMJOBS --functional --phpunit ./vendor/bin/phpunit --configuration $TESTFILE --colors --path ./tests/ --no-test-tokens --runner ParaTest\\Runners\\WrapperRunner
