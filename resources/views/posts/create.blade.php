<x-layouts.main>
    <x-slot:title>
        Po'st yaratish
    </x-slot:title>
    <x-page-header>
        Po'st Yaratish
    </x-page-header>
    <div class="row">
        <div class="container-fluid py-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="contact-form mb-4">
                    <div id="success"></div>
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="control-group mb-4">
                            <textarea class="form-control p-2" rows="3" name="title" placeholder="Sarlavha">{{old('title')}}</textarea>
                            @error('title')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        {{-- <div class="control-group">--}}
                        {{-- <input name="photo" type="file" class="form-control p-4" id="subject"--}}
                        {{-- placeholder="Rasm" />--}}
                        {{-- </div>--}}
                        <div class="control-group mb-4">
                            <textarea class="form-control p-2" rows="3" name="short_content" placeholder="Qisqacha Mazmun">{{old('short_content')}}</textarea>
                            @error('short_content')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="control-group mb-4">
                            <textarea class="form-control p-4" rows="6" name="Content" placeholder="Ma'qola">{{old('Content')}}</textarea>
                            @error('Content')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit">Saqlash</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>
