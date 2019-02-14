<?php foreach($countries as $country) : ?>

<div class="country">
    <h3><?=$country->Name; ?></h3>
    <p><?=$country->SurfaceArea; ?></p>
</div>


<?php endforeach; ?>