
    <div id="carouselIndicators" class="carousel slide mb-3" data-ride="carousel">
        <!-- left and right indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <!-- image slides with captions -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url('assets/images/system/slider-6.png') ?>" alt="First slide">
                <!-- <div class="carousel-caption">
                    <h3>Barrack Obama</h3>
                    <p>The Best 2021 Guiding Book</p>
                </div> -->
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/images/system/slider1.png') ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/images/system/slider-6.png') ?>" alt="Third slide">
            </div>
        </div>

        <!-- next and prev buttons -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
