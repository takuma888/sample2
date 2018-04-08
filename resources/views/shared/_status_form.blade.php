<form action="{{route('statuses.store')}}" method="POST">
    @include('shared._errors')
    {{csrf_field()}}
    <textarea name="content" rows="3" class="form-control" placeholder="写点东西">{{old('content')}}</textarea>
    <button type="submit" class="btn btn-primary pull-right">发布</button>
</form>