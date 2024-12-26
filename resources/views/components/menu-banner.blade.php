<div {{ $attributes->merge(['class' => 'col-md-12 ' . $column]) }}>
  <a href="{{ $link }}" class="menu-banner-container" style="--bg-img: url({{ $image }})"
    {{ $newTab ? 'target="_blank"' : '' }}>
    <div class="menu-banner-body">
      <div class="menu-banner-title">
        <h2>{{ $title }}</h2>
      </div>
    </div>
  </a>
</div>
