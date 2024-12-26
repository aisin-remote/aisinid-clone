<section {{ $attributes->merge(['class' => 'mainpageSection']) }}>
  <div class="inner" style="--banner-bg-image: url('{{ $image }}')">
    <h2>
      <span class="h2Inner">
        <span class="en">{{ $bigTitle }}</span>
      </span>
    </h2>
    <div class="pageContent">
      <p class="copy">
        {{ $text }}
      </p>
      <div class="moreBtn">
        <a href="{{ $link }}" {{ $newTab ? 'target="blank' : '' }}><span>Read more</span></a>
      </div>
    </div>
  </div>
</section>
