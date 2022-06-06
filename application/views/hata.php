<?php include 'includes/head.php'; ?>
<body style="background-color: #E1E5EA;">
    <div class="hata">
        <span class="material-icons">
        cancel
        </span>
        <div class="title">
            Başarısız
        </div>
        <div class="content">İşleminizde bir hata gerçekleşti Anasayfa'ya yönlendiriliyorsunuz.</div>
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