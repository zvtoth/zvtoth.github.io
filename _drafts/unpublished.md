---
layout: page
title: Philosophy of Religion Workshop Series
tags: Research
---

<img class="img-single" align="left" src="/public/img/quick.png" width="55">

<form name="gform" id="gform" enctype="text/plain" action="https://docs.google.com/forms/d1DYO3lq0JufCmMGR1KjXlYvwEM9s9Tu28I7M3G1F8LkA/formResponse?" target="hidden_iframe" onsubmit="submitted=true;">

<div>
        <label for="entry.1516034235">Name:</label>
        <input type="text" name= "entry.1516034235" id="entry.1516034235" />
    </div>
    <div>
        <label for="entry.390583077">E-mail:</label>
        <input type="text" name= "entry.390583077" id="entry.390583077" />
    </div>
    <div>
        <label for="entry.281360632">Message:</label>
        <textarea id="entry.281360632" name="entry.281360632"></textarea>
    </div>

    <div class="button">
        <input type="submit" name="submit" value="Submit">
    </div>

</form>

<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {}"></iframe>

<script src="/public/js/jquery.min.js"></script>
<script type="text/javascript">var submitted=false;</script>
<script type="text/javascript">
$('#gform').on('submit', function(e) {
  $('#gform *').fadeOut(2000);
  $('#gform').prepend('Thank you for your message.');
  });
</script>
