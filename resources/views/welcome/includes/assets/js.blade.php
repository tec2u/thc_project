<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bs-init.js?h=db5f9301c4983e5b4f628e197406cbdd"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../../assetsWelcome/slick-1.8.1/slick/slick.min.js"></script>
@if (isset($landing->id))
    <script>
        $(document).ready(function() {
            $("#subscribe").modal('show')
        });
    </script>
@endif
<script>
    $('#form-subscribe').submit(function(event) {

        event.preventDefault();

        var formData = {
            "campaign_id": $('input[name=campaign_id]').val(),
            "_token": $('input[name=_token]').val(),
            'name': $('input[name=name]').val(),
            'email': $('input[name=email]').val(),
            'phone': $('input[name=phone]').val(),
        };

        $.ajax({
                type: 'POST',
                url: "/funnel/store",
                data: formData,
                dataType: 'json',
                beforeSend: function() {
                    $('#btn-send').prop('disabled', true);
                }
            })
            .done(function(data) {
                $("#subscribe").modal('hide');
                $('#btn-send').prop('disabled', false);
                if (data.status == 200) {
                    Swal.fire({
                        title: 'Subscribe',
                        text: 'Subscribed',
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    });
                }

                if (data.status == 500) {
                    Swal.fire({
                        title: 'Subscribe',
                        text: 'Error in subscription',
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                }

                if (data.status == 404) {
                    Swal.fire({
                        title: 'Subscribe',
                        text: 'Error in subscription',
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                }
            });
    })


    $('.galeria').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 5,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
</script>
<script>
    $('.multiple-items').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
</script>
<script>
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.querySelector(".whatsapp-fixo").style.opacity = "1";
        } else {
            document.querySelector(".whatsapp-fixo").style.opacity = "0";
        }
    }
</script>
