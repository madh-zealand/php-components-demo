<h1>
    Dashboard
</h1>
<div class="stats-row">
    <?= statsCard(
        'default',
        'Accounts registered',
        189,
        iconPerson(),
        null,
    ) ?>
    <?= statsCard(
        'success',
        'New accounts this week',
        12,
        null,
        'https://google.com',
    ) ?>
    <?= statsCard(
        'danger',
        'Accounts lost this week',
        3,
        null,
        null,
    ) ?>
</div>
<div class="stats-row">
    <?= statsCard(
        'success',
        'Products sold',
        541,
        iconMoney(),
        null,
    ) ?>
    <?= statsCard(
        'default',
        'Reviews left',
        1823,
        iconWrite(),
        'https://google.com',
    ) ?>
    <?= statsCard(
        'default',
        'Comments liked',
        2931,
        iconHeart(),
        'https://google.com',
    ) ?>
</div>
<div class="stats-row">
    <?= statsCard(
        'warning',
        'Carts abandoned',
        42,
        null,
        null,
    ) ?>
    <?= statsCard(
        'default',
        'Newsletter signups this week',
        14,
        null,
        'https://google.com',
    ) ?>
</div>
