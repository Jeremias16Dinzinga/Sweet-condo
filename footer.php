<footer class="footer">
    <div class="container-fluid">
        <p class="copyright pull-right">
            &copy;
            <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Dinzinga
            </a>, Todos os direitos reservados
        </p>
    </div>
</footer>

</div>
</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-display2',
            message: "Bem-vindo ao <b>Sweet Condo</b> - Melhor gestão do seu condomínio."

        }, {
            type: 'info',
            timer: 300
        });

    });
</script>

</html>