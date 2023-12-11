<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><i class="bi bi-thermometer-snow"></i> Snowflakes</h3>
      </div>
      <div class="box-body">
        <pre><code id="snow-description"></code></pre>
      </div>
    </div>
  </div>

  <div class="col-xs-12">
    <p>Made with <i class="bi bi-heart-fill"></i> by prplwtf and <a href="https://github.com/prplwtf/blueprint-snowflakes/contributors">contributors</a>.</p>
  </div>
</div>

<script>
  var sentence = "Snow is a form of precipitation in the atmosphere that consists of ice crystals or aggregates of ice crystals. It occurs when water vapor in the air undergoes deposition directly into ice crystals without passing through the liquid phase. These ice crystals then fall to the ground as snowflakes. Snowflakes are intricate and unique in their crystalline structure, forming a wide variety of shapes and patterns. The precise form of a snowflake depends on factors such as temperature and humidity during its formation. Despite their individuality, snowflakes generally have six-fold symmetry due to the hexagonal structure of ice molecules.         Snowfall can create a picturesque, serene landscape, covering the ground, trees, and buildings in a soft white blanket. The accumulation of snow can vary widely, ranging from a light dusting to several feet, depending on the geographical location, weather conditions, and time of year. Snow is a crucial component of Earth's water cycle, contributing to the replenishment of freshwater resources when it melts in warmer temperatures. Additionally, snow plays a significant role in various recreational activities, such as skiing, snowboarding, and snowball fights.";
  var words = sentence.split(' ');
  var outputDiv = document.getElementById('snow-description');
  function appendWordWithStagger(index) {
    if (index === words.length) return;
    var span = document.createElement('span');
    span.textContent = words[index] + ' ';
    outputDiv.appendChild(span);
    setTimeout(function() {
      appendWordWithStagger(index + 1);
    }, 25);
  }

  appendWordWithStagger(0);
</script>