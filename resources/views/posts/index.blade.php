@extends('layouts.app')

@section('content')
@foreach($posts as $post)



 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<div class="row">
       	
          <div class="col-md-12">
        	
            <h2> 

              <a href="{{ route('post_path',['post'=> $post->id]) }}"> {{ $post->title }}</a>

              @if($post->user_id == Auth::user()->id)

          </h2> 

             <p>posted {{ $post->created_at->diffForHumans() }} </p>


             <small class="pull-right">
                
              <a href="{{ route('edit_post_path', ['post'=> $post->id]) }}" class="btn btn-info">edit</a>

                  <form action="{{ route('delete_post_path' , ['post' => $post->id]) }}" method="post">
                     
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}

                      <button type="submit" class="btn-danger">delete</button>


                  </form>

            
              </small>
        @endif
          </div>

  </div>
 <hr>

        
@endforeach

{{ $posts->render() }}

@endsection

       




