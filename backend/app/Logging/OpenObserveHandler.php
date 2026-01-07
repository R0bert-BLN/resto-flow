<?php

namespace App\Logging;

use Exception;
use Illuminate\Support\Facades\Http;
use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Level;
use Monolog\LogRecord;

class OpenObserveHandler extends AbstractProcessingHandler
{
    public function __construct(int|string|Level $level = Level::Debug, bool $bubble = true)
    {
        parent::__construct($level, $bubble);
    }

    protected function write(LogRecord $record): void
    {
        $payload = [
            [
                'timestamp' => $record->datetime->format('Y-m-d\TH:i:s.u\Z'),
                'level' => $record->level->getName(),
                'message' => $record->message,
                'context' => $record->context,
                'extra' => $record->extra,
                'tenant_id' => tenant('id') ?? 'central',
                'environment' => app()->environment(),
                'service' => 'backend-laravel',
            ]
        ];

        try {
            Http::withBasicAuth(
                config('logging.channels.openobserve.username'),
                config('logging.channels.openobserve.password'),
            )->post(config('logging.channels.openobserve.url'), $payload);
        } catch (Exception $e) {
            //
        }
    }
}
