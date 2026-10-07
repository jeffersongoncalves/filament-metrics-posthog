<x-filament-widgets::widget>
    <x-filament::section :heading="$heading">
        @if (! $configured)
            <p class="text-sm text-gray-500 dark:text-gray-400">
                {{ __('filament-metrics-posthog::metrics-posthog.widgets.not_configured_description') }}
            </p>
        @elseif ($error)
            <p class="text-sm text-danger-500">
                {{ __('filament-metrics-posthog::metrics-posthog.widgets.error') }}: {{ $error }}
            </p>
        @elseif (empty($data))
            <p class="text-sm text-gray-500 dark:text-gray-400">
                {{ __('filament-metrics-posthog::metrics-posthog.widgets.no_data') }}
            </p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th class="pb-2 text-left font-medium text-gray-500 dark:text-gray-400">{{ $labelHeader }}</th>
                            @foreach ($columns as $header)
                                <th class="pb-2 text-right font-medium text-gray-500 dark:text-gray-400">{{ $header }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr class="border-b border-gray-100 dark:border-gray-800">
                                <td class="py-2 text-gray-900 dark:text-gray-100 truncate max-w-[200px]" title="{{ $row['label'] }}">
                                    {{ $row['label'] !== '' ? $row['label'] : __('filament-metrics-posthog::metrics-posthog.widgets.direct') }}
                                </td>
                                @foreach ($columns as $key => $header)
                                    <td class="py-2 text-right text-gray-600 dark:text-gray-300">
                                        @php($value = $row[$key] ?? 0)
                                        {{ $key === 'bounce_rate' ? round((float) $value, 1).'%' : number_format((float) $value) }}
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </x-filament::section>
</x-filament-widgets::widget>
