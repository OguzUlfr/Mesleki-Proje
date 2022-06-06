<?php include 'includes/head.php'; ?>
<body style="background-color: #E1E5EA;">
    <div class="onay">
        <span class="material-icons">
            check_circle
        </span>
        <div class="title">
            Başarılı
        </div>
        <div class="content">İşleminiz başarılı bir şekilde gerçekleşti Anasayfa'ya yönlendiriliyorsunuz.</div>
        <div class="load-wrapp">
            <div class="load-3">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <?php
    header("Refresh: 5; url=".base_url()."");
    ?>
</body>
</html>