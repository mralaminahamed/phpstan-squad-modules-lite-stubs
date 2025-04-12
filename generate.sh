#!/usr/bin/env bash
#
# Wrapper script to call bin/generate.sh
#

set -e

# Run the main generator script
"$(dirname "$0")/bin/generate.sh" 