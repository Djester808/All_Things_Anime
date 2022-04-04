<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <?php include($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/views/navigation/head.php') ?>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <div class="container">

    </div>
    <div class="owl-carousel owl-theme">
      <div class="item">
        <h4>1</h4>
      </div>
      <div class="item">
        <h4>2</h4>
      </div>
      <div class="item">
        <h4>3</h4>
      </div>
      <div class="item">
        <h4>4</h4>
      </div>
      <div class="item">
        <h4>5</h4>
      </div>
      <div class="item">
        <h4>6</h4>
      </div>
      <div class="item">
        <h4>7</h4>
      </div>
      <div class="item">
        <h4>8</h4>
      </div>
      <div class="item">
        <h4>9</h4>
      </div>
      <div class="item">
        <h4>10</h4>
      </div>
      <div class="item">
        <h4>11</h4>
      </div>
      <div class="item">
        <h4>12</h4>
      </div>
    </div>
  </main>
  <?php include($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/views/navigation/scripts.html') ?>
</body>

</html>

<script>
  $('.owl-carousel').owlCarousel({
    rtl: true,
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  })
</script>