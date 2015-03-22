#!/usr/bin/python

from hello_world import app
from flipflop import WSGIServer


if __name__ == '__main__':
    WSGIServer(app).run()
