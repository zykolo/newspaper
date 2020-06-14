<div class="post-a-comment-area section-padding-80-0">
    <h4>Leave a comment</h4>
    
    <!-- Reply Form -->
    <div class="contact-form-area">
        <form action="/comment" method="post">
        @csrf
            <div class="row">
                <input type="hidden" name="post_id" value="{{$single->id}}" id="">
                <div class="col-12">
                    <textarea name="comment" class="form-control" id="comment" cols="30" rows="10" placeholder="leave a comment"></textarea>
                </div>
                <div class="col-12 text-center">
                    <button class="btn newspaper-btn mt-30 w-100" type="submit">Submit Comment</button>
                </div>
            </div>
        </form>
    </div>
</div>