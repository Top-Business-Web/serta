<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>{{ trans('site.serta_united') }}</title>


    <!--Favicon-->
    <link rel="icon" href="{{ asset('assets/uploads/fav.jpg') }}" type="image/jpg"/>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/front/') }}/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Line Awesome CSS -->
    <link href="{{ asset('assets/front/') }}/assets/css/line-awesome.min.css" rel="stylesheet"/>
    <!-- Animate CSS-->
    <link href="{{ asset('assets/front/') }}/assets/css/animate.css" rel="stylesheet"/>
    <!-- Bar Filler CSS -->
    <link href="{{ asset('assets/front/') }}/assets/css/barfiller.css" rel="stylesheet"/>
    <!-- Magnific Popup Video -->
    <link href="{{ asset('assets/front/') }}/assets/css/magnific-popup.css" rel="stylesheet"/>
    <!-- Flaticon CSS -->
    <link href="{{ asset('assets/front/') }}/assets/css/flaticon.css" rel="stylesheet"/>
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('assets/front/') }}/assets/css/owl.carousel.min.css" rel="stylesheet"/>
    <link href="{{ asset('assets/front/') }}/assets/css/owl.theme.default.min.css" rel="stylesheet"/>

    <!-- Nice Select  -->
    <link href="{{ asset('assets/front/') }}/assets/css/nice-select.css" rel="stylesheet"/>

    <!-- Responsive CSS -->
    <link href="{{ asset('assets/front/') }}/assets/css/responsive.css" rel="stylesheet"/>

    <!-- splide css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <!-- slick plugin -->
    <link href="{{ asset('assets/front/') }}/assets/css/slick-theme.css" rel="stylesheet"/>
    <link href="{{ asset('assets/front/') }}/assets/css/slick.css" rel="stylesheet"/>

    <!-- TOASTR CSS -->
    @toastr_css

    <!-- font awesome -->
    <link href="{{ asset('assets/front/') }}/assets/css/all.min.css" rel="stylesheet"/>

    @if(app()->getLocale() == 'en')

        {{--  en  --}}

        <!-- Style CSS -->
        <link href="{{ asset('assets/front/') }}/assets/css/style.css" rel="stylesheet"/>

        <!-- Edit Style CSS -->
        <link href="{{ asset('assets/front/') }}/assets/css/edit.css" rel="stylesheet"/>

        {{--  en  --}}
    @else
        {{--  ar  --}}

        <!-- Rtl CSS -->
        <link href="{{ asset('assets/front/assets/css/rtl.css') }}" rel="stylesheet"/>
        {{--  ar  --}}
    @endif
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet" />

    <!-- jquery -->
    <script src="{{ asset('assets/front/') }}/assets/js/jquery-1.12.4.min.js"></script>


    <!-- font awesome JS -->
    <script src="{{ asset('assets/front/') }}/assets/js/all.min.js"></script>

    <!-- Popper JS -->
    <script src="{{ asset('assets/front/') }}/assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/front/') }}/assets/js/bootstrap.min.js"></script>
    <!-- Wow JS -->
    <script src="{{ asset('assets/front/') }}/assets/js/wow.min.js"></script>
    <!-- Way Points JS -->
    <script src="{{ asset('assets/front/') }}/assets/js/jquery.waypoints.min.js"></script>
    <!-- Counter Up JS -->
    <script src="{{ asset('assets/front/') }}/assets/js/jquery.counterup.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('assets/front/') }}/assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('assets/front/') }}/assets/js/magnific-popup.min.js"></script>
    <!-- Sticky JS -->
    <script src="{{ asset('assets/front/') }}/assets/js/jquery.sticky.js"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('assets/front/') }}/assets/js/jquery.nice-select.min.js"></script>
    <!-- Progress Bar JS -->
    <script src="{{ asset('assets/front/') }}/assets/js/jquery.barfiller.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/front/') }}/assets/js/main.js"></script>
    <!-- splide plugin -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    <!-- slick plugin -->
    <script src="{{ asset('assets/front/') }}/assets/js/slick.min.js"></script>
    <script src="{{ asset('assets/front/') }}/assets/js/plugin.js"></script>

    <script>
        // upload file
        const form = document.querySelector("form"),
            fileInput = document.querySelector(".file-input"),
            progressArea = document.querySelector(".progress-area"),
            uploadedArea = document.querySelector(".uploaded-area");

        form.addEventListener("click", ()=>{
            fileInput.click();

        });

        fileInput.onchange = ({target}) =>{
            let file = target.files[0];
            if(file){
                let fileName = file.name;
                let uploadHTML = `
        <li class="row1">
                        <div class="content1">
                            <i class="fa-solid fa-file-alt"></i>
                            <div class="details">
                                <span class="name">${fileName}</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-check"></i>
                    </li>
        `;
                uploadedArea.innerHTML = uploadHTML;
            }
        }

        var splide = new Splide( '#main-carousel', {
            pagination: false,
        } );


        var thumbnails = document.getElementsByClassName( 'thumbnail' );
        var current;


        for ( var i = 0; i < thumbnails.length; i++ ) {
            initThumbnail( thumbnails[ i ], i );
        }


        function initThumbnail( thumbnail, index ) {
            thumbnail.addEventListener( 'click', function () {
                splide.go( index );
            } );
        }


        splide.on( 'mounted move', function () {
            var thumbnail = thumbnails[ splide.index ];


            if ( thumbnail ) {
                if ( current ) {
                    current.classList.remove( 'is-active' );
                }


                thumbnail.classList.add( 'is-active' );
                current = thumbnail;
            }
        } );


        splide.mount();

    </script>

</head>
