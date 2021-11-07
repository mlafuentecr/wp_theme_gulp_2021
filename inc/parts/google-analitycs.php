<?php  if(get_field( "google_id", "opttion" )):?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<? echo get_field( " google_id", "opttion" ) ?>
">
</script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
  dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-37494387-1');
</script>
<?php endif; ?>
