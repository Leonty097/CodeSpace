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

                            <img id="fullSizeImg" class="img-fluid" src="/MKTime2/assets/wa7.1.jpg" alt="Thumbnail 1" style="max-height: 500px;">
                        </div>
                        <div class="row gx-1">
                            <div class="col text-center">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa7.1.jpg" alt="Thumbnail 1" onclick="showFullSizeImage('/MKTime2/assets/wa7.1.jpg')" style="width: 80px;">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa7.2.jpg" alt="Thumbnail 3" onclick="showFullSizeImage('/MKTime2/assets/wa7.2.jpg')" style="width: 80px;">
                                <img class="img-thumbnail" src="/MKTime2/assets/wa7.3.jpg" alt="Thumbnail 2" onclick="showFullSizeImage('/MKTime2/assets/wa7.3.jpg')" style="width: 80px;">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title"><b>Wee Laggan</b></h5>
                                <p class="card-text">An experience where elegance meets the serene beauty of Wee Lagan in every moment.</p>
                                <p class="card-text"><b>Materials:</b> Crafted with the finest materials, Wee Lagan offers options in premium stainless steel for resilience, titanium for lightweight strength, and luxurious precious metals for an opulent touch. Each material ensures durability, comfort, and a distinguished appearance.</p>
                                <p class="card-text"><b>Design:</b> The design of Wee Lagan is a homage to the serene landscapes of Wee Lagan. From the tranquil waters to the lush greenery, every curve and detail of the watch reflects Wee Lagan's natural beauty. The dial features a subtle pattern reminiscent of the area's unique topography, while the hands are designed to reflect the elegance of the surroundings.</p>
                                <p class="card-text"><b>Movement:</b> At the heart of Wee Lagan is a precision-engineered movement that guarantees impeccable timekeeping. This innovation mirrors the enduring and ever-present beauty of Wee Lagan. The movement is both a technical masterpiece and a promise of unwavering reliability and accuracy.</p>
                                <h5 class="card-text mt-5">Price: £2899</h5>

                                <form action="/MKTime2/add_to_basket.php" method="get">
                                    <input type="hidden" name="product_id" value="5">
                                    <a href="/MKTime2/add_to_basket.php?product_id=5" class="btn btn-primary float-end" data-cy="add-to-basket">Add to basket</a>
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
