<?php include '../includes/header.php'; ?>

<div class="container">
    <h1 class="text-center mt-4">MKT</h1>
    <p class="text-center lead">It is all about time</p>
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-md-5">
                        <div id="fullSizeImage" class="text-center mb-7">
                            <img id="fullSizeImg" class="img-fluid" src="/MKTime2/assets/wa1.4.jpg" alt="Thumbnail 1" style="height: 500px; width: 500px; object-fit: cover;">
                        </div>
                        <div class="row gx-1">

                            <div class="col text-center">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa1.4.jpg" alt="Thumbnail 1" onclick="showFullSizeImage('/MKTime2/assets/wa1.4.jpg')" style="width: 80px;">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa4.1.jpg" alt="Thumbnail 3" onclick="showFullSizeImage('/MKTime2/assets/wa4.1.jpg')" style="width: 80px;">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa1.1.jpg" alt="Thumbnail 2" onclick="showFullSizeImage('/MKTime2/assets/wa1.1.jpg')" style="width: 80px;">
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">

                                <h5 class="card-title"><b>Skye Time</b></h5>

                                <p class="card-text">A experience where timekeeping meets the serene allure of the Isle in every fleeting moment.</p>

                                <p class="card-text"><b>Materials:</b> Crafted with the finest materials, Skye Time offers options in premium stainless steel for resilience, titanium for lightweight strength, and luxurious precious metals for an opulent touch. Each material is chosen to ensure durability, comfort, and a distinguished appearance.</p>

                                <p class="card-text"><b>Design:</b> The design of Skye Time is a homage to the island’s majestic landscapes. From the rugged cliffs to the tranquil shores, every curve and contour of the watch reflects Skye’s natural beauty. The dial features a subtle pattern reminiscent of the island’s unique topography, while the hands are shaped to echo the gentle waves of the surrounding sea.</p>

                                <p class="card-text"><b>Movement:</b> At the heart of Skye Time is a precision-engineered movement that ensures impeccable timekeeping. It’s a celebration of innovation, mirroring the unyielding and ever-moving tides of Skye. This movement is not only a technical marvel but also a promise of reliability and accuracy.</p>

                                <h5 class="card-text mt-5">Price: £999</h5>

                                <form action="/MKTime2/add_to_basket.php" method="get">
                                    <input type="hidden" name="product_id" value="1">
                                    <a href="/MKTime2/add_to_basket.php?product_id=1" class="btn btn-primary float-end" data-cy="add-to-basket">Add to basket</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>

<script>
    function showFullSizeImage(imageSrc) {
        document.getElementById('fullSizeImg').src = imageSrc;
    }
</script>