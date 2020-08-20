<!-- <footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img"
        viewBox="0 0 24 24">
        <title>Product</title>
        <circle cx="12" cy="12" r="10" />
        <path
          d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
      </svg>
      <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
    </div>
    <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Cool stuff</a></li>
        <li><a class="link-secondary" href="#">Random feature</a></li>
        <li><a class="link-secondary" href="#">Team feature</a></li>
        <li><a class="link-secondary" href="#">Stuff for developers</a></li>
        <li><a class="link-secondary" href="#">Another one</a></li>
        <li><a class="link-secondary" href="#">Last time</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Resource name</a></li>
        <li><a class="link-secondary" href="#">Resource</a></li>
        <li><a class="link-secondary" href="#">Another resource</a></li>
        <li><a class="link-secondary" href="#">Final resource</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Business</a></li>
        <li><a class="link-secondary" href="#">Education</a></li>
        <li><a class="link-secondary" href="#">Government</a></li>
        <li><a class="link-secondary" href="#">Gaming</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Team</a></li>
        <li><a class="link-secondary" href="#">Locations</a></li>
        <li><a class="link-secondary" href="#">Privacy</a></li>
        <li><a class="link-secondary" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer> -->
<script>
$.rootDir = '/';
$(document).ajaxStart(function() {
  $.blockUI({
    message: $('#loadingProgress'),
    css: {
      border: 'none',
      padding: '15px',
      backgroundColor: 'transparent',
      '-webkit-border-radius': '10px',
      '-moz-border-radius': '10px',
      color: '#fff',
      fontSize: '14px',
      fontFamily: 'Verdana,Arial',
      fontWeight: 50,
    }
  });
});

$(document).ajaxStop(function() {
  $.unblockUI();
});

$(document).ajaxError(function(event, request, options) {
  console.log(arguments);
  if (request.status == 401) {
    alert("Session Anda telah habis. Silahkan Anda login");
    window.location.href = $.rootDir + "Account/Login";
  }
});
</script>
<!-- Optional JavaScript -->
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
  integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
</script>
<style>
#footer {
  padding-top: 1px;
  padding-bottom: 1px;
  padding-left: 15px;
  background-color: #31363b;
  color: white;
  font-family: Louis George Cafe_0, Neris-SemiBold_0;
}

#footer p {
  color: white;
}

body {
  padding-bottom: 0px;
}

.navbar-inverse {
  background-color: #e5232b;
  border-color: #005596;
}

.containerhead {
  background-image: url(/Content/images/homepage/header.png);
  background-repeat: no-repeat;
  position: absolute;
  width: 100%;
  height: 100%;
}
</style>
</body>

</html>