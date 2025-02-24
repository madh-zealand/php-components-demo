<?php

    function navItem($text, $page, $currentPage = null)
    {
        $activeClass = '';
        if ($page === $currentPage) {
            $activeClass = 'active';
        }

        return <<<HTML
            <a
                href="?page={$page}"
                class="nav-item {$activeClass}"
            >
                {$text}
            </a>
        HTML;
    }
