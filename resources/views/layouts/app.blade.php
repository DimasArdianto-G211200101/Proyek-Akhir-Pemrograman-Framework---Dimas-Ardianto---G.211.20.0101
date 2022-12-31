<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SIAKAD USM</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap4-toggle/3.6.1/bootstrap4-toggle.min.css"
          integrity="sha512-EzrsULyNzUc4xnMaqTrB4EpGvudqpetxG/WNjCpG6ZyyAGxeB6OBF9o246+mwx3l/9Cn838iLIcrxpPHTiygAA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css"
          integrity="sha512-mxrUXSjrxl8vm5GwafxcqTrEwO1/oBNU25l20GODsysHReZo4uhVISzAKzaABH6/tTfAxZrY2FprmeAP5UZY8A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
          integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
          crossorigin="anonymous"/>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
          integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
          crossorigin="anonymous"/>

    @stack('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="data:image/png;base64,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"
                         class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABUFBMVEX///86Ojz8wpUAAADILEDn6On5qXI7Oz3Y2Nk3NzlAQEK/Hi7z9PXq6+w0NDYfHh4uLi8pKSkvLzD8wJH38u8oKCvHJDr01tn6rHVFRUfS0tL/yJv5p23u7/DHIDckJCTKMkb7u4utra5kZGWkpaa2tbfGxcbDlnX+7+T6sn93d3gNDQ5QUFD71rn8z6z95tSUlJRYWFqIiImvJTaJiYnOV2VqamvY2drLyMneub3WiZKWlpYyOzyNNjt6OD1VNjurLTtsODulMj6VMD2whmiWcll5XEhgRTo2LyogGRPrtYxoTz0tIh2ce2LaqII/MCUPABC+kHE5JyRzUkWJaFAsFBzTsJildVbel2nroG7DiWF/Vz8ZDBD93cTyx7Lu4N7zv57apK3ANzTOanS8ABDBACPcrrPakpfTeYTMTFvLPk/PX2rXi5O/d3+rTFZsZlzg4cRkAAANK0lEQVR4nO2d61vbRhaHkW1ZDEiybGMDNsLYBnMNYCDYBLe5h4ak0DTZbdNdSliahEt39///tjOj20gzI19In5FY/T7kwbKk57w+Z86cMxo7Y2OJEiVKlChRokSJEiVKlChRokSJEiVKlCjRN5aqjVegOpoq2pK/RGZrra3k1qFqysba4fh9o5R30gGt7zdk0VZ9O6k7uSAgUm5/6Z54Um6y+LBmF0Ub9y0kMx3oajH2warOhgKm0yDusUrlGFrtjmgjR5MmdzqyurTenzC9HsPhaB42FciWm60NAAi1L9rgIaWtDcZFaCNWCafSL7kwEU3RZg+uyiBDj1ZTtN0DS8uPBJhOb4u2fFANPwZtrVdEmz6YuqMCptN50bYPppFdCLUk2vhBpN4BML0Rh/pt6S6E6ZZo8wfQAGVoiNZEm99favNOhLXoh6kG7kSYjv6EIY9Wz7iKfpMxfjfA9I5ogL66w3yP1RYN0FetOxLmI59qgoS1FyfLL16+Ovrh9WADdD3yhIEo/XBcTVWRUscnL35887Y/oiaaoJ86PnN/TPkFMd+cOm+ycSNPKJPN4YdqKijozOUPP+F33787jSPh2L5n7HuKz4KsppbfoPffVZehH9dPY0a47Rl7wibEnkSMR6nqyft0+sWreBF6yZQRo6Qj3/2cXobufA/PIxBzkc+lXn/4lu9Ci/H4zSuUfE6PqikP0Yg+4ZhTer8KB0R6eQxBl/8Gfe2OxejXNGNjDWcUhgWpjxOeePyzfVUMGsSxceth2umAfJAO/bNsEx6KNn8QbWBTXw5MiOVkm1isRR1iU5eHI4QZB121HofnbCt/R6a+Ph6SsPoSXZafEm1+f53VU0dDDUNXKNkcVR9EnXEllar/Ak19M2gm9YSc+LJafCAaoY8eFOvZX1/DUmx4wpP19E+/rtaLK6IZwlVNrWZnjlBVPTQhnPZPP2Zn6meiGUI1lSrOZbO/hVXdXFU/pP+RzWbrm6IhQjWVqkMjP57+c9hUigjfpX+DF69GnLCKCLO/vB2FcDk9E33CsU0UpdmP+ZEI32PCiCfTLZhpoD6MQJg6+RVdurolmqGPNnGYfhwBEA/h7Ewq6h2ilWtmRiHE3k9F3YWwbMOIxREJ6xEfhVhnsKyZq49AGP3J0NEWdMcIhMXsan0z6nW3ra3UKEFarNcj31h4OtscgbAa/SRDaGp4xLP4OBBra1jAeOQYQlNDtk/FWIUo1oPhsk01ZjE6htczhnFhHGb6oIZyYtTXLphaGYKwGLs8gzXEhFGNowuhEwdOp8Vorz7xdTZonMYwkdoaNE7jNxc6GixOYxujSFsDxGlM86ijQSbF2A5CS5v9EGM6UXia6ocY3yzjKBwxXl0vR2GI9wIwBLGYivsYdHXGJozRwlNfbbFWF1fvEeDYSpZCrM/M3CvCuWy2XvTxZbP3jjA746yE11dn8GOme0cINTezupq1/76fhD4lhLHS/ylh9l4RrtKIc7/fj5pNNeVKtyuf14OIcylV63Yrshn1nQkhkruNvebGhG6UNmRVS80FPKiq8kbJ0Cc29vca3Vj97geW2d1uzgJd1wGQJH1fU1X1dyJS51YhoKrt65IEgF7QwURzuxujn/4Yq+y1kdmSrcKaCXnUlU9zcwgS/vtpBR0w1wrOKQizvRf9bwFjmY12qeDSIRkWIXTa1qf6x/qnB7L10lwzyNNAodRuRN+RaqPpx4OWG3uaauvi4b8eHjgvzD0jeKrebEQ887SaJV0KSDe2bUL58o/Jyck/ruyX2rZBn1xqRvmHFbQdQJkMU4mxqOEwNW8/TyJ9vrJcqC0aAFDn62Ansl9g6zSDUYctliChjBC/WIBQKFBN2Vw0JPoTgVHdjOjXLlp0gFqEpSVNhoGp3TiAn28hMDy2VGIRolCNZKQ2JhgORMkDE0InTrsunJyHJYBsEbIvmmiIxqHVYNuKnFRqQRxZPfcIy7IKj2itksR2IvxcIoe4FJwjPBfahKZ87UbppSm7hJzrChH7kldllm2ogsBLXQ0DXbg+/GId6JYQisJGnI1UhWPq7GCD9Qy0v1SxgA4cwN1p60AFEioG50pdj9CkoXoFJsOFkuEQZnYtwMyBTWhIfCfCcjY65c0izw8SfsPx4Zf5zC5Spnzg+dA+h3lxZH6tpsMZhDDSsH9K4/Y4LGcsle1xOG5gP/MiHMxGZebf48QoHGMY3XAI5x3CC4IQ1jCcMJUKe6LRLFW4YQbyCkn41fHh/FeSUGHVepaMaOTTNV6USQWdTVj+kySEzQfPiXokvr3e5fG5OcQmlB+5hFcyScjPNZLUFY03FuJCxfGN48Mrj9DnQ8XQo+xEjesAJW+PLzuXypcu4aXfh/Z4ZckQP+3z50Ldsdue8eVbl/Ch7M34+LPgDmXxc6La5AapUQgQPnQJrwOEIbmmKbqwqXAzvVJz3rJrGvnaJbyRiZoGCtS4YQpETxjc2R7OAc5fVvckyzcOYWbh3O2eLPHDVPSsr7a5Psy7CdImPF/IuDrXfISKnuf6sC02TCs8w8jAw6sYskYQzuP2Ca1iOIg17icliQ3TRX6eyVOEngut5oIkzPNzjdj1DH7FVisA67kMJGxgnumy50OLsGFV3ujEQo13I7GTvrrBDS5oNwAGHl7GookJ5z3CC3TEtObSvIHP5d5I6O8ny9xMCqUoBatrKC1ijx0QPsTtk7Zod08FhTtZICeK7BK9gcQABHl7yi9sW4SED3FzoW1bH5BSyIMQRKHLw/ySDQE6Y7Swp9mLGC7hIzx/OJMpnCxCEIUWbjuBROMNJtIv+hrCMS8IQqu5cBewPH/772JdLvCnd9V9LiEZeDSh3Vx4mRghcgn3xaUaOZhKvQfbZPLXm1aLTxDeYkJf1V5za6DgTQX+/yXUIpv7EuQI40G7gwgfBQk7ZMkHcoC6i/1S4JJbJZgePCyDKDTBRgc9aboiCK9h6a11yBDIG4y7WFLE1W2toC3ea1Aj/p4dpwk12OITIQBqrLvYr8VNF4vBCd+zjaxLJQk/mrn0CDM3sPTWukTqJevSIGFB3HSxzSeE44r4G7dPt15Nk1lAhC3iyhwRsBShuOmCqrsJYjghun8bDTNICEtvs+ENPXI6lKjPTVztTbW/Ptu8lg+X3ufXBCF6+mQeeluiaty7oHfF/W4rNVmQRZxiuEOrsB0kRA2i6QY5cSr+QIKEs6IAVao59O/ictZLYZiZsAH2EcLmwnSD3DuTSSjpoooak+qdfLZ5ntGbMK9M3xBBWv4Kj7gljeF/SEoRFkTtdutQfXlgPclxDWjLAcL5RzBunWEMgpcFb1sTVdRUqO4wYFvBdiKsuzRteoH04ZWpOTWfEnAhTVgSVdTQ/W/QNseJEy1NO8iQhJem1lXYLmQQitp50pfQXa0HFOGtqbUcFwafPEWHkO7wKdvsA3pDI5dpUGFqag09/CJPwrr8QyqXBm1znKgfatoXkjBzo2mHOtuFNGFB1M9871CEVHK1nyHqa5q3E8Mq2zTNmg4Zzw6puwgrTOnlYGpt3naivi8HCMvnMl4CoRJpsISzPiAxgNQqDYMQjiF0CMzK5p/zJOH8uYwnC0Cv1jEIBa3UmE2KhyZU8KYhII2bj3yEn6c7aLWCtV2IJgRNMUWNST9ZYz1Bwk40WuqVL0rnp1sG24UswrYYQmqljU2Ity0aDfXSRzh5sGQ4b/YnFLTaJtPbnplPAVHGNQ7VW78PvxwaEt0K4o+EJpwQQzhOL8TnWA/bdDjh6WvqQz/hBczECnNbKrn+YUsZF0JYoc1jEqJuSG/K137Cr6h3Yj72YBDqYkpvai2RRwgKaMmUbJ4g4b/hKGbvDdcZhGLWE5foQcQmRDuFJ1oLPsLyf3qIfEBCQdval+gYy7F3NAMd1t5+wsxz3jZ9pUATGmIIGQ8POYSQRd/xA2a+63G+aqEwfCiouaBbCy4h0MF/A1H6tMf5pgWLUFBzwdgOleNto9SlH8p+H05wXMgmFLMxKvgAGBHydsUA0AtEaY+3+0IxGLlUTPtEN0+ASyiB3jMf4LMeb3sJJKTeEtQ+0c0T34eS1PsumGiGIdwXQkjvLA3xodT73kf4/XCETSGEdPMEcvztzNJjMpkuPOaep+RpQjHPZhgbL0MJlV2CcDfkPCahiCafsactlLD3hCB8wg1SNqGQvW0mk5BruD/V8BONJDEJRTT5Mv19rnDCpwTh0yEJZ0W0wIwWP5RQeuxVNWV+omETCmnyO8MSKt5AfBK225JJKOL5GrVdCBFyd/oieVXNs7DTajShmE1DjE3s4YREqglLNExCIdvZu7QdfQi9VBOWaJiEQMR32FrDEkqKSxg2DNmEIhZqGAtRfQh7TlWzG+ZCJqGQpaiWDgKChNC44FFPvefWfFF+3uOfxL6JEMIlaSIoJVejjhHqPV2w9DTsrIlanj4miViKMsdpVSqMg4SmLYWfBG/SoQ5G//ejEiVKlChRokSJEiVKlChRokSJEiVKlCiRaP0PS0h98JUEWOQAAAAASUVORK5CYII="
                             class="img-circle elevation-2"
                             alt="User Image">
                        <p>
                            {{ Auth::user()->name }}
                            <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        <a href="#" class="btn btn-default btn-flat float-right"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0
        </div>
        <strong>
           Copyright &copy; 2022 <a href="">Sistem Informasi Akademik Universitas Semarang</a>.
        </strong>
        All rights reserved.
    </footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"
        integrity="sha512-AJUWwfMxFuQLv1iPZOTZX0N/jTCIrLxyZjTRKQostNU71MzZTEPHjajSK20Kj1TwJELpP7gl+ShXw5brpnKwEg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
        integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg=="
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous"></script>
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.3/bootstrapSwitch.min.js"
        integrity="sha512-DAc/LqVY2liDbikmJwUS1MSE3pIH0DFprKHZKPcJC7e3TtAOzT55gEMTleegwyuIWgCfOPOM8eLbbvFaG9F/cA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(function () {
        bsCustomFileInput.init();
    });

    $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
</script>

@stack('third_party_scripts')

@stack('page_scripts')
</body>
</html>
