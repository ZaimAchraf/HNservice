<footer class="main-footer">
    <strong>Copyright &copy; 2001-2022 <a href="">Sia Lab</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php
include_once "links/footerLinks.php";

if (isset($data['datatable']))
    include_once dirname(dirname(__DIR__)) . "/datatable/datatableFooterLinks.php";

if (isset($data['script'])) foreach ($data['script'] as $script) ?>
    <script src="/js/<?= $script?>"></script>

</body>
</html>
