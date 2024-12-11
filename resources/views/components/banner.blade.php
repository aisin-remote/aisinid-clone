<div>
  <div class="banner-container" style="--banner-bg-image: url({{ $image }});">
    <div class="banner-body">
      <span class="banner-title">{{ $title }}</span>
      <span style="margin: 0px 2rem">|</span>
      <span class="banner-subtitle">{{ $subtitle }}</span>
    </div>
  </div>
  @if ($dateUpdate)
    <p class="fst-italic text-body-secondary text-end last-update-date">{{ $dateUpdate }}</p>
  @endif
</div>
