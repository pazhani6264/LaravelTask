
<script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
<script src="{!! asset('assets/js/bootstrap.bundle.min.js') !!}"></script>

<script>
    window.onscroll = () => {
        toggleTopButton();
    }
    function scrollToTop(){
        window.scrollTo({top: 0, behavior: 'smooth'});
    }

    function toggleTopButton() {
        if (document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20) {
            document.getElementById('back-to-up').classList.remove('d-none');
        } else {
            document.getElementById('back-to-up').classList.add('d-none');
        }
    }


    // /********* MENU ************ /

    window.addEventListener('scroll', function() {
        const header = document.querySelector('.top-nav');
        const menuLinks = document.querySelectorAll('.menu a');
        const sections = document.querySelectorAll('section');

        if (window.scrollY > 600) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (scrollY >= sectionTop - sectionHeight / 3 && scrollY < sectionTop + sectionHeight - sectionHeight / 3) {
                const id = section.getAttribute('id');
                menuLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${id}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    });


    const menuLinks = document.querySelectorAll('.menu a');
        menuLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
                history.pushState(null, null, ' ');
            }
        });
    });


    $(document).ready(function(){
        $('ul.tabs li').on('click', function(){
            var tab_id = $(this).attr('data-tab');
            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');
            $(this).addClass('current');
            $('#'+tab_id).addClass('current');
        });
    });


</script>
