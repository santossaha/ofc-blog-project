<!-- script -->
<script src="{{ asset('front') }}/js/jquery.js"></script>
<script src="{{ asset('front') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('front') }}/js/swiper.min.js"></script>
<script src="{{ asset('front') }}/js/custom.js"></script>
<script src="{{ asset('front/js/trubo.js') }}"></script>
<!-- TrustBox script -->
{{-- <script src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script> --}}
<!-- End TrustBox script -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/62d020857b967b1179998822/1g7ufu34t';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
<script>
    //counter scroll
    var a = 0;
    $(window).scroll(function() {
        if ($('#counter-home').length) {
            var oTop = $('#counter-home').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    }, {
                        duration: 3000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
                    });
                });
                a = 1;
            }
        }
    });
    // number count for stats, using jQuery animate

$('.service-experience-info .counter-value').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');

  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 3000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });


});

    //  if(Request::fullUrl() != route('portfolio')){
    $(document).on('click', '.portfolio_div', function(event) {
        event.preventDefault();
        $url = $(this).attr('data-url');
        //location.replace($url);
        window.location.href = $url;
    });
    $(document).on('click', '.portfolio_div,.blog_div', function(event) {
        event.preventDefault();
        $url = $(this).attr('data-url');
        //location.replace($url);
        let a = document.createElement('a');
        a.target = '_blank';
        a.href = $url;
        a.click();
    });
    // }
    $(document).on('click', '#tabs .nav-item .nav-link', function(event) {
        //event.preventDefault();
        $('#tabs .nav-item .nav-link').removeClass('active');
        $('#content .tab-pane').removeClass('active show');
        //$('#content .tab-pane').removeClass('show');
        $tab_id = $(this).attr('data-href');
        $(this).addClass('active');
        $($tab_id).addClass('active show');
        //$($tab_id).addClass('show');
    });
</script>
<!-- Yandex.Metrika counter -->
<script>
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
            k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(86874533, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/86874533" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->
