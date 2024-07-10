<script>
    function toggleClass() {
        const html = document.getElementById("html");
        console.log({ html })
        html.classList.toggle("a");
    }

    const darkToggler = document.getElementById("darkToggler");

    darkToggler.addEventListener('click', event => {
        toggleClass();
        console.log(event.target);
    });

    console.log({ darkToggler });

    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }

    console.log('script')

</script>
