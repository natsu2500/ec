<aside>
    <div class="sidebar">
        <div class="text-white h4 pt-2 pl-3 center">Menu</div>
        <div class="accordion">
            @foreach ($menus as $menu)
            <div class="accordion_one pl-3">
              <div class="accordion_header">{{$menu['menu_name']}}</div>
              <div class="accordion_inner">
                @foreach ($screens as $screen)
                @if($menu['id'] == $screen['menu_id'])
                <div class="box_one">
                  <a class="sidebar-menu txt_a_ac ml-3 p-1" href='{{$screen['screen_url']}}'>{{$screen['screen_name']}}</a>
                </div>
                @endif
                @endforeach
              </div>
            </div>
            @endforeach
          </div>
    </div>
</aside>
