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
