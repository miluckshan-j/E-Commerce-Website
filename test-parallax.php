<!DOCTYPE html>
<html>
<head>
<style>
body {
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  border: 2px solid transparent !important;
}

/* Standard syntax */
@keyframes example {
  0%   {border-image: linear-gradient(45deg, #2bf5fd 0%, #d20d95 50%, #cc00ff 100%) !important;
    border-image-slice: 2 !important;}
  25%   {border-image: linear-gradient(90deg, #2bf5fd 0%, #d20d95 50%, #cc00ff 100%) !important;
    border-image-slice: 2 !important;}
  50%   {border-image: linear-gradient(135deg, #2bf5fd 0%, #d20d95 50%, #cc00ff 100%) !important;
    border-background-slice: 2 !important;}
  75%   {border-image: linear-gradient(270deg, #2bf5fd 0%, #d20d95 50%, #cc00ff 100%) !important;
    border-image-slice: 2 !important;}
  100%   {border-image: linear-gradient(315deg, #2bf5fd 0%, #d20d95 50%, #cc00ff 100%) !important;
    border-image-slice: 2 !important;}
}
</style>
</head>
<body>

<p><b>Note:</b> This example does not work in Internet Explorer 9 and earlier versions.</p>

<div></div>

</body>
</html>
