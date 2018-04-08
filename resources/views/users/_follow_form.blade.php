@if ($user->id !== Auth::user()->id)
<div class="follow_form">
    @if (Auth::user()->isFollowing($user->id))
    <form action="{{route('followers.destroy', $user)}}" method="POST">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <button class="btn btn-sm" type="submit">取消关注</button>
    </form>
    @else
    <form action="{{route('followers.store', $user)}}" method="POST">
        {{csrf_field()}}
        <button class="btn btn-sm btn-primary" type="submit">关注</button>
    </form>
    @endif
</div>
@endif