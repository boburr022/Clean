<x-layouts.main>
    <x-slot:title>
        Po'stni o'zgartirish #{{$post->id}}
    </x-slot:title>


    <x-page-header>
        Po'stni o'zgartirish #{{$post->id}}
    </x-page-header>


    <div class="row">
        <div class="container-fluid py-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="contact-form mb-4">
                    <div id="success"></div>
                    <form action="{{ route('posts.update',['post'=>$post->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="control-group mb-4">
                            <textarea class="form-control p-2" rows="3" name="title" placeholder="Sarlavha">{{$post->title}}</textarea>
                            @error('title')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="control-group mb-4">
                            <input name="photo" type="file" class="form-control p-4" id="subject" placeholder="Rasm" />
                            @error('photo')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="control-group mb-4">
                            <textarea class="form-control p-2" rows="3" name="short_content" placeholder="Qisqacha Mazmun">{{$post->short_content}}</textarea>
                            @error('short_content')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="control-group mb-4">
                            <textarea class="form-control p-4" rows="6" name="Content" placeholder="Ma'qola">{{$post->Content}}</textarea>
                            @error('Content')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="flex">
                            <button class="btn btn-success  py-3 px-5" type="submit">Saqlash</button>
                            <a href="{{route('posts.show',['post'=>$post->id]) }}" class="btn btn-danger py-3 px-5">Saqlash</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>
