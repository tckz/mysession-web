#!/bin/sh

mypath=$(cd `dirname $0` && /bin/pwd)
cd $mypath

set -x chmod a+rwX -R storage/ && \
	chmod a+rwX -R bootstrap/cache/ && \
	chown -R nginx:nginx storage/ && \
	chown -R nginx:nginx bootstrap/cache/

