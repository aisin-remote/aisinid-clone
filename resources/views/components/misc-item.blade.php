<div {{ $attributes->merge(['class' => 'misc-item-container' . ($border ? ' border border-dark-subtle' : '')]) }}>
  <div class="d-flex flex-column gap-4 justify-center p-3" style="width: 300px;">
    <img src="{{ $picture }}" alt="" style=""
      class="{{ $color ? 'with-background' : '' }} {{ $rounded ? 'rounded-circle' : '' }}">
    <h3 class="text-center">{{ $title }}</h3>
  </div>
</div>
