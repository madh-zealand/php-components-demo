<?php

    function statsCard(
        $type,
        $label,
        $value,
        $svg = null,
        $infoLink = null
    ) {
        $typeClass = match ($type) {
            'default' => 'stats-card--neutral',
            'success' => 'stats-card--success',
            'warning' => 'stats-card--warning',
            'danger' => 'stats-card--danger',
        };

        $svgHtml = '';
        if ($svg) {
            $svgHtml = "<div class=\"icon\">{$svg}</div>";
        }

        $infoLinkHtml = '';
        if ($infoLink) {
            $infoLinkHtml = "<div class=\"link\">
                    <a href=\"{$infoLink}\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 768 768\">
                            <path d=\"M384 192q52.5 0 90 37.5t37.5 90q0 40.5-48 83.25t-48 77.25h-63q0-34.5 15-59.25t33-36 33-27.75 15-37.5q0-25.5-19.5-44.25t-45-18.75-45 18.75-19.5 44.25h-63q0-52.5 37.5-90t90-37.5zM384 640.5q105 0 180.75-75.75t75.75-180.75-75.75-180.75-180.75-75.75-180.75 75.75-75.75 180.75 75.75 180.75 180.75 75.75zM384 64.5q132 0 225.75 93.75t93.75 225.75-93.75 225.75-225.75 93.75-225.75-93.75-93.75-225.75 93.75-225.75 225.75-93.75zM352.5 576v-64.5h63v64.5h-63z\"></path>
                        </svg>
                    </a>
                </div>";
        }

        return <<<HTML
            <div class="stats-card {$typeClass}">
                <div class="stat">
                    {$svgHtml}
                    <div class="value">
                        {$value}
                    </div>
                </div>
                <div class="details">
                    <div class="label">
                        {$label}
                    </div>
                    {$infoLinkHtml}
                </div>
            </div>
        HTML;
    }
