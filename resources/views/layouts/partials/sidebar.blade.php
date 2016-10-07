<div class="col-md-3 side-bar">

    @if (isset($topic))
  <div class="panel panel-default corner-radius">

      <div class="panel-heading text-center">
        <h3 class="panel-title">作者：{{ $topic->user->name }}</h3>
      </div>

    <div class="panel-body text-center topic-author-box">
        @include('topics.partials.topic_author_box')
    </div>
  </div>
  @endif


  @if (isset($userTopics) && count($userTopics))
  <div class="panel panel-default corner-radius">
    <div class="panel-heading text-center">
      <h3 class="panel-title">{{ $topic->user->name }} 的其他话题</h3>
    </div>
    <div class="panel-body">
      @include('layouts.partials.sidebar_topics', ['sidebarTopics' => $userTopics])
    </div>
  </div>
  @endif


  @if (isset($categoryTopics) && count($categoryTopics))
  <div class="panel panel-default corner-radius">
    <div class="panel-heading text-center">
      <h3 class="panel-title">{{ lang('Same Category Topics') }}</h3>
    </div>
    <div class="panel-body">
      @include('layouts.partials.sidebar_topics', ['sidebarTopics' => $categoryTopics])
    </div>
  </div>
  @endif

@if (Route::currentRouteName() == 'topics.index')

  <div class="panel panel-default corner-radius">
    <div class="panel-body text-center">
      <div class="btn-group">
        <a href="{{ URL::route('topics.create') }}" class="btn btn-primary btn-lg btn-inverted">
          <i class="fa fa-paint-brush" aria-hidden="true"></i> {{ lang('New Topic') }}
        </a>
      </div>
    </div>
  </div>
@endif

@if(isset($banners['sidebar-resources']))
<div class="panel panel-default corner-radius sidebar-resources">
  <div class="panel-heading text-center">
    <h3 class="panel-title">推荐资源</h3>
  </div>
  <div class="panel-body">
    <ul class="list list-group ">
        @foreach($banners['sidebar-resources'] as $banner)
            <li class="list-group-item ">
                <a href="{{ $banner->link }}" class="popover-with-html" data-content="{{{ $banner->title }}}">
                    <img class="media-object inline-block " src="{{ $banner->image_url }}">
                    {{{ $banner->title }}}
                </a>
            </li>
        @endforeach
    </ul>
  </div>
</div>
@endif

@if (Route::currentRouteName() == 'topics.index')
    <div class="panel panel-default corner-radius panel-active-users">
      <div class="panel-heading text-center">
        <h3 class="panel-title">{{ lang('Active Users') }}（<a href="{{ route('hall_of_fames') }}"><i class="fa fa-star" aria-hidden="true"></i> {{ lang('Hall of Fame') }}</a>）</h3>
      </div>
      <div class="panel-body">
        @include('topics.partials.active_users')
      </div>
    </div>

<div class="panel panel-default corner-radius panel-hot-topics">
  <div class="panel-heading text-center">
    <h3 class="panel-title">{{ lang('Hot Topics') }}</h3>
  </div>
  <div class="panel-body">
    @include('layouts.partials.sidebar_topics', ['sidebarTopics' => $hot_topics])
  </div>
</div>

@endif


  <div class="panel panel-default corner-radius">
    <div class="panel-body text-center sidebar-sponsor-box">
        @if(isset($banners['sidebar-sponsor']))
            @foreach($banners['sidebar-sponsor'] as $banner)
                <a class="sidebar-sponsor-link" href="{{ $banner->link }}" target="_blank">
                    <img src="{{ $banner->image_url }}" class="popover-with-html" data-content="{{ $banner->title }}" width="100%">
                </a>
            @endforeach
        @endif
  </div>
  </div>

  @if (isset($links) && count($links))
    <div class="panel panel-default corner-radius">
      <div class="panel-heading text-center">
        <h3 class="panel-title">{{ lang('Links') }}</h3>
      </div>
      <div class="panel-body text-center" style="padding-top: 5px;">
        @foreach ($links as $link)
            <a href="{{ $link->link }}" target="_blank" rel="nofollow" title="{{ $link->title }}" style="padding: 3px;">
                <img src="{{ $link->cover }}" style="width:150px; margin: 3px 0;">
            </a>
        @endforeach
      </div>
    </div>
  @endif

@if (isset($randomExcellentTopics) && count($randomExcellentTopics))

<div class="panel panel-default corner-radius panel-hot-topics">
  <div class="panel-heading text-center">
    <h3 class="panel-title">{{ lang('Recommend Topics') }}</h3>
  </div>
  <div class="panel-body">
    @include('layouts.partials.sidebar_topics', ['sidebarTopics' => $randomExcellentTopics])
  </div>
</div>

@endif

@if (Route::currentRouteName() == 'topics.index')

<div class="panel panel-default corner-radius">
  <div class="panel-heading text-center">
    <h3 class="panel-title">{{ lang('App Download') }}</h3>
  </div>
  <div class="panel-body text-center" style="padding: 7px;">
    <a href="https://laravel-china.org/topics/1531" target="_blank" rel="nofollow" title="">
      <img class="image-border popover-with-html" data-content="扫码下载APP"
           src="{{url('/assets/images/qqqun.png')}}" style="width:240px">
    </a>
  </div>
</div>

@endif


<div class="box text-center">
  <p style="margin-bottom: 10px;margin-top: 10px;">加入技术交流群</p>
  <img class="image-border popover-with-html" data-content="扫码加入技术交流群"
    src="{{url('/assets/images/qqqun.png')}}" style="width:80%">
  <br/><br/>
</div>
{{--

<div class="panel panel-default corner-radius" style="color:#a5a5a5">
  <div class="panel-body text-center">
  </div>
</div>--}}

</div>
<div class="clearfix"></div>
