  <!-- globalHeader -->
  <header class="globalHeader">
    <div class="globalHeaderInner">
      <div class="logo" style="display: flex; align-items: center; gap: 1rem;">
        <a href= "{{ route('home') }}" tess="over">
          <img src="{{ asset('logo.svg') }}" alt="サイト名">
        </a>
        <span>| Indonesia </span>
      </div>

      <div id="acdBtn">
        <span class="btnDesign btnTop"></span>
        <span class="btnDesign btnMdl"></span>
        <span class="btnDesign btnBom"></span>
      </div>

      <!-- drawerMenu -->
      <div class="d-flex align-items-center">
        <div class="drawerMenu">
          <!-- megaNav -->
          <nav class="megaNav">
            <ul class="megaNavParent">
              <li class="xxx parent">
                <a href="{{ route('about') }}">About</a>
                <!-- megaNavSlide -->
                <div class="megaNavSlide">
                  <div class="megaNavSlideInner">
                    <div class="megaNavHeader view-pc">
                      <div class="navTtl">
                        <span class="jp">About AISIN</span>
                      </div>
                      <div class="more">
                        <a href="{{ route('about') }}">Read more</a>
                      </div>
                    </div>
                    <!-- /megaNavHeader -->

                    <div class="megaNavContent">
                      <ul>
                        <li><a href="https://www.aisin.com/en/profile/policy/" target="_blank">Corporate Principle</a>
                        </li>
                        <li><a href="{{ route('company-summary') }}">Company Summary</a></li>
                        <li><a href="{{ route('core') }}">Company Core Value</a></li>
                        <li><a href="{{ route('company-history-main') }}">Company History</a></li>
                      </ul>
                      <ul>
                        <li><a href="{{ route('management-message') }}">Message from Top Management</a></li>
                        <li><a href="{{ route('executives') }}">Executive Management</a></li>
                      </ul>
                      <ul>
                        <li><a href="https://www.aisin.com/en/profile/brand/" target="_blank">Brand</a></li>
                        <li><a href="https://www.aisin.com/en/profile/global/" target="_blank">Global Network</a></li>
                        <li><a href="https://aisin-asean.com/about-aisin-group/asean/asean-network"
                            target="_blank">ASEAN Network</a></li>
                        <li><a href="{{ route('awards') }}">Awards</a></li>
                      </ul>
                    </div><!-- /megaNavContent -->
                  </div>
                </div>
                <!-- /megaNavSlide -->
              </li>

              <li class="xxx parent ">
                <a href="{{ route('products') }}">Product</a>
                <!-- megaNavSlide -->
                <div class="megaNavSlide">
                  <div class="megaNavSlideInner">
                    <div class="megaNavHeader view-pc">
                      <div class="navTtl">
                        <span class="jp">AISIN Product</span>
                      </div>
                      <div class="more">
                        <a href="{{ route('products') }}">Read more</a>
                      </div>
                    </div><!-- /megaNavHeader -->

                    <div class="megaNavContent">
                      <ul>
                        <li><a href="{{ route('product-list', ['product' => 'body-part']) }}">Body Part</a></li>
                        <li><a href="{{ route('product-list', ['product' => 'engine-part']) }}">Engine Part</a></li>
                        <li><a href="{{ route('product-list', ['product' => 'drive-train']) }}">Drive Train</a></li>
                        <li><a href="{{ route('product-list', ['product' => 'electrical-part']) }}">Electronic Part</a>
                        </li>
                      </ul>
                    </div><!-- /megaNavContent -->
                  </div>
                </div>
                <!-- /megaNavSlide -->
              </li>

              <li class="xxx parent ">
                <a href="https://www.aisin.com/en/sustainability/" target="_blank">Sustainability</a>
              </li>

              <li class="xxx parent ">
                <a href="{{ route('careers') }}">Career</a>
              </li>

              <li class="xxx parent ">
                <a href="{{ route('contact') }}">Contact</a>
              </li>
            </ul>

            <div class="searchBtn view-pc">
              <a href="javascript:void(0)" class="over"><img src="{{ asset('website/img/common/ico_search.png') }}"
                  alt=""></a>
            </div>

            <div class="searchVox view-notpc">
              <div id="siteSearchSp" class="search"></div>
            </div>
          </nav>
          <!-- megaNav -->
        </div>
        <div class="d-none d-lg-flex align-items-center border-start border-dark-subtle px-4 mb-3 ms-5">
          <a href="{{ route('core') }}">
            <img src="{{ asset('website/img/logo/satu-aisin-final.png') }}" style="height: 40px;">
          </a>
        </div>
      </div>
    </div><!-- /drawerMenu-->

    <div class="searchArea">
      <div class="searchVox">
        <div id="siteSearch" class="search"></div>
      </div>
      <div class="closeBtn">
        <a href="javascript:void(0)">CLOSE</a>
      </div>
    </div><!-- /searchArea -->

  </header>
  <!-- globalHeader -->
