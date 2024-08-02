  <!-- globalHeader -->
  <header class="globalHeader">
    <div class="globalHeaderInner">
      <div class="logo" style="margin-bottom: 60px">
        <a href= "{{ route('home') }}" tess="over">
          <img src="{{ asset('website/img/logo/satu-aisin-final.png') }}" alt="サイト名"
            style="width: 100%; max-width: 200px; height: auto;">
        </a>
      </div>

      <div class="mask"></div>

      <div class="langBtn view-notpc">
        <a href="javascript:void(0)" class="over"><img src="{{ asset('website/img/common/ico_lang.png') }}"
            alt=""></a>
      </div>

      <div id="acdBtn">
        <span class="btnDesign btnTop"></span>
        <span class="btnDesign btnMdl"></span>
        <span class="btnDesign btnBom"></span>
      </div>
      <!-- acdBtn-->
      <!-- drawerMenu -->
      <div class="drawerMenu">
        <!-- megaNav -->
        <nav class="megaNav">
          <ul class="megaNavParent">
            <li class="xxx ">
              <a href="#">About Aisin</a>
              <!-- megaNavSlide -->
              <div class="megaNavSlide">
                <div class="megaNavSlideInner">
                  <div class="megaNavHeader view-pc">
                    <div class="navTtl">
                      <span class="jp">ABOUT AISIN AII - AIIA</span>
                    </div>
                    <div class="more">
                      <a href="#">Read more</a>
                    </div>
                  </div>
                  <!-- /megaNavHeader -->

                  <div class="megaNavContent">
                    <ul>
                      <li><a href="https://www.aisin.com/en/profile/policy/">Corporate Principle</a></li>
                      <li><a href="{{ route('company-summary') }}">Company Summary</a></li>
                    </ul>
                    <ul>
                      <li><a href="{{ route('management-message') }}">Message from Top Management</a></li>
                      <li><a href="{{ route('executives') }}">Executives</a></li>
                    </ul>
                    <ul>
                      <li><a href="{{ route('company-history') }}">Company History</a></li>
                      <li><a href="{{ route('brand') }}">Brand</a></li>
                      <li><a href="https://www.aisin.com/en/profile/global/">Global Network</a></li>
                      <li><a href="{{ route('awards') }}">Awards</a></li>
                    </ul>
                  </div><!-- /megaNavContent -->
                </div>
              </div>
              <!-- /megaNavSlide -->
            </li>

            <li class="xxx parent ">
              <a href="{{ route('events') }}"> Events</a>
            </li>

            <li class="xxx parent ">
              <a href="#">Products</a>
              <!-- megaNavSlide -->
              <div class="megaNavSlide">
                <div class="megaNavSlideInner">
                  <div class="megaNavHeader view-pc">
                    <div class="navTtl">
                      <span class="jp">Products AII-AIIA</span>
                    </div>
                    <div class="more">
                      <a href="">Read more</a>
                    </div>
                  </div><!-- /megaNavHeader -->

                  <div class="megaNavContent">
                    <ul>
                      <li><a href="{{ route('body-part') }}">Body Part</a></li>
                      <li><a href="{{ route('engine-part') }}">Engine Part</a></li>
                      <li><a href="{{ route('drive-train') }}">Drive Train</a></li>
                    </ul>
                  </div><!-- /megaNavContent -->
                </div>
              </div>
              <!-- /megaNavSlide -->
            </li>

            <li class="xxx parent ">
              <a href="https://www.aisin.com/en/sustainability/">Sustainability</a>
            </li>

            <li class="xxx parent ">
              <a href="#">Career</a>
                <!-- megaNavSlide -->
                <div class="megaNavSlide">
                  <div class="megaNavSlideInner">
                    <div class="megaNavHeader view-pc">
                      <div class="navTtl">
                        <span class="jp">Career AII-AIIA</span>
                      </div>
                      <div class="more">
                        <a href="">Read more</a>
                      </div>
                    </div><!-- /megaNavHeader -->

                    <div class="megaNavContent">
                      <ul>
                        <li><a href="{{ route('job-info') }}">General Information</a></li>
                        <li><a href="{{ route('job-opportunities') }}">Job Opportunities</a></li>
                      </ul>
                    </div><!-- /megaNavContent -->
                  </div>
                </div>
                <!-- /megaNavSlide -->
            </li>

            <li class="xxx parent ">
              <a href="{{ route('contact') }}">Contact</a>
            </li>
          </ul>

          <div class="searchBtn view-pc">
            <a href="javascript:void(0)" class="over"><img src="{{ asset('website/img/common/ico_search.png') }}"
                alt=""></a>
          </div>

          <div class="langBtn view-pc">
            <a href="javascript:void(0)" class="over"><img src="{{ asset('website/img/common/ico_lang.png') }}"
                alt=""></a>
          </div>

          <div class="searchVox view-notpc">
            <div id="siteSearchSp" class="search"></div>
          </div>

          <div class="snsVox view-notpc">
            <span class="snsTtl">Official SNS</span>
            <ul class="snsList">
              <li class="twitter"><a href="xxx" target="_blank" class="over"><img
                    src="{{ asset('website/img/common/ico_twitter_color.png') }}" alt="Twitter"></a></li>
              <li class="facebook"><a href="xxx" target="_blank" class="over"><img
                    src="{{ asset('website/img/common/ico_facebook_color.png') }}" alt="Facebook"></a></li>
              <li class="in"><a href="xxx" target="_blank" class="over"><img
                    src="{{ asset('website/img/common/ico_in_color.png') }}" alt=""></a></li>
            </ul>
          </div>
        </nav>
        <!-- megaNav -->
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

    <ul class="langNav">
      <li><a href="">本語</a></li>
      <li><a href="">文</a></li>
    </ul>
  </header>
  <!-- globalHeader -->
