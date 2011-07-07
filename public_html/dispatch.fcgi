#!/usr/bin/env python
import sys
sys.path.insert(0, "/home/FLX_PROJECT_NAME/lib/")

def myapp(environ, start_response):
    start_response('200 OK', [('Content-Type', 'text/plain')])
    return ['Hello World!\n']

if __name__ == '__main__':
    from fcgi import WSGIServer
    WSGIServer(myapp).run()

