#!/usr/bin/env bash

# Apply patches to the MantisBT source code.
#
# This script is intended to be run as part of a Dockerfile's build process. It
# should be called after all other steps have been completed, and before any
# other scripts that may need access to the patched files.
patch -p1 < patches/*