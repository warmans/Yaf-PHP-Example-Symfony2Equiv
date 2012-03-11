# Benchmark #

To see the equivilent benchmart for Yaf see:

https://github.com/warmans/Yaf-PHP-Example

```
Server Software:        Apache/2.2.22
Server Hostname:        symfony.dev
Server Port:            80

Document Path:          /blog
Document Length:        3344 bytes

Concurrency Level:      5
Time taken for tests:   11.991 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Total transferred:      3622000 bytes
HTML transferred:       3344000 bytes
Requests per second:    83.39 [#/sec] (mean)
Time per request:       59.957 [ms] (mean)
Time per request:       11.991 [ms] (mean, across all concurrent requests)
Transfer rate:          294.97 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.1      0       1
Processing:     9   60  16.8     56     164
Waiting:        9   52  17.8     49     156
Total:          9   60  16.8     56     164

Percentage of the requests served within a certain time (ms)
  50%     56
  66%     61
  75%     64
  80%     68
  90%     82
  95%     98
  98%    111
  99%    116
 100%    164 (longest request)

```

Note: When concurrency increases RPS decreases. I think Symfony uses quite a lot of memory per-request.