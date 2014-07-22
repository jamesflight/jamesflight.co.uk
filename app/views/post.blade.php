

<h1 class="title-anchor">{{link_to_route('post-single', $post->getTitle(), array('title'=>$post->getTitleRaw()))}}</h1>
<h2 class="zeta medium-grey-text">posted by <a href="/about">James Flight</a> on {{$post->getDate()}}</h2>
{{$post->getHtml()}}
<div class="spacer-2"></div>
<hr>