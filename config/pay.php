<?php

return [
    'alipay' => [
        'app_id'         => '2016091300505110',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAp9lbSztlfg8JgISQa5anxkYa//wytUdzA/Z5Ac8Q5hNHMV6eRdjZuXxjhIroCQvU1dqqmIQlrmVmyuGdnKANQPVtsWdF3jfxPBM0i0HtikBjxYErGPvlbuCw3L7IwDzy2rkc2SDpYaxrTbpayxrBp/+9eemGogSFolwYdmES1u8dGb1uqBxc4e37o3GFsuLlcaIkTD27kEIxWlv7B5SYNBcRptFOvM+DH7oStaJYUa33IGcbIZpZbNPEvPMdYpam4C64KDYPn2/hV3FEJ+7LYC1ijIKOXYvMnWklp5jpbEcECT60d++uNUiShRzPdjqkEbSU2ZpA2Ecf/UDBRCGAiwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAuR9x7tRTUiScxFt5sINO0r9XdZr1o8+XNERrgYkgTPydZZT0L2V1cojnhgqW/ufeVeuBwgVsPAMPDf02yIdpEgRUgXPoVEBmKvQl/rZ6KdujDD7/Acg+WQWJBpvF7Kn7AyQCm8DbvWMU9VuDmp2ETfDxQrJ3v5XHddQVsOklaNntIeI+gBYLoxtIVdVgrUbqp726/83mXDaDQqNpBGERc442gDNmwLu6rTz0iPAz96bN9H2gH70Wv4CK5OoFFVRbAsHTuiCjGOY1Dzi3G0g0U6b0Hv6tBibfS908fLP/hF098ZCoaCJHIeS4MKmfg8+3xgvjoNwjoR+vLrbPvpi0fQIDAQABAoIBAQC4nrqSU6Aw6KCLVysaNSnUFc0UVZEqaCpEjwOkMOxMuxYBq7aG2ilyK0Sysjb6SqW6jF9g7uWNSAOokOIkxJ6twDHC1KRb+cmqhsipqLRWsFuAKAdLcLd1MocAVzPhnXffHveW+5Rp4LmTJEwwU20SCfuh57hzEd3VDckAINQVJqZZSEq0Fsz26gSSoDV7e5WRyMsbT5kKik+hHRksS/uFyI0d42ys/LyBR9OvOO1AC94iItHYjMGbBX+kQdDy2hYAyIepdNSeGguxE1mIrIW8dSy9MWSh/WfmTS5hZVAAX/psgnSEl05/CCnkBEavyCyeO1P8x9xTUuPLgsLCc6hBAoGBAObLXsUcTciPnOrAK3wGDnrO6U9T430EbLV6MkJ0bA+gWo8ToF2whlwUBtiDgJ3vW6wSZuSktP0R/a41XDO+Dl1ThMyEfjVpyCjZUn5nc0xTBay617XBzQAC3uM8YCZmfZtM8WA3oq1BiI1a6KUnIEQtJUoqx2zGnxzVwOG5QaPRAoGBAM1XLEofuLNDWHflNhx+Ivby3xAjhmfYnYX/YmkVjjjwit3SvyL9uS09ERFyExabN5kylG5oX5kExxgy8jSLMdroUvbuZK3qmIIWR1E5w3OGHakxZ787OYYHkwlfhbk0HwmuYCWCeXSKNPDKcP1asjcbrBHGKDs92gwXvEbjkkztAoGAYUiubPXOT9FBeq6AZeoDpn6bV+XriWIZFLIqh1qdxkR4h8DlIzjqmduTOybLS0d+49xp5M0MwXQY85rof6MIWQyAeNkMfiVVyuo4XLHspuqEBNhJXwMPD4cmPrDPcsBXB+R6Bm3NM6zhC3ybfios7q/8/PNlVpOutC/h+wPlCFECgYAWtzgNEylJm3+j89VinYmcrA2FKYjq4Am9Ex195oaPQfz6wR+n7U2Y9ZJ3zZjS/WTPK8tD04QP13l28dvdeDCRuPXEn2a/3p30diZ5k9xNYV7SosaJXzHj496eQNT4Qg3U8ldsjtyEye1FXf/V5zyj4AnPBY7ZzuPaRp3rca1zmQKBgQCWXGI0f3yxQFLf7ERMnoVCPdGsQIQ2PmrYQb10z998r4zWNnFYDHx/FQBrVpcczbh6Z0h1XT//Ml0/fXKaWL3JSN+DQ+/1S6tTOcRjbpGvug1J61EEnwfDtmM1B75A5n71ioxRujIg8aNOjd6ArG7wrs++qwXub7vptkJ244kJsg==',
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
