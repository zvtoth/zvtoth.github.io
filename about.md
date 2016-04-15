---
layout: page
title: About me
image: /public/img/about.jpg
color: '#aa0234'
---

{% if site.author.photo %}
  ![{{ site.author.name }}]({{ site.author.photo }}){:.me}
{% endif %}


I am a PhD candidate and teaching fellow in philosophy at <a href = "http://www.fordham.edu" target="_blank">Fordham University</a>, New York.
Before coming to NYC, I did some medieval studies at <a href="http://www.ceu.hu" target="_blank">Central European University</a>, and even before that, studied philosophy and mathematics at <a href="http://www.elte.hu/en" target="_blank">Eötvös Loránd University</a>, in Budapest.

My main interest is later medieval philosophy, especially questions connected to metaphysics, philosophy of religion, and epistemology. I am also interested in the history of science, mainly in the connection between late medieval and early modern scientific practice and theory. My dissertation is on later medieval problems of secondary causality and divine concurrence (broadly between Aquinas and Gabriel Biel).

When I am not doing philosophy, I like hiking,  taking photos, and listening to and playing 14-18th-century music.

---

### Contact


<img class="img-single" align="left" src="/public/img/snail.gif" width="100"> Zita Tóth <br>
Fordham University, Philosophy Department <br>
441 E Fordham rd., Collins Hall <br>
Bronx, NY 10458, USA
<br>
<br>

<img class="img-single" align="left" src="/public/img/quick.png" width="55">

<form name="gform" id="gform" enctype="text/plain" action="https://docs.google.com/forms/d1DYO3lq0JufCmMGR1KjXlYvwEM9s9Tu28I7M3G1F8LkA/formResponse" target="hidden_iframe" onsubmit="submitted=true;">
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

    <div>
        <input type="submit" value="Submit">
    </div>

</form>



<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {}"></iframe>

<script src="/public/js/jquery.js"></script>
<script type="text/javascript">var submitted=false;</script>
<script type="text/javascript">
$('#gform').on('submit', function(e) {
  $('#gform *').fadeOut(2000);
  $('#gform').prepend('Your submission has been processed...');
  });
</script>
