#!/bin/bash

NAME=$(cat NAME)
VERSION=$(cat VERSION)

OPTIONS=$@

docker build $OPTIONS -t $NAME:$VERSION .