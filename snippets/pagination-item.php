<div>
  <?php echo Html::tag(
      'p',
      [
        Html::a(
            $href,
            [$label . Html::span('', ['class' => 'pagination__item-icon'])],
            $attrs
        )
      ],
  ); ?>
</div>
