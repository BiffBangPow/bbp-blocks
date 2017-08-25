<div class="row text-and-media-block call-to-action-block d-flex align-items-stretch no-gutters">
    <div class="col-sm-12 text d-flex align-items-center" style="background-image: url('$Image.ScaleMaxWidth(960).Link'); background-position: $ImageAlignment">
        <div class="call-to-action-content">
            <% include Title %>
            <p>$Text</p>
            <% if $CallToActionLink %>
                <a class="btn btn-primary" href="$CallToActionLink.getLinkURL" role="button" <% if $CallToActionLink.OpenInNewWindow %>target="_blank"<% end_if %>>$CallToActionLink.Title</a>
            <% end_if %>
        </div>
    </div>
</div>