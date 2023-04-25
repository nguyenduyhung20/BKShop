<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tin Tức</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="/css/header.css">

    <link rel="stylesheet" href="/css/footer.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="style.css" /> -->

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init(); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <?php require_once "header.php" ?>
    <div class="container" data-aos="fade-up">

        <div id="intro" class="p-2 my-4 text-center bg-primary">
            <h1 class="mb-3 h2">Trang tin tức</h1>
        </div>
        <section class="text-center">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="/img/news1.png" class="img-fluid" width="500px;" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Chỉ có thể là Nhật Bản: Mua card khủng Nvidia RTX 4090 được tặng luôn
                                Intel A750</h5>
                            <p class="card-text">
                                Có vẻ như của hàng NTT-X ở Nhật Bản nghĩ rằng những ai mua Nvidia RTX 4090 cũng nên thử
                                qua chiếc card Arc A750 mới ra mắt của Intel.
                            </p>
                            <a href="/app/views/news1.php" class="btn btn-primary">Đọc thêm</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="/img/news2.png" class="img-fluid" width="500px;" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mời bạn chiêm ngưỡng tòa biệt thự của Youtuber nổi tiếng nhất thế
                                giới MrBeast với Youtube VR 360</h5>
                            <p class="card-text">
                                Mời các bạn chiêm ngưỡng tòa biệt thự của Youtuber nổi tiếng nhất thế giới MrBeast, với
                                không gian 360 độ như thật của VR 360 Youtube.
                            </p>
                            <a href="/app/views/news2.php" class="btn btn-primary">Đọc thêm</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="/img/news3.png" class="img-fluid" width="500px;" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Immortals of Aveum tung trailer, sẵn tiện nói luôn muốn max setting
                                cần RTX 3080 Ti và 110GB SSD</h5>
                            <p class="card-text">
                                Tựa game Immortals of Aveum tung trailer, đồng thời kèm theo yêu cầu cấu hình phần cứng
                                cho game thủ.
                            </p>
                            <a href="/app/views/news3.php" class="btn btn-primary">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="/img/blank.png" class="img-fluid" width="500px;" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">
                                Text
                            </p>
                            <a href="" class="btn btn-primary">Đọc thêm</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="/img/blank.png" class="img-fluid" width="500px;" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">
                                Text
                            </p>
                            <a href="" class="btn btn-primary">Đọc thêm</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="/img/blank.png" class="img-fluid" width="500px;" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">
                                Text
                            </p>
                            <a href="" class="btn btn-primary">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php require_once "footer.php" ?>
</body>

</html>