<?php

return [
    'alipay' => [
        'app_id'         => '2016100100637981',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzUwbOHWwk96wz1GqVLflUe+PRvPVjhkK6wKI/7BQ/LCcePz4m2JBC3JkuO24yP+iUCADqZnCplJ3l2pnPDpiDryZF1xF9bDbP8/NZEXIY80Xo5ZtThTQxuEYNGJMKWNGt839KmfpJbhHIamp/DtT9nBguNOz4ljSGb6BfyA/TOSlqcdzXb2y/BFBVt/4e6I4ywIFwmMulHx0DAWSFCO2ge1RfhnQHoHikeG7h6Ltw/cSZnXIRXwARASVncE87O/KC1EGegF+9Q+LUsDhLTRAvvUYQIYKZkAdfeYvA6p4XgVjaeDMg7CADHerLsHBhNKGvvoqoGctLFyvF2mvx9/rJQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAuP45yiZPdLIQ4dcfnoOjLyQR4FEKzzYfHxo8ODsC68Pfxi2InBTqMU8tmrQF3ybz/4ERbHTW0FbmxxAjgS7rrPAzxR4NywgI1XfR/bL5yjQsQdeaRdFrAV5NS77jtKhHS/73bVwkKxMXiVqdV8Vm4iDhEclUU5MKvH3M4YNJAmVr5Pi6hvYMZL3anroJu87wXsBNyAIktx50BquEFgNRM3mGewNdKWD+r0FohUANFXEoZnGJOaIjZlOdU36O2vYaI/3HjLfjYg5mRxEfDZl5qxLlV57kVzca6lROpuXCHLCHNykIySDN/n2qAvgmf8DHBDo9eSUK/lAJt3HlQ8lKaQIDAQABAoIBAFOMxk7tdI9Q6N0HCsnNzEK7OLOmBorFd9LVR4Nh65TN12ArKnrL22W/y+oGCmzZq/OmuFbSgj6AMSSQvmhW56wopEkPpM0g6NR4lEfPsI9Jdv+Zv5xu07Q/gguGwFLUebbyBY/HwLIPol6vpUaB6lCQ5vXghwxj6cJt0r27TJseq6eCcsFM9JTFtEoD9TLBhM6fSL0Wu8rJCsVJbOJl+ieFEiyoK58plUOLF4FaI0hRXxwLPA2WEcYYAmDqZmGiNcPUp14Sx+mGCb+JKfhivSJ6ki9ZQOA+H9m4vN1Fl4QAGgYnrXGboL9LNTE0irNwPMt7Vg2hMZzU89BXMzu47y0CgYEA8gplgcLoCWqD9W/2BVJcQMWKdfOc70fmYIZI7lyn6qlOaqOwKgJT36odBy1Ixkb6z7TZ0bL8t0xx4OchK45uojKBLaNHVS653vc5Vz/mGAjuYixomdtLP+6o1y3i1JEmAJxBr2PdU8ZD6KwCTGUx+frJ4ZEacsVXA0VahCDzSecCgYEAw6mNT+4MP46WbgLnn4HXJ+MAlqOuMIRx6l1CktqoGmy77eRCxeenGm0o66dU6cZIi+9i59cqsNDGL2CEhZMMKnCWgwDRBGlehAdq3CiLBVsevOAOwTQrcQ1cRZyJjyU6OpQkj6yBGRnyMI++MmRtz9U5X4Ex12cglHEClRl+Xy8CgYEA35jJIzHqZ+B1nURcE5h9Tvzup35xCP/0DFGhiEoieX8EyTEEahqSXzpo7Jth8oHZ7A3Xd4iRO8gsH6eFlhZTkBV2DrIbEM9EuHzNBRQrvSJrDliWHSRgBOS2J2rldJfOcpvndl6cNWsgiw50ZRzLKXMMEwyYUVSKyKPGNe+2sRsCgYAGZ2lBoXfzKJaR2TR9iwFgw9REGe1clyknU5AXQGLaIo7wFVV+JrvYaJQ7SknEMQI02kvxbKBwExU5fb44pPxz8yVp+j/dFhnK1ndP51/NeBMEeYziE/QMCjTn7lyuO7ixLCIaNbov+SJtJndCLPlPIRp0nsTj2PM/CIfeG2yAbwKBgFEUDhIoV8P6pAXFVgxNthjn6GZCAcyBC8vCdKr+NR6xpTNj4IAmRUcp3bATfxOiWNHbNv87cYlDIMjA00XfkX+iGA/FbA8nuooi2GyDqts8HO21TD/6cvfgpZmE9r4YGL7d1UjGRYb8bR9CzDYxJ/Jz9ntYqmMu+Z4cEr6IKGC8',
        'mode'           => 'dev', // optional ， 设置此参数，将进入沙箱模式
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];