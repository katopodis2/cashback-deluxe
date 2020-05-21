<form method="POST" action="{{route('addCashBackReview')}}">
    @csrf
    <div class="revewPageCommentFlex">
        <div class="revewPageCommentOverallAssessment">{{__("global.overallAssessment")}}</div>
        <div class="rate">
            <input type="radio" id="main_rate5" name="overall_assessment" value="5"/>
            <label for="main_rate5" title="text"></label>
            <input type="radio" id="main_rate4" name="overall_assessment" value="4"/>
            <label for="main_rate4" title="text"> </label>
            <input type="radio" id="main_rate3" name="overall_assessment" value="3"/>
            <label for="main_rate3" title="text"></label>
            <input type="radio" id="main_rate2" name="overall_assessment" value="2"/>
            <label for="main_rate2" title="text"></label>
            <input type="radio" id="main_rate1" name="overall_assessment" value="1"/>
            <label for="main_rate1" title="text"></label>
        </div>
        @if($errors->has('overall_assessment'))
            <div class="error" style="color: red">{{ $errors->first('overall_assessment') }}</div>
        @endif
    </div>
    <div class="revewPageCommentDiv">{{__("global.comment")}}:</div>
    <textarea class="revuwPageCommentInput" name="comment"
              placeholder="Other store experiences">{{--{{$item['comment']??""}}--}}</textarea>

    <div>
        @if($errors->has('comment'))
            <div class="error" style="color: red">{{ $errors->first('overall_assessment') }}</div>
        @endif
        <div class="revewPageCommentButtonS">
            <button type="button" id="revewPageButtonCancel" onclick="hideCommFunction()" class="revewPageButton">{{__('form.cancel')}}</button>
            <button type="submit" class="revewPageButton">{{__('form.send')}}</button>
        </div>
    </div>
</form>
