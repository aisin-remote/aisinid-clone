<div class="history-card-container">
  <div class="card h-100 shadow-sm">
    <img src="{{ $picture }}" class="card-img-top" alt="Company Culture" style="height: 240px; object-fit: cover">
    <div class="card-body">
      <h3 class="year text-muted">{{ $year }}</h3>
      <h2 class="card-title text-primary fw-bold">{{ $title }}</h2>
      <hr>
      <p class="card-text">
        {{ $description }}
      </p>
    </div>
  </div>
</div>
