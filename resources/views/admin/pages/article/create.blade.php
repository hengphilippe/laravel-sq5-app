@extends('admin.layouts.master')
@section('contents')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Add New Article</strong></h3>
                </div>

                {{-- <div class="col-auto ms-auto text-end mt-n1">
                    <a href="#" class="btn btn-primary"><i class='bx bx-plus-medical'></i> Add New</a>
                    <a href="#" class="btn btn-secondary"><i class='bx bxs-trash-alt'></i> View Trash</a>
                </div> --}}
            </div>

            <div class="col-12">

                <div class="card">
                    {{-- <div class="card-header">
                        <h5 class="card-title"></h5>
                    </div> --}}
                    <div class="card-body">
                        <form action="{{ route('article.save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-form-label col-sm-2 text-sm-end">Title : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="title" name="title">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-form-label col-sm-2 text-sm-end">Cover :</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="cover">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-form-label col-sm-2 text-sm-end">Category : </label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="category">
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                            </div>
                            <div class="mb-3 row">
                                <label class="col-form-label col-sm-2 text-sm-end">Content :</label>
                                <div class="col-sm-10">
                                    <textarea name="content" id="content" class="form-control" placeholder="Textarea" rows="3"></textarea>
                                </div>
                            </div>
                            
                            
                            <div class="mb-3 row">
                                <div class="col-sm-10 ms-sm-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script>
        tinymce.init({
            selector: '#content',
            height: 500,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste imagetools wordcount'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
            images_upload_url: "{{ route('upload_handler') }}",
            images_upload_handler: function (blobInfo, success, failure) {
                var xhr, formData;
                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', "{{ route('upload_handler') }}");
                var token = '{{ csrf_token() }}';
                xhr.setRequestHeader("X-CSRF-Token", token);
                xhr.onload = function() {
                    var json;
                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }
                    json = JSON.parse(xhr.responseText);

                    if (!json || typeof json.location != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }
                    success(json.location);
                };
                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());
                xhr.send(formData);
            }
        });
    </script>
@endsection
