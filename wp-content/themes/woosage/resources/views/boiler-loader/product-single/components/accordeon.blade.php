{{-- Data Format
$tabs => [
  $brand => [  --- Name of the tab
    $type => link, --- Type of data
    $item => data, ---  Items
    $item => data, ---  Items
  ]
] --}}

<div class="collection-filter-block">
  <div class="collection-mobile-back">
    <span class="filter-back">
      <i class="fa fa-angle-left" aria-hidden="true"></i> back
    </span>
  </div>
  @foreach($tabs as $tab => $data)
  <div class="collection-collapse-block open">
    <h3 class="collapse-block-title">{{$tab}}</h3>
    <div class="collection-collapse-block-content">
        {{-- items with links --}}
        @if($data['type'] == 'link')
        <div class="collection-brand-filter">
            <ul class="category-list">
            @foreach($data as $item => $content)
              @if($item != 'type')
                <li><a href="{{$content}}">{{$item}}</a></li>
              @endif
            @endforeach
            </ul>
        </div>
        {{-- select boxes --}}
        @elseif($data['type'] == 'select')
        <div class="collection-brand-filter">
          @foreach($data as $item => $content)
              @if($item != 'type')
                <div class="custom-control custom-checkbox collection-filter-checkbox">
                  <input type="checkbox" class="custom-control-input" id="{{App::setSeoUrl($item)}}" @if($content) checked @endif>
                  <label class="custom-control-label" for="{{App::setSeoUrl($item)}}">{{$item}}</label>
                </div>
              @endif
            @endforeach
        </div>
        {{-- color select items --}}
        @elseif($data['type'] == 'color')
        <div class="color-selector">
          <ul>
            @foreach($data as $item => $content)
              @if($item != 'type')
                <li class="color-{{$item}} @if($content) active @endif"></li>
              @endif
            @endforeach
          </ul>
        </div>
        @endif
      </div>
    </div>
  @endforeach
</div>


{{-- 'brand 2' => [
  'type' => 'select',
  'zara' => 'checked',
  'vera moda' => false,
  'forever 21' => false,
  'roadster' => false,
  'only' => false,
],
'color' => [
  'type' => 'color',
  '1' => 'active',
  '2' => false,
  '3' => false,
  '4' => false,
  '5' => false,
],
'price' => [
  'type' => 'select',
  '$10 - $100' => 'checked',
  '$100 - $200' => 'checked',
  '$200 - $300' => 'checked',
  '$300 - $400' => false,
  '$400 ABOVE' => false,
], --}}