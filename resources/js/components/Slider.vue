<template>
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://images.wallpaperscraft.com/image/call_of_duty_infinite_warfare_infinity_ward_110729_1920x1080.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h2>Massive</h2>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://wallpapercave.com/wp/fdfbmXH.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h2>Transforming</h2>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://wallpapercave.com/wp/wp2605443.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h2>Cooperative</h2>
        </div>
      </div>
    </div>
</div>
</template>

<style lang="scss" scoped>
    .carousel-caption {
        bottom: 40%;
        h2 {
            font-size: 72px;
            cursor: default;
        }
    }
</style>
