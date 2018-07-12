
<style>
    #watermark {
        height: 100%;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        width: 100%;
        max-width: 800px;
        margin: auto;
        height: 100%;
        opacity: 0.5;
    }
    .fixedWatermark{
        padding-top: 90px;
        align-items: center;
        position:absolute;

    }
</style>
<div id="watermark">
    <div class="card-body text-center mt-5 fixedWatermark" >
        <img src="<?php print base_url(); ?>img/watermark.png"  class="img-fluid">
    </div>
</div>