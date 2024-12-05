<div class="history-card-container">
  <div class="card h-100 shadow-sm">
    <img src="{{ $picture }}" class="card-img-top" alt="Company Culture" style="height: 240px; object-fit: cover">
    <div class="card-body">
      <h4 class="year text-muted">{{ $year }}</h4>
      <h3 class="card-title text-primary font-weight-bold">{{ $title }}</h3>
      <hr>
      <p class="card-text">
        {{ $description }}
      </p>
    </div>
  </div>
</div>
