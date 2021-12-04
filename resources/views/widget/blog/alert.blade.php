@if(Session()->has('status'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">X</button>
    {{Session()->get('status')}}
</div>
@endif
