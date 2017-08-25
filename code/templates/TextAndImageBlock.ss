<div class="row text-and-media-block text-and-image-block d-flex align-items-stretch no-gutters">

    <% include Text %>

    <div class="col-sm-12 col-md-6 content<% if $MediaPosition == 'left' %> pull-md-6<% end_if %> $HideMediaForScreenSize" style="background-image: url('$Image.ScaleMaxWidth(960).Link'); background-position: $ImageAlignment"></div>
</div>