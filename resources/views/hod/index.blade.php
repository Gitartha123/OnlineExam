@extends('layout/master')
@section('body')
  <div class=" a1-margin a1-container a1-light-gray" >
    <div class="a1-row">
      <div class="a1-half a1-border">
          <div class="a1-card a1-center" style="width: 200px; height: 200px;">
              <img src="resources/views/image/question-paper-7-731146.png" style="width: 200px; height: 200px;">
          </div>
          <a href="{{route('Addpaper')}}" class="a1-button a1-hover-red a1-margin a1-center">Add Subject</a>
      </div>

      <div class="a1-half a1-border">
          <div class="a1-card" style="width: 200px; height: 200px;">
              <img src="resources/views/image/ques-paper-icon.png" style="width: 200px; height: 200px;">
          </div>
          <a class="a1-button a1-hover-red a1-margin a1-center">Add Exam</a>
      </div>
    </div>

          <div class="a1-half a1-border">
              <div class="a1-card" style="width: 200px; height: 200px;">
                  <img src="resources/views/image/Student_Reading-512.png" style="width: 200px; height: 200px;">
              </div>
              <button  class="a1-button a1-hover-red a1-margin a1-center">View Student</button>
          </div>
      </div>
  </div>
@endsection