#!/usr/bin/env python
import sys
sys.path.insert(0, "/home/FLX_PROJECT_NAME/lib/")

def myapp(environ, start_response):
    start_response('200 OK', [('Content-Type', 'text/plain')])
    return ['<h1>Hello World!</h1>\n']

if __name__ == '__main__':
    from fcgi import WSGIServer
    WSGIServer(myapp).run()

