<div class="block_area block_area_$AreaID.LowerCase" data-areaid="$AreaID">
    <% loop BlockArea %>
        <div class="<% if $HideBlockForScreenSize %>$HideBlockForScreenSize<% end_if %>">
            $BlockHTML
        </div>
    <% end_loop %>
</div>