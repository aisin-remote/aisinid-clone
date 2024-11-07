<div class="history-card-container">
  <div class="card h-100 shadow-sm">
    <img src="{{ $picture }}" class="card-img-top" alt="Company Culture" style="height: 240px; object-fit: cover">
    <div class="card-body">
      <h4 class="year text-muted">{{ $year }}</h4>
      <h5 class="card-title text-primary">{{ $title }}</h5>
      <hr>
      <p class="card-text">
        {{ $description }}
      </p>
    </div>
  </div>
</div>
