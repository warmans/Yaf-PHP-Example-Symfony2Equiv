# Benchmark #

To see the equivilent benchmart for Yaf see:

https://github.com/warmans/Yaf-PHP-Example

```
Server Software:        Apache/2.2.22
Server Hostname:        symfony.dev
Server Port:            80

Document Path:          /
Document Length:        553 bytes

Concurrency Level:      5
Time taken for tests:   13.142 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Non-2xx responses:      1000
Total transferred:      837000 bytes
HTML transferred:       553000 bytes
Requests per second:    76.09 [#/sec] (mean)
Time per request:       65.712 [ms] (mean)
Time per request:       13.142 [ms] (mean, across all concurrent requests)
Transfer rate:          62.19 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.1      0       1
Processing:    16   66  86.1     53    1886
Waiting:       12   58  86.7     46    1884
Total:         16   66  86.1     53    1886

Percentage of the requests served within a certain time (ms)
  50%     53
  66%     58
  75%     62
  80%     66
  90%     87
  95%    110
  98%    151
  99%    173
 100%   1886 (longest request)
```