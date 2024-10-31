<div class="custom-breadcrumb-container">
  @foreach ($breadcrumbs as $breadcrumb)
    <a href="{{ $breadcrumb->url }}"
      class="custom-breadcrumb-item {{ !!$breadcrumb->active ? 'breadcrumb-active' : '' }}">
      {{ $breadcrumb->name }}
    </a>
  @endforeach
</div>
