<div class="collection-filter-block">
  <div class="product-service">
    @php $count = 0; @endphp
    @foreach($boxes as $title => $data)
    @php $path = 'boiler-loader.product-single.components.icons.'.$data['icon']; @endphp
    <div class="media @if(++$count == count($boxes)) border-0 m-0 @endif">
      @include($path)
      <div class="media-body">
          <h4>{{$title}}</h4>
          <p>{{$data['info']}}</p>
      </div>
    </div>
    @endforeach
  </div>
</div>