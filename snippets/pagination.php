<nav <?php echo attr(
    A::extend(
        [
          'class' => "pagination"
        ],
        $attrs ?? []
    ),
); ?>>
    <?php if ($hasPrev ?? false) : ?>
      <?php
      snippet('pagination-item', [
        'label' => $prevLabel,
        'iconClass' => 'i-ri-arrow-left-line',
        'href' => $prev->url(),
        'attrs' => [
          'class' => 'pagination__item pagination__item--prev',
        ],
      ]);
      ?>
    <?php else : ?>
      <div></div>
    <?php endif; ?>
    <?php if ($hasNext ?? false) : ?>
      <?php
      snippet('pagination-item', [
        'label' => $nextLabel,
        'iconClass' => 'i-ri-arrow-right-line',
        'href' => $next->url(),
        'attrs' => [
          'class' => 'pagination__item pagination__item--next',
        ]
      ]);
      ?>
    <?php else : ?>
      <div></div>
    <?php endif; ?>
</nav>
