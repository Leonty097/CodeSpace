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

                            <img id="fullSizeImg" class="img-fluid" src="/MKTime2/assets/wa6.1.jpg" alt="Thumbnail 1" style="max-height: 500px;">
                        </div>
                        <div class="row gx-1">
                            <div class="col text-center">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa6.1.jpg" alt="Thumbnail 1" onclick="showFullSizeImage('/MKTime2/assets/wa6.1.jpg')" style="width: 80px;">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa6.4.jpg" alt="Thumbnail 3" onclick="showFullSizeImage('/MKTime2/assets/wa6.4.jpg')" style="width: 80px;">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa6.3.jpg" alt="Thumbnail 2" onclick="showFullSizeImage('/MKTime2/assets/wa6.3.jpg')" style="width: 80px;">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title"><b>MK Ness</b></h5>
                                <p class="card-text">An experience where elegance meets the mysterious charm of the Loch Ness in every moment.</p>
                                <p class="card-text"><b>Materials:</b> Crafted with the finest materials, MK Ness offers options in premium stainless steel for robustness, titanium for lightweight endurance, and luxurious precious metals for a touch of opulence. Each material ensures durability, comfort, and a distinguished appearance.</p>
                                <p class="card-text"><b>Design:</b> The design of MK Ness is a tribute to the enigmatic beauty of Loch Ness. From the tranquil waters to the legendary depths, every curve and detail of the watch mirrors the Loch's natural splendor. The dial features a subtle texture reminiscent of the Loch's waves, while the hands are designed to reflect the elegance of the landscape.</p>
                                <p class="card-text"><b>Movement:</b> At the heart of MK Ness is a precision-engineered movement that guarantees impeccable timekeeping. This innovation mirrors the enduring and ever-present beauty of Loch Ness. The movement is both a technical masterpiece and a promise of unwavering reliability and accuracy.</p>
                                <h5 class="card-text mt-5">Price: £1299</h5>

                                <form action="/MKTime2/add_to_basket.php" method="get">
                                    <input type="hidden" name="product_id" value="3">
                                    <a href="/MKTime2/add_to_basket.php?product_id=3" class="btn btn-primary float-end">Add to basket</a>
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
