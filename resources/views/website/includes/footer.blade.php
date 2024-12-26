<!-- footer -->
<footer id="footer">
  <div id="pageTop">
    <a class="scroll over" href="#">PAGE TOP</a>
  </div>

  <div class="footInr">
    <div class="footTop">
      {{-- <div class="snsVox">
        <span class="snsTtl">Official SNS</span>
        <ul class="snsList">
          <li><a href="xxx" target="_blank" class="over"><img
                src="{{ asset('website/img/common/ico_twitter.png') }}" alt="Twitter"></a></li>
          <li><a href="xxx" target="_blank" class="over"><img
                src="{{ asset('website/img/common/ico_facebook.png') }}" alt="Facebook"></a></li>
          <li><a href="xxx" target="_blank" class="over"><img
                src="{{ asset('website/img/common/ico_in.png') }}" alt=""></a></li>
        </ul>
      </div> --}}
      <ul class="footList">
        <li><a href="{{ route('about') }}" class="over">About</a></li>
        <li><a href="{{ route('products') }}" class="over">Product</a></li>
        <li><a href="https://www.aisin.com/en/sustainability/" class="over" target="_blank">Sustainability</a></li>
        <li><a href="{{ route('careers') }}" class="over">Career</a></li>
        <li><a href="{{ route('contact') }}" class="over">Contact</a></li>
      </ul>
    </div>
    <div class="footBottom">
      <small class="copyright">Copyright &copy; AISIN Indonesia </small>
    </div>
  </div>
  <!-- footInr -->
</footer>
<!-- footer -->
