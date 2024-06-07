<?php include '../includes/header.php'; ?>

<div class="container-fluid">
    <h1 class="text-center mt-4">MKT</h1>
    <p class="text-center lead">It is all about time</p>
    <div class="container-fluid">
        <div class="container-fluid">
    
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-md-7">

                        <div id="fullSizeImage" class="text-center mb-5">

                            <img id="fullSizeImg" class="img-fluid" src="/MKTime2/assets/wa3.1.jpg" alt="Thumbnail 1" style="max-height: 500px;">
                        </div>
                        <div class="row gx-1">
                            <div class="col text-center">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa3.1.jpg" alt="Thumbnail 1" onclick="showFullSizeImage('/MKTime2/assets/wa3.1.jpg')" style="width: 80px;">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa3.2.jpg" alt="Thumbnail 3" onclick="showFullSizeImage('/MKTime2/assets/wa3.2.jpg')" style="width: 80px;">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa3.3.jpg" alt="Thumbnail 2" onclick="showFullSizeImage('/MKTime2/assets/wa3.3.jpg')" style="width: 80px;">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Glencoe Wrist</b></h5>
                                <p class="card-text">An experience where elegance meets the majestic allure of the Highlands in every moment.</p>
                                <p class="card-text"><b>Materials:</b> Crafted with the finest materials, Glencoe Wrist offers options in premium stainless steel for robustness, titanium for lightweight endurance, and luxurious precious metals for a touch of opulence. Each material ensures durability, comfort, and a distinguished appearance.</p>
                                <p class="card-text"><b>Design:</b> The design of Glencoe Wrist is a tribute to the grandeur of the Highland landscapes. From the towering mountains to the serene valleys, every curve and detail of the watch mirrors Glencoe's natural splendor. The dial features a subtle texture reminiscent of the Highland's rugged terrain, while the hands are designed to reflect the elegance of the landscape.</p>
                                <p class="card-text"><b>Movement:</b> At the heart of Glencoe Wrist is a precision-engineered movement that guarantees impeccable timekeeping. This innovation mirrors the enduring and ever-present beauty of Glencoe. The movement is both a technical masterpiece and a promise of unwavering reliability and accuracy.</p>
                                <h5 class="card-text mt-5">Price: £899</h5>
                                <form action="/MKTime2/add_to_basket.php" method="get">
                                    <input type="hidden" name="product_id" value="2">
                                    <button type="submit" class="btn btn-primary float-end">Add to basket</button>
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
