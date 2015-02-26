#!/bin/bash
set -o history
set -f
(while true; do read -e lastcmd; history -s $lastcmd; echo $lastcmd; done) | java -jar /usr/local/i3/jl.jar "$@" /usr/local/i3/logo/project

