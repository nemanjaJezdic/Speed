<!DOCTYPE html>
<html lang="en">
<head>
  @include("frontend.fixed.head")
</head>

<body>

@include("frontend.fixed.nav")



<div id="main">

  @include("frontend.fixed.header")

   @yield("content")


    @include("frontend.fixed.footer")

</div>

@include("frontend.fixed.scripts")

</body>
</html>
