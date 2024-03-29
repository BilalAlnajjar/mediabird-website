@extends('layouts.home')
@section('content')

<!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex align-items-center" style="background-image: url('/img/madiabird2.png');">
    <div class="container-fluid" data-aos="fade-up">
      @if(session('messageOrder'))
          <div class="alert alert-danger al" id="close">{{ session('messageOrder') }} 
          
            <button type="button" class="close" style="transform: translate(-5874%%,-34%)" aria-label="Close" onclick="fu()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

          @if(session('orderMess'))
          <div class="alert alert-danger al" style="transform: translate(-4596%,-34%);" id="close"  >{{ session('orderMess') }} 
            <button type="button" class="close" aria-label="Close" style="transform: translate(-5874%%,-34%)"  onclick="fu()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

          @if(session('sccessOrder'))
          <div class="alert alert-success al"  id="close">{{ session('sccessOrder') }} 
            <button type="button" class="close" aria-label="Close" style="transform: translate(-5874%%,-34%)" onclick="fu()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

          @if(session('sacssesChechout'))
          <div class="alert alert-success al" id="close">{{ session('sacssesChechout') }} 
            <button type="button" class="close" aria-label="Close"  onclick="fu()" style="transform: translate(-5874%%,-34%);">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 class="better">تجربة رقمية افضل مع ميديا بيرد</h1>
          <h2 class="better">نحن فريق موهوب من المصممين والمبرمجين</h2>
        <div><a href="{{route('order.create')}}" class="btn-get-started scrollto">طلب خدمة</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="/img/Asset 2.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->



  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
            <img src="/img/Asset 4.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>لماذا تحتاج الى ميديا بيرد</h3>
            <ul>
              <li class="bli"><i class="icofont-check-circled"></i> توضيح فكرة مشروعك</li>
              <li class="bli"><i class="icofont-check-circled"></i> زيادة الأعمال والعائد على الاستثمار</li>
              <li class="bli"><i class="icofont-check-circled"></i> الدعاية الاعلامية و التسويق الفيروسي </li>
            </ul>
          <form method="POST" action="{{route('user.file')}}" style="background:none;">
              @csrf
              <button class="read-more">حمل الملف التعريفي<i class="icofont-long-arrow-down"></i></button>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>الزبائن</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>المشاريع</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>ساعات الدعم</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>مشاريع كبيرة</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>الخدمات</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bx-code-block"></i>
              </div>
              <h4><a href="{{route('user.web')}}">برمجة وتصميم المواقع</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-play-circle"></i>
              </div>
              <h4><a href="{{route('user.Motion')}}">الفيديو والموشن جرافيكس</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-pen"></i>
              </div>
              <h4><a href="{{route('user.logo')}}">اللوقو والهوية البصرية</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-mobile-alt"></i>
              </div>
              <h4><a href="{{route('user.app')}}">برمجة وتصميم التطبيقات</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-microphone"></i>
              </div>
              <h4><a href="{{route('user.voice')}}">التعليق الصوتي <small>عربي-انجليزي</small> </a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-grid-alt"></i>
              </div>
              <h4><a href="">والخدمات الأخرى</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>الميزات</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-wallet a"></i>
              <h4 class="i">تناسب كل الميزانيات</h4>
              <p class="i"> بإمكانك التمتــع بالعديد من الستايلات المتنوعــة للفيديوهــات
                لا نقدم فقط أسعار منافسة , ولكن أيضا
                والمواقع التي تناسب ميزانيتك , أسعارانا تبدأ من 200 دولار.
              </p>
            </div>
            <div class="icon-box mt-5 e" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-cube-alt a"></i>
              <h4 class="i">جودة مميزة</h4>
              <p class="i">نحن نضمن الجودة المميزة ورضاء العميل بدرجة١٠٠٪ قم بالاطلاع على أعمالنا.
              </p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-hourglass a"></i>
              <h4 class="i">الانجاز السريع</h4>
              <p class="i">نقدر أن الوقت يعني المال , لذلك نحن نحترم التوقيت مع عملائنا , لذلك نقوم بتسليم العميـل مشروعـه
                بأسرع وقت ممكن بالمقارنة مع منافسينــــا , وقت التسليـــم يتراوح مـــا بين ٤-٥ ايام للعمـــل البسيــط
                ويمتد الى اسبوعين في المشاريع الكبيرة.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-credit-card a"></i>
              <h4 class="i">نظام الدفع 50-50</h4>
              <p class="i">لا نحبذ الدفع مقدما وكذلك العملاء لا يحبذون ذلك. لهذا السبـب قدمنـــا مخطـــط الدفــع بنسبــة 50/50
                ادفع 50 ٪عند تقديم الطلب و 50 ٪عند التسليم.
                </p>
            </div>

            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-support a"></i>
              <h4 class="i">مدير المشروع المعتمد</h4>
              <p class="i"> كل مشروع يدار من قبل خبير مختص والذي يقوم بإطلاع العميل على مسار العمل أول بأول لنضمن رضى
                العميل بدرجة 100% </p>
            </div>

          </div>
          <div class="image col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <img src="/img/Asset 8.png" alt="" class="img-fluid">
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>أعمالنا</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">الكل</li>
              <li data-filter=".filter-motion">الفيديو والموشن جرافيكس</li>
              <li data-filter=".filter-web">تصميم وبرمجة مواقع الويب</li>
              <li data-filter=".filter-app">تصميم وبرمجة التطبيقات</li>
              <li data-filter=".filter-voice">التعليق الصوتي</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          @foreach($app as $ap)
            
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/' .$ap->image) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$ap->name}}</h4>
              </div>
              <div class="portfolio-links">
                <a href="{{$ap->link}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          @endforeach

          @foreach($web as $we)
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/' .$we->image) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$we->name}}</h4>
              </div>
              <div class="portfolio-links">
                <a href="{{$we->link}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          @endforeach

          @foreach($videos as $video)
            
          <div class="col-lg-4 col-md-6 portfolio-item filter-motion">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/' .$video->poster) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$video->name}}</h4>
              </div>
              <div class="portfolio-links">
              <a href="{{route('user.Motion')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          @endforeach

          @foreach($voices as $voice)
          <div class="col-lg-4 col-md-6 portfolio-item filter-voice">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/' .$voice->poster) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$voice->name}}</h4>
              </div>
              <div class="portfolio-links">
                <a href="{{route('user.voice')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>من عملائنا</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

            <img src="/img/Asset 12.png" alt="" class="img-fluid">
          
        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>تواصل معنا</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>عنواننا </h3>
              <p>غزة-فلسطين</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>التواصل معنا عبر البريد الالكتروني</h3>
              <p>sales@mediabirdco.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>الاتصال بنا</h3>
              <p>00972 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23387.073781579744!2d34.48525782992662!3d31.49627255993145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f054e542767%3A0x7ff98dc913046392!2z2LrYstip!5e0!3m2!1sar!2s!4v1604505892463!5m2!1sar!2s" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="{{route('work.storeMessage')}}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="هذا الاسم اقل من اربعة احرف" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="من فضلك ادخل ايميل صحيح" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="العنوان الذي ادخلته صغير جدا يجب ان يكون اكثر من ثمانية احرف" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="من فضلك اكتب شئ لنا" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection