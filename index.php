<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171042534-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171042534-1');
</script>
<link rel="icon" type="image/png" href="skull.png">
<meta charset="utf-8">
<meta name="description" content="sesh">
<title>s e s h</title>
<style>
.workaround { position: absolute; z-index: -9999; }
body { background: none }
* { box-sizing: border-box; }
.video-background {
  position: fixed;
  top: 0; right: 0; bottom: 0; left: 0;
  z-index: -99;
}
.video-foreground,
.video-background iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
@media (min-aspect-ratio: 16/9) {
  .video-foreground { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  .video-foreground { width: 300%; left: -100%; }
}
@media all and (max-width: 600px) {
.vid-info { width: 50%; padding: .5rem; }
.vid-info h1 { margin-bottom: .2rem; }
}
@media all and (max-width: 500px) {
.vid-info .acronym { display: none; }
}
</style>
</head>
<body>
<div class="video-background">
<div class="video-foreground">
<div class="workaround">
<iframe src="silence.mp3" allow="autoplay"></iframe>
</div>
<iframe src="https://www.youtube.com/embed?listType=playlist&list=PLJfrM1gRLCluOB7jWOpj4VpyGGaQJ2kKB&autoplay=1&index=<?php print(rand(0,65)) ?>" frameborder="0" allowfullscreen allow="autoplay; encrypted-media">
</iframe>
</div>
</div>

<!-- https://github.com/baulml/sesh.space -->
