<?php
$url = "";
$route = "store";
if (!empty($item)){
    $id= $item->id;
    $question= $item->question;
    $answer= $item->answer;
    $route = "update";
}

?>

<form action="{{route("admin.faq.$route",$id??"")}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <div><label for="is_important">{{__("form.is_important")}}</label></div>
        <select name="is_important" id="is_important">
            <option value="{{ConstBoolean::YES}}">{{__("form.yes")}}</option>
            <option value="{{ConstBoolean::NO}}">{{__("form.no")}}</option>
        </select>
    </div>
    <div>
        <div><label for="question">{{__("form.question")}}</label></div>
        <input  class="w-100" type="text" id="question" name="question" value="{{old('question')??($question??'')}}">
        @if($errors->has('question'))
            <div class="error">{{ $errors->first('question') }}</div>
        @endif
    </div>
    <div>
        <div><label  for="answer">{{__("form.answer")}}</label></div>
        <textarea class="w-100" style="height: 150px" id="answer" type="text" name="answer" >{{old('answer')??($answer??'')}}</textarea>
        @if($errors->has('answer'))
            <div class="error">{{ $errors->first('answer') }}</div>
        @endif
    </div>

    <div><button type="submit" >submit</button></div>
</form>
<style>
    .error{
        color: red;
    }
</style>
