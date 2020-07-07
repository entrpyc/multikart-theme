{{-- <pre>

    @dump($tabs) --}}
<section class="tab-product m-0">
  <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-12">
            <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                @php $count = 1; @endphp
                @foreach($tabs as $tab)
                  <li class="nav-item"><a class="nav-link @if($count == 1) active @endif" id="tab-aria-{{$count}}-tab" data-toggle="tab"
                          href="#tab-aria-{{$count}}" role="tab" @if($count++ == 1) aria-selected="true" @else aria-selected="false"  @endif>{{ $tab['name'] }}</a>
                      <div class="material-border"></div>
                  </li>
                @endforeach
                
            </ul>
            <div class="tab-content nav-material" id="top-tabContent">
                 @php $count = 1; @endphp
                @foreach($tabs as $tab)
                <div class="tab-pane fade show active" id="tab-aria-{{$count}}" role="tabpanel" aria-labelledby="tab-aria-{{$count++}}-tab">
                    @foreach($tab['content'] as $content)
                        @if($content['text'])
                        <p>{!! $content['text'] !!}</p>
                        @endif

                        @if($content['input'])
                        <form class="theme-form">
                            <div class="form-row">
                                @foreach ($content['input'] as $input)
                                <div class="@if($input['input_type'] != 'textarea') col-md-6 @else col-md-12 @endif">
                                    <label for="{{$input['title']}}">{{$input['title']}}</label>
                                    @if($input['input_type'] != 'textarea')
                                    <input type="{{$input['input_type']}}" class="form-control" id="{{$input['title']}}" placeholder="{{$input['instructions']}}"
                                    @if($input['required']) required @endif>
                                    @else
                                    <textarea class="form-control" placeholder="{{$input['instructions']}}"
                                        id="{{$input['title']}}" rows="6" @if($input['required']) required @endif></textarea>
                                    @endif
                                </div>
                                @endforeach
                                <div class="col-md-12">
                                    <button class="btn btn-solid" type="submit">Submit YOur Review</button>
                                </div>
                            </div>
                        </form>
                        @endif

                        @if($content['video_url'])
                            <div class="mt-4 text-center">
                                <iframe width="560" height="315" src="{{$content['video_url']}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                            </div>
                        @elseif($content['upload_video'])
                        <div class="mt-4 text-center">
                            <video width="560" height="315" controls>
                                <source src="{{$content['upload_video']}}" type="video/mp4">
                              Your browser does not support the video tag.
                              </video>
                        </div>
                        @endif
                    @endforeach
                </div>
                @endforeach 
            </div>
        </div>
      </div>
  </div>
</section>