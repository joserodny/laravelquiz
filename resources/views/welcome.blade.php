@extends('layouts')

@section('content')





<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" >
   
    <div class="content" >
        <div class="row"  ><br>
            <div class="col-lg-12">
                <div class="card" >
            
    
    <div class="card-body " >
        <form method="POST" action="{{route('store')}}">
            @csrf
        <table class="table table-bordered table-question"  id="data">
            <div  id="test" class="p-b-4"></div> <br>
            @foreach ($questions as $question)  
                <tr> 
                    <td class="text-left"> <label for="question">{{$question->question}}</label>
                        <input type="text" name="questions[{{$question->id}}]" value="{{ $question->id }}">
                        @foreach ($question->answers as $answer)
                        <div class="form-check">
                            <input type="radio" name="answers[{{$answer->id}}]" id="option555" class="form-check-input" value="{{$answer->id}}"> 
                            <label for="option555" class="form-check-label">{{$answer->choice}}</label>
                        </div>
                        @endforeach
                    </td>
                </tr>
            @endforeach
          
        </table>

          <div class="d-flex justify-content-between">
            <div>
                
            </div>
            <div>
                <button id="submitbtn" type="submit" class="btn btn-danger loat-left" hidden>Submit</button>
            </div>
       </div>
        

    </form>

     
            
            <button id="btnprev" class="btn btn-primary" onClick="onClickPrev()" disabled>Previous</button>
            <button id="btnnext" class="btn btn-primary" onClick="onClickNext()">Next</button>
            
            
    

</div>
</div>
</div>
</div>
</div>
</div>
@endsection

