#/bin/bash
MAC_ADDRESS=$1
Meeting="Meeting_$MAC_ADDRESS"
dtach -A $MAC_ADDRESS bash

