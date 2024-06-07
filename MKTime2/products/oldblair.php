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

                            <img id="fullSizeImg" class="img-fluid" src="/MKTime2/assets/wa8.1.jpg" alt="Thumbnail 1" style="max-height: 500px;">
                        </div>
                        <div class="row gx-1">
                            <div class="col text-center">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa8.1.jpg" alt="Thumbnail 1" onclick="showFullSizeImage('/MKTime2/assets/wa8.1.jpg')" style="width: 80px;">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa8.2.jpg" alt="Thumbnail 3" onclick="showFullSizeImage('/MKTime2/assets/wa8.2.jpg')" style="width: 80px;">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa8.3.jpg" alt="Thumbnail 2" onclick="showFullSizeImage('/MKTime2/assets/wa8.3.jpg')" style="width: 80px;">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title"><b>Old Blair</b></h5>
                                <p class="card-text">An experience where classic design meets the timeless beauty of Old Blair in every fleeting moment.</p>
                                <p class="card-text"><b>Materials:</b> Crafted with the finest materials, Old Blair offer an option in premium gold for resilience, titanium for lightweight strength, and luxurious precious metals for an opulent touch. Each material ensures durability, comfort, and a distinguished appearance.</p>
                                <p class="card-text"><b>Design:</b> The design of Old Blair is a homage to the majestic landscapes of Old Blair. From the historic landmarks to the serene countryside, every curve and contour of the watch reflects Old Blair's natural beauty. The dial features a subtle pattern reminiscent of the area's unique topography, while the hands are shaped to echo the elegance of the surroundings.</p>
                                <p class="card-text"><b>Movement:</b> At the heart of Old Blair is a precision-engineered movement that ensures impeccable timekeeping. This movement is not only a technical marvel but also a promise of reliability and accuracy, mirroring the unyielding and ever-present charm of Old Blair.</p>
                                <h5 class="card-text mt-5">Price: £1999</h5>

                                <form action="/MKTime2/add_to_basket.php" method="get">
                                    <input type="hidden" name="product_id" value="4">
                                    <a href="/MKTime2/add_to_basket.php?product_id=4" class="btn btn-primary float-end">Add to basket</a>
                                </form>
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
