#!/bin/bash

NAME=mantisbt
VERSION=2-26.2_8.3.7

OPTIONS=$@

docker build $OPTIONS -t $NAME:$VERSION .