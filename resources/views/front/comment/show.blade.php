<div class="comment_area clearfix">
    @if(count($shows) < 1)

    <h5 class="title"> There are no comment for the post. Leave a comment below!!</h5>
    @else
    <h5 class="title"> {{count($shows)}} Comments</h5>
    <ol>
    @foreach($shows as $show)
        <!-- Single Comment Area -->
        <li class="single_comment_area">
            <!-- Comment Content -->
            <div class="comment-content d-flex">
                <!-- Comment Author -->
                <div class="comment-author">
                    <img src="{{Url::to('admin/front/img/bg-img/30.jpg')}}" alt="author">
                </div>
                <!-- Comment Meta -->
                <div class="comment-meta">
                    <a href="#" class="post-author">{{$show->user->name}}</a>
                    <a href="#" class="post-date">{{$show->date}}</a>
                    <p>{{$show->comment_text}}</p>
                </div>
            </div>
            
        </li>
    @endforeach
    </ol>
    @endif
</div>